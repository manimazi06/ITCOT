<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class ProjectProfilesController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		$projectProfiles = $this->ProjectProfiles->find('all')->toArray();
		$this->set(compact('projectProfiles'));   
	}	  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$projectProfiles= $this->ProjectProfiles->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$projectProfiles->name                = $this->request->getData('name');

			$projectprof_check  = $this->ProjectProfiles->find('all')->where(['ProjectProfiles.name'=>$projectProfiles->name])->count();


			if($projectprof_check>0){
				$this->Flash->error(__('The ProjectProfiles name already present. Please, try again.'));
				return $this->redirect(['action' => 'index']);

		}else{
			$this->ProjectProfiles->save($projectProfiles);
			$this->Flash->success(__('The ProjectProfiles  has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->ProjectProfiles->save($projectProfiles)) {
			// 	$this->Flash->success(__('The ProjectProfiles details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The ProjectProfiles details could not be saved. Please, try again.'));
		}
			$this->set(compact('projectProfiles'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$projectProfiles= $this->ProjectProfiles->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {
			$projectProfiles= $this->ProjectProfiles->patchEntity($projectProfiles, $this->request->getData());
			$projectProfiles->name                = $this->request->getData('name');

			$projectprof_check  = $this->ProjectProfiles->find('all')->where(['ProjectProfiles.name'=>$projectProfiles->name,'ProjectProfiles.id!='=>$id])->count();


			if($projectprof_check>0){
				$this->Flash->error(__('The ProjectProfiles name already present. Please, try again.'));
				return $this->redirect(['action' => 'index']);

		}else{
			$this->ProjectProfiles->save($projectProfiles);
			$this->Flash->success(__('The ProjectProfiles  has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->ProjectProfiles->save($projectProfiles)) {
			// 	$this->Flash->success(__('The Project Profile details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The projectProfiles details could not be updated. Please, try again.'));
		}		
		$this->set(compact('projectProfiles'));
	}
	
	
	
}