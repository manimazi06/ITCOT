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

use Cake\Mailer\Email;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;
use TimeConversion;
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
	    $this->loadModel('UserLogs');
		//date_default_timezone_set("Asia/Calcutta");
		$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
		//$timedate1 = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
		if ($this->request->is('post')) {  //echo "<pre>"; print_r($this->request->getData()); exit();  
			$user = $this->Auth->identify();
			//echo "<pre>"; print_r($user); exit();
			
			



			if ($user != '') {
			
				if($user['role_id'] == 2){
					$insert_id=$user['id'];
					//echo "<pre>"; print_r($insert_id); exit();
					$user_logs = $this->UserLogs->newEmptyEntity();
		
					$user_logs->user_id               = $insert_id;
					$user_logs->login_time            = $timedate;
					$user_logs->ip_address            = $_SERVER['REMOTE_ADDR'];
					$user_logs->created_by            = $insert_id;
					$user_logs->created_date          = $timedate;
		
		
					//echo "<pre>"; print_r($user_logs); exit();
					$this->UserLogs->save($user_logs);
					
				$this->Auth->setUser($user);				
				return $this->redirect(['controller' => 'Pages','action' => 'index']);

				}else{
					$this->Flash->error(__('You are not Authorised to login'));									
					return $this->redirect(['controller' => 'Users','action' => 'login']);
              	 	//$error = "You are not Authorised to login.";
				}
			} else {
				$this->Flash->error(__('Username or password is Incorrect'));
				//$this->Flash->error(__('Username or password is Incorrect'));
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
	
// public function sendotp($email=null){
// 	$this->viewBuilder()->setLayout('layout');

// 	$decode=base64_decode($email);
// 	$rand=getrandmax();
// 	echo '<pre>';
// 	print_r($rand);
// 	exit();

// }

public function ajaxcalling($email=null)
{
	// echo '<pre>';
	// print_r($email);
	// exit();
	$users=$this->Users->find('all')->where(['Users.username'=>$email])->count();
	// 	echo '<pre>';
	// print_r($users);
	// exit();
	if($users>0)
	{
echo 1;
	}else{
		echo 0;
	}
	exit();

}

public function ajaxcallingmbl($mbl=null)
{
	// echo '<pre>';
	// print_r($mbl);
	// exit();
	$users=$this->Users->find('all')->where(['Users.mobile_no'=>$mbl])->count();
	// 	echo '<pre>';
	// print_r($users);
	// exit();
	if($users>0)
	{
echo 1;
	}else{
		echo 0;
	}
	exit();

}

public function emailverification()
	{
		//$user = $this->request->getAttribute('identity');
		$this->viewBuilder()->setLayout('loginlayout');
	}


	public function ajaxotp($email=null){
	
		//$this->viewBuilder()->setLayout('layout');
		$this->loadModel('OtpEmaillogs');
		$decode=base64_decode($email);
		// echo '<pre>';
		// print_r($decode);
		// exit();
		$users = $this->Users->find('all')->where(['Users.username'=>$decode,'Users.is_active'=>1])->count();

		// echo '<pre>';
		// print_r($users);
		// exit();
		
		if($users>0)
		{
	    echo 1;
	
	    $pres_count = $this->OtpEmaillogs->find('all')->where(['OtpEmaillogs.email_id'=>$decode,'OtpEmaillogs.status'=>0])->count();
		
		if($pres_count > 0){			
			$pres_email = $this->OtpEmaillogs->find('all')->where(['OtpEmaillogs.email_id'=>$decode,'OtpEmaillogs.status'=>0])->first();
			$Project2Table           = $this->getTableLocator()->get('OtpEmaillogs');
			$project2                = $Project2Table->get($pres_email['id']); 
			$project2->status        = 2;
			$project2->modified_date = date('Y-m-d H:i:s');  
			$Project2Table->save($project2);			
		}
		
		$random=rand(111111,999999);	
	
		$otpEmail = $this->OtpEmaillogs->newEmptyEntity();	
		$otpEmail->email_id                   = $decode;
		$otpEmail->otp                        = $random;
		$otpEmail->status                     = 0;
		$otpEmail->	created_date              = date('Y-m-d H:i:s');
		if ($this->OtpEmaillogs->save($otpEmail)) {

	
// ini_set("SMTP","ssl://smtp.gmail.com");
// ini_set("smtp_port","465");

		$mailer = new Mailer('default');
		$mailer
		->setTransport('smtp')
		->setFrom(['verify.email@itcot.com' => 'ITCOT - OTP Verification'])
		->setTo($decode)
  		->setEmailFormat('html') 
		->setSubject('OTP Registration')
		->deliver('Hi Your OTP is.'.$random);

		}

	///////////////////]
	//$this->Flash->success(__('Your account has been registered.'));
	// return $this->redirect(['action' => 'registration']);
	}
	
	else{
		
		echo 0;
	}
	exit();
 		//$random=rand(111111,999999);	
	
	
		 
		
	
		
	 

	

	
// // ini_set("SMTP","ssl://smtp.gmail.com");
// // ini_set("smtp_port","465");

	// 	$mailer = new Mailer('default');
	// 	$mailer
	// 	->setTransport('smtp')
	// 	->setFrom(['verify.email@itcot.com' => 'ITCOT - OTP Verification'])
	// 	->setTo($decode)
  	// 	->setEmailFormat('html') 
	// 	->setSubject('OTP Registration')
	// 	->deliver('Hi Your OTP is.'.$random);





	// if ($mailer->send()) 
	// {
	// 	// Success
	// 	$this->Flash->success('Email Sent Successfully');
	// 	return $this->redirect(['action' => 'changepassword']);
	// } 
	// else 
	// {
	// 	$this->Flash->error('Email Not Sent');
	// 	// Failure
	// }



		
		//$this->Flash->success(__('Your account has been registered.'));
		//return $this->redirect(['action' => 'changepassword']);
	
	
		//return $this->redirect(['controller'=>'Users','action' => 'registration']);
		
		$this->set(compact('otpEmail'));  
	}


	public function ajaxverifyotp($val=null,$email=null){

		$this->loadModel('OtpEmaillogs');
		$otpEmaillogs=$this->OtpEmaillogs->find('all')->where(['OtpEmaillogs.otp'=>$val,'OtpEmaillogs.email_id'=>$email,'OtpEmaillogs.status'=>0])->first();
		$otp_id=$otpEmaillogs['id'];	

		if($otpEmaillogs !=''){
			echo 1;
			$ProjectTable          = $this->getTableLocator()->get('OtpEmaillogs');
			$project1              = $ProjectTable->get($otp_id); 
			$project1->status      = 1;
			$project1->modified_date      = date('Y-m-d H:i:s');
			$ProjectTable->save($project1); 
			//return $this->redirect(['action' => 'changepassword']);
		}else{
			echo 0;
		}
		exit();

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
	public function forgetpassword($email=null)
	{
		$this->viewBuilder()->setLayout('loginlayout');
		$decode=base64_decode($email);
		//$user = $this->request->getAttribute('identity');
		 $users   = $this->Users->find('all')->where(['Users.username' => $decode])->first();
				$user_id=$users['id'];
		// echo '<pre>';
		// print_r($user_id);
		// exit();
		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData()); exit();
			//$users   = $this->Users->find('all')->where(['Users.id' => $this->Auth->user('id')])->first();
			
			// echo '<pre>';
			// print_r($users);
			// exit();
			$hasher  = new DefaultPasswordHasher();
			//$PPP     = $hasher->check($this->request->getData('oldpassword'), $users['password']);

			if ($this->request->getData('newpassword') != $this->request->getData('confirmpassword')) {
				$this->Flash->error(__('New password and Confirm password does not match.'));
			}

			if ($this->request->getData('newpassword') == $this->request->getData('confirmpassword')) {
				$passWord = $hasher->hash($this->request->getData('newpassword'));
				//$users   = $this->Users->find('all')->where(['Users.email' => $email])->first();
				$ProjectTable          = $this->getTableLocator()->get('Users');
				$project1              = $ProjectTable->get($user_id); 
				$project1->password   = $passWord;
				$project1->modified_date      = date('Y-m-d H:i:s');
			

				// echo '<pre>';
				// print_r($users);
				// exit();
				
				
			
		
				if ($ProjectTable->save($project1)) {
					$this->Flash->success(__('New password has been updated!'));
					//$this->Authentication->logout();
					return $this->redirect(['controller' => 'Users', 'action' => 'login']);
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
			$user->email                   = $this->request->getData('email');
			$user->password                = $hasher->hash($this->request->getData('mobile_no'));		
			$user->mobile_no               = $this->request->getData('mobile_no');
			$user->role_id                 = 2;		
			if ($this->Users->save($user)) {
				$insert_id = $user->id;				
				$email = $user->username;
				$password = $user->mobile_no;                
				$mailer = new Mailer('default');
				$mailer
				->setTransport('smtp')
				->setFrom(['verify.email@itcot.com' => 'ITCOT - Registration'])
				->setTo($email)
				->setEmailFormat('html') 
				->setSubject('ITCOT - Registration')
				->deliver("Username: ".$email."<br>Password:".$password."");    
				
				$this->Flash->success(__('The Username and Password Sent to Email.Please Check'));	
				//return $this->redirect(['action' => 'registrationsuccess/'.$insert_id]);
				return $this->redirect(['action' => 'login']);
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
		$this->loadModel('UserLogs');

		$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
		$user_id = $this->Auth->user('id');

		// print_r($user_id);
		// exit();
		if($user_id !=''){
			  
		$userlog   = $this->UserLogs->find('all')->where(['UserLogs.user_id' => $user_id])->last();

		// print_r($userlog);
		// exit();
		$projectTable                     = $this->getTableLocator()->get('UserLogs');
		$project                      = $projectTable->get($userlog['id']); 
	
		// print_r($project);
		// exit();
		//$project->transaction_date    = date('Y-m-d H:i:s');
		$project->logout_time         = $timedate;

		$projectTable->save($project);
		}
		// print_r($project);
		// 	exit();
		setcookie('ngStorage-user', "", -1, '/');
		setcookie('ngStorage-configur', "", -1, '/');
		//$this->request->session()->destroy();

		return $this->redirect($this->Auth->logout());
		//return $this->redirect(['action' => 'login']);
     exit();
	}
}
