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

class EprcertificationController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('States');

	
			$eprcertifications  = $this->Eprcertification->find('all')->where(['Eprcertification.is_active'=>1])->contain(['States'])->toArray();
			
			
			// echo '<pre>';
			// print_r($virtualcfoRegistrations);
			// exit();
		
		
		$this->set(compact('eprcertifications'));   
	}	  
	
	public function eprcertification()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('States');
		$this->loadModel('EprRoles');
		$this->loadModel('WasteTypes');
		$this->loadModel('EprPlastics');
	

			$user_id = $this->Auth->user('id');
		$eprcertification = $this->Eprcertification->newEmptyEntity();
		if ($this->request->is('post')) { 
			
			//echo "<pre>"; print_r($this->request->getData());  exit();
			
			$eprcertification->state_id              			 = $this->request->getData('state_id');
			$eprcertification->epr_role_id           			 = $this->request->getData('epr_role_id');
			$eprcertification->waste_type_id         			 = $this->request->getData('waste_type_id') ?$this->request->getData('waste_type_id') :'';
			$eprcertification->waste_category_id     			 = $this->request->getData('waste_category_id')? $this->request->getData('waste_category_id'):'';
			$eprcertification->epr_plastic_id        			 = $this->request->getData('epr_plastic_id')? $this->request->getData('epr_plastic_id'):'';
			$eprcertification->waste_product_detail_id           = $this->request->getData('product_code')? $this->request->getData('product_code'):'';
			$eprcertification->name                              = $this->request->getData('name');
			$eprcertification->email                             = $this->request->getData('email');
			$eprcertification->mobile_no                         = $this->request->getData('mobile_no');
			$eprcertification->description                       = $this->request->getData('description');
		
	
			$eprcertification->created_by                        = $this->Auth->user('id');
			$eprcertification->created_date                      = date('Y-m-d H:i:s');
			// echo '<pre>';
			// print_r($eprcertification);
			// exit();
			if ($this->Eprcertification->save($eprcertification)) {
				$insert_id=$eprcertification['id'];
				$projectTable                                    = $this->getTableLocator()->get('Eprcertification');
					$project                                     = $projectTable->get($eprcertification['id']); 
				
					//$project->transaction_date                 = date('Y-m-d H:i:s');
					$project->application_no                     = 'ITCOTEPR'.date('Ym').sprintf('%02d',$eprcertification['id']);
			

					// echo '<pre>';
					// print_r($project->application_no);
					// exit();
					$projectTable->save($project);

					// foreach($this->request->getData('product') as $key => $value){ 
					// 	$productMgmtDetails                             = $this->ProductMgmtDetails->newEmptyEntity();
					// 	$productMgmtDetails->created_by                 = $this->Auth->user('id');
					// 	$productMgmtDetails->created_date               = date('Y-m-d H:i:s');	
					// 	$productMgmtDetails->epr_certification_id       = $insert_id;
					// 	$productMgmtDetails->waste_type_id              = $value['waste_type_id'];
					// 	$productMgmtDetails->waste_category_id          = $value['waste_category_id'];
				
					// 	$productMgmtDetails->waste_product_detail_id	= $value;
					// 	$productMgmtDetails->is_active                  = 1;
					// 	$productMgmtDetails->created_by                 = $this->Auth->user('id');
					// 	$productMgmtDetails->created_date               = date('Y-m-d H:i:s');	
					// 	echo '<pre>';
					// 	print_r($productMgmtDetails);
					// 	exit();	
					// 	$this->ProductMgmtDetails->save($productMgmtDetails);			
					// }
					
				$this->Flash->success(__('The Eprcertification details has been saved.'));
				return $this->redirect(['action' => 'eprcertificationsuccess',base64_encode(strval($insert_id))]);
			}
			$this->Flash->error(__('The Eprcertification  details could not be saved. Please, try again.'));
		}
		$states = $this->States->find('list',['keyField' => 'id',  'valueField' => 'state_name'])->toArray();
		$eprRoles = $this->EprRoles->find('list', ['keyField' => 'id',  'valueField' => 'name'])->where(['EprRoles.is_active' => 1])->toArray();
		$wasteTypes = $this->WasteTypes->find('list', ['keyField' => 'id',  'valueField' => 'name'])->where(['WasteTypes.is_active' => 1])->toArray();
		//$eprPlastics = $this->EprPlastics->find('list', ['keyField' => 'id',  'valueField' => 'name'])->where(['EprPlastics.is_active' => 1])->toArray();
		//echo "<pre>"; print_r($states);  exit();


			$this->set(compact('eprcertification','states','eprRoles','wasteTypes','eprPlastics'));
	}
	

	public function eprcertificationsuccess($id = null)
	{  
		$decode=base64_decode($id);
		$id=$decode;
		$this->viewBuilder()->setLayout('layout');   	  
	    $this->loadModel('ServiceCompliances');
		$eprcertification   = $this->Eprcertification->find('all')->where(['Eprcertification.id'=>$id])->first();

		if($eprcertification['application_no'] !=''){
			$insert_id = $eprcertification->id;	
			$name = $eprcertification->name;			
			$email = $eprcertification->email;
			$application_no = $eprcertification->application_no;
					  
			$mailer = new Mailer('default');
			$mailer
			->setTransport('smtp')
			->setFrom(['verify.email@itcot.com' => 'ITCOT - EPR Certification'])
			->setTo($email)
			->setEmailFormat('html') 
			->setSubject('ITCOT - EPR Certification')
			// ->deliver("Username: ".$email."<br>Password:".$password."");   
			->deliver("<p>Dear ".ucwords($name).",</p><p>Your application for EPR Certification has been received successfully. <br>Application Number: <b>". $application_no."</b>
			</p><br>
			<p>*Note: Please do not reply to this email, as it is a computer generated email.</p>
			<br>
			<p>With Best Regards,<br>
			ITCOT Ltd.</p>");   
				}
		
	   $this->set(compact('eprcertification'));
	}


	public function ajaxcalling($email=null)
	{
		// echo '<pre>';
		// print_r($email);
		// exit();
		$users=$this->Eprcertification->find('all')->where(['Eprcertification.email'=>$email])->count();
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
		$users=$this->Eprcertification->find('all')->where(['Eprcertification.mobile_no'=>$mbl])->count();
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
	

	
    public function ajaxoption($val = null)
    {
        // print_r($id);
        // exit();
        $this->loadModel('WasteCategories');

    
        // $districts = $this->DairyDetails->Districts->find('list', ['limit' => 200]);
        $wasteCategories = $this->WasteCategories->find('all')->where(['WasteCategories.waste_type_id' => $val])->toArray();
        //    echo '<pre>';
        //     print_r($wasteCategories);
        //      exit();
        $this->set(compact('wasteCategories'));
    }

    public function ajaxoptioncategory($val = null,$waste_type=null)
    {
        // print_r($id);
        // exit();
        $this->loadModel('WasteProductDetails');

		$wasteProductDetails  = $this->WasteProductDetails->find('list',['keyField' => 'id',  'valueField' => 'product_code'])->where(['WasteProductDetails.waste_category_id' => $val,'WasteProductDetails.waste_type_id' => $waste_type])->toArray();
		

		// echo '<pre>';
		// print_r($wasteProductDetails);
		//  exit();


		$this->set(compact('wasteProductDetails'));
    }
	
	public function ajaxproductcalling($waste_type=null,$waste_category=null,$val=null)
	{
		// echo '<pre>';
		// print_r($mbl);
		// exit();
		$this->loadModel('WasteProductDetails');

		$WasteProductDetails = $this->WasteProductDetails->find('all')->where(['WasteProductDetails.waste_type_id' => $waste_type,'WasteProductDetails.waste_category_id' => $waste_category,
		'WasteProductDetails.id' => $val])->first();
		$product=$WasteProductDetails['product_name'];
		$WasteProductDetails_count = $this->WasteProductDetails->find('all')->where(['WasteProductDetails.waste_type_id' => $waste_type,'WasteProductDetails.waste_category_id' => $waste_category,
		'WasteProductDetails.id' => $val])->count();
		// 	echo '<pre>';
		// print_r($product);
		// exit();
		if($WasteProductDetails_count>0)
		{
	echo $product;
		}else{
			echo 0;
		}
		exit();
	
	}
}