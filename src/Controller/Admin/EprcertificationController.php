<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class EprcertificationController extends AppController
{
    
	public function eprcertification(){
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('States');
       
	     if ($this->request->is(['patch', 'post', 'put'])) { 
			$status= $this->request->getData('status_id');	
			$eprcertifications  = $this->Eprcertification->find('all')->where(['Eprcertification.is_active'=>1,'Eprcertification.appln_status'=>$status])->contain(['States'])->toArray();
		 }else{
			$eprcertifications  = $this->Eprcertification->find('all')->where(['Eprcertification.is_active'=>1])->contain(['States'])->toArray();
		 }	
	
		 $proj=array(1=>'Approved',2=>'Rejected',0=>'Pending');		
		
		$this->set(compact('eprcertifications','proj'));   
	}	  
	

	public function eprview($id=null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('States');
		$this->loadModel('EprRoles');
		$this->loadModel('WasteTypes');
		$this->loadModel('WasteCategories');
		$this->loadModel('WasteProductDetails');
		$basic = $this->Eprcertification->get($id, [
			'contain' => ['States','EprRoles','WasteTypes','WasteCategories','WasteProductDetails'],
		     ]);


			
			// echo '<pre>';
			// print_r($basic);
			// exit();


			 $this->set(compact('basic'));
	}
	public function eprpreview($id=null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('States');
		// $this->loadModel('Services');
		$basic = $this->Eprcertification->get($id, [
			'contain' => ['States','EprRoles','WasteTypes','WasteCategories','WasteProductDetails'],
		     ]);


			


			 $this->set(compact('basic','id'));
	}

	public function applnstatus($id=null)
	{
		$this->viewBuilder()->setLayout('layout');
		if ($this->request->is('post')) {

		           $ProjectTable              = $this->getTableLocator()->get('Eprcertification');
                   $project1                  = $ProjectTable->get($id); 
                   $project1->appln_status  = $this->request->getData('appln_status');				   
			
				   if ($this->Eprcertification->save($project1)) {
					$this->Flash->success(__('The Application status has been updated.'));
					return $this->redirect(['action' => 'eprcertification']);
				}
				$this->Flash->error(__('The Application status could not be saved. Please, try again.'));
		}
		   $proj=array(1=>'Approved',2=>'Rejected');
		   $this->set(compact('proj'));

	}
	
}