<?php
declare(strict_types=1); 
namespace App\Controller\Admin;
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

class ComplianceServicesController extends AppController
{
    
	public function index()
	{  
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('States');
		$this->loadModel('Districts');
		
		 if ($this->request->is(['patch', 'post', 'put'])) { 
			$status= $this->request->getData('status_id');	
		 $complianceServices  = $this->ComplianceServices->find('all')->where(['ComplianceServices.is_active'=>1,'ComplianceServices.appln_status'=>$status])->contain(['States','Districts'])->toArray();
		 }else{
		 $complianceServices  = $this->ComplianceServices->find('all')->where(['ComplianceServices.is_active'=>1])->contain(['States','Districts'])->toArray();
		 }		
		 $proj=array(1=>'Approved',2=>'Rejected',0=>'Pending');		
		 
		
		$this->set(compact('complianceServices','proj'));      

	}

	public function applnstatus($id=null)
	{
		$this->viewBuilder()->setLayout('layout');
		if ($this->request->is('post')) {

		           $ProjectTable              = $this->getTableLocator()->get('ComplianceServices');
                   $project1                  = $ProjectTable->get($id); 
                   $project1->appln_status  = $this->request->getData('appln_status');				   
			
				   if ($this->ComplianceServices->save($project1)) {
					$this->Flash->success(__('The Application status has been updated.'));
					return $this->redirect(['action' => 'index']);
				}
				$this->Flash->error(__('The Application status could not be updated. Please, try again.'));
		}
		   $proj=array(1=>'Approved',2=>'Rejected');
		   $this->set(compact('proj'));

	}

	public function view($id=null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('States');
		$this->loadModel('Districts');
		$this->loadModel('ServiceCompliances');
		$this->loadModel('ComplaintsServicedata');
		$this->loadModel('ComplainceServiceProducts');
		$this->loadModel('Units');
		$basic = $this->ComplianceServices->get($id, [
			'contain' => ['States','Districts'],
		     ]);

			 $serviceCompliances   = $this->ServiceCompliances->find('all')->where(['ServiceCompliances.is_active'=>1])->toArray();

			//  echo '<pre>';
			//  print_r($serviceCompliances);
			//  exit();
			 $serviceCompliances_data   = $this->ComplaintsServicedata->find('all')->contain(['ServiceCompliances','ComplianceServices'])->where(['ComplaintsServicedata.is_active'=>1,'ComplaintsServicedata.compliance_service_id'=>$id,
			  ])->toArray();

			  $serviceCompliances_count   = $this->ComplaintsServicedata->find('all')->contain(['ServiceCompliances','ComplianceServices'])->where(['ComplaintsServicedata.is_active'=>1,'ComplaintsServicedata.compliance_service_id'=>$id,
			  ])->count();

			  $complainceServiceProducts   = $this->ComplainceServiceProducts->find('all')->contain(['ComplianceServices'])->where(['ComplainceServiceProducts.is_active'=>1,'ComplainceServiceProducts.compliance_service_id'=>$id])->toArray();	
			//  echo '<pre>';
			//  print_r($complainceServiceProducts);
			//  exit();
			 

			 $this->set(compact('basic','serviceCompliances','serviceCompliances_data','complainceServiceProducts','serviceCompliances_count'));
	}
	
	public function preview($id=null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('States');
		$this->loadModel('Districts');
		$this->loadModel('ServiceCompliances');
		$this->loadModel('ComplaintsServicedata');
		$this->loadModel('ComplainceServiceProducts');
		$this->loadModel('Units');
		$basic = $this->ComplianceServices->get($id, [
			'contain' => ['States','Districts'],
		     ]);

			 $serviceCompliances   = $this->ServiceCompliances->find('all')->where(['ServiceCompliances.is_active'=>1])->toArray();

			//  echo '<pre>';
			//  print_r($basic);
			//  exit();
			 $serviceCompliances_data   = $this->ComplaintsServicedata->find('all')->contain(['ServiceCompliances','ComplianceServices'])->where(['ComplaintsServicedata.is_active'=>1,'ComplaintsServicedata.compliance_service_id'=>$id,
			  ])->toArray();

			  $serviceCompliances_count   = $this->ComplaintsServicedata->find('all')->contain(['ServiceCompliances','ComplianceServices'])->where(['ComplaintsServicedata.is_active'=>1,'ComplaintsServicedata.compliance_service_id'=>$id,
			  ])->count();

			  $complainceServiceProducts   = $this->ComplainceServiceProducts->find('all')->contain(['ComplianceServices'])->where(['ComplainceServiceProducts.is_active'=>1,'ComplainceServiceProducts.compliance_service_id'=>$id])->toArray();	
			
			//  echo '<pre>';
			//  print_r($complainceServiceProducts);
			//  exit();
			 

			 $this->set(compact('basic','serviceCompliances','serviceCompliances_data','complainceServiceProducts','serviceCompliances_count','id'));
	}

