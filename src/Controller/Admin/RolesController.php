<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class RolesController extends AppController
{
    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		 $this->paginate = [
			 //'contain' => ['Roles'],
		 ];
		 $users = $this->paginate($this->Users);
		 $roles = $this->Roles->find('all')->where(['Roles.is_active'=>1])->toArray();	

		$this->set(compact('roles'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$Roles= $this->Roles->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$Roles= $this->LoanTypes->patchEntity($Roles, $this->request->getData());
			$Roles->name                = $this->request->getData('name');

			//$Roles->description         = $this->request->getData('description');

			$Roles_check  = $this->Roles->find('all')->where(['Roles.name'=>$Roles->name])->count();


			if($Roles_check>0){
				$this->Flash->error(__('The Roles details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Roles->save($Roles);
			$this->Flash->success(__('The Roles details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}

			// if ($this->Roles->save($Roles)) {
			// 	$this->Flash->success(__('The Roles details has been saved.'));
			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Roles details could not be saved. Please, try again.'));
		}
			$this->set(compact('Roles'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$Roles= $this->Roles->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$Roles= $this->Roles->patchEntity($Roles, $this->request->getData());
			$Roles->name                = $this->request->getData('name');
			//$Roles->description         = $this->request->getData('description');

			$Roles_check  = $this->Roles->find('all')->where(['Roles.name'=>$Roles->name,'Roles.id!='=>$id])->count();


			if($Roles_check>0){
				$this->Flash->error(__('The Roles details already present. Please, try again.'));
				//return $this->redirect(['action' => 'index']);

		}else{
			$this->Roles->save($Roles);
			$this->Flash->success(__('The Roles details has been saved.'));
			return $this->redirect(['action' => 'index']);
		}
			// if ($this->Roles->save($Roles)) {
			// 	$this->Flash->success(__('The Roles details has been updated.'));

			// 	return $this->redirect(['action' => 'index']);
			// }
			// $this->Flash->error(__('The Roles details could not be updated. Please, try again.'));
		}		
		$this->set(compact('Roles'));
	}
	
	public function delete($id = null)
    {
		// echo '<pre>';
		// print_r($id);
		// exit();
		$this->request->is(['patch', 'post', 'delete']);
		$Project2Table           = $this->getTableLocator()->get('Roles');
		$project2                = $Project2Table->get($id); 
		$project2->is_active        = 0;
		$project2->modified_date = date('Y-m-d H:i:s');  
		// echo '<pre>';
		// print_r($project2);
		// exit();
	    if ($this->Roles->save($project2)) {
            $this->Flash->success(__('The Roles has been deleted.'));
        } else {
            $this->Flash->error(__('The Roles could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
}