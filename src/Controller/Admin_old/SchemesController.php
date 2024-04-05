<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class SchemesController extends AppController
{
    
	public function index(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		 $this->paginate = [
			 //'contain' => ['Roles'],
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


		//  echo"<pre>";print_r($query );exit();
		$this->set(compact('users'));   
	}	
  
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
		$scheme = $this->Schemes->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$scheme = $this->Schemes->patchEntity($scheme, $this->request->getData());
			$scheme->name                = $this->request->getData('name');
			$scheme->description         = $this->request->getData('description');
			if ($this->Schemes->save($scheme)) {
				$this->Flash->success(__('The Scheme has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Scheme could not be saved. Please, try again.'));
		}
			$this->set(compact('scheme', 'roles', 'circles'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$scheme = $this->Schemes->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$scheme = $this->Schemes->patchEntity($user, $this->request->getData());
			$scheme->name                = $this->request->getData('name');
			$scheme->description         = $this->request->getData('description');

			if ($this->Schemes->save($scheme)) {
				$this->Flash->success(__('The Scheme has been updated.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Scheme could not be updated. Please, try again.'));
		}		
		$this->set(compact('scheme'));
	}
	
	
	
}