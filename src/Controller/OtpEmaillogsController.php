<?php
declare(strict_types=1); 
namespace App\Controller;
use Cake\Datasource\ConnectionManager;


use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\Mailer\Email;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;

class OtpEmaillogsController extends AppController
{
    
	public function ajaxotp($email=null){
	
		$this->viewBuilder()->setLayout('layout');
	
		$decode=base64_decode($email);
		
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
		$otpEmail->status                        = 0;
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





	// if ($mailer->send()) 
	// {
	// 	// Success
	// 	$this->Flash->success('Email Sent Successfully');
	// 	return $this->redirect(['controller'=>'Users','action' => 'registration']);
	// } 
	// else 
	// {
	// 	$this->Flash->error('Email Not Sent');
	// 	// Failure
	// }


	
		
		$this->Flash->success(__('Your account has been registered.'));
		return $this->redirect(['controller'=>'Users','action' => 'registration']);
	
		}else{
		
		$this->Flash->error(__('Registration failed, please try again.'));
	}
	exit();
		return $this->redirect(['controller'=>'Users','action' => 'registration']);

		$this->set(compact('otpEmail'));  
	}

	
	public function ajaxverifyotp($val=null,$email=null){

		$otpEmaillogs=$this->OtpEmaillogs->find('all')->where(['OtpEmaillogs.otp'=>$val,'OtpEmaillogs.email_id'=>$email,'OtpEmaillogs.status'=>0])->first();
		$otp_id=$otpEmaillogs['id'];	

		if($otpEmaillogs !=''){
			echo 1;
			$ProjectTable          = $this->getTableLocator()->get('OtpEmaillogs');
			$project1              = $ProjectTable->get($otp_id); 
			$project1->status      = 1;
			$project1->modified_date      = date('Y-m-d H:i:s');
			$ProjectTable->save($project1); 
		}else{
			echo 0;
		}
		exit();

	}		

}	 

	

