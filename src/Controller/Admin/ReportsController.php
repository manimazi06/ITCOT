<?php
declare(strict_types=1); 
namespace App\Controller\Admin;



use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\Datasource\ConnectionManager;

class ReportsController extends AppController
{
    
	// public function projectreport(){
	// 	//echo "hi"; exit();
	// 	$this->viewBuilder()->setLayout('layout');
	// 	$this->loadModel('Projects');
	// 	if ($this->request->is(['patch', 'post', 'put'])) {


	// 		$month_date  =  date('m',strtotime($this->request->getData('month_date')));
	// 		$month       =  date('d-m-Y',strtotime($this->request->getData('month_date')));


			
	// 		//echo"<pre>";print_r($month_date);exit();
	// 	$connection = ConnectionManager::get('default');

	// 	  $query                   = "SELECT 
		                
	// 								 count(project.id) as pid,
	// 	                              sum(CASE WHEN project.payment_status = 1 THEN 1 else 0 end) as payment_paid,
	// 	                              sum(CASE WHEN project.payment_status = 0 THEN 1 else 0 end) as payment_notpaid,
	// 								  --sum(CASE WHEN project.project_status IS NULL THEN 1 else 0 end) as pending
									 
		                          
	// 	                             FROM projects as project 
	// 	                             WHERE month(project.transaction_date)=$month_date
	// 							     ORDER BY project.id";

	// 					//echo"<pre>";print_r($query);exit();
	// 	  $projects              = $connection->execute($query)->fetchAll('assoc');

	// 	}
	// 	 //echo"<pre>";print_r($query);exit();
	// 	$this->set(compact('projects','month_date','month'));   
	// }

	public function servicereport()
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Projects');
		$this->loadModel('DigilibraryRegistrations');
		$this->loadModel('ComplianceServices');
		$this->loadModel('VirtualcfoRegistrations');
		$this->loadModel('Eprcertification');

		if ($this->request->is(['patch', 'post', 'put'])) {

		$connection      = ConnectionManager::get('default');
		$service_id  =  $this->request->getData('service_id');

		$month_date  =  date('m',strtotime($this->request->getData('month_date')));
		$month       =  date('d-m-Y',strtotime($this->request->getData('month_date')));

		// echo '<pre>';
		// print_r($service_id);
		// exit();

		if($service_id==1){

			$query                   = "SELECT 
		                
			count(project.id) as pid,
			 sum(CASE WHEN project.payment_status = 1 THEN 1 else 0 end) as payment_paid,
			 sum(CASE WHEN project.payment_status = 0 THEN 1 else 0 end) as payment_notpaid,
			 --sum(CASE WHEN project.project_status IS NULL THEN 1 else 0 end) as pending
			
		 
			FROM projects as project 
			WHERE month(project.transaction_date)=$month_date
			ORDER BY project.id";

			//echo"<pre>";print_r($query);exit();
          $projects              = $connection->execute($query)->fetchAll('assoc');
			//echo"<pre>";print_r($projects);exit();


		}elseif($service_id==2){

			$query                   = "SELECT 
			count(digital.id) as pid,
			sum(CASE WHEN digital.payment_status = 0 THEN 1 else 0 end) as payment_notpaid,
			sum(CASE WHEN digital.payment_status = 1 THEN 1 else 0 end) as payment_paid
	   
	
	   FROM digilibrary_registrations as digital 
	   WHERE month(digital.transaction_date)=$month_date
	   ORDER BY digital.id";
         $digilibrary_registrations    = $connection->execute($query)->fetchAll('assoc');

		}elseif($service_id==3){

			$query                   = "SELECT 
			count(virtualcfo_registrations.id) as pid,
			sum(CASE WHEN virtualcfo_registrations.appln_status = 1 THEN 1 else 0 end) as approved,
			--sum(CASE WHEN virtualcfo_registrations.appln_status = 2 THEN 1 else 0 end) as rejected,
			sum(CASE WHEN virtualcfo_registrations.appln_status=0 THEN 1 else 0 end) as pending
		
		   FROM virtualcfo_registrations as virtualcfo_registrations 
		   WHERE month(virtualcfo_registrations.created_date)=$month_date
		   ORDER BY virtualcfo_registrations.id";
		   
		  // echo"<pre>";print_r($query);exit();

        $virtualcfo_registrations              = $connection->execute($query)->fetchAll('assoc');

		}elseif($service_id==4){

			$query                   = "SELECT 
			count(eprcertification.id) as pid,
			sum(CASE WHEN eprcertification.appln_status = 1 THEN 1 else 0 end) as approved,
			--sum(CASE WHEN eprcertification.appln_status = 2 THEN 1 else 0 end) as rejected,
			sum(CASE WHEN eprcertification.appln_status=0 THEN 1 else 0 end)	as pending
		   FROM eprcertification as eprcertification 
		   WHERE month(eprcertification.created_date)=$month_date
		   ORDER BY eprcertification.id";
		   
          $eprcertifications              = $connection->execute($query)->fetchAll('assoc');

		}elseif($service_id==5){
			$query                   = "SELECT 
			count(compliance_services.id) as pid,
			sum(CASE WHEN compliance_services.appln_status = 1 THEN 1 else 0 end) as approved,
			--sum(CASE WHEN compliance_services.appln_status = 2 THEN 1 else 0 end) as rejected,
			sum(CASE WHEN compliance_services.appln_status=0 THEN 1 else 0 end) as pending
		
		   FROM compliance_services as compliance_services 
		   WHERE month(compliance_services.created_date)=$month_date
		   ORDER BY compliance_services.id";
             $compliance_services              = $connection->execute($query)->fetchAll('assoc');
		}

		}
		$servicereport=array(1=>'Projects',2=>'Digilibrary',3=>'Virtual CFO',4=>'Epr Certification',5=>'Compliance Services');

