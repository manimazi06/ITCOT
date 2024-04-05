<?php
declare(strict_types=1); 
namespace App\Controller;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

 // use Razorpay\Api\Api;
 // use Razorpay\Api\Errors\SignatureVerificationError;
 use Firebase\JWT\JWT;
 use Firebase\JWT\Key;

 //use TimeConversion;

class ProjectsController extends AppController
{
    
	public function index(){
		$this->viewBuilder()->setLayout('layout');
		 $this->paginate = [
		 ];
		 $users = $this->paginate($this->Users);
		$this->set(compact('users'));   
	}
	public function projectreport(){
		$this->viewBuilder()->setLayout('layout');
		$this->viewBuilder()->setLayout('layout');
		$projects = $this->Projects->find('all')->where(['Projects.is_active'=>1,'Projects.created_by'=>$this->Auth->User('id')])->toArray();			
	
		$this->set(compact('projects'));   
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
			//$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');

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
			$project->created_on            = date('Y-m-d H:i:s');
			//echo "<pre>"; print_r($project);  exit();   
			if ($this->Projects->save($project)) {
				if($id == ""){
				    $insert_id = $project->id;
				}else{
					$insert_id = $id;
				}	
				
				$insert_encode= base64_encode($insert_id);
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

	function moneyFormatIndia($num) {
		$explrestunits = "" ;
		if(strlen($num)>3) {
			$lastthree = substr($num, strlen($num)-3, strlen($num));
			$restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
			$restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
			$expunit = str_split($restunits, 2);
			for($i=0; $i<sizeof($expunit); $i++) {
				// creates each of the 2's group and adds a comma to the end
				if($i==0) {
					$explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
				} else {
					$explrestunits .= $expunit[$i].",";
				}
			}
			$thecash = $explrestunits.$lastthree;
		} else {
			$thecash = $num;
		}
		return $thecash; // writes the final format where $currency is the currency symbol.
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
			 
		
			// echo '<pre>';
			// print_r($project);
			// exit();
		}
		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();
		   // $timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
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
			$project->others_name          = $this->request->getData('others_name');
			$project->loan_purpose_id       = $this->request->getData('loan_purpose_id');
			if($project['step_count'] <= 1){
			$project->step_count            = 2;
			}
			//$project->created_by            = $this->Auth->user('id');
			$project->updated_on            = date('Y-m-d H:i:s');
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
		  $education_count  = $this->EducationQualifications->find('all')->where(['EducationQualifications.project_id'=>$id,'EducationQualifications.is_active'=>1])->count();	
		  $training_count   = $this->SpecialTrainings->find('all')->where(['SpecialTrainings.project_id'=>$id,'SpecialTrainings.is_active'=>1])->count();	
		  $work_count       = $this->WorkExperiance->find('all')->where(['WorkExperiance.project_id'=>$id,'WorkExperiance.is_active'=>1])->count();
		
		 if($education_count != 0){
		  $education_details  = $this->EducationQualifications->find('all')->contain(['Educations'])->where(['EducationQualifications.project_id'=>$id,'EducationQualifications.is_active'=>1])->toArray();	
		 }
		 //echo "<pre>"; print_r($education_details);  exit();		 
		 
		 if($training_count != 0){
		  $training_details  = $this->SpecialTrainings->find('all')->where(['SpecialTrainings.project_id'=>$id,'SpecialTrainings.is_active'=>1])->toArray();	
		 }
		//  echo "<pre>";
		//   print_r(gettype($training_details[0]['from_date']));  exit();

		  $date=(($training_details[0]['from_date']));
		  $date_type=($date);
		//   echo "<pre>";
		//   print_r(($date));  exit();

		 if($work_count != 0){
		  $work_details      = $this->WorkExperiance->find('all')->where(['WorkExperiance.project_id'=>$id,'WorkExperiance.is_active'=>1])->toArray();	
		 }
		
		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
			
		   foreach($this->request->getData('educationqualification') as $key => $value){
			   if($value['edu_qualification_id'] != ''){
		         $education1  = $this->EducationQualifications->find('all')->where(['EducationQualifications.id'=>$value['edu_qualification_id']])->first();	
			     $educationqualification  = $this->EducationQualifications->patchEntity($education1, $this->request->getData());
				 $educationqualification->updated_by               = $this->Auth->user('id');
			     $educationqualification->updated_on               = date('Y-m-d H:i:s');
			   }else{
			     $educationqualification = $this->EducationQualifications->newEmptyEntity();
                 $educationqualification->created_by               = $this->Auth->user('id');
			     $educationqualification->created_on               = date('Y-m-d H:i:s');				
			   }
			   $educationqualification->project_id               = $id;
			   $educationqualification->education_id             = $value['education_id'];
			   $educationqualification->institute                = $value['institute'];
			   $educationqualification->major_subject            = $value['major_subject'];
			   $educationqualification->year_passing             = $value['year_passing'];			  
			   $educationqualification->is_active                = 1;
              // echo "<pre>"; print_r($educationqualification); 			   
			  $this->EducationQualifications->save($educationqualification);
		   }
		   //exit();
		   
		   foreach($this->request->getData('special') as $key1 => $value1){
			    if($value1['special_training_id'] != ''){
				 $training1  = $this->SpecialTrainings->find('all')->where(['SpecialTrainings.id'=>$value1['special_training_id']])->first();	
			     $training = $this->SpecialTrainings->patchEntity($training1, $this->request->getData());

				//  echo "<pre>";
				//  print_r(($value1['from_date']));  exit();
				 $training->updated_by               = $this->Auth->user('id');
			     $training->updated_on               = date('Y-m-d H:i:s');
			   }else{
			     $training = $this->SpecialTrainings->newEmptyEntity();
                 $training->created_by               = $this->Auth->user('id');
			     $training->created_on               = date('Y-m-d H:i:s');
			   }
			   $training->project_id               = $id;
			   $training->training_in              = $value1['training_in'];
			   $training->institute                = $value1['institute'];
			   $training->from_date                = date('Y-m-d',strtotime($value1['from_date']));
			   $training->to_date                  =  date('Y-m-d',strtotime($value1['to_date']));
			   $training->duration                 = $value1['duration'];
			   $training->achievement              = $value1['achievement'];
			   $training->is_active                = 1;
			//   echo "<pre>"; print_r($training->to_date); 	
			//   exit();		
			   $this->SpecialTrainings->save($training);
		   }	

          // exit();		   
		   
		   foreach($this->request->getData('work') as $key2 => $value2){			  
			   if($value2['work_experience_id'] != ''){
				 $work1  = $this->WorkExperiance->find('all')->where(['WorkExperiance.id'=>$value2['work_experience_id']])->first();	
			     $work   = $this->WorkExperiance->patchEntity($work1, $this->request->getData());
				 $work->updated_by               = $this->Auth->user('id');
			     $work->updated_on               = date('Y-m-d H:i:s');
			   }else{
			     $work = $this->WorkExperiance->newEmptyEntity();
                 $work->created_by               = $this->Auth->user('id');
			     $work->created_on               = date('Y-m-d H:i:s');
			   }
			   $work->project_id               = $id;
			   $work->organisation             = $value2['organisation'];
			   $work->position                 = $value2['position'];
			   $work->nature_work              = $value2['nature_work'];
			   $work->from_date                = date('Y-m-d',strtotime($value2['from_date']));
			   $work->to_date                  = date('Y-m-d',strtotime($value2['to_date']));
			   $work->duration                 = $value2['duration'];	
			   $work->is_active                = 1;  
			   
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
		  $production_count  = $this->Productions->find('all')->where(['Productions.project_id'=>$id,'Productions.is_active'=>1])->count();	
		  $machinery_count   = $this->Machineries->find('all')->where(['Machineries.project_id'=>$id,'Machineries.is_active'=>1])->count();	
		  $raw_count         = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id,'RawMaterials.is_active'=>1])->count();
		
		 if($production_count != 0){
		  $production_details  = $this->Productions->find('all')->where(['Productions.project_id'=>$id,'Productions.is_active'=>1])->toArray();	
		 }
		 
		 if($machinery_count != 0){
		  $machinery_details   = $this->Machineries->find('all')->where(['Machineries.project_id'=>$id,'Machineries.is_active'=>1])->toArray();	
		
		 }
		 
		 if($raw_count != 0){
		  $raw_details      = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id,'RawMaterials.is_active'=>1])->toArray();	
		 }
		
		if ($this->request->is(['patch', 'post', 'put'])) {  //echo "<pre>"; print_r($this->request->getData());  exit();
		// date('Y-m-d H:i:s') = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
		
		   foreach($this->request->getData('production') as $key => $value){
			   if($value['production_id'] != ''){
				 $production1  = $this->Productions->find('all')->where(['Productions.id'=>$value['production_id']])->first();	
			     $production   = $this->Productions->patchEntity($production1, $this->request->getData());
				 $production->updated_by               = $this->Auth->user('id');
			     $production->update_on                = date('Y-m-d H:i:s');
			   }else{
			     $production = $this->Productions->newEmptyEntity();
                 $production->created_by               = $this->Auth->user('id');
			     $production->created_on               = date('Y-m-d H:i:s');				
			   }
			   $production->project_id               = $id;
			   $production->item                     = $value['item'];
			   $production->quantity                 = $value['quantity'];
			   $production->unit_id                  = $value['unit_id'];
			   $production->revenue_year             = $value['revenue_year'];
	           $production->capacity_utilisation     = $value['capacity_utilisation'];	
			   $production->is_active                  = 1;

			   $this->Productions->save($production);
		   }		
		   
		   foreach($this->request->getData('machinery') as $key1 => $value1){
			    if($value1['machinery_id'] != ''){
				 $machinery1  = $this->Machineries->find('all')->where(['Machineries.id'=>$value1['machinery_id']])->first();	
			     $machinery   = $this->Machineries->patchEntity($machinery1, $this->request->getData());
				 $machinery->updated_by             = $this->Auth->user('id');
			     $machinery->update_on              = date('Y-m-d H:i:s');
			   }else{
			     $machinery = $this->Machineries->newEmptyEntity();
                 $machinery->created_by             = $this->Auth->user('id');
			     $machinery->created_on             = date('Y-m-d H:i:s');
			   }
			   $machinery->project_id               = $id;
			   $machinery->description              = $value1['description'];
			   $machinery->quantity                 = $value1['quantity'];
			   $machinery->price                    = $value1['price'];
			   $machinery->total_value              = $value1['total_value'];
			   $machinery->suppliername             = $value1['suppliername'];			  
			   $machinery->supplieraddress          = $value1['supplieraddress'];	
			   $machinery->is_active                = 1;
			   
			   $this->Machineries->save($machinery);
		   }		   
		   
		   foreach($this->request->getData('raw') as $key2 => $value2){			  
			   if($value2['raw_id'] != ''){
				 $raw1  = $this->RawMaterials->find('all')->where(['RawMaterials.id'=>$value2['raw_id']])->first();	
			     $raw   = $this->RawMaterials->patchEntity($raw1, $this->request->getData());
				 $raw->updated_by               = $this->Auth->user('id');
			     $raw->update_on                = date('Y-m-d H:i:s');
			   }else{
			     $raw = $this->RawMaterials->newEmptyEntity();
                 $raw->created_by               = $this->Auth->user('id');
			     $raw->created_on               = date('Y-m-d H:i:s');
			   }
			   $raw->project_id                = $id;
			   $raw->item                      = $value2['item'];
			   $raw->quantity                  = $value2['quantity'];
			   $raw->unit_id                   = $value2['unit_id'];
			   $raw->value                     = $value2['value'];
			   $raw->revenue_year              = $value2['revenue_year'];
			   $raw->capacity_utilisation      = $value2['capacity_utilisation'];	
			   $raw->is_active                 = 1;
			   
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
		// print_r($id);
		// exit();
		$this->viewBuilder()->setLayout('layout');
	    $this->loadModel('Utilities');
	    $this->loadModel('Manpowers');
	    $this->loadModel('Units');
		$project   = $this->Projects->find('all')->where(['Projects.id'=>$id])->first();	
		  $utilities_count  = $this->Utilities->find('all')->where(['Utilities.project_id'=>$id,'Utilities.is_active'=>1])->count();	
		  $manpower_count   = $this->Manpowers->find('all')->where(['Manpowers.project_id'=>$id,'Manpowers.is_active'=>1])->count();	
		
		 if($utilities_count != 0){
		  $utilities  = $this->Utilities->find('all')->where(['Utilities.project_id'=>$id,'Utilities.is_active'=>1])->toArray();	
		//   echo '<pre>';
		//   print_r($utilities);
		//   exit();
		 }		 
		 if($manpower_count != 0){
		  $manpower   = $this->Manpowers->find('all')->where(['Manpowers.project_id'=>$id,'Manpowers.is_active'=>1])->toArray();	
		 }		 		
		
		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();
		   //$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
		
		   foreach($this->request->getData('raw') as $key => $value){
			// echo '<pre>';
			// print_r($value);
			
			if($value['utility_id'] != ''){
			  $utilities1  = $this->Utilities->find('all')->where(['Utilities.id'=>$value['utility_id']])->first();	
			//   echo '<pre>';
			//   print_r($utilities1);
			//   exit();
			  $utilities   = $this->Utilities->patchEntity($utilities1, $this->request->getData());
			//   echo '<pre>';
			//   print_r($utilities);
			//   exit();
			  $utilities->updated_by               = $this->Auth->user('id');
			  $utilities->update_on                = date('Y-m-d H:i:s');
			}else{
			  $utilities = $this->Utilities->newEmptyEntity();
			  $utilities->created_by               = $this->Auth->user('id');
			  $utilities->created_on               = date('Y-m-d H:i:s');				
			}
			$utilities->project_id               = $id;
			$utilities->particular_id    = $value['particular_id'];
			$utilities->requirement    = $value['requirement'];
			$utilities->unit_id        = $value['unit_id'];
			$utilities->expense       = $value['expense'];
			$utilities->remarks        = $value['remarks'];
			
			$utilities->is_active                  = 1;

			// echo '<pre>';
			// print_r($utilities);
			// exit();
			//exit();
			$this->Utilities->save($utilities);
			
		}		
		   
		foreach($this->request->getData('manpower') as $key => $value1){
			// echo '<pre>';
			// print_r($value);
			
			if($value1['man_id'] != ''){
			  $manpower1  = $this->Manpowers->find('all')->where(['Manpowers.id'=>$value1['man_id']])->first();	
			//   echo '<pre>';
			//   print_r($manpower1);
			//   exit();
			  $manpower   = $this->Manpowers->patchEntity($manpower1, $this->request->getData());
			//   echo '<pre>';
			//   print_r($utilities);
			//   exit();
			  $manpower->updated_by               = $this->Auth->user('id');
			  $manpower->update_on                = date('Y-m-d H:i:s');
			}else{
			  $manpower = $this->Manpowers->newEmptyEntity();
			  $manpower->created_by               = $this->Auth->user('id');
			  $manpower->created_on               = date('Y-m-d H:i:s');				
			}
			$manpower->project_id               = $id;
			$manpower->particular_id    = $value1['particular_id'];
			$manpower->numbers    = $value1['numbers'];
			$manpower->salaries        = $value1['salaries'];
			
			$manpower->remarks        = $value1['remarks'];
			
			$manpower->is_active                  = 1;

			// echo '<pre>';
			// print_r($manpower);
			// exit();
			//exit();
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
		$utilities_particulars=array(1=>'Electricity',2=>'Water',3=>'Coal /Oil',4=>'Any Other');
		$manpower_particulars=array(1=>'Skilled',2=>'Semiskilled',3=>'Unskilled',4=>'Office Staff');
         $units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();
		
		
	  $this->set(compact('project', 'prefix','categories','production','id','utilities_count','manpower_count','utilities','manpower','units','utilities_particulars','utilities','manpower_particulars'));
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
		   $fixed_capital     = $this->FixedCapitals->find('all')->where(['FixedCapitals.project_id'=>$id,'FixedCapitals.is_active'=>1])->toArray();	
		 }
		 
		 if($working_count != 0){
		   $working_capital   = $this->WorkingCapital->find('all')->where(['WorkingCapital.project_id'=>$id,'WorkingCapital.is_active'=>1])->toArray();	
		 }
		 
		//  echo '<pre>';
		//  print_r($working_capital);
		//  exit();
		
		if ($this->request->is(['patch', 'post', 'put'])) {  //echo "<pre>"; print_r($this->request->getData());  exit(); 
         	 //$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');		
		
			  foreach($this->request->getData('fixed') as $key => $value){
				// echo '<pre>';
				// print_r($value);
				
				if($value['fixed_id'] != ''){
				  $fixed_capital1  = $this->FixedCapitals->find('all')->where(['FixedCapitals.id'=>$value['fixed_id']])->first();	
				//   echo '<pre>';
				//   print_r($fixed_capital1);
				//   exit();
				  $fixed_capital   = $this->FixedCapitals->patchEntity($fixed_capital1, $this->request->getData());
				//   echo '<pre>';
				//   print_r($utilities);
				//   exit();
				  $fixed_capital->updated_by               = $this->Auth->user('id');
				  $fixed_capital->update_on                = date('Y-m-d H:i:s');
				}else{
				  $fixed_capital = $this->FixedCapitals->newEmptyEntity();
				  $fixed_capital->created_by               = $this->Auth->user('id');
				  $fixed_capital->created_on               = date('Y-m-d H:i:s');				
				}
				$fixed_capital->project_id               = $id;
				$fixed_capital->item    = $value['item'];
				$fixed_capital->capital_value    = $value['capital_value'];
				
			
				
				$fixed_capital->is_active                  = 1;
	
				// echo '<pre>';
				// print_r($fixedCapitals);
				// exit();
				//exit();
				$this->FixedCapitals->save($fixed_capital);
				
			}

			foreach($this->request->getData('capital') as $key => $value1){
				// echo '<pre>';
				// print_r($value1);
				
				if($value1['capital_id'] != ''){
				  $working_capital1  = $this->WorkingCapital->find('all')->where(['WorkingCapital.id'=>$value1['capital_id']])->first();	
				//   echo '<pre>';
				//   print_r($working_capital1);
				//   exit();
				  $working_capital   = $this->WorkingCapital->patchEntity($working_capital1, $this->request->getData());
				//   echo '<pre>';
				//   print_r($working_capital);
				//   exit();
				  $working_capital->updated_by               = $this->Auth->user('id');
				  $working_capital->update_on                = date('Y-m-d H:i:s');
				}else{
				  $working_capital = $this->WorkingCapital->newEmptyEntity();
				  $working_capital->created_by               = $this->Auth->user('id');
				  $working_capital->created_on               = date('Y-m-d H:i:s');				
				}
				$working_capital->project_id               = $id;
				$working_capital->item    = $value1['item'];
				$working_capital->duration    = $value1['duration'];
				$working_capital->quantity    = $value1['quantity'];
				$working_capital->unit_id    = $value1['unit_id'];
				$working_capital->value    = $value1['value'];
			
				
				$working_capital->is_active                  = 1;
	
				// echo '<pre>';
				// print_r($working_capital);
				// exit();
				//exit();
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
			$fixed=array('Land / Building'=>'Land / Building','Machinery / Equipment'=>'Machinery / Equipment','Furniture /Fixture'=>'Furniture /Fixture');
			$capital_drop=array('Raw Material Stock'=>'Raw Material Stock','Semi finished goods stock'=>'Semi finished goods stock',
			'Finished goods stock'=>'Finished goods stock','One month Production Expenses
			(Utitlisation+Wages+salaries)'=>'One month Production Expenses
			(Utitlisation+Wages+salaries)','Bills Receivables'=>'Bills Receivables');
         $units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();
		
		
	  $this->set(compact('units','project', 'prefix','categories','production','id','production_count','training_count','fixed_count','working_count','fixed_capital','working_capital','means_Finance','fixed','capital_drop','fixedCapitals'));
	}
	
	public function profitabilitydetails($id = null){
	  $this->viewBuilder()->setLayout('layout');
	  $this->loadModel('RawMaterials');
	  $this->loadModel('MeansFinance');
			
	//   echo '<pre>';
	//   print_r($id);
	//   exit();
	    $financemeans_count = $this->MeansFinance->find('all')->where(['MeansFinance.project_id'=>$id,'MeansFinance.is_active'=>1])->count();
	
	    if($financemeans_count != 0){
		   $means_Finance     = $this->MeansFinance->find('all')->where(['MeansFinance.project_id'=>$id,'MeansFinance.is_active'=>1])->toArray();	
		 }


		//  echo '<pre>';
		//  print_r($means_Finance);
		//  exit();
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
			//$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
			
			foreach($this->request->getData('finance') as $key => $value){
				// echo '<pre>';
				// print_r($value);
				
				if($value['finance_id'] != ''){
				  $means_Finance1  = $this->MeansFinance->find('all')->where(['MeansFinance.id'=>$value['finance_id']])->first();	
				//   echo '<pre>';
				//   print_r($means_Finance1);
				//   exit();
				  $means_Finance   = $this->MeansFinance->patchEntity($means_Finance1, $this->request->getData());
				//   echo '<pre>';
				//   print_r($utilities);
				//   exit();
				  $means_Finance->updated_by               = $this->Auth->user('id');
				  $means_Finance->update_on                = date('Y-m-d H:i:s');
				}else{
				  $means_Finance = $this->MeansFinance->newEmptyEntity();
				  $means_Finance->created_by               = $this->Auth->user('id');
				  $means_Finance->created_on               = date('Y-m-d H:i:s');				
				}
				$means_Finance->project_id               = $id;
				$means_Finance->item    = $value['item'];
				$means_Finance->value    = $value['value'];
				$means_Finance->remarks    = $value['remarks'];
				
			
				
				$means_Finance->is_active                  = 1;
	
				// echo '<pre>';
				// print_r($fixedCapitals);
				// exit();
				//exit();
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
				$project1->updated_on             = date('Y-m-d H:i:s');
				$ProjectTable->save($project1);
				

		   }

		   $insert_id = $id;			
		   return $this->redirect(['action' => 'suppliementarydetails/'.$insert_id]);	
		
		}

		$finance_dropdown=array('Working Capital Finance'=>'Working Capital Finance','Subsidy'=>'Subsidy','Term Loan'=>'Term Loan','Own Investment'=>'Own Investment','Any Other'=>'Any Other');
	   $this->set(compact('project','id','manufacturing_expenses','means_Finance','finance_dropdown','financemeans_count','means_Finance'));	
	}
	
	public function suppliementarydetails($id = null){
	  $this->viewBuilder()->setLayout('layout');
	   $project  = $this->Projects->find('all')->where(['Projects.id'=>$id])->first();		   
	     
	    if ($this->request->is(['patch', 'post', 'put'])) { // echo "<pre>"; print_r($this->request->getData());  exit();  
			//$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');
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
				$project1->updated_on            = date('Y-m-d H:i:s');

				$ProjectTable->save($project1);
			
		   }			
		   $insert_id = $id;			
		   return $this->redirect(['action' => 'referencedetails/'.$insert_id]);	
		}		
		
	   $this->set(compact('project','id'));	
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
			//$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');

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
           //$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta'); 		
		   
		   if($project['step_count'] <= 9){
			$ProjectTable          = $this->getTableLocator()->get('Projects');
			$project1              = $ProjectTable->get($id); 
			$project1->step_count  = 10;
			$ProjectTable->save($project1);	 
			
		   }
		   
		   	return $this->redirect(['action' => 'createorderapi',$id]);			   

           //$transaction 	= $this->Razorpaytransactions->find('all')->order(['reforder DESC'])->first;
		   /*    $transaction1 	= $this->Razorpaytransactions->find('all',[ 'order' => ['Razorpaytransactions.reforder' => 'DESC'] ])->first();

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
			   $transaction->created_date           = date('Y-m-d H:i:s');
			   //$this->Razorpaytransactions->save($transaction);
			   $this->Razorpaytransactions->save($transaction);  		
		}*/	
	  } 		
	   $this->set(compact('project','id','payment_Details','reference_count'));	
	}
	
	public function termsandconditions(){
	
	}
	
	public function createorderapi($id=null){
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
	}
	
	public function bdpaymentresponse($id=null){		
	 $this->viewBuilder()->setLayout('layout');		
		 //$this->loadModel('PaymentOrders');
		 $this->loadModel('Billdesktransactions');
		$order 	= $this->Billdesktransactions->find('all')->where(['Billdesktransactions.id'=>$id])->first();
		//echo "<pre>"; print_r($order); exit();	
	    $this->set(compact('order','id'));			
	}	
	
   public function bdresponse(){	
       date_default_timezone_set('Asia/Kolkata');
	   $this->loadModel('Projects');
	   $this->loadModel('Billdeskpaymentlogs');
	   $this->loadModel('Billdesktransactions');
	   $this->loadModel('Billdeskpayments');
   
       // print_r('hi'); exit();	      
       // if ($this->request->is(['patch', 'post', 'put'])) { echo "<pre>"; print_r($_POST); exit();	 
	   //echo "<pre>"; print_r($_POST['transaction_response']); exit();
	  // session_start();
	  // $user_id = $this->request->getSession()->read('User.id');
	   $session = $this->request->getSession(); //read session data
       $user_id = $session->read('user_id');

	  // echo "<pre>"; print_r($user_id); exit();
		if ($_POST) { 
		 $key = 'Cjlj6qiBlQ7qdnglXvlJCKY1t3rNk7x4';		
		 $data      = JWT::decode($_POST['transaction_response'], new Key($key, 'HS256'));		 
		 // echo "<pre>"; print_r($data); exit(); 
		  
		       $billdeskpaymentlog = $this->Billdeskpaymentlogs->newEmptyEntity();
		       $billdeskpaymentlog->transaction_status          = $data->transaction_error_type;
		       $billdeskpaymentlog->transaction_date            = date('Y-m-d H:i:s',strtotime($data->transaction_date));
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
			   $transactions 	= $this->Billdesktransactions->find('all')->where(['Billdesktransactions.orderid'=>$data->orderid])->first();
				
               if($data->auth_status == '0300'){  
				   
				    $paymentTable                = $this->getTableLocator()->get('Billdesktransactions');
					$payment                     = $paymentTable->get($transactions['id']); 
					$payment->pay_status         = 1;
					$payment->transactionstatus  = $data->transaction_error_type;
					$payment->transaction_amount = $data->amount;
					$payment->transaction_date   = date('Y-m-d H:i:s',strtotime($data->transaction_date));
					$paymentTable->save($payment);
				   
				    $projectpaidcount 	= $this->Projects->find('all')->where(['Projects.payment_status'=>1])->count();
					
					if($projectpaidcount == 0){
						$project_no = 1;
					}else{
						$project_no	= $projectpaidcount+1;
					}
					
					$projectTable                 = $this->getTableLocator()->get('Projects');
					$project                      = $projectTable->get($transactions['project_id']); 
					$project->transaction_amount  = $data->amount;
					$project->transaction_number  = $data->transactionid;
					$project->transaction_date    = date('Y-m-d H:i:s');
					$project->project_no          = 'ITCOT'.date('Ym').sprintf('%02d',$project_no);
					$project->project_status      = 0;
					$project->payment_status      = 1;
					$projectTable->save($project);			
					
				     $receipts 	= $this->Billdeskpayments->find('all',[ 'order' => ['Billdeskpayments.receipt_ref_no' => 'DESC'] ])->first();
					
					if($receipts['receipt_ref_no'] == ''){
						$receiptref = 1;
					}else{
						$receiptref	= $receipts['receipt_ref_no']+1;
					}
					$payment    = $this->Billdeskpayments->newEmptyEntity();
					$payment->billdesktransaction_id 	               = $transactions['id']; 
					$payment->orderId 	                               = $data->orderid;
					$payment->transaction_status 	                   = $data->transaction_error_type;
					$payment->transaction_date 	                       = date('Y-m-d H:i:s',strtotime($data->transaction_date));
					$payment->transaction_amount 	                   = $data->amount;
					$payment->payment_method 	                       = $data->payment_method_type;
					$payment->transactionId 	                       = $data->transactionid;
					$payment->currency 	                               = $data->currency;
					$payment->transaction_description 	               = $data->transaction_error_desc;
					$payment->receipt_no 	                           = 'ITC/'.date('y').'/'.$receiptref; 
					$payment->receipt_ref_no 	                       = $receiptref; 
					$payment->created_by 	                           = $user_id;
					$payment->created_date 	                       = date('Y-m-d H:i:s');
					$this->Billdeskpayments->save($payment);				   
				   
			   }else{
				   
				    $paymentTable                = $this->getTableLocator()->get('Billdesktransactions');
					$payment                     = $paymentTable->get($transactions['id']); 
					$payment->pay_status         = 2;
					$payment->transactionstatus  = $data->transaction_error_type;
					$paymentTable->save($payment);
					
					 if($transactions['project_id'] != 0){
						$projectTable                 = $this->getTableLocator()->get('Projects');
						$project                      = $projectTable->get($transactions['project_id']); 
						$project->transaction_amount  = $data->amount;
						$project->transaction_number  = $data->transactionid;
						$project->transaction_date    = date('Y-m-d H:i:s',strtotime($data->transaction_date));
						$project->payment_status      = 2;
						$projectTable->save($project);			
					
					 }				   
			   }
			  echo "hi"; 
			 //$this->redirect(array('controller' => 'Projects', 'action' => 'paymentresponseview',$transactions['id']));
			 echo '<script>window.location.href = "https://itcot.demodev.in/projects/paymentresponseview/'.$transactions['id'].'";</script>'; 
		}	  
      exit();		
   }
	
	
	public function paymentresponseview($id = null){
	   $this->viewBuilder()->setLayout('layout');
	   $this->loadModel('Users');
	   $this->loadModel('Billdesktransactions');
	   $user           = $this->Users->find('all')->where(['Users.id'=>$this->Auth->User('id')])->first();			 
	   $project 	   = $this->Projects->find('all')->where(['Projects.created_by'=>$this->Auth->User('id')])->toArray();	          
	   //$transactions   = $this->Razorpaytransactions->find('all')->where(['Razorpaytransactions.id'=>$id])->first();	
	   $transactions 	= $this->Billdesktransactions->find('all')->where(['Billdesktransactions.id'=>$id])->first();  
		
	   $this->set(compact('transactions','project','user'));	
	}
	
	public function ajaxaddeducation($j = null){		
		$this->loadModel('Educations');
		$educations   = $this->Educations->find('list')->all();			
	    $this->set(compact('j','educations'));		
	}
	
	public function ajaxaddtraining($j = null){		
	//  echo '<pre>';
	//  print_r($j);
	//  exit();
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
			$utilities_particulars=array(1=>'Electricity',2=>'Water',3=>'Coal /Oil',4=>'Any Other');
		    $this->set(compact('j','units','utilities_particulars'));		
	}
	public function ajaxaddreference($j = null){		
		    $this->set(compact('j'));		
	}	
	

	public function ajaxaddraw($j = null){	
		$this->loadModel('Units');
		$utilities_particulars=array(1=>'Electricity',2=>'Water',3=>'Coal /Oil',4=>'Any Other');
	   $units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();	
	   $this->set(compact('j','units','utilities_particulars'));		
}
	public function ajaxaddfixed($j = null){	
		
		$fixed=array('Land / Building'=>'Land / Building','Machinery / Equipment'=>'Machinery / Equipment','Furniture /Fixture'=>'Furniture /Fixture');
	   //$units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();	

	//    echo '<pre>';
	//    print_r($j);
	//    exit();
	   $this->set(compact('j','units','fixed'));		
}
	public function ajaxaddcapital($j = null){	
		$this->loadModel('Units');
		$units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();
		$capital_drop=array('Raw Material Stock'=>'Raw Material Stock','Semi finished goods stock'=>'Semi finished goods stock',
		'Finished goods stock'=>'Finished goods stock','One month Production Expenses
		(Utitlisation+Wages+salaries)'=>'One month Production Expenses
		(Utitlisation+Wages+salaries)','Bills Receivables'=>'Bills Receivables');	   //$units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();	
	   $this->set(compact('j','units','capital_drop'));		
}

public function ajaxaddfinance($j = null){	
		
	$finance_dropdown=array('Working Capital Finance'=>'Working Capital Finance','Subsidy'=>'Subsidy','Term Loan'=>'Term Loan','Own Investment'=>'Own Investment','Any Other'=>'Any Other');

   //$units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();	

//    echo '<pre>';
//    print_r($j);
//    exit();
   $this->set(compact('j','units','finance_dropdown'));		
}
	public function ajaxaddmanpower($j = null){	
		$this->loadModel('Units');
		$manpower_particulars=array(1=>'Skilled',2=>'Semiskilled',3=>'Unskilled',4=>'Office Staff');
	   $units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();	
	   $this->set(compact('j','units','manpower_particulars'));		
}
	public function deleteeducation($edu_id = null){
      if($edu_id != ''){		   
           $eduTable             = $this->getTableLocator()->get('EducationQualifications');
		   $education            = $eduTable->get($edu_id); 
		   $education->is_active = 0;
		   if($eduTable->save($education)){
			   echo 1;
		   }else{
			  echo 0;  
		   }
	  } 		
	 exit();	
	}
	
	public function deletetraining($t_id = null){
      if($t_id != ''){		   
           $trainingTable       = $this->getTableLocator()->get('SpecialTrainings');
		   $training            = $trainingTable->get($t_id); 
		   $training->is_active = 0;
		   if($trainingTable->save($training)){
			   echo 1;
		   }else{
			  echo 0;  
		   }
	  } 		
	 exit();	
	}
	
	public function deletework($work_id = null){
      if($work_id != ''){		   
           $workTable       = $this->getTableLocator()->get('WorkExperiance');
		   $work            = $workTable->get($work_id); 
		   $work->is_active = 0;
		   if($workTable->save($work)){
			   echo 1;
		   }else{
			  echo 0;  
		   }
	  } 		
	 exit();	
	}	
	
	
	public function deleteproduction($pid = null){
      if($pid != ''){		   
           $proTable              = $this->getTableLocator()->get('Productions');
		   $production            = $proTable->get($pid); 
		   $production->is_active = 0;
		   if($proTable->save($production)){
			   echo 1;
		   }else{
			  echo 0;  
		   }
	  } 		
	 exit();	
	}

    public function deletemachinery($macid = null){
      if($macid != ''){		   
           $macTable             = $this->getTableLocator()->get('Machineries');
		   $machinery            = $macTable->get($macid); 
		   $machinery->is_active = 0;
		   if($macTable->save($machinery)){
			   echo 1;
		   }else{
			  echo 0;  
		   }
	  } 		
	 exit();	
	}	
	
	 public function deleteraw($rawid = null){


      if($rawid != ''){		   
           $rawTable       = $this->getTableLocator()->get('RawMaterials');
		   $raw            = $rawTable->get($rawid); 
		   $raw->is_active = 0;
		   if($rawTable->save($raw)){
			  echo 1;
		   }else{
			  echo 0;  
		   }
	  } 		
	 exit();	
	}	
    public function deleteutilities($machinery_id = null){


      if($machinery_id != ''){		   
           $macTable             = $this->getTableLocator()->get('Utilities');
		   $machinery            = $macTable->get($machinery_id); 
		   $machinery->is_active = 0;		
		   if($macTable->save($machinery)){
			   echo 1;
		   }else{
			  echo 0;  
		   }
	  } 		
	 exit();	
	}	
    public function deletefixed($fixed = null){
      if($fixed != ''){		   
           $macTable             = $this->getTableLocator()->get('FixedCapitals');
		   $machinery            = $macTable->get($fixed); 
		   $machinery->is_active = 0;
		   if($macTable->save($machinery)){
			   echo 1;
		   }else{
			  echo 0;  
		   }
	  } 		
	 exit();	
	}	
    public function deletecapital($capital = null){
// echo '<pre>';
// print_r($capital);
// exit();

      if($capital != ''){		   
           $macTable             = $this->getTableLocator()->get('WorkingCapital');
		   $machinery            = $macTable->get($capital); 
		   $machinery->is_active = 0;
		   if($macTable->save($machinery)){
			   echo 1;
		   }else{
			  echo 0;  
		   }
	  } 		
	 exit();	
	}	
    public function deletefinance($deletefinance = null){
// echo '<pre>';
// print_r($capital);
// exit();

      if($deletefinance != ''){		   
           $macTable             = $this->getTableLocator()->get('MeansFinance');
		   $machinery            = $macTable->get($deletefinance); 
		   $machinery->is_active = 0;
		   if($macTable->save($machinery)){
			   echo 1;
		   }else{
			  echo 0;  
		   }
	  } 		
	 exit();	
	}	
	
	 public function deletemanpower($manid = null){
      if($manid != ''){		   
           $rawTable       = $this->getTableLocator()->get('Manpowers');
		   $raw            = $rawTable->get($manid); 
		   $raw->is_active = 0;
		   if($rawTable->save($raw)){
			  echo 1;
		   }else{
			  echo 0;  
		   }
	  } 		
	 exit();	
	}	
	
}