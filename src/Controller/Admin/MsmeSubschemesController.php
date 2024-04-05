<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class MsmeSubschemesController extends AppController
{    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('MsmeDivisions');
		$this->loadModel('MsmeSchemes');		
		 $Msmesubschemes  = $this->MsmeSubschemes->find('all')->contain(['MsmeDivisions','MsmeSchemes'])->toArray();	 
		 $Msmedivisions   = $this->MsmeDivisions->find('list')->all();
		 $Msmeschemes     = $this->MsmeSchemes->find('list')->all();
		$this->set(compact('Msmesubschemes','Msmedivisions','Msmeschemes'));   
	}	  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('MsmeDivisions');
		$this->loadModel('MsmeSchemes');
			$user_id = $this->Auth->user('id');
		$Msmesubschemes = $this->MsmeSubschemes->newEmptyEntity();
		if ($this->request->is('post')) { 
            //echo "<pre>"; print_r($this->request->getData());  exit();
			//$Msmeschemes = $this->MsmeSchemes->patchEntity($Msmeschemes, $this->request->getData());
			$Msmesubschemes->msme_division_id    = $this->request->getData('msme_division_id');
			$Msmesubschemes->msme_scheme_id      = $this->request->getData('msme_scheme_id');
			$Msmesubschemes->name                = $this->request->getData('name');
			$Msmesubschemes->description         = $this->request->getData('description');
		    $Msmesubschemes->site_url            = $this->request->getData('site_url');
			$Msmesubschemes->created_by          = $this->Auth->user('id');
			$Msmesubschemes->created_date        = date('Y-m-d H:i:s');
				//echo "<pre>"; print_r($Msmesubschemes);  exit();
				$Msmesubschemes_check  = $this->MsmeSubschemes->find('all')->where(['MsmeSubschemes.name'=>$Msmesubschemes->name,'MsmeSubschemes.msme_division_id'=>$Msmesubschemes->msme_division_id,
				'MsmeSubschemes.msme_scheme_id'=>$Msmesubschemes->msme_scheme_id])->count();


			if($Msmesubschemes_check>0){
				$this->Flash->error(__('The MsmeSubschemes details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->MsmeSubschemes->save($Msmesubschemes);
			$this->Flash->success(__('The MsmeSubschemes details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->MsmeSubschemes->save($Msmesubschemes)) {
			// 	$this->Flash->success(__('The MsmeSubschemes details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The MsmeSubschemes details could not be saved. Please, try again.'));
		}
		$Msmedivisions  = $this->MsmeDivisions->find('list')->all();
		$this->set(compact('Msmesubschemes','Msmedivisions'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('MsmeDivisions');
		$this->loadModel('MsmeSchemes');
		$Msmesubschemes = $this->MsmeSubschemes->get($id, [
			'contain' => ['MsmeDivisions','MsmeSchemes'],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$Msmesubschemes->msme_division_id    = $this->request->getData('msme_division_id');
			$Msmesubschemes->msme_scheme_id      = $this->request->getData('msme_scheme_id');
			$Msmesubschemes->name                = $this->request->getData('name');
			$Msmesubschemes->description         = $this->request->getData('description');
			$Msmesubschemes->site_url            = $this->request->getData('site_url');
			$Msmesubschemes->updated_by          = $this->Auth->user('id');
			$Msmesubschemes->updated_date        = date('Y-m-d H:i:s');

			$Msmesubschemes_check  = $this->MsmeSubschemes->find('all')->where(['MsmeSubschemes.name'=>$Msmesubschemes->name,'MsmeSubschemes.msme_division_id'=>$Msmesubschemes->msme_division_id,
			'MsmeSubschemes.msme_scheme_id'=>$Msmesubschemes->msme_scheme_id,'MsmeSubschemes.id!='=>$id])->count();


		if($Msmesubschemes_check>0){
			$this->Flash->error(__('The MsmeSubschemes details already present. Please, try again.'));
			//return $this->redirect(['action' => 'index']);

	}else{
		$this->MsmeSubschemes->save($Msmesubschemes);
		$this->Flash->success(__('The MsmeSubschemes details has been saved.'));
		return $this->redirect(['action' => 'index']);
	}

			// if ($this->MsmeSubschemes->save($Msmesubschemes)) {
			// 	$this->Flash->success(__('The MsmeSubschemes details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The MsmeSubschemes details could not be updated. Please, try again.'));
		}	
		$Msmedivisions  = $this->MsmeDivisions->find('list')->all();	
		$Msmescheme  = $this->MsmeSubschemes->MsmeSchemes->find('list')->where(['MsmeSchemes.id'=>$Msmesubschemes->msme_scheme->id])->toArray();
		$this->set(compact('Msmedivisions','Msmesubschemes','Msmescheme'));
	}
	
	function ajaxcallingschemes($id=null){

		$this->loadModel('MsmeSchemes');

		$Msmeschemes  = $this->MsmeSchemes->find('all')->where(['MsmeSchemes.msme_division_id'=>$id])->toArray();
		$this->set(compact('Msmeschemes'));
	}
	
}