		$this->set(compact('servicereport','service_id','projects','month_date','month','digilibrary_registrations','virtualcfo_registrations',
	'eprcertifications','compliance_services'));

	}

	public function dateservicereport()
	{

		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Projects');
		$this->loadModel('DigilibraryRegistrations');
		$this->loadModel('ComplianceServices');
		$this->loadModel('VirtualcfoRegistrations');
		$this->loadModel('Eprcertification');

		if ($this->request->is(['patch', 'post', 'put'])) {

			$connection      = ConnectionManager::get('default');
			$service_id  =  $this->request->getData('service_id');

			// $from_date  =  date('m', strtotime($this->request->getData('month_date')));
			// $to_date  =  date('m', strtotime($this->request->getData('month_date')));
			// $from_date       =  date('Y-m-d', strtotime($this->request->getData('from_date')));
			// $to_date       =  date('Y-m-d', strtotime($this->request->getData('to_date')));
			$f_date       =  date('Y-m-d', strtotime($this->request->getData('from_date')));
			$t_date       =  date('Y-m-d', strtotime($this->request->getData('to_date')));
			$f_date_data  =  date('m', strtotime($this->request->getData('from_date')));
			$t_date_data  =  date('m', strtotime($this->request->getData('to_date')));

			$from_date=strtotime($f_date);
			$to_date=strtotime($t_date);
		// 	print_r($f_date_data);
		// exit();

		 $j=0;
    
		$date_details=array();
		for ($i=$from_date; $i<=$to_date; $i+=86400){    
			
			$date_data=date("Y-m-d", $i);

			// echo '<pre>';
			// print_r($j);
			


			if($service_id==1)
			{
				$query                   = "SELECT 
		                
						
				count(project.id) as pid,

				 sum(CASE WHEN project.payment_status = 1 THEN 1 else 0 end) as payment_paid,
				 sum(CASE WHEN project.payment_status = 0 THEN 1 else 0 end) as payment_notpaid
				 
				
			 
				FROM projects as project 
				WHERE date(project.created_on)='".$date_data."'
				ORDER BY project.id";
	
					//echo"<pre>";print_r($query);exit();
			  $Totalcount              = $connection->execute($query)->fetchAll('assoc');

			  $projects[$j]['date_data'] = $date_data;
			  $projects[$j]['pid']     = $Totalcount[0]['pid'];
			  $projects[$j]['payment_paid']      = ($Totalcount[0]['payment_paid'] != '') ? $Totalcount[0]['payment_paid'] : 0;
			  $projects[$j]['payment_notpaid']       = ($Totalcount[0]['payment_notpaid'] != '') ? $Totalcount[0]['payment_notpaid'] : 0;
			}elseif($service_id==2){

						  $query                   = "SELECT 
		  								count(digital.id) as pid,
		                              sum(CASE WHEN digital.payment_status = 0 THEN 1 else 0 end) as payment_notpaid,
		                              sum(CASE WHEN digital.payment_status = 1 THEN 1 else 0 end) as payment_paid
		                             
		                          
		                             FROM digilibrary_registrations as digital 
		                             WHERE date(digital.created_on)='".$date_data."'
								     ORDER BY digital.id";

					// echo"<pre>";print_r($query);
					// exit();
					$Totalcount              = $connection->execute($query)->fetchAll('assoc');

					$digilibrary_registrations[$j]['date_data'] = $date_data;
					$digilibrary_registrations[$j]['pid']     = $Totalcount[0]['pid'];
					$digilibrary_registrations[$j]['payment_paid']      = ($Totalcount[0]['payment_paid'] != '') ? $Totalcount[0]['payment_paid'] : 0;
					$digilibrary_registrations[$j]['payment_notpaid']       = ($Totalcount[0]['payment_notpaid'] != '') ? $Totalcount[0]['payment_notpaid'] : 0;
			
					//echo"<pre>";print_r($digilibrary_registrations);
				}elseif($service_id==3){

						  $query                   = "SELECT 
								  count(virtualcfo_registrations.id) as pid,
								  sum(CASE WHEN virtualcfo_registrations.appln_status = 1 THEN 1 else 0 end) as approved,
								  sum(CASE WHEN virtualcfo_registrations.appln_status = 2 THEN 1 else 0 end) as rejected,
								  sum(CASE WHEN virtualcfo_registrations.appln_status=0 THEN 1 else 0 end) as pending
							  
								 FROM virtualcfo_registrations as virtualcfo_registrations 
								 WHERE date(virtualcfo_registrations.created_date)='".$date_data."'
								 ORDER BY virtualcfo_registrations.id";
								 
								// echo"<pre>";print_r($query);exit();

	  $Totalcount              = $connection->execute($query)->fetchAll('assoc');


	  $virtualcfo_registrations[$j]['date_data'] = $date_data;
					$virtualcfo_registrations[$j]['pid']     = $Totalcount[0]['pid'];
					$virtualcfo_registrations[$j]['approved']      = ($Totalcount[0]['approved'] != '') ? $Totalcount[0]['approved'] : 0;
					$virtualcfo_registrations[$j]['pending']       = ($Totalcount[0]['pending'] != '') ? $Totalcount[0]['pending'] : 0;
			

				}elseif($service_id==4){

					$query                   = "SELECT 
					count(eprcertification.id) as pid,
					sum(CASE WHEN eprcertification.appln_status = 1 THEN 1 else 0 end) as approved,
					--sum(CASE WHEN eprcertification.appln_status = 2 THEN 1 else 0 end) as rejected,
					sum(CASE WHEN eprcertification.appln_status=0 THEN 1 else 0 end)	as pending
				   FROM eprcertification as eprcertification 
				   WHERE date(eprcertification.created_date)='".$date_data."'
				   ORDER BY eprcertification.id";
				   

				

				  $Totalcount              = $connection->execute($query)->fetchAll('assoc');


				  				$eprcertifications[$j]['date_data']    = $date_data;
								$eprcertifications[$j]['pid']          = $Totalcount[0]['pid'];
								$eprcertifications[$j]['approved']     = ($Totalcount[0]['approved'] != '') ? $Totalcount[0]['approved'] : 0;
								$eprcertifications[$j]['pending']      = ($Totalcount[0]['pending'] != '') ? $Totalcount[0]['pending'] : 0;
				
					}elseif($service_id==5){
					$query                   = "SELECT 
					count(compliance_services.id) as pid,
					sum(CASE WHEN compliance_services.appln_status = 1 THEN 1 else 0 end) as approved,
					--sum(CASE WHEN compliance_services.appln_status = 2 THEN 1 else 0 end) as rejected,
					sum(CASE WHEN compliance_services.appln_status=0 THEN 1 else 0 end) as pending
				
				   FROM compliance_services as compliance_services 
				   WHERE date(compliance_services.created_date)='".$date_data."'
				   ORDER BY compliance_services.id";
					
					 $Totalcount              = $connection->execute($query)->fetchAll('assoc');


					 $compliance_services[$j]['date_data']    = $date_data;
				   $compliance_services[$j]['pid']          = $Totalcount[0]['pid'];
				   $compliance_services[$j]['approved']     = ($Totalcount[0]['approved'] != '') ? $Totalcount[0]['approved'] : 0;
				   $compliance_services[$j]['pending']      = ($Totalcount[0]['pending'] != '') ? $Totalcount[0]['pending'] : 0;
				}





			// echo '<pre>';
			// print_r($eprcertifications);

			$date_data++;
			$j++;

			
		}
		 //exit();
		// print_r($f_date_data);
		// exit();
	}
	
		$servicereport=array(1=>'Projects',2=>'Digilibrary',3=>'Virtual CFO',4=>'Epr Certification',5=>'Compliance Services');

		$this->set(compact('servicereport','date_data','service_id','projects','f_date','t_date','f_date_data','t_date_data','digilibrary_registrations',
	'virtualcfo_registrations','eprcertifications','compliance_services'));
	}
	public function ajaxprojectreport($val = null,$month_date=null)
	{

		// print_r($month_date);
		// exit();

		$this->loadModel('Projects');
		$connection      = ConnectionManager::get('default');
		if ($val == 1) {
			$Cond ="WHERE MONTH(project.transaction_date)='$month_date'";
		} elseif ($val == 2) {
			$Cond = "WHERE project.payment_status=1 and MONTH(project.transaction_date)='$month_date'";
		} elseif ($val == 3) {
			$Cond = "WHERE project.payment_status=0 and MONTH(project.transaction_date)='$month_date'";
		}
		// elseif ($val == 4) {
		// 	$Cond = "WHERE project.payment_status IS NULL and MONTH(project.created_on)='$month_date'";
		// }
		$sql = "SELECT
		 		 project.id as pid,
		 		 project.reg_no as reg_no,
				 project.name as projectname,
				 project.mobile_no as mbl,
				 project.unit_name as unit_name,
				 project.payment_status as payment_status,
				 project.project_status as project_status
			 
				 FROM projects as project
	
				$Cond ";

				//echo"<pre>";print_r($sql);exit();

		$projectdetails   = $connection->execute($sql)->fetchAll('assoc');
		//echo"<pre>";print_r($projectdetails);exit();
		$this->set(compact('projectdetails', 'val'));
	}	
	public function ajaxdateprojectreport($val = null,$date_data=null)
	{

		// print_r($date_data);
		// exit();

		$date=date('Y-m-d',strtotime($date_data));
		$this->loadModel('Projects');
		$connection      = ConnectionManager::get('default');




			if ($val == 1) {
				$Cond ="WHERE DATE(project.created_on)='$date'";
			} elseif ($val == 2) {
				$Cond = "WHERE project.payment_status=1 and DATE(project.created_on)='$date'";
			} elseif ($val == 3) {
				$Cond = "WHERE project.payment_status=0 and DATE(project.created_on)='$date'";
			}
			// elseif ($val == 4) {
			// 	$Cond = "WHERE project.payment_status IS NULL and MONTH(project.created_on)='$month_date'";
			// }
			$sql = "SELECT
					  project.id as pid,
					  project.reg_no as reg_no,
					 project.name as projectname,
					 project.mobile_no as mbl,
					 project.unit_name as unit_name,
					 project.payment_status as payment_status,
					 project.project_status as project_status
				 
					 FROM projects as project
		
					$Cond ";
	
					//echo"<pre>";print_r($sql);exit();
	
			$projectdetails   = $connection->execute($sql)->fetchAll('assoc');



	
		//echo"<pre>";print_r($projectdetails);exit();
		$this->set(compact('projectdetails', 'val'));
	}	
	
