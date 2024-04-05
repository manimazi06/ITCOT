<?php
declare(strict_types=1); 
namespace App\Controller;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

use Cake\Mailer\Email;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;

class VirtualcfoRegistrationsController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('VirtualcfoStates');

	
			$virtualcfoRegistrations  = $this->VirtualcfoRegistrations->find('all')->where(['VirtualcfoRegistrations.is_active'=>1])->contain(['VirtualcfoStates'])->toArray();
			
			
			// echo '<pre>';
			// print_r($virtualcfoRegistrations);
			// exit();
		
		
		$this->set(compact('virtualcfoRegistrations'));   
	}	  
	
	public function virtualcfo()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('VirtualcfoStates');
		$this->loadModel('Services');
		$this->loadModel('VirtualServices');
		
			$user_id = $this->Auth->user('id');
		$virtualcfoRegistrations = $this->VirtualcfoRegistrations->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$virtualcfoRegistrations->virualcfo_state_id    = $this->request->getData('virualcfo_state_id');
			
			$virtualcfoRegistrations->name                  = $this->request->getData('name');
			$virtualcfoRegistrations->email                 = $this->request->getData('email');
			$virtualcfoRegistrations->mobile_no             = $this->request->getData('mobile_no');
			// $virtualcfoRegistrations->service_id         = $this->request->getData('service_id');
			$virtualcfoRegistrations->description           = $this->request->getData('description');
			
			$virtualcfoRegistrations->created_by            = $this->Auth->user('id');
			$virtualcfoRegistrations->created_date          = date('Y-m-d H:i:s');
			// echo '<pre>';
			// print_r($virtualcfoRegistrations);
			// exit();
			if ($this->VirtualcfoRegistrations->save($virtualcfoRegistrations)) {

				$insert_id=$virtualcfoRegistrations['id'];
				$projectTable                     = $this->getTableLocator()->get('VirtualcfoRegistrations');
					$project                      = $projectTable->get($virtualcfoRegistrations['id']); 
				
					//$project->transaction_date    = date('Y-m-d H:i:s');
					$project->application_no         = 'ITCOTVCFO'.date('Ym').sprintf('%02d',$virtualcfoRegistrations['id']);
			
					$projectTable->save($project);


					foreach($this->request->getData('arr') as $key => $value){		
						
						
						$virtualServices                                = $this->VirtualServices->newEmptyEntity();
						$virtualServices->created_by                    = 0;
						$virtualServices->created_date                  = date('Y-m-d H:i:s');
						$virtualServices->virtualcfo_registration_id    = $insert_id;
						$virtualServices->service_id                    = $value;
						$virtualServices->others_name                   = $this->request->getData('others');	
								
							// echo '<pre>';
							// print_r($virtualServices);
							// exit();
						
						$this->VirtualServices->save($virtualServices);
					
					}
				

				
				//$this->Flash->success(__('The Virtual CFO Registrations details has been saved'));
				return $this->redirect(['action' => 'virtualcfossuccess',base64_encode(strval($insert_id))]);
			}
			$this->Flash->error(__('The Virtualcfo Registrations  details could not be saved. Please, try again.'));
		}


		// $serviceCompliances   = $this->ServiceCompliances->find('list')->toArray();
		$virtualcfoStates = $this->VirtualcfoStates->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
		$services = $this->Services->find('list',['keyField' => 'id',  'valueField' => 'name'])->where(['Services.is_active'=>1])->order(['Services.id'=>'ASC'])->toArray();
	
		//echo "<pre>"; print_r($schemes);  exit();


			$this->set(compact('scheme','virtualcfoStates','services'));
	}
	

	public function virtualcfossuccess($id = null)
	{  

		$decode=base64_decode($id);
		$id=$decode;
		$this->viewBuilder()->setLayout('layout');   	  
	    $this->loadModel('ServiceCompliances');
		$virtualcfoRegistrations   = $this->VirtualcfoRegistrations->find('all')->where(['VirtualcfoRegistrations.id'=>$id])->first();

		//echo "<pre>"; print_r($virtualcfoRegistrations['application_no']);  exit();


			if($virtualcfoRegistrations['application_no'] !=''){
		$insert_id = $virtualcfoRegistrations->id;	
		$name = $virtualcfoRegistrations->name;			
		$email = $virtualcfoRegistrations->email;
		$application_no = $virtualcfoRegistrations->application_no;
	              
		$mailer = new Mailer('default');
		$mailer
		->setTransport('smtp')
		->setFrom(['verify.email@itcot.com' => 'ITCOT - Virtual CFO Services'])
		->setTo($email)
		->setEmailFormat('html') 
		->setSubject('ITCOT - Virtual CFO Services')
		// ->deliver("Username: ".$email."<br>Password:".$password."");

		->deliver("<p>Dear ".ucwords($name).",</p><p>Your application for Virtual CFO Services has been received successfully. <br>Application Number: <b>". $application_no."</b>
		</p><br>
		<p>*Note: Please do not reply to this email, as it is a computer generated email.</p>
		<br>
		<p>With Best Regards,<br>
		ITCOT Ltd.</p>");   
			
		// if($mailer->setCc('sribalamanigandanmslabs@gmail.com'))   {

		// 	$mailer->deliver("<p>Dear team,</p><p>User application received for Virtual CFO Services. <br>Application Number: <b>". $application_no."</b>
		// 	<p>User Name:" .ucwords($name)."</p>");
		// }
	}
	   $this->set(compact('virtualcfoRegistrations'));
	}


	// public function edit($id = null)
	// {
	// 	$this->viewBuilder()->setLayout('layout');
	// 	$this->loadModel('VirtualcfoStates');



	// 	$departscheme = $this->DepartmentSchemes->get($id, [
	// 		'contain' => [],
	// 	]);

	// 	if ($this->request->is(['patch', 'post', 'put'])) {
	// 		$departscheme->department_id= $this->request->getData('department_id');
			
	// 		$departscheme->name                = $this->request->getData('name');
	// 		$departscheme->parent_department_id  = ($this->request->getData('parent_department_id'))?$this->request->getData('parent_department_id'):'';

	// 		$departscheme->description         = $this->request->getData('description');
	// 		$departscheme->site_url            = $this->request->getData('site_url');
	// 		if ($this->DepartmentSchemes->save($departscheme)) {
	// 			$this->Flash->success(__('The Departments details has been updated.'));

	// 			return $this->redirect(['action' => 'index']);
	// 		}
	// 		$this->Flash->error(__('The Departments details could not be updated. Please, try again.'));
	// 	}	
	// 	$departments = $this->Departments->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
	// 	$this->set(compact('departscheme','departments'));
	// }
	
	
	public function ajaxcalling($email=null)
	{
		// echo '<pre>';
		// print_r($email);
		// exit();
		$users=$this->VirtualcfoRegistrations->find('all')->where(['VirtualcfoRegistrations.email'=>$email])->count();
		// 	echo '<pre>';
		// print_r($users);
		// exit();
		if($users>0)
		{
	echo 1;
		}else{
			echo 0;
		}
		exit();
	
	}
	
	public function ajaxcallingmbl($mbl=null)
	{
		// echo '<pre>';
		// print_r($mbl);
		// exit();
		$users=$this->VirtualcfoRegistrations->find('all')->where(['VirtualcfoRegistrations.mobile_no'=>$mbl])->count();
		// 	echo '<pre>';
		// print_r($users);
		// exit();
		if($users>0)
		{
	echo 1;
		}else{
			echo 0;
		}
		exit();
	
	}


	// public function virtualcforegistration()
	// {
	// 	$this->viewBuilder()->setLayout('layout');
	//     // $this->loadModel('Roles');
	// 	$virtualcfoRegistrations = $this->VirtualcfoRegistrations->newEmptyEntity();
	// 	if ($this->request->is('post')) { 
	// 		$mobile                = $this->request->getData('mobile_no');
	// 		$hasher  = new DefaultPasswordHasher();
	// 		$user = $this->Users->patchEntity($user, $this->request->getData());
	// 		$user->name                    = $this->request->getData('name');
	// 		$user->username                = $this->request->getData('email');
	// 		$user->email                   = $this->request->getData('email');
	// 		$user->password                = $hasher->hash($this->request->getData('mobile_no'));		
	// 		$user->mobile_no               = $this->request->getData('mobile_no');
	// 		$user->role_id                 = 2;		
	// 		if ($this->Users->save($user)) {
	// 			$insert_id = $user->id;				
	// 			$email = $user->username;
	// 			$password = $user->mobile_no;                
	// 			$mailer = new Mailer('default');
	// 			$mailer
	// 			->setTransport('smtp')
	// 			->setFrom(['verify.email@itcot.com' => 'ITCOT - Registration'])
	// 			->setTo($email)
	// 			->setEmailFormat('html') 
	// 			->setSubject('ITCOT - Registration')
	// 			->deliver("Username: ".$email."<br>Password:".$password."");    
				
	// 			$this->Flash->success(__('The Username and Password Sent to Email.Please Check'));	
	// 			//return $this->redirect(['action' => 'registrationsuccess/'.$insert_id]);
	// 			return $this->redirect(['action' => 'login']);
	// 		}		
			
	// 		$this->Flash->error(__('The user could not be saved. Please, try again.'));
	// 	}

	// 	$this->set(compact('user', 'roles', 'circles','mobile'));
	// }
}