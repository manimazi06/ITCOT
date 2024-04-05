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
		$projects  = $this->Projects->find('all')->where(['Projects.payment_Status'=>1])->toArray();		
		$this->set(compact('projects'));   
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

		$basics = $this->Projects->get($id, [
			'contain' => ['Categories', 'Educations', 'Sectortypes', 'Localitytype', 'Registrationtype', 'States', 'LoanTypes', 'LoanPurposes'],
		]);		

		$education_details  = $this->EducationQualifications->find('all')->contain(['Educations'])->where(['EducationQualifications.project_id' => $id])->toArray();
		$training_details  = $this->SpecialTrainings->find('all')->where(['SpecialTrainings.project_id' => $id])->toArray();
		$work_details  = $this->WorkExperiance->find('all')->where(['WorkExperiance.project_id' => $id])->toArray();
		// Manufacturingdetails
		$pro_details  = $this->Productions->find('all')->where(['Productions.project_id' => $id])->toArray();
		$mach_details  = $this->Machineries->find('all')->where(['Machineries.project_id' => $id])->toArray();
		$raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id' => $id])->toArray();
		// Manpower details

		$util_details  = $this->Utilities->find('all')->where(['Utilities.project_id' => $id])->toArray();
		$man_details  = $this->Manpowers->find('all')->where(['Manpowers.project_id' => $id])->toArray();
		//Profitabilitydetails
		$fixed_capitals  = $this->FixedCapitals->find('all')->where(['FixedCapitals.project_id' => $id])->toArray();
		$working_capital  = $this->WorkingCapital->find('all')->where(['WorkingCapital.project_id' => $id])->toArray();
		$project  = $this->Projects->find('all')->where(['Projects.id' => $id])->toArray();
		$means_finance  = $this->MeansFinance->find('all')->where(['MeansFinance.project_id' => $id])->toArray();
		$user_references  = $this->UserReferences->find('all')->where(['UserReferences.project_id' => $id])->toArray();
		$payment_details  = $this->PaymentDetails->find('all')->toArray();

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
			'payment_details','id'
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
		$states         = $this->States->find('list')->toArray();	
		
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
		

		

		$pro_details  = $this->Productions->find('all')->where(['Productions.project_id'=>$id])->toArray();


		$mach_details  = $this->Machineries->find('all')->where(['Machineries.project_id'=>$id])->toArray();


		$raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id])->toArray();


			 
			
			//  echo '<pre>';
			//  print_r($raw_details);
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
	

		$util_details  = $this->Utilities->find('all')->where(['Utilities.project_id'=>$id])->toArray();


		$man_details  = $this->Manpowers->find('all')->where(['Manpowers.project_id'=>$id])->toArray();


		// $raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id])->toArray();


			 
			
			//  echo '<pre>';
			//  print_r($man_details);
			//  exit();
			 $this->set(compact('basic','education','man_details','util_details','raw_details','id'));
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
	

		$fixed_capitals  = $this->FixedCapitals->find('all')->where(['FixedCapitals.project_id'=>$id])->toArray();


		$working_capital  = $this->WorkingCapital->find('all')->where(['WorkingCapital.project_id'=>$id])->toArray();

		$project  = $this->Projects->find('all')->where(['Projects.id'=>$id])->toArray();
		$means_finance  = $this->MeansFinance->find('all')->where(['MeansFinance.project_id'=>$id])->toArray();


		// $raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id])->toArray();


			 
			
			//  echo '<pre>';
			//  print_r($project);
			//  exit();
			 $this->set(compact('basic','education','fixed_capitals','means_finance','working_capital','project','id'));
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