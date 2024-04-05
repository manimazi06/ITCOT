<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class StatesController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');		
		 $states = $this->States->find('all')->where(['States.is_active'=>1])->toArray();	
		$this->set(compact('states'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$States= $this->States->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$States->state_name                = $this->request->getData('state_name');

			$states_check  = $this->States->find('all')->where(['States.state_name'=>$States->state_name])->count();


			if($states_check>0){
				$this->Flash->error(__('The States details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->States->save($States);
			$this->Flash->success(__('The States details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->States->save($States)) {
			// 	$this->Flash->success(__('The States details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The States details could not be saved. Please, try again.'));
		}
			$this->set(compact('States'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$states= $this->States->get($id, [
			'contain' => [],
		]);
		// echo "<pre>"; print_r($states);
		// exit();
		if ($this->request->is(['patch', 'post', 'put'])) {
			
			$states= $this->States->patchEntity($states, $this->request->getData());
			$states->state_name                = $this->request->getData('state_name');

			$states_check  = $this->States->find('all')->where(['States.state_name'=>$states->state_name,'States.id!='=>$id])->count();


			if($states_check>0){
				$this->Flash->error(__('The States details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->States->save($states);
			$this->Flash->success(__('The States details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}

			// if ($this->States->save($states)) {
			// 	$this->Flash->success(__('The States details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The States details could not be updated. Please, try again.'));
		}		
		$this->set(compact('states'));
	}

	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('States');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->States->save($project2)) {
            $this->Flash->success(__('The States has been deleted.'));
        } else {
            $this->Flash->error(__('The States could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}