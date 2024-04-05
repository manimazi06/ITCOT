<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class DistrictsController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');		
		$this->loadModel('States');
		 $districts = $this->Districts->find('all')->contain(['States'])->where(['Districts.is_active'=>1])->toArray();
		//  echo '<pre>';
		//  print_r($districts);
		//  exit();	
		
		$this->set(compact('districts','district_dd'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$districts= $this->Districts->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$districts->state_id                = $this->request->getData('states_id');
			$districts->name                = $this->request->getData('name');
			// echo '<pre>';
			// print_r($districts);
			// exit();	

			$districts_check  = $this->Districts->find('all')->where(['Districts.name'=>$districts->name])->count();


			if($districts_check>0){
				$this->Flash->error(__('The Districts details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Districts->save($districts);
			$this->Flash->success(__('The Districts details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}

			// if ($this->Districts->save($districts)) {
			// 	$this->Flash->success(__('The Districts details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Districts details could not be saved. Please, try again.'));
		}
		$district_dd  = $this->Districts->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
			$this->set(compact('districts'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$districts= $this->Districts->get($id, [
			'contain' => [],
		]);
		// echo "<pre>"; print_r($districts);
		// exit();
		if ($this->request->is(['patch', 'post', 'put'])) {
			
			$districts= $this->Districts->patchEntity($districts, $this->request->getData());
			//$districts->state_id                = $this->request->getData('state_id');
			$districts->name                    = $this->request->getData('name');

			$districts_check  = $this->Districts->find('all')->where(['Districts.name'=>$districts->name,'Districts.id!='=> $id])->count();


			if($districts_check>0){
				$this->Flash->error(__('The Districts details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Districts->save($districts);
			$this->Flash->success(__('The Districts details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->Districts->save($districts)) {
			// 	$this->Flash->success(__('The Districts details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Districts details could not be updated. Please, try again.'));
		}		
		$district_dd  = $this->Districts->find('list',['keyField' => 'id',  'valueField' => 'name'])->toArray();
		$this->set(compact('districts','district_dd'));
	}	
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('Districts');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->Districts->save($project2)) {
            $this->Flash->success(__('The District has been deleted.'));
        } else {
            $this->Flash->error(__('The District could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}