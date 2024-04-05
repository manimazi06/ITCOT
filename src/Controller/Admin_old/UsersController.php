<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class UsersController extends AppController
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
    //$circles = $this->Users->Circles->find('list', ['limit' => 200])->all()->toArray();
	//	$divisions = $this->Users->Divisions->find('list', ['limit' => 200])->all()->toArray();
   //$ranges = $this->Users->Ranges->find('list', ['limit' => 200])->all()->toArray();
	//	$this->set(compact('circles', 'divisions', 'ranges'));
	}
	
    public function login()
	{
		$this->viewBuilder()->setLayout('loginlayout');
		//$user = $this->Users->newEmptyEntity();
		if ($this->request->is('post')) {  //echo "<pre>"; print_r($this->request->getData()); exit();  
			$user = $this->Auth->identify();
			//echo "<pre>"; print_r($user); exit();  
			if ($user) {
				$this->Auth->setUser($user);
				//echo "<pre>"; print_r($user); exit();  
				
				//return $this->redirect(['controller' => 'users', 'action' => 'index']);
				return $this->redirect(['controller' => 'Users','action' => 'index']);

			} else {
				$this->Flash->error(__('Username or password is incorrect'));
			}
		}
		$this->set(compact('user'));
	}
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
	    $this->loadModel('Roles');

		$user = $this->Users->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$user = $this->Users->patchEntity($user, $this->request->getData());
			$user->name                = $this->request->getData('name');
			//$user->circle_id          = $this->request->getData('circle_id');
			//$user->division_id        = $this->request->getData('division_id');
			//$user->range_id          = $this->request->getData('range_id');
			if ($this->Users->save($user)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The user could not be saved. Please, try again.'));
		}
		$roles = $this->Roles->find('list')->toArray();
		//$circles = $this->Users->Circles->find('list', ['limit' => 200])->all();
		//$divisions = $this->Users->Divisions->find('list', ['limit' => 200])->all();
		//$ranges = $this->Users->Ranges->find('list', ['limit' => 200])->all();
		$this->set(compact('user', 'roles', 'circles'));
	}
	
	public function edit($id = null)
	{
		$this->viewBuilder()->setLayout('layout');

		$user = $this->Users->get($id, [
			'contain' => [],
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {


			$user = $this->Users->patchEntity($user, $this->request->getData());
			$user->name                = $this->request->getData('name');
			if ($this->Users->save($user)) {
				$this->Flash->success(__('The user has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The user could not be saved. Please, try again.'));
		}
		$this->loadModel('Roles');
		$role  = $this->Roles->find('list')->all();		

		$this->set(compact('user', 'role', 'divisions', 'circles', 'ranges'));
	}
	
	public function changepassword()
	{
		//$user = $this->request->getAttribute('identity');
		$this->viewBuilder()->setLayout('layout');
		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData()); exit();
			$users   = $this->Users->find('all')->where(['Users.id' => $this->Auth->user('id')])->first();
			$hasher  = new DefaultPasswordHasher();
			$PPP     = $hasher->check($this->request->getData('oldpassword'), $users['password']);

			if ($this->request->getData('newpassword') != $this->request->getData('confirmpassword')) {
				$this->Flash->error(__('New password and Confirm password does not match.'));
			}

			if ($this->request->getData('newpassword') == $this->request->getData('oldpassword')) {

				$this->Flash->error(__('New password should not be same as OLD password!'));
			} else if ($PPP) {
				$passWord = $hasher->hash($this->request->getData('newpassword'));
				$userTable = TableRegistry::get('Users');
				$userentry = $userTable->find('all')->where(['Users.id' => $this->Auth->user('id')])->first();
				$userentry->password = $passWord;
				if ($userTable->save($userentry)) {
					$this->Flash->success(__('New password has been updated!'));
					//$this->Authentication->logout();
					return $this->redirect(['controller' => 'Users', 'action' => 'logout']);
				}
			} else {
				$this->Flash->error(__('Wrong Current password!'));
			}
		}
	}
	
	
	public function logout()
	{
		setcookie('ngStorage-user', "", -1, '/');
		setcookie('ngStorage-configur', "", -1, '/');
		return $this->redirect($this->Auth->logout());
	}
}
