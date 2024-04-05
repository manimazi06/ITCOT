<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class DepartmentSchemesController extends AppController
{
    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		 $this->paginate = [
			 'contain' => ['Departments'],
		 ];
		 $users = $this->paginate($this->Users);
		// $connection            = ConnectionManager::get('default');

		 // $query                   = "SELECT 
		                             // ro.name as rname,
		                             // user.username as username,
		                             // user.id as id,
		                             // user.name as name
		                             // FROM users as user 
		                             // LEFT JOIN  roles as  ro on ro.id = user.role_id
								    // ORDER BY user.id";
		 // $users              = $connection->execute($query)->fetchAll('assoc');


		 // echo"<pre>";print_r($users);exit();
		$this->set(compact('users'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Departments');
			$user_id = $this->Auth->user('id');
		$scheme = $this->DepartmentSchemes->newEmptyEntity();
		if ($this->request->is('post')) { 
//echo "<pre>"; print_r($this->request->getData());  exit();
			//$scheme = $this->DepartmentSchemes->patchEntity($scheme, $this->request->getData());
			$scheme->department_id= $this->request->getData('department_id');
			$scheme->name                = $this->request->getData('name');
			$scheme->description         = $this->request->getData('description');
			$scheme->created_by          = $this->Auth->user('id');
			$scheme->created_date        =date('Y-m-d H:i:s');

				//echo "<pre>"; print_r($scheme);  exit()
			if ($this->DepartmentSchemes->save($scheme)) {
				$this->Flash->success(__('The Department scheme details has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Department scheme  details could not be saved. Please, try again.'));
		}
		$schemes = $this->Departments->find('list')->all();
		//echo "<pre>"; print_r($schemes);  exit();


			$this->set(compact('scheme','schemes'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Departments');



		$scheme = $this->DepartmentSchemes->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			//$scheme = $this->Departments->patchEntity($user, $this->request->getData());

			$scheme->department_id= $this->request->getData('department_id');
			$scheme->name                = $this->request->getData('name');
			$scheme->description         = $this->request->getData('description');

			if ($this->DepartmentSchemes->save($scheme)) {
				$this->Flash->success(__('The Departments details has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Departments details could not be updated. Please, try again.'));
		}	
		$schemes = $this->Departments->find('list')->all();	
		$this->set(compact('scheme','schemes'));
	}
	
	
	
}