// 	 public function digitallibraryreport(){
// 		//echo "hi"; exit();
// 		$this->viewBuilder()->setLayout('layout');
// 		$this->loadModel('DigilibraryRegistrations');
// 		if ($this->request->is(['patch', 'post', 'put'])) {


// 			$month_date  =  date('m',strtotime($this->request->getData('month_date')));
// 			$month       =  date('d-m-Y',strtotime($this->request->getData('month_date')));


			
// 			//echo"<pre>";print_r($month_date);exit();
// 		$connection = ConnectionManager::get('default');

// 		  $query                   = "SELECT 
// 		  								count(digital.id) as pid,
// 		                              sum(CASE WHEN digital.payment_status = 0 THEN 1 else 0 end) as payment_notpaid,
// 		                              sum(CASE WHEN digital.payment_status = 1 THEN 1 else 0 end) as payment_paid
		                             
		                          
// 		                             FROM digilibrary_registrations as digital 
// 		                             WHERE month(digital.transaction_date)=$month_date
// 								     ORDER BY digital.id";
// 		  $digilibrary_registrations    = $connection->execute($query)->fetchAll('assoc');

// 		}
// 		 //echo"<pre>";print_r($digilibrary_registrations);exit();
// 		$this->set(compact('digilibrary_registrations','month_date','month')); 
	
