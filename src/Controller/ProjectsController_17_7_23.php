<?php
declare(strict_types=1); 
namespace App\Controller;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use TimeConversion;
 use Razorpay\Api\Api;
 use Razorpay\Api\Errors\SignatureVerificationError;

class ProjectsController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		 $this->paginate = [
		 ];
		 $users = $this->paginate($this->Users);
		$this->set(compact('users'));   
	}
	
	public function basicdetails($id = null)
	{  
		$this->viewBuilder()->setLayout('layout');   	  
	
		if($id != ""){			
			 $project = $this->Projects->get($id, [
			'contain' => [],
		     ]);
			$project = $this->Projects->patchEntity($project, $this->request->getData());
		}else{
            $project = $this->Projects->newEmptyEntity();

		}			
		
		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');

		 	$project->prefix                = $this->request->getData('prefix');
			$project->name                  = $this->request->getData('name');
			$project->dob                   = date('Y-m-d',strtotime($this->request->getData('dob')));
			$project->category_id           = $this->request->getData('category_id');
			$project->education_id          = $this->request->getData('education_id');
			$project->mobile_no             = $this->request->getData('mobile_no');
			$project->email                 = $this->request->getData('email');
			 if($project['step_count'] == ''){
			 $project->step_count            = 1;
			 }
			$project->created_by            = $this->Auth->user('id');
			$project->created_on            = $timedate;
			//echo "<pre>"; print_r($project);  exit();   
			if ($this->Projects->save($project)) {
				if($id == ""){
				    $insert_id = $project->id;
				}else{
					$insert_id = $id;
				}	
				
			   $ProjectTable          = $this->getTableLocator()->get('Projects');
			   $project1              = $ProjectTable->get($insert_id); 
			   $project1->reg_no      = 'R'.date('Ym').sprintf('%03d',$insert_id);
			   $ProjectTable->save($project1);
	
				$this->Flash->success(__('The General Details has been saved.'));
				return $this->redirect(['action' => 'entitydetails/'.$insert_id]);
			}
			$this->Flash->error(__('The Projects could not be saved. Please, try again.'));
		}
		
		$prefix = array('Mr'=>'Mr','Mrs'=>'Mrs','Ms'=>'Ms');
	    $this->loadModel('Categories');
	    $this->loadModel('Educations');
		$categories  = $this->Categories->find('list')->toArray();	
		$educations   = $this->Educations->find('list')->toArray();	
		
	  $this->set(compact('project', 'prefix','categories','educations','id'));
	}
	
	public function entitydetails($id = null)
	{  
		$this->viewBuilder()->setLayout('layout');
		if($id == ""){
		   // $project = $this->Projects->newEmptyEntity();
		}else{
			
			 $project = $this->Projects->get($id, [
			'contain' => [],
		     ]);
			$project = $this->Projects->patchEntity($project, $this->request->getData());
		}
		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();
		    $timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
			$project->unit_name             = $this->request->getData('unit_name');
			$project->sectortype_id         = $this->request->getData('sectortype_id');
			$project->address               = $this->request->getData('address');
			$project->localitytype_id       = $this->request->getData('localitytype_id');
			$project->pincode               = $this->request->getData('pincode');
			$project->state_id              = $this->request->getData('state_id');
			$project->registrationtype_id   = $this->request->getData('registrationtype_id');
			$project->project_cost          = $this->request->getData('project_cost');
			$project->loan_amount           = $this->request->getData('loan_amount');
			$project->loan_type_id          = $this->request->getData('loan_type_id');
			$project->loan_purpose_id       = $this->request->getData('loan_purpose_id');
			if($project['step_count'] <= 1){
			$project->step_count            = 2;
			}
			//$project->created_by            = $this->Auth->user('id');
			$project->updated_on            = $timedate;
			//echo "<pre>"; print_r($project);  exit();
			if ($this->Projects->save($project)) {
				$this->Flash->success(__('The Entity / Unit has been saved.'));			
				$insert_id = $id;			
				return $this->redirect(['action' => 'educationdetails/'.$insert_id]);
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
		
		$this->set(compact('project', 'sectortypes', 'localitytype','registrationtype','loanpurposes','loantypes','states','id'));
	}
	
	public function educationdetails($id = null)
	{	
		$this->viewBuilder()->setLayout('layout');
	    $this->loadModel('EducationQualifications');
	    $this->loadModel('SpecialTrainings');
	    $this->loadModel('WorkExperiance');
		
		  $project   = $this->Projects->find('all')->where(['Projects.id'=>$id])->first();	
		  $education_count  = $this->EducationQualifications->find('all')->where(['EducationQualifications.project_id'=>$id])->count();	
		  $training_count   = $this->SpecialTrainings->find('all')->where(['SpecialTrainings.project_id'=>$id])->count();	
		  $work_count       = $this->WorkExperiance->find('all')->where(['WorkExperiance.project_id'=>$id])->count();
		
		 if($education_count != 0){
		  $education_details  = $this->EducationQualifications->find('all')->contain(['Educations'])->where(['EducationQualifications.project_id'=>$id,'EducationQualifications.is_active'=>1])->toArray();	
		 }
		 //echo "<pre>"; print_r($education_details);  exit();		 
		 
		 if($training_count != 0){
		  $training_details  = $this->SpecialTrainings->find('all')->where(['SpecialTrainings.project_id'=>$id,'SpecialTrainings.is_active'=>1])->toArray();	
		 }
		 
		 if($work_count != 0){
		  $work_details      = $this->WorkExperiance->find('all')->where(['WorkExperiance.project_id'=>$id,'WorkExperiance.is_active'=>1])->toArray();	
		 }
		
		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();
			$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
			
		   foreach($this->request->getData('educationqualification') as $key => $value){
			   if($value['edu_qualification_id'] != ''){
		         $education1  = $this->EducationQualifications->find('all')->where(['EducationQualifications.id'=>$value['edu_qualification_id']])->first();	
			     $educationqualification  = $this->EducationQualifications->patchEntity($education1, $this->request->getData());
				 $educationqualification->updated_by               = $this->Auth->user('id');
			     $educationqualification->updated_on               = $timedate;
			   }else{
			     $educationqualification = $this->EducationQualifications->newEmptyEntity();
                 $educationqualification->created_by               = $this->Auth->user('id');
			     $educationqualification->created_on               = $timedate;				
			   }
			   $educationqualification->project_id               = $id;
			   $educationqualification->education_id             = $value['education_id'];
			   $educationqualification->institute                = $value['institute'];
			   $educationqualification->major_subject            = $value['major_subject'];
			   $educationqualification->year_passing             = $value['year_passing'];			  
			   $educationqualification->is_active                = $value['is_active'];	
              // echo "<pre>"; print_r($educationqualification); 			   
			  $this->EducationQualifications->save($educationqualification);
		   }
		   //exit();
		   
		   foreach($this->request->getData('special') as $key1 => $value1){
			    if($value1['special_training_id'] != ''){
				 $training1  = $this->SpecialTrainings->find('all')->where(['SpecialTrainings.id'=>$value1['special_training_id']])->first();	
			     $training = $this->SpecialTrainings->patchEntity($training1, $this->request->getData());
				 $training->updated_by               = $this->Auth->user('id');
			     $training->updated_on               = $timedate;
			   }else{
			     $training = $this->SpecialTrainings->newEmptyEntity();
                 $training->created_by               = $this->Auth->user('id');
			     $training->created_on               = $timedate;
			   }
			   $training->project_id               = $id;
			   $training->training_in              = $value1['training_in'];
			   $training->institute                = $value1['institute'];
			   $training->from_date                = date('Y-m-d',strtotime($value1['from_date']));
			   $training->to_date                  = date('Y-m-d',strtotime($value1['to_date']));
			   $training->duration                 = $value1['duration'];
			   $training->achievement              = $value1['achievement'];
			   $training->is_active                = $value1['is_active'];	  
			  // echo "<pre>"; print_r($training); 			
			   $this->SpecialTrainings->save($training);
		   }	

          // exit();		   
		   
		   foreach($this->request->getData('work') as $key2 => $value2){			  
			   if($value2['work_experience_id'] != ''){
				 $work1  = $this->WorkExperiance->find('all')->where(['WorkExperiance.id'=>$value2['work_experience_id']])->first();	
			     $work   = $this->WorkExperiance->patchEntity($work1, $this->request->getData());
				 $work->updated_by               = $this->Auth->user('id');
			     $work->updated_on               = $timedate;
			   }else{
			     $work = $this->WorkExperiance->newEmptyEntity();
                 $work->created_by               = $this->Auth->user('id');
			     $work->created_on               = $timedate;
			   }
			   $work->project_id               = $id;
			   $work->organisation             = $value2['organisation'];
			   $work->position                 = $value2['position'];
			   $work->nature_work              = $value2['nature_work'];
			   $work->from_date                = date('Y-m-d',strtotime($value2['from_date']));
			   $work->to_date                  = date('Y-m-d',strtotime($value2['to_date']));
			   $work->duration                 = $value2['duration'];	
			   $work->is_active                = $value2['is_active'];	  
			   
			   $this->WorkExperiance->save($work);
		   }
		   
		   if($project['step_count'] <= 2){
		   $ProjectTable          = $this->getTableLocator()->get('Projects');
		   $project1              = $ProjectTable->get($id); 
		   $project1->step_count  = 3;
		   $ProjectTable->save($project1);
		   }
		   
			$insert_id = $id;			
			return $this->redirect(['action' => 'manufacturingdetails/'.$insert_id]);		
		}		
		
	    $this->loadModel('Educations');
		$educations   = $this->Educations->find('list')->toArray();	
		
	  $this->set(compact('project', 'prefix','categories','educations','id','education_count','training_count','work_count','education_details','training_details','work_details'));
	}
	
	public function manufacturingdetails($id = null)
	{	
		$this->viewBuilder()->setLayout('layout');
	    $this->loadModel('Productions');
	    $this->loadModel('Machineries');
	    $this->loadModel('RawMaterials');
	    $this->loadModel('Units');
		   $project   = $this->Projects->find('all')->where(['Projects.id'=>$id])->first();			
		  $production_count  = $this->Productions->find('all')->where(['Productions.project_id'=>$id])->count();	
		  $machinery_count   = $this->Machineries->find('all')->where(['Machineries.project_id'=>$id])->count();	
		  $raw_count         = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id])->count();
		
		 if($production_count != 0){
		  $production_details  = $this->Productions->find('all')->where(['Productions.project_id'=>$id])->toArray();	
		 }
		 
		 if($machinery_count != 0){
		  $machinery_details   = $this->Machineries->find('all')->where(['Machineries.project_id'=>$id])->toArray();	
		
		 }
		 
		 if($raw_count != 0){
		  $raw_details      = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id])->toArray();	
		 }
		
		if ($this->request->is(['patch', 'post', 'put'])) {  //echo "<pre>"; print_r($this->request->getData());  exit();
		 $timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
		
		   foreach($this->request->getData('production') as $key => $value){
			   if($value['production_id'] != ''){
				 $production1  = $this->Productions->find('all')->where(['Productions.id'=>$value['production_id']])->first();	
			     $production   = $this->Productions->patchEntity($production1, $this->request->getData());
				 $production->updated_by               = $this->Auth->user('id');
			     $production->update_on                = $timedate;
			   }else{
			     $production = $this->Productions->newEmptyEntity();
                 $production->created_by               = $this->Auth->user('id');
			     $production->created_on               = $timedate;				
			   }
			   $production->project_id               = $id;
			   $production->item                     = $value['item'];
			   $production->quantity                 = $value['quantity'];
			   $production->unit_id                  = $value['unit_id'];
			   $production->revenue_year             = $value['revenue_year'];
	           $production->capacity_utilisation     = $value['capacity_utilisation'];	
			   $this->Productions->save($production);
		   }		
		   
		   foreach($this->request->getData('machinery') as $key1 => $value1){
			    if($value1['machinery_id'] != ''){
				 $machinery1  = $this->Machineries->find('all')->where(['Machineries.id'=>$value1['machinery_id']])->first();	
			     $machinery   = $this->Machineries->patchEntity($machinery1, $this->request->getData());
				 $machinery->updated_by             = $this->Auth->user('id');
			     $machinery->update_on              = $timedate;
			   }else{
			     $machinery = $this->Machineries->newEmptyEntity();
                 $machinery->created_by             = $this->Auth->user('id');
			     $machinery->created_on             = $timedate;
			   }
			   $machinery->project_id               = $id;
			   $machinery->description              = $value1['description'];
			   $machinery->quantity                 = $value1['quantity'];
			   $machinery->price                    = $value1['price'];
			   $machinery->total_value              = $value1['total_value'];
			   $machinery->suppliername             = $value1['suppliername'];			  
			   $machinery->supplieraddress          = $value1['supplieraddress'];			  
			   $this->Machineries->save($machinery);
		   }		   
		   
		   foreach($this->request->getData('raw') as $key2 => $value2){			  
			   if($value2['raw_id'] != ''){
				 $raw1  = $this->RawMaterials->find('all')->where(['RawMaterials.id'=>$value2['raw_id']])->first();	
			     $raw   = $this->RawMaterials->patchEntity($raw1, $this->request->getData());
				 $raw->updated_by               = $this->Auth->user('id');
			     $raw->update_on                = $timedate;
			   }else{
			     $raw = $this->RawMaterials->newEmptyEntity();
                 $raw->created_by               = $this->Auth->user('id');
			     $raw->created_on               = $timedate;
			   }
			   $raw->project_id                = $id;
			   $raw->item                      = $value2['item'];
			   $raw->quantity                  = $value2['quantity'];
			   $raw->unit_id                   = $value2['unit_id'];
			   $raw->value                     = $value2['value'];
			   $raw->revenue_year              = $value2['revenue_year'];
			   $raw->capacity_utilisation      = $value2['capacity_utilisation'];			  
			   $this->RawMaterials->save($raw); 
		   }
		   
		   if($project['step_count'] <= 3){
			$ProjectTable          = $this->getTableLocator()->get('Projects');
			$project1              = $ProjectTable->get($id); 
			$project1->step_count  = 4;
			$ProjectTable->save($project1);
		   }
			$insert_id = $id;			
			return $this->redirect(['action' => 'manpowerdetails/'.$insert_id]);  	 	
		} 

     		$units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();
		
		
	  $this->set(compact('units','project', 'prefix','categories','production','id','production_count','machinery_count','raw_count','production_details','machinery_details','raw_details'));
	}
	
	public function manpowerdetails($id = null)
	{	
		$this->viewBuilder()->setLayout('layout');
	    $this->loadModel('Utilities');
	    $this->loadModel('Manpowers');
	    $this->loadModel('Units');
	
		  $utilities_count  = $this->Utilities->find('all')->where(['Utilities.project_id'=>$id])->count();	
		  $manpower_count   = $this->Manpowers->find('all')->where(['Manpowers.project_id'=>$id])->count();	
		
		 if($utilities_count != 0){
		  $utilities  = $this->Utilities->find('all')->where(['Utilities.project_id'=>$id])->first();	
		 }		 
		 if($manpower_count != 0){
		  $manpower   = $this->Manpowers->find('all')->where(['Manpowers.project_id'=>$id])->first();	
		 }		 		
		
		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();
		   $timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
		
		   if($this->request->getData('electricity_requirement') != ''){
			   if($this->request->getData('utility_id') != ''){
			     $utilities = $this->Utilities->patchEntity($utilities, $this->request->getData());
				 $utilities->updated_by               = $this->Auth->user('id');
			     $utilities->updated_on               = $timedate;
			   }else{
			     $utilities = $this->Utilities->newEmptyEntity();
                 $utilities->created_by               = $this->Auth->user('id');
			     $utilities->created_on               = $timedate;				
			   }
			   $utilities->project_id                 = $id;
			   $utilities->electricity_requirement    = $this->request->getData('electricity_requirement');
			   $utilities->electricity_unit_id        = $this->request->getData('electricity_unit_id');
			   $utilities->electricity_expenses       = $this->request->getData('electricity_expenses');
			   $utilities->electricity_remarks        = $this->request->getData('electricity_remarks');
			   $utilities->water_requirement          = $this->request->getData('water_requirement');			  
			   $utilities->water_unit_id              = $this->request->getData('water_unit_id');			  
			   $utilities->water_expenses             = $this->request->getData('water_expenses');			  
			   $utilities->water_remarks              = $this->request->getData('water_remarks');			  
			   $utilities->oil_requirement            = $this->request->getData('oil_requirement');			  
			   $utilities->oil_unit_id                = $this->request->getData('oil_unit_id');			  
			   $utilities->oil_expenses               = $this->request->getData('oil_expenses');	  
			   $utilities->oil_remarks                = $this->request->getData('oil_remarks');	  
			   $utilities->other_requirement          = $this->request->getData('other_requirement');	  
			   $utilities->other_unit_id              = $this->request->getData('other_unit_id');	  
			   $utilities->other_expenses             = $this->request->getData('other_expenses');	  
			   $utilities->other_remarks              = $this->request->getData('other_remarks');	  
			   $utilities->total_expenses             = $this->request->getData('total_expenses');	  
			   $this->Utilities->save($utilities);
		   }		
		   
		   if($this->request->getData('skilled_no') != ''){
			   if($this->request->getData('manpower_id') != ''){
			     $manpower = $this->Manpowers->patchEntity($manpower, $this->request->getData());
				 $manpower->updated_by               = $this->Auth->user('id');
			     $manpower->updated_on               = $timedate;
			   }else{
			     $manpower = $this->Manpowers->newEmptyEntity();
                 $manpower->created_by               = $this->Auth->user('id');
			     $manpower->created_on               = $timedate;				
			   }
			   $manpower->project_id                 = $id;
			   $manpower->skilled_no                 = $this->request->getData('skilled_no');
			   $manpower->skilled_salaries           = $this->request->getData('skilled_salaries');
			   $manpower->skilled_remarks            = $this->request->getData('skilled_remarks');
			   $manpower->unskilled_no               = $this->request->getData('unskilled_no');			  
			   $manpower->unskilled_salaries         = $this->request->getData('unskilled_salaries');			  
			   $manpower->unskilled_remarks          = $this->request->getData('unskilled_remarks');			  
			   $manpower->semiskilled_no             = $this->request->getData('semiskilled_no');			  
			   $manpower->semiskilled_salaries       = $this->request->getData('semiskilled_salaries');	  
			   $manpower->semiskilled_remarks        = $this->request->getData('semiskilled_remarks');	  
			   $manpower->office_no                  = $this->request->getData('office_no');	  
			   $manpower->office_salaries            = $this->request->getData('office_salaries');	  
			   $manpower->office_remarks             = $this->request->getData('office_remarks');	  
			   $manpower->total_salaries             = $this->request->getData('total_salaries');	  
			   $this->Manpowers->save($manpower);
		   }

          if($project['step_count'] <= 4){
			$ProjectTable          = $this->getTableLocator()->get('Projects');
			$project1              = $ProjectTable->get($id); 
			$project1->step_count  = 5;
			$ProjectTable->save($project1);
		   }			   
		   
			$insert_id = $id;			
			return $this->redirect(['action' => 'projectcostdetails/'.$insert_id]);		
		} 
         $units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();
		
		
	  $this->set(compact('project', 'prefix','categories','production','id','utilities_count','manpower_count','utilities','manpower','units'));
	}
	
	public function projectcostdetails($id = null)
	{	
		$this->viewBuilder()->setLayout('layout');
	    $this->loadModel('FixedCapitals');
	    $this->loadModel('WorkingCapital');
	    $this->loadModel('MeansFinance');
	    $this->loadModel('Units');
		
		  $fixed_count        = $this->FixedCapitals->find('all')->where(['FixedCapitals.project_id'=>$id])->count();	
		  $working_count      = $this->WorkingCapital->find('all')->where(['WorkingCapital.project_id'=>$id])->count();	
		  
		  $project  = $this->Projects->find('all')->where(['Projects.id'=>$id])->first();
		
		 if($fixed_count != 0){
		   $fixed_capital     = $this->FixedCapitals->find('all')->where(['FixedCapitals.project_id'=>$id])->first();	
		 }
		 
		 if($working_count != 0){
		   $working_capital   = $this->WorkingCapital->find('all')->where(['WorkingCapital.project_id'=>$id])->first();	
		 }
		 
		
		
		if ($this->request->is(['patch', 'post', 'put'])) {  //echo "<pre>"; print_r($this->request->getData());  exit(); 
         	 $timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');		
		
		     if($this->request->getData('total_value') != ''){
			   if($this->request->getData('fixed_capital_id') != ''){
			     $fixed = $this->FixedCapitals->patchEntity($fixed_capital, $this->request->getData());
				 $fixed->updated_by               = $this->Auth->user('id');
			     $fixed->updated_on               = $timedate;
			   }else{
			     $fixed = $this->FixedCapitals->newEmptyEntity();
                 $fixed->created_by               = $this->Auth->user('id');
			     $fixed->created_on               = $timedate;				
			   }
			   $fixed->project_id                  = $id;
			   $fixed->land_value                  = $this->request->getData('land_value');
			   $fixed->machinery_value             = $this->request->getData('machinery_value');
			   $fixed->furniture_value             = $this->request->getData('furniture_value');
			   $fixed->total_value                 = $this->request->getData('total_value');			  
			   $this->FixedCapitals->save($fixed);
		   }	

            if($this->request->getData('raw_duration') != ''){
			   if($this->request->getData('working_capital_id') != ''){
			     $working_capital = $this->WorkingCapital->patchEntity($working_capital, $this->request->getData());
				 $working_capital->updated_by               = $this->Auth->user('id');
			     $working_capital->updated_on               = $timedate;
			   }else{
			     $working_capital = $this->WorkingCapital->newEmptyEntity();
                 $working_capital->created_by               = $this->Auth->user('id');
			     $working_capital->created_on               = $timedate;				
			   }
			   $working_capital->project_id                  = $id;
			   $working_capital->raw_duration                = $this->request->getData('raw_duration');
			   $working_capital->raw_quantity                = $this->request->getData('raw_quantity');
			   $working_capital->raw_unit_id                 = $this->request->getData('raw_unit_id');
			   $working_capital->raw_value                   = $this->request->getData('raw_value');
			   $working_capital->semifinished_duration       = $this->request->getData('semifinished_duration');			  
			   $working_capital->semifinished_quantity       = $this->request->getData('semifinished_quantity');
			   $working_capital->semifinished_unit_id        = $this->request->getData('semifinished_unit_id');			   
			   $working_capital->semifinished_value          = $this->request->getData('semifinished_value');			  
			   $working_capital->finished_duration           = $this->request->getData('finished_duration');			  
			   $working_capital->finished_quantity           = $this->request->getData('finished_quantity');
			   $working_capital->finished_unit_id            = $this->request->getData('finished_unit_id');		   
			   $working_capital->finished_value              = $this->request->getData('finished_value');			  
			   $working_capital->expenses_duration           = $this->request->getData('expenses_duration');			  
			   $working_capital->expenses_quantity           = $this->request->getData('expenses_quantity');
			   $working_capital->expenses_unit_id            = $this->request->getData('expenses_unit_id');			   
			   $working_capital->expenses_value              = $this->request->getData('expenses_value');			  
			   $working_capital->bills_duration              = $this->request->getData('bills_duration');			  
			   $working_capital->bills_quantity              = $this->request->getData('bills_quantity');			  
			   $working_capital->bills_unit_id               = $this->request->getData('bills_unit_id');			  
			   $working_capital->bills_value                 = $this->request->getData('bills_value');			  
			   $working_capital->total_value                 = $this->request->getData('total_working_value');			  
			   $this->WorkingCapital->save($working_capital);
		   }	

            if($this->request->getData('preliminary_expenses') != ''){
				$ProjectTable          = $this->getTableLocator()->get('Projects');
				$project1              = $ProjectTable->get($id); 
				$project1->preliminary_expenses  = $this->request->getData('preliminary_expenses');
				$ProjectTable->save($project1);
		   }			   
		   


           if($project['step_count'] <= 5){
			$ProjectTable          = $this->getTableLocator()->get('Projects');
			$project1              = $ProjectTable->get($id); 
			$project1->step_count  = 6;
			$ProjectTable->save($project1);
		   }			   
		   		   
		   
			$insert_id = $id;			
			return $this->redirect(['action' => 'profitabilitydetails/'.$insert_id]);		
		}

         $units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();
		
		
	  $this->set(compact('units','project', 'prefix','categories','production','id','production_count','training_count','fixed_capital','working_capital','means_Finance'));
	}
	
	public function profitabilitydetails($id = null){
	  $this->viewBuilder()->setLayout('layout');
	  $this->loadModel('RawMaterials');
	  $this->loadModel('MeansFinance');
			
	    $financemeans_count = $this->MeansFinance->find('all')->where(['MeansFinance.project_id'=>$id])->count();
	
	    if($financemeans_count != 0){
		   $means_Finance     = $this->MeansFinance->find('all')->where(['MeansFinance.project_id'=>$id])->first();	
		 }

	     $project  = $this->Projects->find('all')->where(['Projects.id'=>$id])->first();	
	   
	     $connection            = ConnectionManager::get('default');
		 $query                 = "SELECT 
		                           u.total_expenses as expenses,
		                           m.total_salaries as salaries  		                          
		                           FROM projects as p 
		                           LEFT JOIN  utilities as  u on  u.project_id = p.id
		                           LEFT JOIN  manpowers as  m on  m.project_id = p.id
		                           LEFT JOIN  raw_materials as  r on  r.project_id = p.id
								   where p.id = ".$id."
								   ";
	    $project_expense       = $connection->execute($query)->fetchAll('assoc');
		
		    $total_value    = $this->RawMaterials->find();
			$count_quantity = $total_value->select(['sum' => $total_value->func()->sum('RawMaterials.revenue_year')])->first();
			$sum_total      = $count_quantity->sum;	
	
		
		$manufacturing_expenses = $project_expense[0]['expenses']+$project_expense[0]['salaries']+$sum_total;		
	
	    if ($this->request->is(['patch', 'post', 'put'])) { // echo "<pre>"; print_r($this->request->getData());  exit();  
			$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
			
		   if($this->request->getData('capital_finance_value') != ''){
			   if($this->request->getData('mean_finance_id') != ''){
			     $means_Finance = $this->MeansFinance->patchEntity($means_Finance, $this->request->getData());
				 $means_Finance->updated_by               = $this->Auth->user('id');
			     $means_Finance->updated_on               = $timedate;
			   }else{
			     $means_Finance = $this->MeansFinance->newEmptyEntity();
                 $means_Finance->created_by               = $this->Auth->user('id');
			     $means_Finance->created_on               = $timedate;				
			   }
			   $means_Finance->project_id                  = $id;
			   $means_Finance->capital_finance_value       = $this->request->getData('capital_finance_value');
			   $means_Finance->capital_finance_remark      = $this->request->getData('capital_finance_remark');
			   $means_Finance->subsidy_value               = $this->request->getData('subsidy_value');
			   $means_Finance->subsidy_remark              = $this->request->getData('subsidy_remark');			  
			   $means_Finance->loan_value                  = $this->request->getData('loan_value');			  
			   $means_Finance->loan_remark                 = $this->request->getData('loan_remark');			  
			   $means_Finance->investment_value            = $this->request->getData('investment_value');			  
			   $means_Finance->investment_remark           = $this->request->getData('investment_remark');			  
			   $means_Finance->other_value                 = $this->request->getData('other_value');			  
			   $means_Finance->other_remark                = $this->request->getData('other_remark');			  
			   $this->MeansFinance->save($means_Finance);
		   }

			 if($this->request->getData('sales_revenue') != ''){
				$ProjectTable          = $this->getTableLocator()->get('Projects');
				$project1              = $ProjectTable->get($id); 
				$project1->sales_revenue           = $this->request->getData('sales_revenue');
				$project1->manufacturing_expenses  = $this->request->getData('manufacturing_expenses');
				$project1->distribution_expenses   = $this->request->getData('distribution_expenses');
				$project1->administrative_expenses = $this->request->getData('administrative_expenses');
				$project1->interest_loan           = $this->request->getData('interest_loan');
				$project1->depreciation            = $this->request->getData('depreciation');
				$project1->gross_profit            = $this->request->getData('gross_profit');
				$project1->income_tax              = $this->request->getData('income_tax');
				$project1->net_profit              = $this->request->getData('net_profit');
				if($project['step_count'] <= 6){
				$project1->step_count              = 7;
				}
				$project1->updated_on             = $timedate;
				$ProjectTable->save($project1);
				 $insert_id = $id;			
				 return $this->redirect(['action' => 'suppliementarydetails/'.$insert_id]);	
		   }			
		}		
	   $this->set(compact('project','id','manufacturing_expenses','means_Finance'));	
	}
	
	public function suppliementarydetails($id = null){
	  $this->viewBuilder()->setLayout('layout');
	   $project  = $this->Projects->find('all')->where(['Projects.id'=>$id])->first();		   
	     
	    if ($this->request->is(['patch', 'post', 'put'])) { // echo "<pre>"; print_r($this->request->getData());  exit();  
			$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
			 if($this->request->getData('own_house') != ''){
				$ProjectTable                    = $this->getTableLocator()->get('Projects');
				$project1                        = $ProjectTable->get($id); 
				$project1->own_house             = $this->request->getData('own_house');
				$project1->own_insurance_policy  = $this->request->getData('own_insurance_policy');
				$project1->interest_other_firms  = $this->request->getData('interest_other_firms');
				$project1->monthly_income        = $this->request->getData('monthly_income');
				if($project['step_count'] <= 7){
				$project1->step_count            = 8;
				}
				$project1->updated_on            = $timedate;

				$ProjectTable->save($project1);
				 $insert_id = $id;			
				 return $this->redirect(['action' => 'referencedetails/'.$insert_id]);	
		   }			
		}		
	   $this->set(compact('project','id','manufacturing_expenses'));	
	}
	
	public function referencedetails($id = null){
	  $this->viewBuilder()->setLayout('layout');
	  $this->loadModel('UserReferences');

	   $project  = $this->Projects->find('all')->where(['Projects.id'=>$id])->first();		
       $reference_count       = $this->UserReferences->find('all')->where(['UserReferences.project_id'=>$id])->count();
		
		 if($reference_count != 0){
		  $reference_details  = $this->UserReferences->find('all')->where(['UserReferences.project_id'=>$id])->toArray();	
		 }		 	   
	     
	    if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();  
			$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');

			foreach($this->request->getData('reference') as $key => $value){
			   if($value['reference_id'] != ''){
		         $reference  = $this->UserReferences->find('all')->where(['UserReferences.id'=>$value['reference_id']])->first();	
			     $reference  = $this->UserReferences->patchEntity($reference, $this->request->getData());
				 $reference->modified_by               = $this->Auth->user('id');
			     $reference->modified_on               = date('Y-m-d H:i:s');
			   }else{
			     $reference = $this->UserReferences->newEmptyEntity();
                 $reference->created_by               = $this->Auth->user('id');
			     $reference->created_on               = date('Y-m-d H:i:s');				
			   }
			   $reference->project_id            = $id;
			   $reference->name                  = $value['name'];
			   $reference->address               = $value['address'];
			   $reference->occupation            = $value['occupation'];
			   $this->UserReferences->save($reference);
		   }
		   
		   if($project['step_count'] <= 8){
			$ProjectTable          = $this->getTableLocator()->get('Projects');
			$project1              = $ProjectTable->get($id); 
			$project1->step_count  = 9;
			$ProjectTable->save($project1);
		   }
           $insert_id = $id;			
	       return $this->redirect(['action' => 'paymentdetails/'.$insert_id]);			   
		}		
	   $this->set(compact('project','id','reference_details','reference_count'));	
	}
	
	public function paymentdetails($id = null){
	  $this->viewBuilder()->setLayout('layout');
	  $this->loadModel('PaymentDetails');
	  $this->loadModel('Razorpaytransactions');
	  
	   $project  = $this->Projects->find('all')->where(['Projects.id'=>$id])->first();		
	   $payment_Details  = $this->PaymentDetails->find('all')->toArray();  			 	   
	     
	    if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit(); 
           $timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta'); 		
		   
		   if($project['step_count'] <= 9){
			$ProjectTable          = $this->getTableLocator()->get('Projects');
			$project1              = $ProjectTable->get($id); 
			$project1->step_count  = 10;
			$ProjectTable->save($project1);	 
		   }
           //$transaction 	= $this->Razorpaytransactions->find('all')->order(['reforder DESC'])->first;
		       $transaction1 	= $this->Razorpaytransactions->find('all',[ 'order' => ['Razorpaytransactions.reforder' => 'DESC'] ])->first();

				if($transaction1['reforder'] != ''){
					$reforder	= $transaction1['reforder']+1;
				}else{
					$reforder 	= 1;
				}
				$amount = 1.00;
		 
		 	   $transaction = $this->Razorpaytransactions->newEmptyEntity();
		       $transaction->project_id             = $id;
		       $transaction->orderno                = 'ITCOTP'.date('Y').$reforder;
			   $transaction->reforder               = $reforder;
			   $transaction->user_id                = $this->Auth->user('id');
			   $transaction->payment_date           = date('Y-m-d');
			   $transaction->payment_amount         = $amount;			  
			   $transaction->status                 = 0;			  
			   $transaction->transaction_number     = '';			  
			   $transaction->transaction_amount     = '';			  
			   $transaction->transaction_date       = null;			  
			   $transaction->created_by             = $this->Auth->user('id');
			   $transaction->created_date           = $timedate;
			   //$this->Razorpaytransactions->save($transaction);
			   $this->Razorpaytransactions->save($transaction);  		
	       return $this->redirect(['action' => 'projectpaymentrequest']);			   
		}		
	   $this->set(compact('project','id','payment_Details','reference_count'));	
	}
	
	public function termsandconditions(){
	
	}
	
	public function projectpaymentrequest(){
		 $this->viewBuilder()->setLayout('layout');
		 $this->loadModel('Users');		  
		 $this->loadModel('Razorpaytransactions');		  
		 $user  = $this->Users->find('all')->where(['Users.id'=>$this->Auth->User('id')])->first();			 
		 
		   $project 	  = $this->Projects->find('all')->where(['Projects.created_by'=>$this->Auth->User('id')])->toArray();	          
		   $transaction   = $this->Razorpaytransactions->find('all')->where(['Razorpaytransactions.project_id'=>$project[0]['id']])->first();		
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
 
	     $this->set(compact('user','transactionID','project','data'));			
	}
	
	public function paymentresponse(){
	    if ($this->request->is(['patch', 'post', 'put'])) {   //echo "<pre>"; print_r($this->request->getData());  exit();  
			$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
			$this->loadModel('Razorpaypayments');
			$this->loadModel('Razorpaymentlogs');
			$this->loadModel('Razorpaytransactions');
			//TEST
			$keyId 				= 'rzp_test_ojO7qpKsc78uJs';
			$keySecret 			= 'X60nQ7UoMPls7bUI1x8Vt0O7';
			//Live
			// $keyId 				= 'rzp_live_5PgvhwCiaCQ1pZ';
			// $keySecret 			= 'V3RMSJh9IZV3jefipqpD9ecj';
			$merchant 			= 'BVwveDfSM6ynHP';
			$api 				= new Api($keyId, $keySecret);			
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
					$paymentTable                = $this->getTableLocator()->get('Razorpaytransactions');
					$payment                     = $paymentTable->get($transactions['id']); 
					$payment->status             = 1;
					$payment->transactionstatus  = 'Success';
					$payment->paymentno          = 1;
					$payment->transaction_amount = $payments['amount']/100;
					$payment->transaction_date   = $timedate;
					$paymentTable->save($payment);
					
					//$project1 	= $this->Projects->find('all')->order(['Projects.id DESC'])->first();
				    //$project1 	        = $this->Projects->find('all',[ 'order' => ['Projects.id' => 'DESC']])->first();
				    $projectpaidcount 	= $this->Projects->find('all')->where(['Projects.payment_status'=>1])->count();
					
					if($projectpaidcount == 0){
						$project_no = 1;
					}else{
						$project_no	= $projectpaidcount+1;
					}
					
					$projectTable                 = $this->getTableLocator()->get('Projects');
					$project                      = $projectTable->get($transactions['project_id']); 
					$project->transaction_amount  = $payments['amount']/100;
					$project->transaction_number  = $payments['order_id'];
					$project->transaction_date    = $timedate;
					$project->project_no          = 'ITCOT'.date('Ym').sprintf('%02d',$project_no);
					$project->project_status      = 0;
					$project->payment_status      = 1;
					$projectTable->save($project);			
					
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
					$Razorpay->transaction_date 	                   = $timedate;
					$Razorpay->receipt_no 	                           = 'ITC/'.date('y').'/'.$receiptref; 
					$Razorpay->receipt_ref_no 	                       = $receiptref; 
					$Razorpay->created_by 	                           = $this->Auth->User('id');
					$Razorpay->created_date 	                       = $timedate;
					$this->Razorpaypayments->save($Razorpay);	
				}
			}else{
					$paymentTable                = $this->getTableLocator()->get('Razorpaytransactions');
					$payment                     = $paymentTable->get($transactions['id']); 
					$payment->status             = 2;
					$payment->transactionstatus  = 'Failed';
					$paymentTable->save($payment);				
				if($transactions['project_id'] != 0){
				    $projectTable                 = $this->getTableLocator()->get('Projects');
					$project                      = $projectTable->get($transactions['project_id']); 
					$project->transaction_amount  = $payments['amount']/100;
					$project->transaction_number  = $payments['order_id'];
					$project->transaction_date    = $timedate;
					$project->payment_status      = $payments['status'];
					$projectTable->save($project);			
				
				}else{
					//$this->Muzhumalarchi->updateAll(array("paid" =>2,"status"=>3), array('Muzhumalarchi.id' => $transactions['Transaction']['muzhumalarchi_id']));
				}
			}
			if($transactions['project_id'] != 0){
				$this->redirect(array('controller' => 'Projects', 'action' => 'paymentresponseview',$transactions['id']));
			}elseif($transactions['muzhumalarchi_id'] != 0){
				$this->redirect(array('controller' => 'Pages', 'action' => 'paymentmmresponse',$transactions['id']));
			}
		}				
	}
	
	public function paymentresponseview($id = null){
	   $this->viewBuilder()->setLayout('layout');
	   $this->loadModel('Users');
	   $this->loadModel('Razorpaytransactions');
	   $user           = $this->Users->find('all')->where(['Users.id'=>$this->Auth->User('id')])->first();			 
	   $project 	   = $this->Projects->find('all')->where(['Projects.created_by'=>$this->Auth->User('id')])->toArray();	          
	   $transactions   = $this->Razorpaytransactions->find('all')->where(['Razorpaytransactions.id'=>$id])->first();		
		
	   $this->set(compact('transactions','project','user'));	
	}
	
	public function ajaxaddeducation($j = null){		
		$this->loadModel('Educations');
		$educations   = $this->Educations->find('list')->toArray();			
	    $this->set(compact('j','educations'));		
	}
	
	public function ajaxaddtraining($j = null){		
		$this->set(compact('j'));		
	}
	
	public function ajaxaddworkexperience($j = null){		
		    $this->set(compact('j'));		
	}
	
	public function ajaxaddproduction($j = null){	
     		$this->loadModel('Units');
			$units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();	
		    $this->set(compact('j','units'));		
	}
	
	public function ajaxaddmachinery($j = null){		
		    $this->set(compact('j'));		
	} 
	public function ajaxaddrawmaterials($j = null){	
 		    $this->loadModel('Units');
			$units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();	
		    $this->set(compact('j','units'));		
	}
	public function ajaxaddreference($j = null){		
		    $this->set(compact('j'));		
	}
	
	
}