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
    
	public function projectreport(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Projects');
		if ($this->request->is(['patch', 'post', 'put'])) {


			$month_date  =  date('m',strtotime($this->request->getData('month_date')));
			$month       =  date('d-m-Y',strtotime($this->request->getData('month_date')));


			
			//echo"<pre>";print_r($month_date);exit();
		$connection = ConnectionManager::get('default');

		  $query                   = "SELECT 
		                
									 count(project.id) as pid,
		                              sum(CASE WHEN project.project_status = 1 THEN 1 else 0 end) as approved,
		                              sum(CASE WHEN project.project_status = 2 THEN 1 else 0 end) as rejected,
									  sum(CASE WHEN project.project_status IS NULL THEN 1 else 0 end) as pending
									 
		                          
		                             FROM projects as project 
		                             WHERE month(project.created_on)=$month_date
								     ORDER BY project.id";

						//echo"<pre>";print_r($query);exit();
		  $projects              = $connection->execute($query)->fetchAll('assoc');

		}
		 //echo"<pre>";print_r($query);exit();
		$this->set(compact('projects','month_date','month'));   
	}

	public function ajaxprojectreport($val = null,$month_date=null)
	{

		// print_r($month_date);
		// exit();

		$this->loadModel('Projects');
		$connection      = ConnectionManager::get('default');
		if ($val == 1) {
			$Cond ="WHERE MONTH(project.created_on)='$month_date'";
		} elseif ($val == 2) {
			$Cond = "WHERE project.project_status=1 and MONTH(project.created_on)='$month_date'";
		} elseif ($val == 3) {
			$Cond = "WHERE project.project_status=2 and MONTH(project.created_on)='$month_date'";
		}
		elseif ($val == 4) {
			$Cond = "WHERE project.project_status IS NULL and MONTH(project.created_on)='$month_date'";
		}
		$sql = "SELECT 
		 		 project.id as pid,
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
	
	 public function digitallibraryreport(){
		//echo "hi"; exit();
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('DigilibraryRegistrations');
		if ($this->request->is(['patch', 'post', 'put'])) {


			$month_date  =  date('m',strtotime($this->request->getData('month_date')));
			$month       =  date('d-m-Y',strtotime($this->request->getData('month_date')));


			
			//echo"<pre>";print_r($month_date);exit();
		$connection = ConnectionManager::get('default');

		  $query                   = "SELECT 
		                              sum(CASE WHEN digital.payment_status = 0 THEN 1 else 0 end) as payment_notpaid,
		                              sum(CASE WHEN digital.payment_status = 1 THEN 1 else 0 end) as payment_paid
		                             
		                          
		                             FROM digilibrary_registrations as digital 
		                             WHERE month(digital.transaction_date)=$month_date
								     ORDER BY digital.id";
		  $digilibrary_registrations    = $connection->execute($query)->fetchAll('assoc');

		}
		 //echo"<pre>";print_r($digilibrary_registrations);exit();
		$this->set(compact('digilibrary_registrations','month_date','month')); 
	
}


public function ajaxdigireport($val = null)
{

	// print_r($val);
	// exit();

	$this->loadModel('DigilibraryRegistrations');
	$connection      = ConnectionManager::get('default');
	if ($val == 1) {
		$Cond = " WHERE digital.payment_status=0";
	} elseif ($val == 2) {
		$Cond = " WHERE digital.payment_status=1";
	}
	$sql = "SELECT 
			  digital.id as pid,
			  digital.name as name,
			  digital.reg_no as reg_no,
			  digital.mobile_no as 	mobile_no,
			  digital.email as email
	
			 FROM digilibrary_registrations as digital

			$Cond ";

	$digilibrary_registrations   = $connection->execute($sql)->fetchAll('assoc');
	//echo"<pre>";print_r($digilibrary_registrations);exit();
	$this->set(compact('digilibrary_registrations', 'val'));
}	

public function complianceservivesreport(){
	//echo "hi"; exit();
	$this->viewBuilder()->setLayout('layout');
	$this->loadModel('ComplianceServices');
	if ($this->request->is(['patch', 'post', 'put'])) {


		$month_date  =  date('m',strtotime($this->request->getData('month_date')));
		$month       =  date('d-m-Y',strtotime($this->request->getData('month_date')));


		
		//echo"<pre>";print_r($month_date);exit();
	$connection = ConnectionManager::get('default');

	  $query                   = "SELECT 
								  count(compliance_services.id) as pid,
								  sum(CASE WHEN compliance_services.appln_status = 1 THEN 1 else 0 end) as approved,
								  sum(CASE WHEN compliance_services.appln_status = 2 THEN 1 else 0 end) as rejected,
								  sum(CASE WHEN compliance_services.appln_status IS NULL THEN 1 else 0 end) as pending
							  
								 FROM compliance_services as compliance_services 
								 WHERE month(compliance_services.created_date)=$month_date
								 ORDER BY compliance_services.id";
	  $compliance_services              = $connection->execute($query)->fetchAll('assoc');

	}
	 //echo"<pre>";print_r($query);exit();
	$this->set(compact('compliance_services','month_date','month'));   
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
		$Cond = "WHERE compliance_services.appln_status=2 and MONTH(compliance_services.created_date)='$month_date'";
	}
	 elseif ($val == 4) {
		$Cond = "WHERE compliance_services.appln_status IS NULL and MONTH(compliance_services.created_date)='$month_date'";
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
public function virtualcforeport(){
	//echo "hi"; exit();
	$this->viewBuilder()->setLayout('layout');
	$this->loadModel('VirtualcfoRegistrations');
	if ($this->request->is(['patch', 'post', 'put'])) {


		$month_date  =  date('m',strtotime($this->request->getData('month_date')));
		$month       =  date('d-m-Y',strtotime($this->request->getData('month_date')));


		
		//echo"<pre>";print_r($month_date);exit();
	$connection = ConnectionManager::get('default');

	  $query                   = "SELECT 
								  count(virtualcfo_registrations.id) as pid,
								  sum(CASE WHEN virtualcfo_registrations.appln_status = 1 THEN 1 else 0 end) as approved,
								  sum(CASE WHEN virtualcfo_registrations.appln_status = 2 THEN 1 else 0 end) as rejected,
								  sum(CASE WHEN virtualcfo_registrations.appln_status IS NULL THEN 1 else 0 end) as pending
							  
								 FROM virtualcfo_registrations as virtualcfo_registrations 
								 WHERE month(virtualcfo_registrations.created_date)=$month_date
								 ORDER BY virtualcfo_registrations.id";
								 
	  $virtualcfo_registrations              = $connection->execute($query)->fetchAll('assoc');

	}
	 //echo"<pre>";print_r($query);exit();
	$this->set(compact('virtualcfo_registrations','month_date','month'));   
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
		$Cond = "WHERE virtualcfo_registrations.appln_status=2 and MONTH(virtualcfo_registrations.created_date)='$month_date'";
	}
	 elseif ($val == 4) {
		$Cond = "WHERE virtualcfo_registrations.appln_status IS NULL and MONTH(virtualcfo_registrations.created_date)='$month_date'";
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

public function eprcertificationreport(){
	//echo "hi"; exit();
	$this->viewBuilder()->setLayout('layout');
	$this->loadModel('Eprcertification');
	if ($this->request->is(['patch', 'post', 'put'])) {


		$month_date  =  date('m',strtotime($this->request->getData('month_date')));
		$month       =  date('d-m-Y',strtotime($this->request->getData('month_date')));


		
		//echo"<pre>";print_r($month_date);exit();
	$connection = ConnectionManager::get('default');

	  $query                   = "SELECT 
								  count(eprcertification.id) as pid,
								  sum(CASE WHEN eprcertification.appln_status = 1 THEN 1 else 0 end) as approved,
								  sum(CASE WHEN eprcertification.appln_status = 2 THEN 1 else 0 end) as rejected,
							  	sum(CASE WHEN eprcertification.appln_status IS NULL THEN 1 else 0 end)	as pending
								 FROM eprcertification as eprcertification 
								 WHERE month(eprcertification.created_date)=$month_date
								 ORDER BY eprcertification.id";
								 
	  $eprcertifications              = $connection->execute($query)->fetchAll('assoc');

	}
	 //echo"<pre>";print_r($query);exit();
	$this->set(compact('eprcertifications','month_date','month'));   
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
		$Cond = "WHERE eprcertification.appln_status=2 and MONTH(eprcertification.created_date)='$month_date'";
	}
	 elseif ($val == 4) {
		$Cond = "WHERE eprcertification.appln_status IS NULL and MONTH(eprcertification.created_date)='$month_date'";
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