// }


public function ajaxdatedigireport($val = null,$month_date=null)
{

	// print_r($month_date);
	// exit();
	$date=date('Y-m-d',strtotime($month_date));
	$this->loadModel('DigilibraryRegistrations');
	$connection      = ConnectionManager::get('default');
	if ($val == 1) {
		$Cond = "WHERE DATE(digital.created_on)='$date'";
	}elseif($val == 2){
		$Cond = " WHERE digital.payment_status=1 and DATE(digital.created_on)='$date'";
	} elseif ($val == 3) {
		$Cond = " WHERE digital.payment_status=0 and DATE(digital.created_on)='$date'";
	}
	$sql = "SELECT 
			  digital.id as pid,
			  digital.name as name,
			  digital.reg_no as reg_no,
			  digital.mobile_no as 	mobile_no,
			  digital.email as email
	
			 FROM digilibrary_registrations as digital

			$Cond ";

 //echo"<pre>";print_r($sql);exit();
	$digilibrary_registrations   = $connection->execute($sql)->fetchAll('assoc');
	//echo"<pre>";print_r($digilibrary_registrations);exit();
	$this->set(compact('digilibrary_registrations', 'val'));
}	
public function ajaxdigireport($val = null,$month_date=null)
{

	// print_r($month_date);
	// exit();

	$this->loadModel('DigilibraryRegistrations');
	$connection      = ConnectionManager::get('default');
	if ($val == 1) {
		$Cond = "WHERE MONTH(digital.transaction_date)='$month_date'";
	}elseif($val == 2){
		$Cond = " WHERE digital.payment_status=1 and MONTH(digital.transaction_date)='$month_date'";
	} elseif ($val == 3) {
		$Cond = " WHERE digital.payment_status=0 and MONTH(digital.transaction_date)='$month_date'";
	}
	$sql = "SELECT 
			  digital.id as pid,
			  digital.name as name,
			  digital.reg_no as reg_no,
			  digital.mobile_no as 	mobile_no,
			  digital.email as email
	
			 FROM digilibrary_registrations as digital

			$Cond ";

 //echo"<pre>";print_r($sql);exit();
	$digilibrary_registrations   = $connection->execute($sql)->fetchAll('assoc');
	//echo"<pre>";print_r($digilibrary_registrations);exit();
	$this->set(compact('digilibrary_registrations', 'val'));
}	

