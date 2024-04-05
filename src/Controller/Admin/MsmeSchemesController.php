<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class MsmeSchemesController extends AppController
{
    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('MsmeDivisions');		
		$Msmeschemes  = $this->MsmeSchemes->find('all')->contain(['MsmeDivisions'])->toArray();	

	   $Msmedivisions  = $this->MsmeDivisions->find('list')->all();

		$this->set(compact('Msmeschemes','Msmedivisions'));   
	} 
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('MsmeDivisions');
			$user_id = $this->Auth->user('id');
		$Msmeschemes = $this->MsmeSchemes->newEmptyEntity();
		if ($this->request->is('post')) { 
              //echo "<pre>"; print_r($this->request->getData());  exit();
			$Msmeschemes->msme_division_id= $this->request->getData('msme_division_id');
			$Msmeschemes->name                = $this->request->getData('name');
			$Msmeschemes->description         = $this->request->getData('description');
			$Msmeschemes->site_url            = $this->request->getData('site_url');
			$Msmeschemes->created_by          = $this->Auth->user('id');
			$Msmeschemes->created_date        = date('Y-m-d H:i:s');
				//echo "<pre>"; print_r($Msmeschemes);  exit()
			$Msmeschemes_check  = $this->MsmeSchemes->find('all')->where(['MsmeSchemes.name'=>$Msmeschemes->name,'MsmeSchemes.msme_division_id'=>$Msmeschemes->msme_division_id])->count();


			if($Msmeschemes_check>0){
				$this->Flash->error(__('The MSME Schemes already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->MsmeSchemes->save($Msmeschemes);
			$this->Flash->success(__('The MsmeSchemes has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->MsmeSchemes->save($Msmeschemes)) {
			// 	$this->Flash->success(__('The MsmeSchemes details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The MsmeSchemes  details could not be saved. Please, try again.'));
		}
		$Msmedivisions  = $this->MsmeDivisions->find('list')->all();
		$this->set(compact('Msmedivisions','Msmeschemes'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('MsmeDivisions');
		$Msmeschemes = $this->MsmeSchemes->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {
			$Msmeschemes = $this->MsmeSchemes->patchEntity($Msmeschemes, $this->request->getData());
			$Msmeschemes->msme_division_id= $this->request->getData('msme_division_id');
			$Msmeschemes->name                = $this->request->getData('name');
			$Msmeschemes->description         = $this->request->getData('description');
		    $Msmeschemes->site_url            = $this->request->getData('site_url');
			$Msmeschemes->updated_by          = $this->Auth->user('id');
			$Msmeschemes->updated_date        =date('Y-m-d H:i:s');

			$Msmeschemes_check  = $this->MsmeSchemes->find('all')->where(['MsmeSchemes.name'=>$Msmeschemes->name,'MsmeSchemes.msme_division_id'=>$Msmeschemes->msme_division_id,
			'MsmeSchemes.id!='=>$id])->count();


			if($Msmeschemes_check>0){
				$this->Flash->error(__('The MSME Schemes already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->MsmeSchemes->save($Msmeschemes);
			$this->Flash->success(__('The MsmeSchemes has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->MsmeSchemes->save($Msmeschemes)) {
			// 	$this->Flash->success(__('The MsmeSchemes details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The MsmeSchemes details could not be updated. Please, try again.'));
		}	
		$Msmedivisions  = $this->MsmeDivisions->find('list')->all();	
		$this->set(compact('Msmedivisions','Msmeschemes'));
	}	
}