	public function complianceservices()
	{  
		$this->viewBuilder()->setLayout('layout');   	  
		$this->loadModel('Districts');
	    $this->loadModel('ServiceCompliances');
		$this->loadModel('ComplainceServiceProducts');
		$this->loadModel('Units');
		$this->loadModel('ComplaintsServicedata');
	
		$complianceservices = $this->ComplianceServices->newEmptyEntity();

		$serviceCompliances   = $this->ServiceCompliances->find('list')->where(['ServiceCompliances.is_active'=>1])->toArray();

		// echo '<pre>';
		// print_r($serviceCompliances);
		// exit();

		$complainceServiceProducts   = $this->ComplainceServiceProducts->find('all')->where(['ComplainceServiceProducts.is_active'=>1])->count();	
		$complianceServices_count   = $this->ComplianceServices->find('all')->where(['ComplianceServices.is_active'=>1])->count();
		// echo '<pre>';
		// print_r($complainceServiceProducts_id);
		// exit();
			if($complianceServices_count >0){
				$complianceServices   = $this->ComplianceServices->find('all')->where(['ComplianceServices.is_active'=>1])->toArray();
			}
		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();
			//$timedate = TimeConversion::ConvertServerTimezoneToLocalTimezone(date("Y-m-d H:i:s"),'Asia/Calcutta');

		 	$complianceservices->name                   = $this->request->getData('name');
			$complianceservices->mobile_no              = $this->request->getData('mobile_no');
			$complianceservices->email                  = $this->request->getData('email');
			$complianceservices->project_name           = $this->request->getData('project_name');
			$complianceservices->project_loc            = $this->request->getData('project_loc');
			$complianceservices->state_id               = 32;
			$complianceservices->district_id            = $this->request->getData('district_id');
			$complianceservices->pincode                = $this->request->getData('pincode');
			$complianceservices->landarea               = $this->request->getData('landarea');
			$complianceservices->land_unit               = $this->request->getData('land_unit');
			$complianceservices->total_buildup_area     = $this->request->getData('total_buildup_area');
			$complianceservices->totalarea_unit     = $this->request->getData('totalarea_unit');
			$complianceservices->no_employees           = $this->request->getData('no_employees');
			$complianceservices->project_cost           = $this->request->getData('project_cost');
			$complianceservices->power_req              = $this->request->getData('power_req');
			$complianceservices->powerreq_unit              = $this->request->getData('powerreq_unit');
			$complianceservices->service_compliance_id  = $this->request->getData('service_compliance_id');
			$complianceservices->description            = $this->request->getData('description');
			
			$complianceservices->created_by             = $this->Auth->user('id');
			$complianceservices->created_date           = date('Y-m-d H:i:s');

			if($this->ComplianceServices->save($complianceservices)){
			


             $insert_id = $complianceservices->id;
			 foreach($this->request->getData('complaince') as $key => $value){	
			
		
				// echo '<pre>';
				// print_r($value);

				  $production                           = $this->ComplainceServiceProducts->newEmptyEntity();
				  $production->created_by               = $this->Auth->user('id');
				  $production->created_date             = date('Y-m-d H:i:s');	

				$production->compliance_service_id      = $insert_id;
				$production->product_name               = $value['product_name'];
				$production->capacity                   = $value['capacity'];
				$production->unit                       = $value['unit'];
			
				$production->is_active                  = 1;
				$production->created_by                 = $this->Auth->user('id');
				$production->created_date               = date('Y-m-d H:i:s');

				// echo '<pre>';
				// print_r($production);
				// exit();
				$this->ComplainceServiceProducts->save($production);
			
				//exit();
			}
			 foreach($this->request->getData('arr') as $key => $value){	
			
		
				// echo '<pre>';
				// print_r($value);

				  $serviceCompliances                           = $this->ComplaintsServicedata->newEmptyEntity();
				  $serviceCompliances->created_by               = 0;
				  $serviceCompliances->created_date             = date('Y-m-d H:i:s');	

				$serviceCompliances->compliance_service_id      = $insert_id;



				$serviceCompliances->service_compliance_id      = $value;
				$serviceCompliances->others_name                = $this->request->getData('others');;
				//$serviceCompliances->service_compliance_id      = $value;
		

				// echo '<pre>';
				// print_r($serviceCompliances);
				//  exit();
				$this->ComplaintsServicedata->save($serviceCompliances);
			
				//exit();
			}
			$this->Flash->success(__('The Details has been saved.'));
			return $this->redirect(['action' => 'complianceservices']);

			}
			$this->Flash->error(__('The Details could not be saved. Please, try again.'));
			// echo '<pre>';
			// print_r($complianceservices);
			// exit();

			

		}
		
	
			$land_unit=array('Sq ft'=>'Sq ft','sq m'=>'sq m','Acre'=>'Acre','Hectare'=>'Hectare');
			$total_unit=array('Sq ft'=>'Sq ft','sq m'=>'sq m','Acre'=>'Acre','Hectare'=>'Hectare');
			$power_unit=array('hp'=>'hp','kVA'=>'kVA');
		$districts  = $this->Districts->find('list')->toArray();	
		$serviceCompliances   = $this->ServiceCompliances->find('list')->toArray();	
		$units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();
		
	  $this->set(compact('project', 'prefix','districts','serviceCompliances','complainceServiceProducts','units','land_unit','total_unit','power_unit','serviceCompliances',
	'success'));
	}

	public function ajaxaddcomplaince($j = null){	
		$this->loadModel('Units');
	   $units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();	
	   $this->set(compact('j','units'));		
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
	
		
 	
}