// public function complianceservivesreport(){
// 	//echo "hi"; exit();
// 	$this->viewBuilder()->setLayout('layout');
// 	$this->loadModel('ComplianceServices');
// 	if ($this->request->is(['patch', 'post', 'put'])) {


// 		$month_date  =  date('m',strtotime($this->request->getData('month_date')));
// 		$month       =  date('d-m-Y',strtotime($this->request->getData('month_date')));


		
// 		//echo"<pre>";print_r($month_date);exit();
// 	$connection = ConnectionManager::get('default');

// 	  $query                   = "SELECT 
// 								  count(compliance_services.id) as pid,
// 								  sum(CASE WHEN compliance_services.appln_status = 1 THEN 1 else 0 end) as approved,
// 								  sum(CASE WHEN compliance_services.appln_status = 2 THEN 1 else 0 end) as rejected,
// 								  sum(CASE WHEN compliance_services.appln_status IS NULL THEN 1 else 0 end) as pending
							  
// 								 FROM compliance_services as compliance_services 
// 								 WHERE month(compliance_services.created_date)=$month_date
// 								 ORDER BY compliance_services.id";
// 	  $compliance_services              = $connection->execute($query)->fetchAll('assoc');

// 	}
// 	 //echo"<pre>";print_r($query);exit();
// 	$this->set(compact('compliance_services','month_date','month'));   
// }

