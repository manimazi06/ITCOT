<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class ProjectProfileValuesController extends AppController
{
    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		$projectProfileValues = $this->ProjectProfileValues->find('all')->toArray();		
		$this->set(compact('projectProfileValues'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$projectProfileValues= $this->ProjectProfileValues->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$projectProfileValues->name                = $this->request->getData('name');
			$projectProfileValues_check  = $this->ProjectProfileValues->find('all')->where(['ProjectProfileValues.name'=>$projectProfileValues->name])->count();


			if($projectProfileValues_check>0){
				$this->Flash->error(__('The ProjectProfile name already present. Please, try again.'));
				return $this->redirect(['action' => 'index']);

		}else{
			$this->ProjectProfileValues->save($projectProfileValues);
			$this->Flash->success(__('The ProjectProfileValues has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->ProjectProfileValues->save($projectProfileValues)) {
			// 	$this->Flash->success(__('The ProjectProfileValues details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The ProjectProfileValues details could not be saved. Please, try again.'));
		}
			$this->set(compact('projectProfileValues'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$projectProfileValues= $this->ProjectProfileValues->get($id, [
			'contain' => [],
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$projectProfileValues= $this->ProjectProfileValues->patchEntity($projectProfileValues, $this->request->getData());
			$projectProfileValues->name                = $this->request->getData('name');
			$projectProfileValues_check  = $this->ProjectProfileValues->find('all')->where(['ProjectProfileValues.name'=>$projectProfileValues->name,'ProjectProfileValues.id!='=>$id])->count();


			if($projectProfileValues_check>0){
				$this->Flash->error(__('The ProjectProfile name already present. Please, try again.'));
				return $this->redirect(['action' => 'index']);

		}else{
			$this->ProjectProfileValues->save($projectProfileValues);
			$this->Flash->success(__('The ProjectProfileValues has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->ProjectProfileValues->save($projectProfileValues)) {
			// 	$this->Flash->success(__('The ProjectProfileValues details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The ProjectProfileValues details could not be updated. Please, try again.'));
		}		
		$this->set(compact('projectProfileValues'));
	}
	
	
	
}