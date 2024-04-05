<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class VirtualcfoRegistrationsController extends AppController
{    
	public function virtualcfo(){
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('VirtualcfoStates');
		$this->loadModel('Services');

	     if ($this->request->is(['patch', 'post', 'put'])) { 
			$status= $this->request->getData('status_id');	
			$virtualcfoRegistrations  = $this->VirtualcfoRegistrations->find('all')->where(['VirtualcfoRegistrations.is_active'=>1,'VirtualcfoRegistrations.appln_status'=>$status])->contain(['VirtualcfoStates','Services'])->toArray();
		 }else{
			$virtualcfoRegistrations  = $this->VirtualcfoRegistrations->find('all')->where(['VirtualcfoRegistrations.is_active'=>1])->contain(['VirtualcfoStates','Services'])->toArray();
		 }			
		
		 $proj=array(1=>'Approved',2=>'Rejected',0=>'Pending');		
		$this->set(compact('virtualcfoRegistrations','proj'));   
	}	

	public function virtualview($id=null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('VirtualcfoStates');
		$this->loadModel('Services');
		$this->loadModel('VirtualServices');
		$basic = $this->VirtualcfoRegistrations->get($id, [
			'contain' => ['VirtualcfoStates','Services'],
		     ]);

			 $virtualServices_count  = $this->VirtualServices->find('all')->where(['VirtualServices.is_active'=>1,'VirtualServices.virtualcfo_registration_id'=>$id])->contain(['VirtualcfoRegistrations','Services'])->count();

			 $virtualServices  = $this->VirtualServices->find('all')->where(['VirtualServices.is_active'=>1,'VirtualServices.virtualcfo_registration_id'=>$id])->contain(['VirtualcfoRegistrations','Services'])->toArray();

			//  echo '<pre>';
			//  print_r($basic);
			//  exit();
			 
	  $this->set(compact('basic','virtualServices','virtualServices_count'));
	}
	
	public function virtualpreview($id=null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('VirtualcfoStates');
		$this->loadModel('Services');
		$this->loadModel('VirtualServices');
		$basic = $this->VirtualcfoRegistrations->get($id, [
			'contain' => ['VirtualcfoStates','Services'],
		     ]);

			 $virtualServices_count  = $this->VirtualServices->find('all')->where(['VirtualServices.is_active'=>1,'VirtualServices.virtualcfo_registration_id'=>$id])->contain(['VirtualcfoRegistrations','Services'])->count();

			 $virtualServices  = $this->VirtualServices->find('all')->where(['VirtualServices.is_active'=>1,'VirtualServices.virtualcfo_registration_id'=>$id])->contain(['VirtualcfoRegistrations','Services'])->toArray();

			//  echo '<pre>';
			//  print_r($virtualServices_count);
			//  exit();
       $this->set(compact('basic','id','virtualServices','virtualServices_count'));
	}

	public function applnstatus($id=null)
	{
		$this->viewBuilder()->setLayout('layout');
		if ($this->request->is('post')) {

		           $ProjectTable              = $this->getTableLocator()->get('VirtualcfoRegistrations');
                   $project1                  = $ProjectTable->get($id); 
                   $project1->appln_status  = $this->request->getData('appln_status');				   
			
				   if ($this->VirtualcfoRegistrations->save($project1)) {
					$this->Flash->success(__('The Application status has been updated.'));
					return $this->redirect(['action' => 'virtualcfo']);
				}
				$this->Flash->error(__('The Application status could not be saved. Please, try again.'));
		}
		   $proj=array(1=>'Approved',2=>'Rejected');
		   $this->set(compact('proj'));
	}	
}