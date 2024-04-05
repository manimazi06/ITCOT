<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class ProjectsController extends AppController
{    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		
		 if ($this->request->is(['patch', 'post', 'put'])) { 
		   $status= $this->request->getData('status_id');	
	       $projects  = $this->Projects->find('all')->where(['Projects.payment_Status'=>1,'Projects.project_status'=>$status])->toArray();	  
		 }else{
		   $projects  = $this->Projects->find('all')->where(['Projects.payment_Status'=>1])->toArray();		
		 }	
		
		//  echo '<pre>';
		//  print_r($projects);
		//  exit();
	    $proj=array(1=>'Approved',2=>'Rejected',0=>'Pending');			
		$this->set(compact('projects','proj'));   
	}
	
  	public function projectstatus($id=null)
	{
		$this->viewBuilder()->setLayout('layout');
		if ($this->request->is('post')) {

		           $ProjectTable              = $this->getTableLocator()->get('Projects');
                   $project1                  = $ProjectTable->get($id); 
                   $project1->project_status  = $this->request->getData('project_status');				   
			
				   if ($this->Projects->save($project1)) {
					$this->Flash->success(__('The Project status has been updated.'));
					return $this->redirect(['action' => 'index']);
				}
				$this->Flash->error(__('The Project status could not be saved. Please, try again.'));
		}
		   $proj=array(1=>'Approved',2=>'Rejected');
		   $this->set(compact('proj'));

	}
	public function basicdetails()
	{  
		$this->viewBuilder()->setLayout('layout');
		$project = $this->Projects->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$project = $this->Projects->patchEntity($scheme, $this->request->getData());
			$project->name                = $this->request->getData('name');
			$project->description         = $this->request->getData('description');
			if ($this->Projects->save($scheme)) {
				$this->Flash->success(__('The Projects has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Projects could not be saved. Please, try again.'));
		}
		
		$prefix = array('Mr'=>'Mr','Mrs'=>'Mrs','Ms'=>'Ms');
	    $this->loadModel('Categories');
	    $this->loadModel('Educations');
		$categories  = $this->Categories->find('list')->toArray();	
		$educations   = $this->Educations->find('list')->toArray();	
		
	  $this->set(compact('project', 'prefix','categories','educations'));
	}
	public function basicview($id=null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Categories');
		$this->loadModel('Educations');
		$basic = $this->Projects->get($id, [
			'contain' => ['Categories','Educations'],
		     ]);

			 $this->set(compact('basic'));
	}
    public function reportpdf($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('EducationQualifications');
		$this->loadModel('SpecialTrainings');
		$this->loadModel('WorkExperiance');
		$this->loadModel('Productions');
		$this->loadModel('Machineries');
		$this->loadModel('RawMaterials');
		$this->loadModel('Utilities');
		$this->loadModel('Manpowers');
		$this->loadModel('Utilities');
		$this->loadModel('WorkingCapital');
		$this->loadModel('FixedCapitals');
		$this->loadModel('MeansFinance');
		$this->loadModel('UserReferences');
		$this->loadModel('PaymentDetails');
		$this->loadModel('Units');

		$basics = $this->Projects->get($id, [
			'contain' => ['Categories', 'Educations', 'Sectortypes', 'Localitytype', 'Registrationtype', 'States', 'LoanTypes', 'LoanPurposes'],
		]);		

		$education_details  = $this->EducationQualifications->find('all')->contain(['Educations'])->where(['EducationQualifications.project_id' => $id,'EducationQualifications.is_active'=>1])->toArray();
		$training_details  = $this->SpecialTrainings->find('all')->where(['SpecialTrainings.project_id' => $id,'SpecialTrainings.is_active'=>1])->toArray();
		$work_details  = $this->WorkExperiance->find('all')->where(['WorkExperiance.project_id' => $id,'WorkExperiance.is_active'=>1])->toArray();
		
		// Manufacturingdetails
		$pro_details  = $this->Productions->find('all')->contain(['Units'])->where(['Productions.project_id' => $id,'Productions.is_active'=>1])->toArray();
		$mach_details  = $this->Machineries->find('all')->where(['Machineries.project_id' => $id,'Machineries.is_active'=>1])->toArray();
		$raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id' => $id,'RawMaterials.is_active'=>1])->toArray();

		// echo '<pre>';
		// print_r($basics);
		// exit();


		// Manpower details

		$util_details  = $this->Utilities->find('all')->where(['Utilities.project_id' => $id,'Utilities.is_active' =>1])->toArray();
		$man_details  = $this->Manpowers->find('all')->where(['Manpowers.project_id' => $id,'Manpowers.is_active' =>1])->toArray();



		// echo '<pre>';
		// print_r($man_details);
		// exit();

		$electricity_unit_id = $util_details[0]['electricity_unit_id'];
		$water_unit_id = $util_details[0]['water_unit_id'];
		$oil_unit_id = $util_details[0]['oil_unit_id'];
		$other_unit_id = $util_details[0]['other_unit_id'];

		//Profitabilitydetails
		
		$fixed_capitals  = $this->FixedCapitals->find('all')->where(['FixedCapitals.project_id' => $id,'FixedCapitals.is_active' =>1])->toArray();
		$working_capital  = $this->WorkingCapital->find('all')->where(['WorkingCapital.project_id' => $id,'WorkingCapital.is_active' =>1])->toArray();

		// echo '<pre>';
		// print_r($working_capital);
		// exit();

		$project  = $this->Projects->find('all')->where(['Projects.id' => $id,'Projects.is_active' =>1])->toArray();
		$means_finance  = $this->MeansFinance->find('all')->where(['MeansFinance.project_id' => $id ,'MeansFinance.is_active' =>1])->toArray();
		$user_references  = $this->UserReferences->find('all')->where(['UserReferences.project_id' => $id])->toArray();
		$payment_details  = $this->PaymentDetails->find('all')->toArray();

		// echo '<pre>';
		// print_r($means_finance);
		// exit();

		$raw_unit_id = $working_capital[0]['raw_unit_id'];
		$semifinished_unit_id = $working_capital[0]['semifinished_unit_id'];
		$finished_unit_id = $working_capital[0]['finished_unit_id'];
		$expenses_unit_id = $working_capital[0]['expenses_unit_id'];
		$bills_unit_id = $working_capital[0]['bills_unit_id'];


		$units = $this->Units->find('list',['keyField' => 'id', 'valueField' => 'description'])->toArray();

		$this->set(compact(
			'basics',
			'education_details',
			'training_details',
			'work_details',
			'pro_details',
			'mach_details',
			'raw_details',
			'util_details',
			'man_details',
			'fixed_capitals',
			'working_capital',
			'project',
			'means_finance',
			'user_references',
			'payment_details','id','units'
		));
	}
	public function entitydetails()
	{  
		$this->viewBuilder()->setLayout('layout');
		$scheme = $this->Projects->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$scheme = $this->Projects->patchEntity($scheme, $this->request->getData());
			$scheme->name                = $this->request->getData('name');
			$scheme->description         = $this->request->getData('description');
			if ($this->Projects->save($scheme)) {
				$this->Flash->success(__('The Projects has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Projects could not be saved. Please, try again.'));
		}
		
		$this->loadModel('Sectortypes');
	    $this->loadModel('Localitytype');
	    $this->loadModel('Registrationtype');
	    $this->loadModel('LoanPurposes');
	    $this->loadModel('LoanTypes');
	    $this->loadModel('States');
		$sectortypes       = $this->Sectortypes->find('list')->toArray();	
		$localitytype      = $this->Localitytype->find('list')->toArray();	
		$registrationtype  = $this->Registrationtype->find('list')->toArray();	
		$loanpurposes      = $this->LoanPurposes->find('list')->toArray();	
		$loantypes         = $this->LoanTypes->find('list')->toArray();	
		$states            = $this->States->find('list')->toArray();	
		
		$this->set(compact('project', 'sectortypes', 'localitytype','registrationtype','loanpurposes','loantypes','states'));
	}
	public function entitydetailsview($id=null)
	{
		$this->loadModel('Sectortypes');
		$this->loadModel('Localitytype');

		$this->viewBuilder()->setLayout('layout');

		$basic = $this->Projects->get($id, [
			'contain' => ['Sectortypes','Localitytype','Registrationtype','States','LoanTypes','LoanPurposes'],
		     ]);
	
			 $this->set(compact('basic','id'));
	}
	public function educationdetails()
	{  
		$this->viewBuilder()->setLayout('layout');
		$project = $this->Projects->newEmptyEntity();
		if ($this->request->is('post')) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$project = $this->Projects->patchEntity($scheme, $this->request->getData());
			$project->name                = $this->request->getData('name');
			$project->description         = $this->request->getData('description');
			if ($this->Projects->save($scheme)) {
				$this->Flash->success(__('The Projects has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The Projects could not be saved. Please, try again.'));
		}
		
		//$prefix = array('Mr'=>'Mr','Mrs'=>'Mrs','Ms'=>'Ms');
	   // $this->loadModel('Categories');
		//$categories  = $this->Categories->find('list')->toArray();	
	    $this->loadModel('Educations');
		$educations   = $this->Educations->find('list')->toArray();	
		
	  $this->set(compact('project', 'prefix','categories','educations'));
	}
	public function ajaxaddeducation($j = null){		
		$this->loadModel('Educations');
		$educations   = $this->Educations->find('list')->toArray();	
	    $this->set(compact('j','educations'));		
	}
	
	public function educationdetailsview($id=null)
	{
		$this->viewBuilder()->setLayout('layout');		
		$this->loadModel('EducationQualifications');
		$this->loadModel('SpecialTrainings');
		$this->loadModel('WorkExperiance');		
		$education_details = $this->EducationQualifications->find('all')->contain(['Educations'])->where(['EducationQualifications.project_id'=>$id])->toArray();
		$training_details  = $this->SpecialTrainings->find('all')->where(['SpecialTrainings.project_id'=>$id])->toArray();
		$work_details      = $this->WorkExperiance->find('all')->where(['WorkExperiance.project_id'=>$id])->toArray();
		 $this->set(compact('basic','education_details','training_details','work_details','id'));
	}

	public function ajaxaddtraining($j = null){
		
		// $this->loadModel('Educations');
		// $educations   = $this->Educations->find('list')->toArray();	
		
	    $this->set(compact('j','educations'));
		
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
	public function manufacturingdetailsview($id=null)
	
	{
		// echo '<pre>';
		// print_r($id);
		// exit();

		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Productions');
		$this->loadModel('Machineries');
		$this->loadModel('RawMaterials');
		$this->loadModel('Units');
		

		

		$pro_details  = $this->Productions->find('all')->contain(['Units'])->where(['Productions.project_id'=>$id])->toArray();


		$mach_details  = $this->Machineries->find('all')->where(['Machineries.project_id'=>$id])->toArray();


		$raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id])->toArray();


			 
			
			//  echo '<pre>';
			//  print_r($pro_details);
			//  exit();
			 $this->set(compact('basic','education','pro_details','mach_details','raw_details','id'));
	}
	public function manpowerdetailsview($id=null)
	
	{
		// echo '<pre>';
		// print_r($id);
		// exit();

		$this->viewBuilder()->setLayout('layout');
		
		$this->loadModel('Utilities');
		$this->loadModel('Manpowers');
		$this->loadModel('Units');
	

		$util_details  = $this->Utilities->find('all')->where(['Utilities.project_id'=>$id,'Utilities.is_active'=>1])->toArray();


		$man_details  = $this->Manpowers->find('all')->where(['Manpowers.project_id'=>$id,'Manpowers.is_active'=>1])->toArray();

		$electricity_unit_id = $util_details[0]['unit_id'];
		// $water_unit_id = $util_details[0]['water_unit_id'];
		// $oil_unit_id = $util_details[0]['oil_unit_id'];
		// $other_unit_id = $util_details[0]['other_unit_id'];


		// $raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id])->toArray();

			// $sql="select from utilities


			// select unit.name as uname
			
            // from utilities
			// left join units as unit on unit.id=utilities.electricity_unit_id
			// where utilities.project_id= $id;
			// ";
			$units = $this->Units->find('list',['keyField' => 'id', 'valueField' => 'description'])->toArray();
			
			  // echo '<pre>';
			   //print_r($units[7]);
			//   //print_r($util_details);
			 //  exit();
			 $this->set(compact('basic','education','man_details','util_details','raw_details','id','units'));
	}
	public function profitabilitydetailsview($id=null)
	
	{
		// echo '<pre>';
		// print_r($id);
		// exit();

		$this->viewBuilder()->setLayout('layout');
		
		$this->loadModel('Utilities');
		$this->loadModel('WorkingCapital');
		$this->loadModel('FixedCapitals');
		$this->loadModel('MeansFinance');
		$this->loadModel('Units');
	

		$fixed_capitals  = $this->FixedCapitals->find('all')->where(['FixedCapitals.project_id'=>$id,'FixedCapitals.is_active'=>1])->toArray();


		$working_capital  = $this->WorkingCapital->find('all')->where(['WorkingCapital.project_id'=>$id,'WorkingCapital.is_active'=>1])->toArray();

		$raw_unit_id = $working_capital[0]['unit_id'];
		// $semifinished_unit_id = $working_capital[0]['semifinished_unit_id'];
		// $finished_unit_id = $working_capital[0]['finished_unit_id'];
		// $expenses_unit_id = $working_capital[0]['expenses_unit_id'];
		// $bills_unit_id = $working_capital[0]['bills_unit_id'];

		$project  = $this->Projects->find('all')->where(['Projects.id'=>$id])->toArray();
		$means_finance  = $this->MeansFinance->find('all')->where(['MeansFinance.project_id'=>$id,'MeansFinance.is_active'=>1])->toArray();


		// $raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id])->toArray();


		$units = $this->Units->find('list',['keyField' => 'id', 'valueField' => 'description'])->toArray();
			
			//  echo '<pre>';
			//  print_r($project);
			//  exit();
			 $this->set(compact('basic','education','fixed_capitals','means_finance','working_capital','project','id','units'));
	}
	public function suppliementarydetailsview($id=null)
	
	{
		// echo '<pre>';
		// print_r($id);
		// exit();

		$this->viewBuilder()->setLayout('layout');
		
		$this->loadModel('Utilities');
		$this->loadModel('WorkingCapital');
		$this->loadModel('FixedCapitals');
		$this->loadModel('MeansFinance');
	



		$project  = $this->Projects->find('all')->where(['Projects.id'=>$id])->toArray();
		


		// $raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id])->toArray();


			 
			
			//  echo '<pre>';
			//  print_r($project);
			//  exit();
			 $this->set(compact('project','id'));
	}
	public function referencedetailsview($id=null)
	
	{
		// echo '<pre>';
		// print_r($id);
		// exit();

		$this->viewBuilder()->setLayout('layout');
		
	
		$this->loadModel('UserReferences');
	



		$user_references  = $this->UserReferences->find('all')->where(['UserReferences.project_id'=>$id])->toArray();
		


		// $raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id])->toArray();


			 
			
			//  echo '<pre>';
			//  print_r($project);
			//  exit();
			 $this->set(compact('user_references','id'));
	}
	public function paymentdetailsview($id=null)	
	{
		$this->viewBuilder()->setLayout('layout');	
		$this->loadModel('Projects');
		$this->loadModel('PaymentDetails');
	    $project  = $this->Projects->find('all')->where(['Projects.id'=>$id])->first();		
		$payment_details  = $this->PaymentDetails->find('all')->toArray();
  	 $this->set(compact('payment_details','id','project'));
	}
}