public function ajaxdatecomplianceservicereport($val = null,$month_date=null)
{

	// print_r($month_date);
	// exit();
	$date=date('Y-m-d',strtotime($month_date));
	$this->loadModel('ComplianceServices');
	$connection      = ConnectionManager::get('default');
	if ($val == 1) {
		$Cond ="WHERE DATE(compliance_services.created_date)='$date'";
	} elseif ($val == 2) {
		$Cond = "WHERE compliance_services.appln_status=1 and DATE(compliance_services.created_date)='$date'";
	} elseif ($val == 3) {
		$Cond = "WHERE compliance_services.appln_status=0 and DATE(compliance_services.created_date)='$date'";
	}
	
	$sql = "SELECT 
			  compliance_services.id as pid,
			  compliance_services.name as name,
			  compliance_services.mobile_no as mbl,
			  compliance_services.email as email,
			  compliance_services.project_name as project_name,
			  compliance_services.project_loc as project_loc
		 
			 FROM compliance_services as compliance_services

			$Cond ";

		// echo'<pre>';
		// print_r($sql);
		// 	exit();

	$compliance_services   = $connection->execute($sql)->fetchAll('assoc');
	//echo"<pre>";print_r($projectdetails);exit();
	$this->set(compact('compliance_services', 'val'));
}
public function ajaxcomplianceservicereport($val = null,$month_date=null)
{

	// print_r($month_date);
	// exit();

	$this->loadModel('ComplianceServices');
	$connection      = ConnectionManager::get('default');
	if ($val == 1) {
		$Cond ="WHERE MONTH(compliance_services.created_date)='$month_date'";
	} elseif ($val == 2) {
		$Cond = "WHERE compliance_services.appln_status=1 and MONTH(compliance_services.created_date)='$month_date'";
	} elseif ($val == 3) {
		$Cond = "WHERE compliance_services.appln_status=0 and MONTH(compliance_services.created_date)='$month_date'";
	}
	
	$sql = "SELECT 
			  compliance_services.id as pid,
			  compliance_services.name as name,
			  compliance_services.mobile_no as mbl,
			  compliance_services.email as email,
			  compliance_services.project_name as project_name,
			  compliance_services.project_loc as project_loc
		 
			 FROM compliance_services as compliance_services

			$Cond ";

		// echo'<pre>';
		// print_r($sql);
		// 	exit();

	$compliance_services   = $connection->execute($sql)->fetchAll('assoc');
	//echo"<pre>";print_r($projectdetails);exit();
	$this->set(compact('compliance_services', 'val'));
}
// public function virtualcforeport(){
// 	//echo "hi"; exit();
// 	$this->viewBuilder()->setLayout('layout');
// 	$this->loadModel('VirtualcfoRegistrations');
// 	if ($this->request->is(['patch', 'post', 'put'])) {


