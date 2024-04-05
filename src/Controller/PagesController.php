<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Mpdf\Mpdf;
// use Razorpay\Api\Api;
// use Razorpay\Api\Errors\SignatureVerificationError;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use TimeConversion;

class PagesController extends AppController
{
	public function display(string ...$path): ?Response
	{
		if (!$path) {
			return $this->redirect('/');
		}
		if (in_array('..', $path, true) || in_array('.', $path, true)) {
			throw new ForbiddenException();
		}
		$page = $subpage = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		$this->set(compact('page', 'subpage'));

		try {
			return $this->render(implode('/', $path));
		} catch (MissingTemplateException $exception) {
			if (Configure::read('debug')) {
				throw $exception;
			}
			throw new NotFoundException();
		}
	}
	public function virtualcfo()
	{
		$this->viewBuilder()->setLayout('layout');
	}
	public function home()
	{
		$this->viewBuilder()->setLayout('layout');
	}
	public function aboutitcot()
	{
		$this->viewBuilder()->setLayout('layout');
	}

	public function index()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('PressReleases');
		$pressReleases = $this->PressReleases->find('all')->toArray();
		// echo '<pre>';
		// print_r($pressReleases);
		// exit();
		$this->set(compact('pressReleases'));
	}

	public function projectreport()
	{
		$this->viewBuilder()->setLayout('layout');
	}

	public function digitallibrary()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Users');
		$this->loadModel('DigilibraryRegistrations');
		$digitallibrarypayment_id = $this->Auth->user('digi_library_flag');
		$user  = $this->Users->find('all')->where(['Users.id' => $this->Auth->User('id')])->first();

		//print_r($user); exit();
		$digiregistrationcount = $this->DigilibraryRegistrations->find('all')->where(['DigilibraryRegistrations.user_id' => $this->Auth->User('id')])->count();
		if ($digiregistrationcount > 0) {
			$digiregistration      = $this->DigilibraryRegistrations->find('all')->where(['DigilibraryRegistrations.user_id' => $this->Auth->User('id')])->first();
		}
		//print_r($digiregistration); exit();    

		$this->set(compact('user', 'digiregistration'));
	}

	public function unionschemes()
	{
		$this->viewBuilder()->setLayout('layout');

		$this->loadModel('Departments');
		$digitallibrarypayment_id = $this->Auth->user('digi_library_flag');
		
		if ($digitallibrarypayment_id == 1) {
			$union_schemes_1  = $this->Departments->find('all')->where(['Departments.scheme_type_id' => 1])->limit(7)->toArray();
			$first_id         = $this->Departments->find('list')->where(['Departments.scheme_type_id' => 1])->limit(7)->toArray();


			if ($first_id != '') {
				$union_schemes_2  = $this->Departments->find('all')->where(['Departments.scheme_type_id' => 1, 'Departments.id NOT IN' => $first_id])->limit(7)->toArray();
			}
			//echo "<pre>"; print_r($union_schemes_2); exit();
			$this->set(compact('union_schemes_1', 'union_schemes_2'));
		} else {
			return $this->redirect(['action' => 'digitallibrary']);
		}
	}

	public function schemeview($id = null)
	{

		$this->viewBuilder()->setLayout('layout');

		$this->loadModel('DepartmentSchemes');
		$this->loadModel('ParentDepartments');
		$digitallibrarypayment_id = $this->Auth->user('digi_library_flag');

		if ($digitallibrarypayment_id == 1) {
			$schemes  = $this->DepartmentSchemes->find('all')->contain(['Departments'])->where(['DepartmentSchemes.department_id' => $id])->toArray();


			$parent_department = $this->ParentDepartments->find('list', ['keyField' => 'id',  'valueField' => 'name'])->toArray();

			//echo "<pre>";  print_r($parent_department); exit();
		} else {
			return $this->redirect(['action' => 'digitallibrary']);
		}
		$this->set(compact('schemes', 'id', 'parent_department'));
	}

	public function ajaxdigitallogs($loc=null,$dept=null,$dept_scheme=null)
	{

		
				$decode=base64_decode($loc);
		
//print_r($dept); exit();

		$this->loadModel('DigitalLibraryLogs');

			$digitalLibraryLogs = $this->DigitalLibraryLogs->newEmptyEntity();
			date_default_timezone_set("Asia/Calcutta");
			//print_r($date); exit();
			//$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
		if ($dept <= 13) {
			$digitalLibraryLogs->scheme_type_id         = 1;
			$digitalLibraryLogs->department_id          = $dept;
			$digitalLibraryLogs->department_scheme_id	= $dept_scheme;
			$digitalLibraryLogs->user_id                = $this->Auth->user('id');
			// $actual_link                                    = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$digitalLibraryLogs->url                        = $decode;
			$digitalLibraryLogs->login_time                 = date('Y-m-d H:i:s');
			$digitalLibraryLogs->ip_addr                    = $_SERVER['REMOTE_ADDR'];
		} else {
			$digitalLibraryLogs->scheme_type_id         = 2;
			$digitalLibraryLogs->department_id          = $dept;
			$digitalLibraryLogs->department_scheme_id	= $dept_scheme;
			$digitalLibraryLogs->user_id                = $this->Auth->user('id');
			// $actual_link                                    = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$digitalLibraryLogs->url                        = $decode;
			$digitalLibraryLogs->login_time                 = date('Y-m-d H:i:s');
			$digitalLibraryLogs->ip_addr                    = $_SERVER['REMOTE_ADDR'];
		}
	
		//echo "<pre>";  print_r($digitalLibraryLogs); exit();
		if($this->DigitalLibraryLogs->save($digitalLibraryLogs))
		{

	 	echo 1;


	}else{

		echo 0;
	}
exit();
}


	public function msmedivisions($id = null)
	{

		$this->viewBuilder()->setLayout('layout');

		$this->loadModel('MsmeDivisions');
		$digitallibrarypayment_id = $this->Auth->user('digi_library_flag');

		if ($digitallibrarypayment_id == 1) {
			$msmedivisions  = $this->MsmeDivisions->find('all')->where(['MsmeDivisions.is_active' => 1])->toArray();
		} else {
			return $this->redirect(['action' => 'digitallibrary']);
		}
		//	echo "<pre>";  print_r($schemes); exit();

		$this->set(compact('msmedivisions', 'id'));
	}


	public function msmedivisionschemes($id = null, $division_id = null)
	{

		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('MsmeSchemes');
		$this->loadModel('MsmeDivisions');
		$digitallibrarypayment_id = $this->Auth->user('digi_library_flag');

		if ($digitallibrarypayment_id == 1) {
			$msme_schemes  = $this->MsmeSchemes->find('all')->where(['MsmeSchemes.msme_division_id' => $division_id, 'MsmeSchemes.is_active' => 1])->toArray();
			$divisions     = $this->MsmeDivisions->find('list', ['keyField' => 'id',  'valueField' => 'name'])->toArray();
		} else {
			return $this->redirect(['action' => 'digitallibrary']);
		}
		$this->set(compact('msme_schemes', 'id', 'division_id', 'divisions'));
	}

	public function msmeschemedetailview($id = null, $division_id = null, $scheme_id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('MsmeSchemes');
		$this->loadModel('Departments');
		$digitallibrarypayment_id = $this->Auth->user('digi_library_flag');

		if ($digitallibrarypayment_id == 1) {
			$scheme  = $this->MsmeSchemes->find('all')->where(['MsmeSchemes.id' => $scheme_id])->first();
			//echo "<pre>";  print_r($schemes); exit();		
			$department = $this->Departments->find('list', ['keyField' => 'id',  'valueField' => 'file_upload'])->toArray();
		} else {
			return $this->redirect(['action' => 'digitallibrary']);
		}
		$this->set(compact('scheme', 'id', 'department', 'division_id'));
	}

	public function msmedivisionsubschemes($id = null, $division_id = null, $scheme_id = null)
	{

		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('MsmeSubschemes');
		$this->loadModel('MsmeDivisions');
		$this->loadModel('MsmeSchemes');

		$msme_subschemes  = $this->MsmeSubschemes->find('all')->where(['MsmeSubschemes.msme_division_id' => $division_id, 'MsmeSubschemes.msme_scheme_id' => $scheme_id, 'MsmeSubschemes.is_active' => 1])->toArray();
		$divisions     = $this->MsmeDivisions->find('list', ['keyField' => 'id',  'valueField' => 'name'])->toArray();
		$scheme        = $this->MsmeSchemes->find('list', ['keyField' => 'id',  'valueField' => 'name'])->toArray();

		$this->set(compact('msme_subschemes', 'id', 'division_id', 'divisions', 'scheme', 'scheme_id'));
	}

	public function msmesubschemedetailview($id = null, $division_id = null, $scheme_id = null, $subscheme_id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('MsmeSchemes');
		$this->loadModel('MsmeSubschemes');
		$this->loadModel('MsmeDivisions');
		$this->loadModel('Departments');
		$subscheme  = $this->MsmeSubschemes->find('all')->where(['MsmeSubschemes.id' => $subscheme_id])->first();
		//echo "<pre>";  print_r($schemes); exit();		
		$department = $this->Departments->find('list', ['keyField' => 'id',  'valueField' => 'file_upload'])->toArray();
		$divisions     = $this->MsmeDivisions->find('list', ['keyField' => 'id',  'valueField' => 'name'])->toArray();
		$scheme        = $this->MsmeSchemes->find('list', ['keyField' => 'id',  'valueField' => 'name'])->toArray();


		$this->set(compact('scheme', 'id', 'department', 'division_id', 'scheme_id', 'divisions', 'subscheme'));
	}

	public function schemedetailview($id = null, $scheme_id = null)
	{
		//echo "<pre>";  print_r($scheme_id); exit();

		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('DepartmentSchemes');
		$this->loadModel('Departments');
		$digitallibrarypayment_id = $this->Auth->user('digi_library_flag');
		if ($digitallibrarypayment_id == 1) {
			$schemes  = $this->DepartmentSchemes->find('all')->contain(['Departments'])->where(['DepartmentSchemes.id' => $scheme_id])->first();
			//echo "<pre>";  print_r($schemes); exit();		
			$department = $this->Departments->find('list', ['keyField' => 'id',  'valueField' => 'file_upload'])->toArray();
			//echo "<pre>";  print_r($department); exit();
			$this->set(compact('schemes', 'id', 'department'));
		} else {
			return $this->redirect(['action' => 'digitallibrary']);
		}
		$this->set(compact('id','scheme_id'));
	}

	public function stateschemes()
	{
		$this->viewBuilder()->setLayout('layout');
		$digitallibrarypayment_id = $this->Auth->user('digi_library_flag');
		//echo "<pre>";  print_r($user_id); exit();
		$this->loadModel('Departments');
		//$this->loadModel('Users');

		if ($digitallibrarypayment_id == 1) {
			$state_schemes_1   = $this->Departments->find('all')->where(['Departments.scheme_type_id' => 2])->limit(30)->order(['name' => 'ASC'])->toArray();
			//$first_id          = $this->Departments->find('list')->where(['Departments.scheme_type_id'=>2])->limit(9)->toArray();	
			$first_id          = $this->Departments->find('list')->where(['Departments.scheme_type_id' => 2])->limit(10)->order(['name' => 'ASC'])->toArray();
			$second_id         = $this->Departments->find('list')->where(['Departments.scheme_type_id' => 2, 'Departments.id NOT IN' => $first_id])->limit(9)->order(['name' => 'ASC'])->toArray();

			$combined = array_merge($first_id, $second_id);


			if ($first_id != '') {
				//$state_schemes_2  = $this->Departments->find('all')->where(['Departments.scheme_type_id' => 2, 'Departments.id NOT IN' => $first_id])->limit(9)->order(['name' => 'ASC'])->toArray();
			}

			if ($combined != '') {
				//$state_schemes_3  = $this->Departments->find('all')->where(['Departments.scheme_type_id' => 2, 'Departments.id NOT IN' => $combined])->limit(10)->order(['name' => 'ASC'])->toArray();
			}

			$this->set(compact('state_schemes_1', 'state_schemes_2', 'state_schemes_3'));
		} else {
			return $this->redirect(['action' => 'digitallibrary']);
		}
	}

	// public function projectprofile(){
	// 	$this->viewBuilder()->setLayout('layout');		
	// 	$this->loadModel('ProjectProfiles');
	// 	$project_profile_1   = $this->ProjectProfiles->find('all')->limit(5)->toArray();
	//     $first_id            = $this->ProjectProfiles->find('list')->limit(5)->toArray();	
	//     $second_id           = $this->ProjectProfiles->find('list')->where(['ProjectProfiles.id NOT IN'=>$first_id])->limit(5)->toArray();	

	// 	$combined = array_merge($first_id,$second_id);


	// 	if($first_id != ''){
	// 	   $project_profile_2  = $this->ProjectProfiles->find('all')->where(['ProjectProfiles.id NOT IN'=>$first_id ])->limit(5)->toArray();	
	// 	}

	// 	if($combined != ''){
	// 	   $project_profile_3  = $this->ProjectProfiles->find('all')->where(['ProjectProfiles.id NOT IN'=>$combined ])->limit(5)->toArray();	
	// 	}

	// 	 $this->set(compact('project_profile_1','project_profile_2','project_profile_3'));		
	// }

	public function projectprofile()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('ProjectProfiles');
		$project_profile_1   = $this->ProjectProfiles->find('all')->limit(5)->toArray();
		$first_id            = $this->ProjectProfiles->find('list')->limit(5)->toArray();
		$second_id           = $this->ProjectProfiles->find('list')->where(['ProjectProfiles.id NOT IN' => $first_id])->limit(5)->toArray();
		$project_profdd      = $this->ProjectProfiles->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();

		$combined = array_merge($first_id, $second_id);

		$digitallibrarypayment_id = $this->Auth->user('digi_library_flag');

		if ($digitallibrarypayment_id == 1) {

			if ($first_id != '') {
				$project_profile_2  = $this->ProjectProfiles->find('all')->where(['ProjectProfiles.id NOT IN' => $first_id])->limit(5)->toArray();
			}

			if ($combined != '') {
				$project_profile_3  = $this->ProjectProfiles->find('all')->where(['ProjectProfiles.id NOT IN' => $combined])->limit(5)->toArray();
			}
		} else {
			return $this->redirect(['action' => 'digitallibrary']);
		}

		$this->set(compact('project_profile_1', 'project_profile_2', 'project_profile_3', 'project_profdd'));
	}


	// public function projectprofilevalue($profile_id = null){
	// 	$this->viewBuilder()->setLayout('layout');
	//     $this->loadModel('ProjectProfiles');
	//     $this->loadModel('ProjectProfileValues');
	// 	$Profile_values   = $this->ProjectProfileValues->find('all')->toArray();
	// 	$Profile_name     = $this->ProjectProfiles->find('all')->where(['ProjectProfiles.id'=>$profile_id ])->first();

	// 	$this->set(compact('Profile_values','profile_id','Profile_name'));		
	// }

	public function projectprofilevalue($profile_id = null)
	{
		// echo '<pre>';
		// print_r($profile_id);
		// exit();

		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('ProjectProfiles');
		$this->loadModel('ProjectProfileValues');
		$digitallibrarypayment_id = $this->Auth->user('digi_library_flag');

		if ($digitallibrarypayment_id == 1) {
			$Profile_values   = $this->ProjectProfileValues->find('all')->toArray();
			$Profile_name     = $this->ProjectProfiles->find('all')->where(['ProjectProfiles.id' => $profile_id])->first();
			$project_profdd   = $this->ProjectProfileValues->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();
		} else {
			return $this->redirect(['action' => 'digitallibrary']);
		}
		$this->set(compact('Profile_values', 'profile_id', 'Profile_name', 'project_profdd'));
	}

	public function projectprofiledetails($profile_id = null, $value_id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('ProjectProfileDetails');
		$digitallibrarypayment_id = $this->Auth->user('digi_library_flag');

		if ($digitallibrarypayment_id == 1) {
			$Profile_details   = $this->ProjectProfileDetails->find('all')->contain(['ProjectProfiles', 'ProjectProfileValues'])->where(['ProjectProfileDetails.project_profile_id' => $profile_id, 'ProjectProfileDetails.project_profile_value_id' => $value_id])->toArray();
			//echo "<pre>";  print_r($Profile_details); exit();

		} else {
			return $this->redirect(['action' => 'digitallibrary']);
		}

		$this->set(compact('Profile_details', 'profile_id'));
	}

	public function governshcemes()
	{
		$this->viewBuilder()->setLayout('layout');
	}

	public function schemes()
	{
		$this->viewBuilder()->setLayout('layout');
	}

	public function pressreleases()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('PressReleases');
		$press_realeases   = $this->PressReleases->find('all', ['order' => ['PressReleases.release_date' => 'DESC']])->toArray();
		//print_r($press_realeases); exit();

		$this->set(compact('press_realeases', 'profile_id'));
	}

	// public function statuscheck(){
	// 	$this->viewBuilder()->setLayout('layout');
	// 	//$this->loadModel('Users');
	// 	$this->loadModel('Projects');	

	// 	  if ($this->request->is(['patch', 'post', 'put'])){ //echo "<pre>"; print_r($this->request->getData());  exit(); 
	//             $pro_no = $this->request->getData('project_no');		  
	// 			$projectcount  = $this->Projects->find('all')->where(['Projects.project_no'=>$this->request->getData('project_no')])->count();
	// 			$project       = $this->Projects->find('all')->where(['Projects.project_no'=>$this->request->getData('project_no')])->toArray();
	// 	  //print_r($project); exit();
	// 	  }
	// 	$this->set(compact('project','projectcount','pro_no'));		
	// }
	public function statuscheck()
	{

		// echo '<pre>';
		// print_r($val);
		// exit();
		$this->viewBuilder()->setLayout('layout');
		//$this->loadModel('Users');
		$this->loadModel('Projects');
		$this->loadModel('DigilibraryRegistrations');
		$this->loadModel('VirtualcfoRegistrations');
		$this->loadModel('Eprcertification');
		$this->loadModel('ComplianceServices');

		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit(); 
			$pro_no        = $this->request->getData('project_no');
			$applnstatus   = $this->request->getData('applnstatus');		
			
           if($pro_no == 1){
			$projectcount  = $this->Projects->find('all')->where(['Projects.project_no' => $applnstatus])->count();
			$project       = $this->Projects->find('all')->where(['Projects.project_no' => $applnstatus])->toArray();
           }else if($pro_no == 2){
			$virtualcount  = $this->VirtualcfoRegistrations->find('all')->where(['VirtualcfoRegistrations.application_no' => $applnstatus])->count();
			$virtual       = $this->VirtualcfoRegistrations->find('all')->where(['VirtualcfoRegistrations.application_no' => $applnstatus])->toArray();
            }else if($pro_no == 3){  
			$epr_count  = $this->Eprcertification->find('all')->where(['Eprcertification.application_no' => $applnstatus])->count();
			$eprcertification       = $this->Eprcertification->find('all')->where(['Eprcertification.application_no' => $applnstatus])->toArray();
           }else if($pro_no == 4){
			$compliance_count  = $this->ComplianceServices->find('all')->where(['ComplianceServices.application_no' => $applnstatus])->count();
			$complianceServices       = $this->ComplianceServices->find('all')->where(['ComplianceServices.application_no' => $applnstatus])->toArray();
           }
		}
		
		$status = array(1 => 'Project Report', 2 => 'Virtual CFO', 3 => 'EPR Certification', 4 => 'Compliance Services');
		$this->set(compact('project', 'projectcount', 'pro_no', 'status', 'applnstatus', 'virtualcount', 'virtual', 'epr_count', 'eprcertification', 'compliance_count', 'complianceServices'));
	}

	public function digitalpayment()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Users');
		$this->loadModel('Razorpaytransactions');
		$this->loadModel('DigilibraryRegistrations');
		$user    = $this->Users->find('all')->where(['Users.id' => $this->Auth->User('id')])->first();
		$digiregistrationcount = $this->DigilibraryRegistrations->find('all')->where(['DigilibraryRegistrations.user_id' => $this->Auth->User('id')])->count();
		$digiregistration      = $this->DigilibraryRegistrations->find('all')->where(['DigilibraryRegistrations.user_id' => $this->Auth->User('id')])->first();

		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();  		
			$amount = 1.00;
			if ($digiregistrationcount == 0) {
				$digiregistration = $this->DigilibraryRegistrations->newEmptyEntity();
			} else {
				$digiregistration  = $this->DigilibraryRegistrations->patchEntity($digiregistration, $this->request->getData());
			}

			$digiregistration->user_id                = $this->Auth->User('id');
			$digiregistration->reg_no                 = $this->Auth->User('id');
			$digiregistration->name                   = $user['name'];
			$digiregistration->mobile_no              = $user['mobile_no'];
			$digiregistration->email                  = $user['email'];
			$digiregistration->pay_amount             = $amount;
			$digiregistration->status                 = 0;
			$digiregistration->transaction_number     = '';
			$digiregistration->transaction_amount     = '';
			$digiregistration->transaction_date       = null;
			$digiregistration->created_by             = $this->Auth->User('id');
			$digiregistration->created_date           = date('Y-m-d H:i:s');
			//$this->Razorpaytransactions->save($transaction);
			//echo "<pre>"; print_r($digiregistration);  exit();  	
			if ($this->DigilibraryRegistrations->save($digiregistration)) {
				$insert_id1 = $digiregistration->id;
				$digiTable                 = $this->getTableLocator()->get('DigilibraryRegistrations');
				$digi                      = $digiTable->get($insert_id1);
				$digi->reg_no              = 'ITCOTD' . date('Y') . $insert_id1;
				$digiTable->save($digi);

				$this->loadModel('Billdesktransactions');
				date_default_timezone_set('Asia/Kolkata');

				$user_id = $this->Auth->User('id');
				$amount = "1.00";



				$order 	= $this->Billdesktransactions->find('all', ['order' => ['Billdesktransactions.order_ref' => 'DESC']])->first();
				if ($order['order_ref'] != '') {
					$reforder	= $order['order_ref'] + 1;
				} else {
					$reforder 	= 1;
				}
				$order_id = 'ITCTEST' . sprintf('%03d', $reforder);

				$key = 'Cjlj6qiBlQ7qdnglXvlJCKY1t3rNk7x4';
				$headers = ["alg" => "HS256", "clientid" => 'bduatv2tnd'];

				$payload = [
					"mercid" => 'BDUATV2TND',
					"orderid" => $order_id, // must be unique for every request
					"amount" => $amount,
					"order_date" => date("c", strtotime(date('Y-m-d H:i:s'))),
					"currency" => "356", // for INR
					"ru" => "https://itcot.demodev.in/pages/bdresponse",
					"additional_info" => [
						"additional_info1" => "" . $user_id . "",
						"additional_info2" => "Test2",
					],
					"itemcode" => "DIRECT",
					"device" => [
						"init_channel" => "internet",
						"ip" => $_SERVER['REMOTE_ADDR'],
						"accept_header" => "text/html",
						"user_agent" => "Windows 10"
					]
				];

				$curl_payload = JWT::encode($payload, $key, 'HS256', null, $headers);
				$ch = curl_init('https://pguat.billdesk.io/payments/ve1_2/orders/create');

				$ch_headers = array(
					"Content-Type: application/jose",
					"BD-Timestamp: " . date('YmdHis') . "",
					"accept: application/jose",
					"BD-Traceid: " . date('YmdHis') . "ITCOT"
				);

				curl_setopt($ch, CURLOPT_HTTPHEADER, $ch_headers);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_payload);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($ch);

				$decoded      = JWT::decode($result, new Key($key, 'HS256'));

				$response_Data = [
					"order_id"   => $decoded->orderid,
					"bdorderid"  => $decoded->bdorderid, // must be unique for every request
					"amount"     => $decoded->amount,
					"auth_token" => $decoded->links[1]->headers->authorization,
					"url"        => $decoded->links[1]->href
				];

				$transaction = $this->Billdesktransactions->newEmptyEntity();
				$transaction->project_id             = null;
				$transaction->digilibrary_registration_id             = $insert_id1;
				$transaction->user_id                = $this->Auth->user('id');
				$transaction->orderid                = $response_Data['order_id'];
				$transaction->bdorderid              = $response_Data['bdorderid'];
				$transaction->order_ref              = $reforder;
				$transaction->amount                 = $response_Data['amount'];
				$transaction->auth_token             = $response_Data['auth_token'];
				$transaction->url                    = $response_Data['url'];
				$transaction->created_by             = $this->Auth->user('id');
				$transaction->created_date           = date('Y-m-d H:i:s');
				// echo "<pre>"; print_r($paymentorder);  exit();		
				if ($this->Billdesktransactions->save($transaction)) {
					$insert_id  = $transaction->id;
					return $this->redirect(['action' => 'bdpaymentresponse', $insert_id]);
				}
				//echo "<pre>"; print_r('Successfully inserted');  exit();	
				curl_close($ch);
			}
		}

		$this->set(compact('user', 'profile_id'));
	}


	/*  public function createorderapi($id=null){
	 // $this->loadModel('PaymentOrders');
	  $this->loadModel('Billdesktransactions');
	  date_default_timezone_set('Asia/Kolkata');
	  $amount = "1.00";
	  
	    $session = $this->getRequest()->getSession(); //get session
        $session->write('user_id', $this->Auth->user('id'));
	  
		$order 	= $this->Billdesktransactions->find('all',['order' => ['Billdesktransactions.order_ref' => 'DESC'] ])->first();
		if($order['order_ref'] != ''){
			$reforder	= $order['order_ref']+1;
		}else{
			$reforder 	= 1;
		}
		$order_id = 'ITCTEST'.sprintf('%03d',$reforder);			

	   $key = 'Cjlj6qiBlQ7qdnglXvlJCKY1t3rNk7x4';		
	   $headers = ["alg" => "HS256", "clientid" => 'bduatv2tnd'];

        $payload = [
          "mercid" => 'BDUATV2TND',
          "orderid" => $order_id, // must be unique for every request
          "amount" => $amount,
          "order_date" => date("c", strtotime(date('Y-m-d H:i:s'))),
          "currency" => "356", // for INR
          "ru" => "https://itcot.demodev.in/projects/bdresponse",
          "additional_info" => [
            "additional_info1" => "Test",
            "additional_info2" => "Test2",
          ],
          "itemcode" => "DIRECT",
          "device" => [
            "init_channel" => "internet",
            "ip" => $_SERVER['REMOTE_ADDR'],
            "accept_header" => "text/html", 
            "user_agent"=> "Windows 10"
          ]
        ]; 		

	    $curl_payload = JWT::encode($payload, $key, 'HS256', null, $headers);
        $ch = curl_init('https://pguat.billdesk.io/payments/ve1_2/orders/create');

          $ch_headers = array(
              "Content-Type: application/jose",
              "BD-Timestamp: ".date('YmdHis')."",
              "accept: application/jose",
              "BD-Traceid: ".date('YmdHis')."ITCOT"
           );  
		   
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $ch_headers);
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $curl_payload);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $result = curl_exec($ch);
		
	$decoded      = JWT::decode($result, new Key($key, 'HS256'));
		
     $response_Data = [
          "order_id"   => $decoded->orderid,
          "bdorderid"  => $decoded->bdorderid, // must be unique for every request
          "amount"     => $decoded->amount,
          "auth_token" => $decoded->links[1]->headers->authorization,
          "url"        => $decoded->links[1]->href
        ];	
			   
			   $transaction = $this->Billdesktransactions->newEmptyEntity();
		       $transaction->project_id             = $id;
		       $transaction->user_id                = $this->Auth->user('id');
		       $transaction->orderid                = $response_Data['order_id'];
			   $transaction->bdorderid              = $response_Data['bdorderid'];
			   $transaction->order_ref              = $reforder;
			   $transaction->amount                 = $response_Data['amount'];
			   $transaction->auth_token             = $response_Data['auth_token'];
			   $transaction->url                    = $response_Data['url'];
			   $transaction->created_by             = $this->Auth->user('id');
			   $transaction->created_date           = date('Y-m-d H:i:s');
			  // echo "<pre>"; print_r($paymentorder);  exit();		
		       if($this->Billdesktransactions->save($transaction)){
                    $insert_id  = $transaction->id;
               	    return $this->redirect(['action' => 'bdpaymentresponse',$insert_id]);			   

			   }				   
        //echo "<pre>"; print_r('Successfully inserted');  exit();	
        curl_close($ch);
	}*/

	public function bdpaymentresponse($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		//$this->loadModel('PaymentOrders');
		$this->loadModel('Billdesktransactions');
		$session = $this->getRequest()->getSession(); //get session
		$session->write('user_id', $this->Auth->user('id'));
		// echo "<pre>"; print_r($user_id); exit();		 
		$order 	= $this->Billdesktransactions->find('all')->where(['Billdesktransactions.id' => $id])->first();
		//echo "<pre>"; print_r($order); exit();	
		$this->set(compact('order', 'id'));
	}

	public function bdresponse()
	{
		date_default_timezone_set('Asia/Kolkata');
		$this->loadModel('Projects');
		$this->loadModel('DigilibraryRegistrations');
		$this->loadModel('Billdeskpaymentlogs');
		$this->loadModel('Billdesktransactions');
		$this->loadModel('Billdeskpayments');

		// print_r('hi'); exit();	      
		// if ($this->request->is(['patch', 'post', 'put'])) { echo "<pre>"; print_r($_POST); exit();	 
		//echo "<pre>"; print_r($_POST['transaction_response']); exit();
		//session_start();
		// $user_id = $this->request->getSession()->read('User.id');
		$session = $this->request->getSession(); //read session data
		$user_id = $session->read('user_id');

		//echo "<pre>"; print_r($session->read('user_id')); exit();
		if ($_POST) {
			$key = 'Cjlj6qiBlQ7qdnglXvlJCKY1t3rNk7x4';
			$data      = JWT::decode($_POST['transaction_response'], new Key($key, 'HS256'));
			//echo "<pre>"; print_r($data->additional_info->additional_info1); exit(); 

			$user_id = intval($data->additional_info->additional_info1);

			$billdeskpaymentlog = $this->Billdeskpaymentlogs->newEmptyEntity();
			$billdeskpaymentlog->transaction_status          = $data->transaction_error_type;
			$billdeskpaymentlog->transaction_date            = date('Y-m-d H:i:s', strtotime($data->transaction_date));
			$billdeskpaymentlog->transaction_amount          = $data->amount;
			$billdeskpaymentlog->payment_method              = $data->payment_method_type;
			$billdeskpaymentlog->orderId                     = $data->orderid;
			$billdeskpaymentlog->transactionId               = $data->transactionid;
			$billdeskpaymentlog->txn_process_type            = $data->txn_process_type;
			$billdeskpaymentlog->bankid                      = $data->bankid;
			$billdeskpaymentlog->itemcode                    = $data->itemcode;
			$billdeskpaymentlog->transaction_error_code      = $data->transaction_error_code;
			$billdeskpaymentlog->currency                    = $data->currency;
			$billdeskpaymentlog->auth_status                 = $data->auth_status;
			$billdeskpaymentlog->transaction_description     = $data->transaction_error_desc;
			$billdeskpaymentlog->charge_amount               = $data->charge_amount;
			$billdeskpaymentlog->created_by                  = $user_id;
			$billdeskpaymentlog->created_date                = date('Y-m-d H:i:s');
			// echo "<pre>"; print_r($paymentorder);  exit();		
			$this->Billdeskpaymentlogs->save($billdeskpaymentlog);
			$transactions 	= $this->Billdesktransactions->find('all')->where(['Billdesktransactions.orderid' => $data->orderid])->first();

			if ($data->auth_status == '0300') {

				$paymentTable                = $this->getTableLocator()->get('Billdesktransactions');
				$payment                     = $paymentTable->get($transactions['id']);
				$payment->pay_status         = 1;
				$payment->transactionstatus  = $data->transaction_error_type;
				$payment->transaction_amount = $data->amount;
				$payment->transaction_date   = date('Y-m-d H:i:s', strtotime($data->transaction_date));
				$paymentTable->save($payment);

				$userTable                 = $this->getTableLocator()->get('Users');
				$user                      = $userTable->get($user_id);
				$user->digi_library_flag   = 1;
				$userTable->save($user);

				$digiTable                 = $this->getTableLocator()->get('DigilibraryRegistrations');
				$digi                      = $digiTable->get($transactions['digilibrary_registration_id']);
				$digi->transaction_amount  = $data->amount;
				$digi->transaction_number  = $data->transactionid;
				$digi->transaction_date    = date('Y-m-d H:i:s');
				$digi->payment_status      = 1;
				$digiTable->save($digi);


				$receipts 	= $this->Billdeskpayments->find('all', ['order' => ['Billdeskpayments.receipt_ref_no' => 'DESC']])->first();

				if ($receipts['receipt_ref_no'] == '') {
					$receiptref = 1;
				} else {
					$receiptref	= $receipts['receipt_ref_no'] + 1;
				}
				$payment    = $this->Billdeskpayments->newEmptyEntity();
				$payment->billdesktransaction_id 	               = $transactions['id'];
				$payment->orderId 	                               = $data->orderid;
				$payment->transaction_status 	                   = $data->transaction_error_type;
				$payment->transaction_date 	                       = date('Y-m-d H:i:s', strtotime($data->transaction_date));
				$payment->transaction_amount 	                   = $data->amount;
				$payment->payment_method 	                       = $data->payment_method_type;
				$payment->transactionId 	                       = $data->transactionid;
				$payment->currency 	                               = $data->currency;
				$payment->transaction_description 	               = $data->transaction_error_desc;
				$payment->receipt_no 	                           = 'ITC/' . date('y') . '/' . $receiptref;
				$payment->receipt_ref_no 	                       = $receiptref;
				$payment->created_by 	                           = $user_id;
				$payment->created_date 	                       = date('Y-m-d H:i:s');
				$this->Billdeskpayments->save($payment);
			} else {

				$paymentTable                = $this->getTableLocator()->get('Billdesktransactions');
				$payment                     = $paymentTable->get($transactions['id']);
				$payment->pay_status         = 2;
				$payment->transactionstatus  = $data->transaction_error_type;
				$paymentTable->save($payment);

				if ($transactions['digilibrary_registration_id'] != 0) {
					$digiTable                 = $this->getTableLocator()->get('DigilibraryRegistrations');
					$digi                      = $digiTable->get($transactions['digilibrary_registration_id']);
					$digi->transaction_amount  = $data->amount;
					$digi->transaction_number  = $data->transactionid;
					$digi->transaction_date    = date('Y-m-d H:i:s', strtotime($data->transaction_date));
					$digi->payment_status      = 2;
					$digiTable->save($digi);
				}
			}
			// echo "hi"; 
			//$this->redirect(array('controller' => 'Projects', 'action' => 'paymentresponseview',$transactions['id']));
			echo '<script>window.location.href = "https://itcot.demodev.in/pages/digipaymentresponseview/' . $transactions['id'] . '";</script>';
		}
		exit();
	}

	public function receiptdownload()
	{
		$this->loadModel('DigilibraryRegistrations');
		$this->viewBuilder()->setLayout('layout');
		//$user  = $this->Users->find('all')->where(['Users.id'=>$this->Auth->User('id')])->first();
		
		$digiregistrationcount = $this->DigilibraryRegistrations->find('all')->where(['DigilibraryRegistrations.user_id'=>$this->Auth->User('id')])->count();	
        if($digiregistrationcount > 0){
		$digiregistration      = $this->DigilibraryRegistrations->find('all')->where(['DigilibraryRegistrations.user_id'=>$this->Auth->User('id')])->toArray();
		}

			
		$words = strtoupper($this->no_to_words($digiregistration[0]['pay_amount']) . 'only');	

		// echo '<pre>';
		// print_r($digiregistration);
		// exit();

		$date= $digiregistration[0]['transaction_date'];

		$str=strval($date);


		$trans_date= date('d-F-Y',strtotime($str));
		

		$fut_date=date('Y-m-d', strtotime('+1 year', strtotime($trans_date)));

		// echo '<pre>';
		// print_r($fut_date);
		// exit();
		$future_date=date('d-F-Y', strtotime($fut_date));

		// 			$url='http://15.207.40.134/webroot/ITCOT_test/images/itcot_logo.png';

		foreach ($digiregistration as $key => $value) {	

			$mpdfConfig = array(
				'mode' => 'utf-8',
				'format' => 'A4',
				'margin_header' => 10,     // 30mm not pixel
				'margin_footer' => '',     // 10mm
				'margin_top' => 2,
				'margin_bottom' => 0,
				'orientation' => 'P'
			);
			// $mpdf = new Mpdf($mpdfConfig);
			$mpdf = new Mpdf(
				['tempDir' => '/tmp']
			);
		}

		$this->set(compact('payment_details'));


		$html = "<html lang='en'>
		  <head>
			<meta charset='UTF-8' />
			<style>
			  .heading h3 {
				text-align: center;
				font-family: 'Roboto Slab', serif;
				font-style: normal;
				font-weight: 700;
				font-size: 25px;
				line-height: 18px;
				color: rgb(184, 138, 23);
			  }
			  .heading p {
				text-align: center;
				margin-top: -15px;
				font-family: 'Lato', sans-serif;
				font-style: normal;
				font-weight: 300;
				font-size: 15px;
				line-height: 18px;
			  }
			  table td {
				padding: 5px;
			  }

			  table,
			  td,
			  th {
				border: 1px solid;
				border-color: rgb(199, 148, 19);
			  }

			  table {
				margin-left: auto;
				margin-right: auto;
				text-align: left;
				width: 100%;
				border-collapse: collapse;
				font-family: 'Nunito', sans-serif;
				font-style: normal;
				font-weight: 500px;
				font-size: 15px;
			  }
			  .sl-no {
				text-align: center;
			  }
			  .sub-head {
				font-family: 'Nunito', sans-serif;
				font-weight: 500px;
			  }
			  .inp-field {
				text-align: center;
				width: 30%;
			  }
			  .foot-date {
				 float:left;
				 width:300px;
			  }
			</style>
		  </head>
		  <body>
			<section style='width: 700px; margin-left: auto; margin-right: auto'>
		

			  <table border='1' style='width:100%; height:100%;'>
			  <tr>
			  
			<td style='text-align:center;' colspan='3'>
				<img src='http://15.207.40.134/webroot/ITCOT_test/images/itcot_logo.png') class='light-logo' alt='homepage' style='width:150px'>
			  <br><br>
			  	<h3>Registration-Digital Library</h3>
				</td>		 
		<br><br><br>
			  </tr>
		<tr>
			<td style='text-align:center;'>Transaction No:$value->transaction_number</td>
			<td style='text-align:center;' colspan='2'> Transaction date-$trans_date</td>			
		</tr>
		<tr>
		<td style='text-align:center;'>Payer Details</td>
		<td style='text-align:center;' colspan='2'>Registration details</td>
	</tr>
		<tr>
		<td>Name:$value->name <br><br>Mobile No:$value->mobile_no </td>
		<td colspan='2'>Received a sum of Rs:<b>$value->pay_amount</b><br><br>Rupees:&nbsp;$words
		</span><br><br>Payment mode:Online</td>
		</tr>
		</table>
	 <table border='1'>
		<tr>
		<th>S.no</th>
		<th>Description</th>
		<th>Amount</th>
		</tr>


		<tr>
			<td  style='text-align:center;'>1</td>
			<td  style='text-align:center;'>Registration for Digital Library</td>
			<td  style='text-align:center;'>$value->pay_amount</td>


		</tr>

		<tr>
		<td colspan='3' style='text-align:center;'>Your Plan Expires on <b>$future_date(1-Year Validity).</td>
		</tr>
			  </table>

			  <table>
		<tr>
		<td style='text-align:center;'>*This is system generated receipt, hence signature is not required.</td>
		</tr>


			 
			</table>
			
			</section>
		  </body>
		</html>";
		//echo $html;exit;
		$mpdf->AddPage('P', '', '', '', '', 19, 20, 20, 22, 0, 0);
		$mpdf->WriteHTML($html);
		$filename = 'DigitalLibrary.pdf';
		//$fileroot = $filename;
		$mpdf->Output($filename, 'D');
		$this->set(compact('filename'));

		// $mpdf->Output();

		exit();
	}

	function no_to_words($no)
	{
		$words = array('0' => '', '1' => 'one', '2' => 'two', '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six', '7' => 'seven', '8' => 'eight', '9' => 'nine', '10' => 'ten', '11' => 'eleven', '12' => 'twelve', '13' => 'thirteen', '14' => 'fouteen', '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen', '18' => 'eighteen', '19' => 'nineteen', '20' => 'twenty', '30' => 'thirty', '40' => 'fourty', '50' => 'fifty', '60' => 'sixty', '70' => 'seventy', '80' => 'eighty', '90' => 'ninty', '100' => 'hundred', '1000' => 'thousand', '100000' => 'lakh', '10000000' => 'crore');
		if ($no == 0)
			return ' ';
		else {
			$novalue = '';
			$highno = $no;
			$remainno = 0;
			$value = 100;
			$value1 = 1000;
			while ($no >= 100) {
				if (($value <= $no) && ($no < $value1)) {
					$novalue = $words["$value"];
					$highno = (int)($no / $value);
					$remainno = $no % $value;
					break;
				}
				$value = $value1;
				$value1 = $value * 100;
			}
			if (array_key_exists("$highno", $words))
				return $words["$highno"] . " " . $novalue . " " . $this->no_to_words($remainno);
			else {
				$unit = $highno % 10;
				$ten = (int)($highno / 10) * 10;
				return $words["$ten"] . " " . $words["$unit"] . " " . $novalue . " " . $this->no_to_words($remainno);
			}
		}
	}

	public function digipaymentresponseview($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Users');
		$this->loadModel('Billdesktransactions');
		$this->loadModel('DigilibraryRegistrations');
		$user           = $this->Users->find('all')->where(['Users.id' => $this->Auth->User('id')])->first();
		// $project 	   = $this->Projects->find('all')->where(['Projects.created_by'=>$this->Auth->User('id')])->toArray();
		$project 	   = $this->DigilibraryRegistrations->find('all')->where(['DigilibraryRegistrations.user_id' => $this->Auth->User('id')])->toArray();


		//$transactions   = $this->Razorpaytransactions->find('all')->where(['Razorpaytransactions.id'=>$id])->first();	
		$transactions 	= $this->Billdesktransactions->find('all')->where(['Billdesktransactions.id' => $id])->first();

		$this->set(compact('transactions', 'project', 'user'));
	}

	/*public function digipaymentresponseview($id = null){
		 $this->viewBuilder()->setLayout('layout');
		 $this->loadModel('Users');
		   $this->loadModel('Razorpaytransactions');
		   $this->loadModel('DigilibraryRegistrations');
           $user           = $this->Users->find('all')->where(['Users.id'=>$this->Auth->User('id')])->first();			 
		   $project 	   = $this->DigilibraryRegistrations->find('all')->where(['DigilibraryRegistrations.user_id'=>$this->Auth->User('id')])->toArray();	          
		   $transactions   = $this->Razorpaytransactions->find('all')->where(['Razorpaytransactions.id'=>$id])->first();		
		
		  $this->set(compact('transactions','project','user'));			

	}*/

	/*public function digipaymentrequest(){
		 $this->viewBuilder()->setLayout('layout');
		 $this->loadModel('Users');		  
		 $this->loadModel('DigilibraryRegistrations');		  
		 $this->loadModel('Razorpaytransactions');		  
		 $user  = $this->Users->find('all')->where(['Users.id'=>$this->Auth->User('id')])->first();			 
		 
           $digiregistration = $this->DigilibraryRegistrations->find('all')->where(['DigilibraryRegistrations.user_id'=>$this->Auth->User('id')])->first();	
		   $transaction      = $this->Razorpaytransactions->find('all')->where(['Razorpaytransactions.status !='=>1,'Razorpaytransactions.digilibrary_registration_id'=>$digiregistration['id']])->first();		
		   //echo "<pre>"; print_r($transaction['payment_amount']*100);  exit();
  		   $transactionID = $transaction['id'];   
		   $pagetitle     = 'ITCOT';
			//TEST
			$keyId 				= 'rzp_test_ojO7qpKsc78uJs';
			$keySecret 			= 'X60nQ7UoMPls7bUI1x8Vt0O7';
			//Live
			// $keyId 				= 'rzp_live_5PgvhwCiaCQ1pZ';
			// $keySecret 			= 'V3RMSJh9IZV3jefipqpD9ecj';
			$merchant 			= 'BVwveDfSM6ynHP';
			$displayCurrency 	= 'INR';
			$api = new Api($keyId, $keySecret);
			$orderData = [
				'receipt'         => $transaction['orderno'],
				//'amount'          => (round($transaction['payment_amount'],2)*100), // rupees in paise
				'amount'          => ($transaction['payment_amount']*100), // rupees in paise
				'currency'        => $displayCurrency,
				'payment_capture' => 1 // auto capture
			];
			$razorpayOrder 		= $api->order->create($orderData);
			$razorpayOrderId 	= $razorpayOrder['id'];
			$displayAmount 		= $tamount = $orderData['amount'];
			$checkout 			= 'automatic';
			//$this->Transaction->updateAll(array("transaction_number"=>'"'.$razorpayOrderId.'"'), array('id' =>$transactionID));
			$paymentTable                 = $this->getTableLocator()->get('Razorpaytransactions');
			$payment                      = $paymentTable->get($transactionID); 
			$payment->transaction_number  = $razorpayOrderId;
			$paymentTable->save($payment);
			
			
			$data = [
				"key"               	=> $keyId,
				"amount"            	=> $tamount,
				"name"              	=> "ITCOT",
				"description"       	=> $pagetitle,
				"currency"        		=> $displayCurrency,
				"image"             	=> "http://15.207.40.134/webroot/ITCOT/assets/image/logo1.png",
				"prefill"           	=> [
					"name"          	=> $user['name'],
					"email"         	=> $user['email'],
					"contact"       	=> $user['mobile_no'],
				],
				"notes"             	=> [
					"address"           => '',
					"merchant_order_id" => $merchant,
				],
				"theme"             	=> [
					"color"             => "#0000FF"
				],
				"order_id"          	=> $razorpayOrderId,
				"reference_no"			=> $orderData['receipt'],
			];		
			
			
			//echo "<pre>"; print_r($data); exit();
		 
		 
	     $this->set(compact('user','transactionID','digiregistration','data'));			
	}
	
	public function digipaymentresponse(){
		//$coursename = 'New Year 2021';
		//$coursedate = 'January 1 Morning 10AM(IST)';
	    if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();  
			//App::uses('TimeConversion', 'Vendor');
			//$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
			$this->loadModel('Razorpaypayments');
			$this->loadModel('Razorpaymentlogs');
			$this->loadModel('Razorpaytransactions');
			$this->loadModel('DigilibraryRegistrations');
			//TEST
			$keyId 				= 'rzp_test_ojO7qpKsc78uJs';
			$keySecret 			= 'X60nQ7UoMPls7bUI1x8Vt0O7';
			//Live
			// $keyId 				= 'rzp_live_5PgvhwCiaCQ1pZ';
			// $keySecret 			= 'V3RMSJh9IZV3jefipqpD9ecj';
			$merchant 			= 'BVwveDfSM6ynHP';
			$api 				= new Api($keyId, $keySecret);
			
			//echo "<pre>"; print_r($api); exit();
			$payment_id 		= $_POST['razorpay_payment_id'];
			$payments 			= $api->payment->fetch($payment_id);
			//echo '<pre>';print_r($payments);exit;
			$transactionamount	= $payments['amount']/100;
		 	$paymentlogs = $this->Razorpaymentlogs->newEmptyEntity();
			$paymentlogs->transaction_id 	                   = $this->request->getData('transaction_id'); 
			$paymentlogs->orderno 	                           = $payments['notes']['shopping_order_id'];
			$paymentlogs->paymentno 	                       = $payments['id'];  
			$paymentlogs->entity 	                           = $payments['entity']; 
			$paymentlogs->amount 	                       	   = $payments['amount']/100;
			$paymentlogs->status 	                           = $payments['status'];
			$paymentlogs->currency 	                           = $payments['currency'];
			$paymentlogs->order_id 	                           = $payments['order_id'];
			$paymentlogs->invoice_id 	                       = $payments['invoice_id'];
			$paymentlogs->international 	                   = $payments['international'];
			$paymentlogs->method 	                           = $payments['method'];
			$paymentlogs->amount_refunded 	                   = $payments['amount_refunded'];
			$paymentlogs->refund_status 	                   = $payments['refund_status'];
			$paymentlogs->captured 	                           = $payments['captured'];
			$paymentlogs->description 	                       = $payments['description'];
			$paymentlogs->card_id 	                           = json_encode($payments['card_id']);
			$paymentlogs->bank 	                        	   = $payments['bank'];
			$paymentlogs->wallet 	                           = $payments['wallet'];
			$paymentlogs->vpa 	                        	   = $payments['vpa'];
			$paymentlogs->email 	                           = $payments['email'];
			$paymentlogs->contact 	                           = $payments['contact'];
			$paymentlogs->fee 	                        	   = $payments['fee'];
			$paymentlogs->tax 	                        	   = $payments['tax'];
			$paymentlogs->error_code 	                       = $payments['error_code']; 
			$paymentlogs->error_description 	               = $payments['error_description'];
			$paymentlogs->created_at 	                       = $payments['created_at'];
		    $this->Razorpaymentlogs->save($paymentlogs);	
			
		    $transactions 	= $this->Razorpaytransactions->find('all')->where(['Razorpaytransactions.id'=>$this->request->getData('transaction_id')])->first();

			//$transactions = $this->Transaction->find('first',array('conditions'=>array('Transaction.id'=>$this->request->data['Pages']['transaction_id'])));
			if("" == $payments['error_code']){
				if($transactions['status'] == 0 || $transactions['status'] == 2){
					//$transaction = array("status" =>1,"transactionstatus"=>"'Success'",'paymentno'=>"'".$payments['id']."'",'transaction_amount'=>"'".$this->request->data['Razorpaymentlog']['amount']."'",'transaction_date'=>"'".$timedate."'");
					//$this->Transaction->updateAll($transaction, array('id' => $transactions['Transaction']['id']));
					$paymentTable                = $this->getTableLocator()->get('Razorpaytransactions');
					$payment                     = $paymentTable->get($transactions['id']); 
					$payment->status             = 1;
					$payment->transactionstatus  = 'Success';
					$payment->paymentno          = 1;
					$payment->transaction_amount = $payments['amount']/100;
					$payment->transaction_date   = date("Y-m-d H:i:s");
					$paymentTable->save($payment);
					
					//$digireg 	= $this->DigilibraryRegistrations->find('all')->order(['DigilibraryRegistrations.id DESC'])->first();				
				
					$digiTable                 = $this->getTableLocator()->get('DigilibraryRegistrations');
					$digi                      = $digiTable->get($transactions['digilibrary_registration_id']); 
					$digi->transaction_amount  = $payments['amount']/100;
					$digi->transaction_number  = $payments['order_id'];
					$digi->transaction_date    = date('Y-m-d H:i:s');
					$digi->payment_status      = 1;
					$digiTable->save($digi);

                    $userTable                 = $this->getTableLocator()->get('Users');
					$user                      = $userTable->get($this->Auth->User('id')); 
					$user->digi_library_flag   = 1;
					$userTable->save($user);					
					
					//$receipts 	= $this->Razorpaypayments->find('all')->order(['Razorpaypayments.id DESC'])->first();	
                    $receipts 	= $this->Razorpaypayments->find('all',[ 'order' => ['Razorpaypayments.receipt_ref_no' => 'DESC'] ])->first();
					
					if($receipts['receipt_ref_no'] == ''){
						$receiptref = 1;
					}else{
						$receiptref	= $receipts['receipt_ref_no']+1;
					}
					$Razorpay    = $this->Razorpaypayments->newEmptyEntity();
					$Razorpay->razorpaytransaction_id 	               = $transactions['id']; 
					$Razorpay->paymentno 	                           = $payments['id'];  
					$Razorpay->user_id 	                               = $this->Auth->User('id');
					$Razorpay->pay_amount 	                       	   = $payments['amount']/100;
					$Razorpay->status 	                               = $payments['status'];
					$Razorpay->payment_date 	                       = $transactions['payment_date'];
					$Razorpay->payment_mode 	                       = $payments['method'];
					$Razorpay->transaction_number 	                   = $payments['order_id'];
					$Razorpay->transaction_amount 	                   = $payments['amount']/100;
					$Razorpay->transaction_date 	                   = date('Y-m-d H:i:s');
					$Razorpay->receipt_no 	                           = 'ITC/'.date('y').'/'.$receiptref; 
					$Razorpay->receipt_ref_no 	                       = $receiptref; 
					$Razorpay->created_by 	                           = $this->Auth->User('id');
					$Razorpay->created_date 	                       = date('Y-m-d H:i:s');
					$this->Razorpaypayments->save($Razorpay);	
				}
			}else{
				//$transaction = array("status" =>2,"transactionstatus"=>"'Failed'");
				//$this->Transaction->updateAll($transaction, array('id' => $transactions['id']));
					$paymentTable                = $this->getTableLocator()->get('Razorpaytransactions');
					$payment                     = $paymentTable->get($transactions['id']); 
					$payment->status             = 2;
					$payment->transactionstatus  = 'Failed';
					$paymentTable->save($payment);				
				if($transactions['digilibrary_registration_id'] != 0){			
						$digiTable                 = $this->getTableLocator()->get('DigilibraryRegistrations');
						$digi                      = $digiTable->get($transactions['digilibrary_registration_id']); 
						$digi->transaction_amount  = $payments['amount']/100;
						$digi->transaction_number  = $payments['order_id'];
						$digi->transaction_date    = date('Y-m-d H:i:s');
						$digi->payment_status      = $payments['status'];
						$digiTable->save($digi);
				
				}else{
					//$this->Muzhumalarchi->updateAll(array("paid" =>2,"status"=>3), array('Muzhumalarchi.id' => $transactions['Transaction']['muzhumalarchi_id']));
				}
			}
			if($transactions['digilibrary_registration_id'] != 0){
				$this->redirect(array('controller' => 'Pages', 'action' => 'digipaymentresponseview',$transactions['id']));
			}
		}				
	}*/
}
