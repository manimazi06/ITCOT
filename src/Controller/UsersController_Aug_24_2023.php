<?php
declare(strict_types=1); 
namespace App\Controller;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;



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

		$this->set(compact('users'));
	}
	
    public function login()
	{
		$this->viewBuilder()->setLayout('loginlayout');
	    $this->loadModel('Projects');

		if ($this->request->is('post')) {  //echo "<pre>"; print_r($this->request->getData()); exit();  
			$user = $this->Auth->identify();
			//echo "<pre>"; print_r($user ? 1 : 0); exit();  
			if ($user != '') {
				if($user['role_id'] == 2){
				$this->Auth->setUser($user);				
				return $this->redirect(['controller' => 'Pages','action' => 'index']);

				}else{
					$this->Flash->error(__('You are not Authorised to login'));									
					return $this->redirect(['controller' => 'Users','action' => 'login']);
              	 	//$error = "You are not Authorised to login.";
				}
			} else {
				$this->Flash->error(__('Username or password is Incorrect'));
				return $this->redirect(['controller' => 'Users','action' => 'login']);
				//$error = "Username or password is Incorrect.";
			}
		}
		$this->set(compact('user','error'));
	}
	
	public function add()
	{
		$this->viewBuilder()->setLayout('layout');
	    $this->loadModel('Roles');

		$user = $this->Users->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$user = $this->Users->patchEntity($user, $this->request->getData());
			$user->name                = $this->request->getData('name');
		
			if ($this->Users->save($user)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The user could not be saved. Please, try again.'));
		}
		$roles = $this->Roles->find('list')->toArray();
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
	
	
	public function registration()
	{
		$this->viewBuilder()->setLayout('loginlayout');
	    $this->loadModel('Roles');
		$user = $this->Users->newEmptyEntity();
		if ($this->request->is('post')) { 
			$mobile                = $this->request->getData('mobile_no');
			$hasher  = new DefaultPasswordHasher();
			$user = $this->Users->patchEntity($user, $this->request->getData());
			$user->name                    = $this->request->getData('name');
			$user->username                = $this->request->getData('email');
			$user->password                = $hasher->hash($this->request->getData('mobile_no'));		
			$user->mobile_no               = $this->request->getData('mobile_no');
			$user->role_id                 = 2;		
			if ($this->Users->save($user)) {
				$insert_id = $user->id;
				$this->Flash->success(__('The user has been Registered.'));			
				return $this->redirect(['action' => 'registrationsuccess/'.$insert_id]);
			}		
			
			$this->Flash->error(__('The user could not be saved. Please, try again.'));
		}

		$this->set(compact('user', 'roles', 'circles','mobile'));
	}
	public function registrationsuccess($id=null)
	{
		$this->viewBuilder()->setLayout('loginlayout');
	    $this->loadModel('Roles');
		// $decode=base64_decode($id);
		
		$user = $this->Users->get($id, [
			'contain' => [],
		     ]);	

		$this->set(compact('user', 'roles', 'circles','mbl'));
	}
	
	
	public function logout()
	{
		setcookie('ngStorage-user', "", -1, '/');
		setcookie('ngStorage-configur', "", -1, '/');
		//$this->request->session()->destroy();

		return $this->redirect($this->Auth->logout());
		//return $this->redirect(['action' => 'login']);
     exit();
	}
}