// 		$month_date  =  date('m',strtotime($this->request->getData('month_date')));
// 		$month       =  date('d-m-Y',strtotime($this->request->getData('month_date')));


		
// 		//echo"<pre>";print_r($month_date);exit();
// 	$connection = ConnectionManager::get('default');

// 	  $query                   = "SELECT 
// 								  count(virtualcfo_registrations.id) as pid,
// 								  sum(CASE WHEN virtualcfo_registrations.appln_status = 1 THEN 1 else 0 end) as approved,
// 								  sum(CASE WHEN virtualcfo_registrations.appln_status = 2 THEN 1 else 0 end) as rejected,
// 								  sum(CASE WHEN virtualcfo_registrations.appln_status=0 THEN 1 else 0 end) as pending
							  
// 								 FROM virtualcfo_registrations as virtualcfo_registrations 
// 								 WHERE month(virtualcfo_registrations.created_date)=$month_date
// 								 ORDER BY virtualcfo_registrations.id";
								 
// 								// echo"<pre>";print_r($query);exit();

// 	  $virtualcfo_registrations              = $connection->execute($query)->fetchAll('assoc');

// 	}
// 	//  echo"<pre>";print_r($query);exit();
// 	$this->set(compact('virtualcfo_registrations','month_date','month'));   
// }

public function ajaxdatevirtualcforeport($val = null,$month_date=null)
{

	// print_r($month_date);
	// exit();
	$date=date('Y-m-d',strtotime($month_date));
	$this->loadModel('VirtualcfoRegistrations');
	$connection      = ConnectionManager::get('default');
	if ($val == 1) {
		$Cond ="WHERE DATE(virtualcfo_registrations.created_date)='$date'";
	} elseif ($val == 2) {
		$Cond = "WHERE virtualcfo_registrations.appln_status=1 and DATE(virtualcfo_registrations.created_date)='$date'";
	} elseif ($val == 3) {
		$Cond = "WHERE virtualcfo_registrations.appln_status =0 and DATE(virtualcfo_registrations.created_date)='$date'";
	}

	$sql = "SELECT 
			  virtualcfo_registrations.id as pid,
			  virtualcfo_registrations.name as name,
			  virtualcfo_registrations.mobile_no as mbl,
			  virtualcfo_registrations.email as email,
			  virtualcfo_registrations.application_no as application_no
			
		 
			 FROM virtualcfo_registrations as virtualcfo_registrations

			$Cond ";

		// echo'<pre>';
		// print_r($sql);
		// exit();

	$virtualcfo_registrations   = $connection->execute($sql)->fetchAll('assoc');
	//echo"<pre>";print_r($projectdetails);exit();
	$this->set(compact('virtualcfo_registrations', 'val'));
}
public function ajaxvirtualcforeport($val = null,$month_date=null)
{

	// print_r($month_date);
	// exit();

	$this->loadModel('VirtualcfoRegistrations');
	$connection      = ConnectionManager::get('default');
	if ($val == 1) {
		$Cond ="WHERE MONTH(virtualcfo_registrations.created_date)='$month_date'";
	} elseif ($val == 2) {
		$Cond = "WHERE virtualcfo_registrations.appln_status=1 and MONTH(virtualcfo_registrations.created_date)='$month_date'";
	} elseif ($val == 3) {
		$Cond = "WHERE virtualcfo_registrations.appln_status =0 and MONTH(virtualcfo_registrations.created_date)='$month_date'";
	}

	$sql = "SELECT 
			  virtualcfo_registrations.id as pid,
			  virtualcfo_registrations.name as name,
			  virtualcfo_registrations.mobile_no as mbl,
			  virtualcfo_registrations.email as email,
			  virtualcfo_registrations.application_no as application_no
			
		 
			 FROM virtualcfo_registrations as virtualcfo_registrations

			$Cond ";

		// echo'<pre>';
		// print_r($sql);
		// 	exit();

	$virtualcfo_registrations   = $connection->execute($sql)->fetchAll('assoc');
	//echo"<pre>";print_r($projectdetails);exit();
	$this->set(compact('virtualcfo_registrations', 'val'));
}

