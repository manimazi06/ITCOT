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


 use Cake\Mailer\Email;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;

class ComplianceServicesController extends AppController
{	
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
		$complainceServiceProducts   = $this->ComplainceServiceProducts->find('all')->where(['ComplainceServiceProducts.is_active'=>1])->count();	
		$complianceServices_count   = $this->ComplianceServices->find('all')->where(['ComplianceServices.is_active'=>1])->count();
		if($complianceServices_count >0){
			$complianceServices   = $this->ComplianceServices->find('all')->where(['ComplianceServices.is_active'=>1])->toArray();
		}
		if ($this->request->is(['patch', 'post', 'put'])) { //echo "<pre>"; print_r($this->request->getData());  exit();

		 	$complianceservices->name                   = $this->request->getData('name');
			$complianceservices->mobile_no              = $this->request->getData('mobile_no');
			$complianceservices->email                  = $this->request->getData('email');
			$complianceservices->project_name           = $this->request->getData('project_name');
			$complianceservices->project_loc            = $this->request->getData('project_loc');
			$complianceservices->state_id               = 32;
			$complianceservices->district_id            = $this->request->getData('district_id');
			$complianceservices->pincode                = $this->request->getData('pincode');
			$complianceservices->landarea               = $this->request->getData('landarea');
			$complianceservices->land_unit              = $this->request->getData('land_unit');
			$complianceservices->total_buildup_area     = $this->request->getData('total_buildup_area');
			$complianceservices->totalarea_unit         = $this->request->getData('totalarea_unit');
			$complianceservices->no_employees           = $this->request->getData('no_employees');
			$complianceservices->project_cost           = $this->request->getData('project_cost');
			$complianceservices->power_req              = $this->request->getData('power_req');
			$complianceservices->powerreq_unit          = $this->request->getData('powerreq_unit');
			$complianceservices->service_compliance_id  = $this->request->getData('service_compliance_id');
			$complianceservices->description            = $this->request->getData('description');
			
			$complianceservices->created_by             = $this->Auth->user('id');
			$complianceservices->created_date           = date('Y-m-d H:i:s');

			if($this->ComplianceServices->save($complianceservices)){		

               $insert_id = $complianceservices->id;
				
				$projectTable             = $this->getTableLocator()->get('ComplianceServices');
				$project                  = $projectTable->get($insert_id); 				
				$project->application_no  = 'ITCOTCS'.date('Ym').sprintf('%02d',$complianceservices['id']);				
				$projectTable->save($project);
				
			 foreach($this->request->getData('complaince') as $key => $value){ 
			    $production                             = $this->ComplainceServiceProducts->newEmptyEntity();
			    $production->created_by                 = $this->Auth->user('id');
			    $production->created_date               = date('Y-m-d H:i:s');	
				$production->compliance_service_id      = $insert_id;
				$production->product_name               = $value['product_name'];
				$production->capacity                   = $value['capacity'];
				$production->capacity_pervalue          = $value['capacity_pervalue'];
				$production->unit                       = $value['unit'];	
				$production->is_active                  = 1;
				$production->created_by                 = $this->Auth->user('id');
				$production->created_date               = date('Y-m-d H:i:s');	
				// echo '<pre>';
				// print_r($production);
				// exit();	
				$this->ComplainceServiceProducts->save($production);			
			}
			
			 foreach($this->request->getData('arr') as $key => $value){				
			    $serviceCompliances                           = $this->ComplaintsServicedata->newEmptyEntity();
				$serviceCompliances->created_by               = 0;
				$serviceCompliances->created_date             = date('Y-m-d H:i:s');
				$serviceCompliances->compliance_service_id    = $insert_id;
				$serviceCompliances->service_compliance_id    = $value;
				$serviceCompliances->others_name              = $this->request->getData('others');			
				$this->ComplaintsServicedata->save($serviceCompliances);
			
			}
			
			//$this->Flash->success(__('The Details has been saved.'.$project->application_no));

			

			// echo '<pre>';
			// print_r($encode);
			// exit();	
			return $this->redirect(['action' => 'complianceservicessuccess',base64_encode(strval($insert_id))]);
			
			

			}
			$this->Flash->error(__('The Details could not be saved. Please, try again.'));		

		}	
			$land_unit=array('Sq ft'=>'Sq ft','sq m'=>'sq m','Acre'=>'Acre','Hectare'=>'Hectare','Cent'=>'Cent');
			$total_unit=array('Sq ft'=>'Sq ft','sq m'=>'sq m','Acre'=>'Acre','Hectare'=>'Hectare','Cent'=>'Cent');
			$power_unit=array('HP'=>'HP','kVA'=>'kVA');
		$districts  = $this->Districts->find('list')->toArray();	
		$serviceCompliances   = $this->ServiceCompliances->find('list')->toArray();
		$cap_dropdown=array('day'=>'day','month'=>'month','annum'=>'annum');	
		//$units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();
		