// public function eprcertificationreport(){
// 	//echo "hi"; exit();
// 	$this->viewBuilder()->setLayout('layout');
// 	$this->loadModel('Eprcertification');
// 	if ($this->request->is(['patch', 'post', 'put'])) {


// 		$month_date  =  date('m',strtotime($this->request->getData('month_date')));
// 		$month       =  date('d-m-Y',strtotime($this->request->getData('month_date')));


		
// 		//echo"<pre>";print_r($month_date);exit();
// 	$connection = ConnectionManager::get('default');

// 	  $query                   = "SELECT 
// 								  count(eprcertification.id) as pid,
// 								  sum(CASE WHEN eprcertification.appln_status = 1 THEN 1 else 0 end) as approved,
// 								  sum(CASE WHEN eprcertification.appln_status = 2 THEN 1 else 0 end) as rejected,
// 							  	sum(CASE WHEN eprcertification.appln_status IS NULL THEN 1 else 0 end)	as pending
// 								 FROM eprcertification as eprcertification 
// 								 WHERE month(eprcertification.created_date)=$month_date
// 								 ORDER BY eprcertification.id";
								 
// 	  $eprcertifications              = $connection->execute($query)->fetchAll('assoc');

// 	}
// 	 //echo"<pre>";print_r($query);exit();
// 	$this->set(compact('eprcertifications','month_date','month'));   
// }

public function ajaxdateeprcertificationreport($val = null,$month_date=null)
{

	// print_r($month_date);
	// exit();
	$date=date('Y-m-d',strtotime($month_date));
	$this->loadModel('Eprcertification');
	$connection      = ConnectionManager::get('default');
	if ($val == 1) {
		$Cond ="WHERE date(eprcertification.created_date)='$date'";
	} elseif ($val == 2) {
		$Cond = "WHERE eprcertification.appln_status=1 and date(eprcertification.created_date)='$date'";
	} elseif ($val == 3) {
		$Cond = "WHERE eprcertification.appln_status=0 and date(eprcertification.created_date)='$date'";
	}

	$sql = "SELECT 
			  eprcertification.id as pid,
			  eprcertification.name as name,
			  eprcertification.mobile_no as mbl,
			  eprcertification.email as email,
			  eprcertification.application_no as application_no
			
		 
			 FROM eprcertification as eprcertification

			$Cond ";

		// echo'<pre>';
		// print_r($sql);
		// 	exit();

	$eprcertifications   = $connection->execute($sql)->fetchAll('assoc');
	//echo"<pre>";print_r($projectdetails);exit();
	$this->set(compact('eprcertifications', 'val'));
}
public function ajaxeprcertificationreport($val = null,$month_date=null)
{

	// print_r($month_date);
	// exit();

	$this->loadModel('Eprcertification');
	$connection      = ConnectionManager::get('default');
	if ($val == 1) {
		$Cond ="WHERE MONTH(eprcertification.created_date)='$month_date'";
	} elseif ($val == 2) {
		$Cond = "WHERE eprcertification.appln_status=1 and MONTH(eprcertification.created_date)='$month_date'";
	} elseif ($val == 3) {
		$Cond = "WHERE eprcertification.appln_status=0 and MONTH(eprcertification.created_date)='$month_date'";
	}

	$sql = "SELECT 
			  eprcertification.id as pid,
			  eprcertification.name as name,
			  eprcertification.mobile_no as mbl,
			  eprcertification.email as email,
			  eprcertification.application_no as application_no
			
		 
			 FROM eprcertification as eprcertification

			$Cond ";

		// echo'<pre>';
		// print_r($sql);
		// 	exit();

	$eprcertifications   = $connection->execute($sql)->fetchAll('assoc');
	//echo"<pre>";print_r($projectdetails);exit();
	$this->set(compact('eprcertifications', 'val'));
}

}