	  $this->set(compact('project', 'prefix','districts','serviceCompliances','complainceServiceProducts','units','land_unit','total_unit','power_unit','serviceCompliances',
	'success','cap_dropdown'));
	}
	
	public function complianceservicessuccess($id = null)
	{  

		$decode=base64_decode($id);
		$id=$decode;
		$this->viewBuilder()->setLayout('layout');   	  
	    $this->loadModel('ServiceCompliances');
		$complianceServices   = $this->ComplianceServices->find('all')->where(['ComplianceServices.id'=>$id])->first();
		
		if($complianceServices['application_no'] !=''){
			$insert_id = $complianceServices->id;	
			$name = $complianceServices->name;			
			$email = $complianceServices->email;
			$application_no = $complianceServices->application_no;
					  
			$mailer = new Mailer('default');
			$mailer
			->setTransport('smtp')
			->setFrom(['verify.email@itcot.com' => 'ITCOT - Compliance Services'])
			->setTo($email)
			->setEmailFormat('html') 
			->setSubject('ITCOT - Compliance Services')
			// ->deliver("Username: ".$email."<br>Password:".$password."");   
			->deliver("<p>Dear ".ucwords($name).",</p><p>Your application for Compliance Services has been received successfully. <br>Application Number: <b>". $application_no."</b>
			</p><br>
			<p>*Note: Please do not reply to this email, as it is a computer generated email.</p>
			<br>
			<p>With Best Regards,<br>
			ITCOT Ltd.</p>");   
				}


	   $this->set(compact('complianceServices'));
	}

   function no_to_words($no)
   {
	$words = array('0' => '', '1' => 'one', '2' => 'two', '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six', '7' => 'seven', '8' => 'eight', '9' => 'nine', '10' => 'ten', '11' => 'eleven', '12' => 'twelve', '13' => 'thirteen', '14' => 'fouteen', '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen', '18' => 'eighteen', '19' => 'nineteen', '20' => 'twenty', '30' => 'thirty', '40' => 'fourty', '50' => 'fifty', '60' => 'sixty', '70' => 'seventy', '80' => 'eighty', '90' => 'ninty', '100' => 'hundred', '1000' => 'thousand', '100000' => 'lakhs', '10000000' => 'crore','100000000' => 'ten crore','1000000000'=>'hundred crore');
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

	public function ajaxaddcomplaince($j = null){	
		$this->loadModel('Units');
	  // $units  = $this->Units->find('list',['keyField' => 'id',  'valueField' => 'description'])->toArray();	
	   $cap_dropdown=array('day'=>'day','month'=>'month','annum'=>'annum');	
	   $this->set(compact('j','units','cap_dropdown'));		
}
	public function ajaxnowords($j = null){	
		
		// echo '<pre>';
		// print_r($j);
		// exit();
		//$complianceServices   = $this->ComplianceServices->find('all')->where(['ComplianceServices.is_active'=>1,'ComplianceServices.project_cost'=>$words])->first();


$words = ucwords($this->no_to_words($j).'only');	

// echo '<pre>';
// 		print_r($words);
// 		exit();
if($words !=''){

	echo $words;
}else{
	echo 0;
}
exit();


	  // $this->set(compact('complianceServices'));		
}



public function ajaxpincode($j = null){	
		

	$this->loadModel('DistrictwisePincodedetails');
	// echo '<pre>';
	// print_r($j);
	// exit();
	$districtwisePincodedetails_count   = $this->DistrictwisePincodedetails->find('all')->where(['DistrictwisePincodedetails.is_active'=>1,'DistrictwisePincodedetails.pincode'=>$j])->contain(['Districts'])->count();
	$districtwisePincodedetails   = $this->DistrictwisePincodedetails->find('all')->where(['DistrictwisePincodedetails.is_active'=>1,'DistrictwisePincodedetails.pincode'=>$j])->contain(['Districts'])->first();
	// $district=$districtwisePincodedetails['district']['name'];
	$district=$districtwisePincodedetails['district_id'];
	$location=$districtwisePincodedetails['location'];

// echo '<pre>';
// print_r($location);
// exit();

if($districtwisePincodedetails_count >0){

	echo $district;
	 // echo $location;
}else{

	echo 0;
}

exit();
	// echo '<pre>';
	// print_r($districtwisePincodedetails);
	// exit();
	// $this->set(compact('complianceServices'));
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