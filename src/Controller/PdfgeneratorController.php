<?php

declare(strict_types=1);
namespace App\Controller;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Google\Cloud\Firestore\FirestoreClient;
use Cake\Http\ServerRequest;
use Cake\Http\Response;
use Mpdf\Mpdf;

class PdfgeneratorController extends AppController
{	
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

	public function receiptdownload($id = null)
	{
		$this->loadModel('Projects');
		$this->viewBuilder()->setLayout('layout');
		$projects  = $this->Projects->find('all')->where(['Projects.id' => $id])->toArray();
		$words = strtoupper($this->no_to_words($projects[0]['transaction_amount']) . ' only');	

		$date = $projects[0]['transaction_date'];
		$str=strval($date);
		$transaction_date=date('d-F-Y',strtotime($str));
		// 			$url='http://15.207.40.134/webroot/ITCOT_test/images/itcot_logo.png';

		foreach ($projects as $key => $value) {	

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
			  	<h3>Payment Receipt for Project Report</h3><br><br>
				  <h5>Application No:$value->project_no</h5>
				</td>		 
				
		<br><br><br>
			  </tr>
		<tr>
			<td style='text-align:center;'>Transaction No:$value->transaction_number</td>
			<td style='text-align:center;' colspan='2'> Transaction date:$transaction_date</td>			
		</tr>
		<tr>
		<td style='text-align:center;'>Payer Details</td>
		<td style='text-align:center;' colspan='2'>Payment Receipt</td>
	</tr>
		<tr>
		<td>Name:$value->name <br><br>Mobile No:$value->mobile_no </td>
		<td colspan='2'>Received a sum of Rs:<b>$value->transaction_amount</b><br><br>Rupees:&nbsp;$words
		</span><br><br>Payment mode:Online</td>
		</tr>
		</table>
	 <table border='1'>
		<tr>
		<th  style='text-align:center;'>S.no</th>
		<th  style='text-align:center;'>Description</th>
		<th  style='text-align:center;'>Amount</th>
		</tr>


		<tr>
			<td style='text-align:center;'>1</td>
			<td style='text-align:center;'>Registration-fee</td>
			<td style='text-align:center;'>$value->transaction_amount</td>


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
		$filename = 'Payment_Receipt.pdf';
		//$fileroot = $filename;
		$mpdf->Output($filename, 'D');
		$this->set(compact('filename'));

		// $mpdf->Output();

		exit();
	}

	public function downloadpdf($id = null)
	{
		$this->viewBuilder()->setLayout('layout');
		$this->loadModel('Projects');
		$this->loadModel('EducationQualifications');
		$this->loadModel('SpecialTrainings');
		$this->loadModel('WorkExperiance');
		$this->loadModel('Productions');
		$this->loadModel('Machineries');
		$this->loadModel('RawMaterials');
		$this->loadModel('Utilities');
		$this->loadModel('Manpowers');		
		$this->loadModel('WorkingCapital');
		$this->loadModel('FixedCapitals');
		$this->loadModel('MeansFinance');
		$this->loadModel('UserReferences');
		$this->loadModel('Units');
	
		$basics = $this->Projects->get($id, [
			'contain' => ['Categories', 'Educations', 'Sectortypes', 'Localitytype', 'Registrationtype', 'States', 'LoanTypes', 'LoanPurposes'],
		]);

		$type = ($basics->dob);
		//$date_time=date('d-F-Y',strtotime($basics->dob));transaction_date
		$str = strval($type);
		$date_time = date('d-F-Y', strtotime($str));

		$type_trans = ($basics->dob);
		//$date_time=date('d-F-Y',strtotime($basics->dob));transaction_date
		$string = strval($type_trans);
		$trans_date = date('d-F-Y', strtotime($string));
		$category = ($basics['category']['name']);
		$education = ($basics['education']['name']);
		$sectortype = ($basics['sectortype']['name']);
		$loan_type = ($basics['loan_type']['name']);
		$loan_purpose = ($basics['loan_purpose']['name']);	
		
		//Education details
		$education_details = $this->EducationQualifications->find('all')->contain(['Educations'])->where(['EducationQualifications.project_id'=>$id,'EducationQualifications.is_active'=>1])->toArray();
		$training_details  = $this->SpecialTrainings->find('all')->where(['SpecialTrainings.project_id'=>$id,'SpecialTrainings.is_active'=>1])->toArray();
		if($training_details[0]['from_date'] && $training_details[0]['to_date']!=''){
		
		$type_training = ($training_details[0]['from_date']) ;
		$type_todate = ($training_details[0]['to_date']);
		// print_r(gettype($type_training));
		// exit();
		$str_training = strval($type_training);
		$str_todate = strval($type_todate);

		// print_r(gettype($str_training));
		// exit();
		$trans_fromdate = date('d-F-Y', strtotime($str_training));
		$trans_todate = date('d-F-Y', strtotime($str_todate));

		// print_r(gettype($trans_fromdate));
		// exit();

	}else{
	
		$trans_fromdate = ($training_details[0]['from_date']) ;
		$trans_todate = ($training_details[0]['to_date']);
	}
		$work_details      = $this->WorkExperiance->find('all')->where(['WorkExperiance.project_id'=>$id,'WorkExperiance.is_active'=>1])->toArray();

		if($work_details[0]['to_date'] && $work_details[0]['to_date']!=''){
		$work_from_date = ($work_details[0]['from_date']);
		$work_todate = ($work_details[0]['to_date']);
		$str_from_date = strval($work_from_date);
		$str_todate = strval($work_todate);
		$work_fromdate = date('d-F-Y', strtotime($str_from_date))? date('d-F-Y', strtotime($str_from_date)):'';
		$work_todate = date('d-F-Y', strtotime($str_todate))?  date('d-F-Y', strtotime($str_todate)):'';
		}else{
		
			$work_fromdate = ($work_details[0]['from_date']);
			$work_todate =  ($work_details[0]['to_date']);
		}

		//Manufacturing details	

		$pro_details  = $this->Productions->find('all')->contain(['Units'])->where(['Productions.project_id'=>$id,'Productions.is_active'=>1])->toArray();
		$unit_name=($pro_details['units']['name']);	
		$mach_details  = $this->Machineries->find('all')->where(['Machineries.project_id'=>$id,'Machineries.is_active'=>1])->toArray();
		$raw_details  = $this->RawMaterials->find('all')->where(['RawMaterials.project_id'=>$id,'RawMaterials.is_active'=>1])->toArray();
		
		//Manpower details

		$util_details  = $this->Utilities->find('all')->where(['Utilities.project_id'=>$id,'Utilities.is_active'=>1])->toArray();

		$man_details  = $this->Manpowers->find('all')->where(['Manpowers.project_id'=>$id,'Manpowers.is_active'=>1])->toArray();
			$electricity_unit_id = $util_details['unit_id'];
			$water_unit_id = $util_details['water_unit_id'];
			$oil_unit_id = $util_details['oil_unit_id'];
			$other_unit_id = $util_details['other_unit_id'];


			// echo '<pre>';
			// print_r($util_details);
			// exit();
			
		//Profitability details

		$fixed_capitals  = $this->FixedCapitals->find('all')->where(['FixedCapitals.project_id'=>$id,'FixedCapitals.is_active'=>1])->toArray();
		$working_capital  = $this->WorkingCapital->find('all')->where(['WorkingCapital.project_id'=>$id,'WorkingCapital.is_active'=>1])->toArray();
		$raw_unit_id = $working_capital['raw_unit_id'];
		$semifinished_unit_id = $working_capital['semifinished_unit_id'];
		$finished_unit_id = $working_capital['finished_unit_id'];
		$expenses_unit_id = $working_capital['expenses_unit_id'];
		$bills_unit_id = $working_capital['bills_unit_id'];

		$project  = $this->Projects->find('all')->where(['Projects.id'=>$id,'Projects.is_active'=>1])->first();
		$means_finance  = $this->MeansFinance->find('all')->where(['MeansFinance.project_id'=>$id,'MeansFinance.is_active'=>1])->toArray();

		// echo '<pre>';
		// print_r($project);
		// exit();
		
		$user_references  = $this->UserReferences->find('all')->where(['UserReferences.project_id'=>$id])->toArray();
		$units = $this->Units->find('list',['keyField' => 'id', 'valueField' => 'description'])->toArray();		
		$unit_value_electricity=$units[$electricity_unit_id];
		$unit_value_water=$units[$water_unit_id];
		$unit_value_oil=$units[$oil_unit_id];
		$unit_value_other=$units[$other_unit_id];

		$raw=$units[$raw_unit_id];
		$semi_finished=$units[$semifinished_unit_id];
		$finished=$units[$finished_unit_id];
		$expense=$units[$expenses_unit_id];
		$bill=$units[$bills_unit_id];

		$mpdf = new Mpdf(
			['tempDir' => '/tmp']
		);

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
				padding: 2px;
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
			  <table border='1' style='width:100%;'>
			  <tr>			  
				<td style='text-align:center;' colspan='3'>
					<img src='http://15.207.40.134/webroot/ITCOT_test/images/itcot_logo.png') class='light-logo' alt='homepage' style='width:150px'>
				  <br><br>
			  	<h3>Project Report-Appln No-$basics->project_no</h3>
				</td>		 
		    </tr><br>
		</table>	
        <!--General Details-->
					<div class='table-responsive'>
						<h3>General Details</h3>
						<table border='1'>
							<thead>
								<tr>									
									<th>Name</th>
									<th>Date of Birth</th>
									<th>Category</th>
									<th>Educational Details</th>
									<th> Mobile No</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>      
								<tr>
									
									<td> $basics->prefix $basics->name</td>
									<td> $date_time </td>
									<td> $category</td>
									<td> $education</td>
									<td> $basics->mobile_no</td>
									<td> $basics->email</td>
								</tr>
							</tbody>
						</table>
						</div>	<br>						
			  <!--Entity details-->
			  <div class='table-responsive'>
			  <h3>Unit / Entity Details</h3>		
			  <table border='1'>
				  <thead>	  
					  <tr>
						  <th> Entity Name</th>
						  <th> Sector Type</th>
						  <th>Project Cost </th>
						  <th> Loan Amount</th>
						  <th>Type of Loan</th>
						  <th> Loan Purpose</th>
					  </tr>
				  </thead>
				  <tbody>   
					  <tr class='text-center'>
						  <td> $basics->unit_name</td>
						  <td> $sectortype</td>
						  <td style='text-align:right;'> $basics->project_cost</td>
						  <td style='text-align:right;'> $basics->loan_amount</td>
						  <td> $loan_type</td>
						  <td> $loan_purpose</td>
					  </tr>
				  </tbody>
			  </table>			  
		  </div><br>
		  <!--Educational details--1-->
		  <div class='table-responsive'>
		  <h3>Educational Qualification / Special Training / Work Experience</h3>
		  
		  <h5>1.1 Educational Qualification</h5>
		  <table border='1'>
			  <thead>
				  <tr class='text-center'>
					  <th> S.No </th>
					  <th> Education</th>
					  <th>Institute</th>
					  <th>Major Subject</th>
					  <th>Year of Passing</th>
				  </tr>
			  </thead>	

			  <tbody>";
			  	$no=1;
		foreach ($education_details as $key => $value) {
					$edu=$value['education']['name'];
		$html .=	"<tr class='text-center'>
					  <td> $no</td>
					  <td>
						   $edu
					  </td>
					  <td> $value->institute 
					  </td>
					  <td> $value->major_subject 
					  </td>
					  <td> $value->year_passing 
					  </td>
				  </tr>";

				  $no++;
		}
		$html .=	"</tbody>

			 </table>
			 </div>

		<!--Education details--2-->
		
		<h5>1.2 Special Training</h5>
        <div class='row'>
            <div class='col-sm-12 col-md-12'>
                <table border='1'>
                    <thead>
                        <tr class='text-center'>
                            <th> S.No </th>
                            <th>Training In</th>
                            <th>Institute</th>
							<th>From Date</th>
							<th>To Date</th>
                            <th>Duration</th>
                            <th>Achievement</th>                           
                        </tr>
                    </thead>
                    <tbody>";
							$no=1;
                        foreach ($training_details as $key1 => $value1) {

                       
                         $html .=  "<tr class='text-center'>
                                <td>$no</td>
                                <td>
                                    $value1->training_in
                                </td>
                                <td>
                                    $value1->institute
                                </td>
								<td>
								$trans_fromdate
							</td>
							<td>
								  $trans_todate
							</td>
                                <td>
                                    $value1->duration
                                </td>
                                <td>
                                    $value1->achievement
                                </td>                               
                            </tr>";
							$no++;
                         } 

                  $html .=  "</tbody>
                </table>
            </div>
        </div>		
		<!--Education details--3-->		
		<h5>1.3 Work Experience (Past and Present)</h5>
        <div class='row'>
            <div class='col-sm-12 col-md-12'>
                <table>
                    <thead>
                        <tr class='text-center'>
                            <th> S.No </th>
                            <th>organisation</th>
                            <th>Position</th>
                            <th>Nature of Work</th>
							<th>From Date</th>
                            <th>To Date</th>
                            <th>Duration</th>                      
                        </tr>
                    </thead>
                    <tbody>";
							$number1=1;
                         foreach ($work_details as $key2 => $value2) {  
                           $html .= "<tr class='text-center'>
                                <td> $number1</td>
                                <td>
                                     $value2->organisation
                                </td>
                                <td>
                                     $value2->position
                                </td>
                                <td>
                                     $value2->nature_work
                                </td>
								<td>
								$work_fromdate
						   </td>
						   <td>
								$work_todate
						   </td>
                                <td>
                                     $value2->duration
                                </td>                             
                            </tr>";
							$number1++;
                     }  
                   $html .="</tbody>
                </table>
            </div>
        </div>
    </div><br>
		 
<!--Manufacturing details-->
<h3>2.0 DETAILS OF PROPOSED PROJECT: Manufacturing / Servicing</h3>
<h5>2.1 PRODUCTION PROGRAMME</h5>
			<div class='row'>
				<div class='col-sm-12 col-md-12'>
					<table border='1'>
						<thead>
							<tr class='text-center'>
								<th> S.No </th>
								<th> Item</th>
								<th>Total Quantity / Year</th>
								<th>Unit</th>
								<th>Sales Revenue / Year</th>
								<th>Capacity Utilisation</th>
							</tr>
						</thead>
						<tbody>";
							$number2 = 1;
							foreach ($pro_details as $key => $value) {
							$html .= "<tr>
								<td align='center'>$number2</td>
								<td>
									$value->item
								</td>
								<td style='text-align:right;'> $value->quantity
								</td>
								<td> $unit_name</td>
								<td style='text-align:right;'> $value->revenue_year
								</td>
								<td> $value->capacity_utilisation
								</td>
							</tr>";
							$number2++;
							$pro_value +=$value->revenue_year;
							}
							$html .= "</tbody>
							<tfoot>
							<tr>
								<th colspan='4' style='text-align:right'>Total</th>
								<th style='text-align:right;'>
									 $pro_value
								</th>										
							</tr>
						</tfoot>
					</table>
				</div>
			</div>		

			<h5>2.2 MACHINERY / EQUIPMENT</h5>
			<div class='row'>
				<div class='col-sm-12 col-md-12'>
					<table border='1'>
						<thead>
							<tr class='text-center'>
								<th> S.No </th>
								<th>Description</th>
								<th>Quantity required in Nos.</th>
								<th>Price</th>
								<th>Total Value</th>
								<th>Name</th>
								<th>Address</th>
							</tr>
						</thead>
						<tbody>";
							$no = 1;
							foreach ($mach_details as $key1 => $value1) {
							$html .= "<tr>
								<td align='center'> $no </td>
								<td>
									$value1->description
								</td>
								<td style='text-align:right;'>
									$value1->quantity
								</td>
								<td style='text-align:right;'>
									$value1->price
								</td>
								<td style='text-align:right;'>
									$value1->total_value
								</td>
								<td>
									$value1->suppliername
								</td>
								<td>
									$value1->supplieraddress
								</td>
							</tr>";
							$no++;
							$mac_value +=$value1->total_value;
							}
							$html .="</tbody>
							

							<tfoot>
							<tr>
								<th colspan='4' style='text-align:right'>Total</th>
								<th style='text-align:right;'>
									 $mac_value 
								</th>										
							</tr>
						</tfoot>
					</table><br><br>		
				</div>
			</div>		

			<h5>2.3 RAW MATERIALS</h5>
		<div class='row'>
			<div class='col-sm-12 col-md-12'>
				<table border='1'>	
					<thead>
						<tr class='text-center'>
							<th rowspan='2'> S.No </th>
							<th rowspan='2'>Item</th>
							<th colspan='2'>Total Annual Requirement</th>
							<th rowspan='2'>Sales Revenue / Year</th>
							<th rowspan='2'>Capacity Utilisation</th>
						</tr>
						<tr class='text-center'>
							<th>Quantity</th>
							<th>Unit </th>
							<th>Value in<br>Rs</th>
						</tr>
					</thead>
					<tbody>";
						$number3 = 1;
	
						foreach ($raw_details as $key2 => $value2) {

							// echo '<pre>';
							// print_r($value2);

						$html .= "<tr>
							<td> $number3 </td>
							<td>
								$value2->item
							</td>
							<td style='text-align:right;'>
								$value2->quantity
							</td>
							<td> $unit_name</td>
							<td style='text-align:right;'>
								$value2->value
							</td>
							<td>
								$value2->revenue_year
							</td>
							<td style='text-align:right;'>
								$value2->capacity_utilisation
							</td>
						</tr>";
	
						$number3++;
						//exit();
						$raw_value +=$value2['value'];
						$raw_revenue +=$value2['revenue_year'];
						}
						$html .= "</tbody>
						<tr>
						<th colspan='4' style='text-align:right'>Total</th>
						<th style='text-align:right;'>
							 $raw_value 
						</th>										
						<th style='text-align:right;'>
							 $raw_revenue 
						</th>										
					</tr>
				</tfoot>
				</table>
	
			</div>
		</div>	

			<!--Utilities and Manpower-->
			<div class='table-responsive '>
			<h3>Utilities and Man-Power Details</h3>
			<div class='step-tab-panel' data-step='step3'>
				<hr>
				<div class='container'>
					<h5>2.4 UTILITIES</h5>
					<div class='row'>
						<div class='col-sm-12 col-md-12'>
							<table class='table table-bordered responsive'>
								<thead class='table-dark'>
									<tr class='text-center'>
										<th style='width:10%;'> S.No </th>
										<th style='width:20%;'>Particulars</th>
										<th style='width:20%;'>Annual Requirement</th>
										<th>Unit</th>
										<th style='width:20%;'>Total Annual Expenses</th>
										<th style='width:20%;'>Remarks</th>
									</tr>
								</thead>
								<tbody class='rawadding'>";
										$util=1;
								foreach ($util_details as $key => $value) {
							 
									  $html .= "<tr>
											<td align='center'>$util</td>
											<td>";
											if($value->particular_id == 1){
                                        
												$html .="<span>Electricity</span>";
												}elseif($value->particular_id == 2)
		
												{
													$html .=	"<span> Water</span>";
												}elseif($value->particular_id == 3)
		
												{
													$html .=	"<span>Coal/Oil</span>";
												}else{
													$html .=	"<span>Any Other</span>";
												}
											
											$html .="</td>;
											<td style='text-align:right;'> $value->requirement </td>
											<td> $unit_value_electricity</td>
											<td style='text-align:right'> $value->expense </td>
											<td> $value->remarks </td>
										</tr>";
										// <tr>
										// 	<td align='center'>2.</td>
										// 	<td>Water</td>
										// 	<td style='text-align:right;'> $util_details->water_requirement </td>
										// 	<td> $unit_value_water </td>
										// 	<td style='text-align:right'> $util_details->water_expenses </td>
											
										// 	<td> $util_details->water_remarks </td>
										// </tr>
										// <tr>
										// 	<td align='center'>3.</td>
										// 	<td>Coal /Oil</td>                                     
										// 	<td style='text-align:right;'> $util_details->oil_requirement</td>
										// 	<td> $unit_value_oil</td>
										// 	<td style='text-align:right'> $util_details->oil_expenses </td>
										// 	<td> $util_details->oil_remarks</td>
										// </tr>
										// <tr>
										// 	<td align='center'>4.</td>
										// 	<td>Any Other </td>
										// 	<td style='text-align:right;'> $util_details->other_requirement </td>
										// 	<td > $unit_value_other </td>
										// 	<td style='text-align:right'> $util_details->other_expenses</td>
										// 	<td> $util_details->other_remarks </td>
										// </tr>";
									
										$elec_req  += $value->requirement;
	
										$expenses += $value->expense;      
										
										$util++;
								}
							   $html .= "</tbody>
								<tfoot>
									<tr>
										<th colspan='2' style='text-align:right'>Total</th>
										<th style='text-align:right;'>
											 $elec_req 
										</th>
										<th></th>
										<th style='text-align:right;'>
											 $expenses
										</th>
										<th>
										</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div> <br><br>
					<h5>2.5 MANPOWER</h5>
					<div class='row'>
		<div class='col-sm-12 col-md-12'>
			<table class='table table-bordered responsive'>
				<thead class='table-dark'>
					<tr class='text-center'>
						<th style='width:2%;'> S.No </th>
						<th style='width:20%;'>Particulars</th>
						<th style='width:20%;'>No</th>
						<th style='width:20%;'>Total Wages & Salaries Rs./annum</th>
						<th style='width:20%;'>Remarks</th>
					</tr>
				</thead>
				<tbody class='rawadding'>";
				$manpower_no=1;
				foreach ($man_details as $key => $value1) {
				
						$html .="<tr>
							<td align='center'>$manpower_no</td>
							<td>";if($value1->particular_id == 1){
                                        
								$html .="<span> Skilled</span>";
								}elseif($value1->particular_id == 2)

								{
									$html .="<span> Semi-skilled</span>";
								}elseif($value1->particular_id == 3)

								{
									$html .="<span> Unskilled</span>";
								}else{
									$html .="<span> Office Staff</span>";
								}
							$html .="</td>
							<td style='text-align:right;'>
								 $value1->numbers </td>
							<td style='text-align:right'>
								 $value1->salaries </td>
							<td>
								 $value1->remarks </td>
						</tr>";
						// <tr>
						// 	<td align='center'>2.</td>
						// 	<td>Semiskilled
						// 	</td>
						// 	<td style='text-align:right;'>
						// 		 $man_details->semiskilled_no </td>
						// 	<td style='text-align:right'>
						// 		 $man_details->semiskilled_salaries </td>
						// 	<td>
						// 		 $man_details->semiskilled_remarks </td>
						// </tr>
						// <tr>
						// 	<td align='center'>3.</td>
						// 	<td>Unskilled
						// 	</td>
						// 	<td style='text-align:right;'>
						// 		 $man_details->unskilled_no </td>
						// 	<td style='text-align:right'>
						// 		 $man_details->unskilled_salaries </td>
						// 	<td>
						// 		 $man_details->unskilled_remarks </td>
						// </tr>
						// <tr>
						// 	<td align='center'>4.</td>
						// 	<td>Office Staff
						// 	</td>
						// 	<td style='text-align:right;'>
						// 		 $man_details->office_no </td>
						// 	<td style='text-align:right'>
						// 		 $man_details->office_salaries </td>
						// 	<td>
						// 		 $man_details->office_remarks </td>
						// </tr>";
				
						$no_s     += $value1->numbers ? $value1->numbers :0;

						$salaries += $value1->salaries ? $value1->salaries :0;
							$manpower_no++;
				}
			   $html .=" </tbody>
				<tfoot>
					<tr>
						<th colspan='2' style='text-align:right'>Total</th>
						<th style='text-align:right;'>
							 $no_s </th>
						<th style='text-align:right;'>
							 $salaries  </th>
						<th>
						</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
				</div>
			</div>
		</div>
		<div class='table-responsive'>
			<h3>Project profitability Details</h3>			
			<div class='step-tab-panel' data-step='step3'>
				<h4 class='tab2-head'>4.0 COST OF THE PROJECT</h4>				
				<div class='container'>
					<h5> 4.1 FIXED CAPITAL</h5>
					<div class='row'>
						<div class='col-sm-12 col-md-12'>
							<table class='table table-bordered responsive'>
								<thead class='table-dark'>
									<tr class='text-center'>
										<th> S.No </th>
										<th>Item</th>
										<th>Value</th>                                  
	
									</tr>
								</thead>
								<tbody class='rawadding'>";	
								$fixed_no=1;
								foreach ($fixed_capitals as $key => $value2) {						
									$html .="<tr>
											<td align='center'>$fixed_no</td>
											<td>$value2->item
											</td>
											<td style='text-align:right'>
												 $value2->capital_value
											</td>                                        
										</tr>";
										// <tr>
										// 	<td align='center'>2.</td>
										// 	<td>Machinery/Equipment
										// 	</td>
										// 	<td style='text-align:right'>
										// 		 $fixed_capitals->machinery_value </td>                                        
										// </tr>
										// <tr>
										// 	<td align='center'>3.</td>
										// 	<td>Furniture & Fixture
										// 	</td>
										// 	<td style='text-align:right'>
										// 		 $fixed_capitals->furniture_value </td>                                        
										// </tr>";                             
							
										$fixed       += $value2->capital_value ? $value2->capital_value:0;
									
											// print_r($fixed);
											// exit();

											$fixed_no++;
								}

								$html .="</tbody>
								<tfoot>
									<tr>
	
										<th colspan='2' style='text-align:right'>Total</th>
										<th style='text-align:right;'>
											 $fixed 
										</th>                                 
									</tr>
								</tfoot>
							</table>
						</div>
					</div> <br><br>
					<h5>4.2 WORKING CAPITAL</h5>
					<div class='row'>
						<div class='col-sm-12 col-md-12'>
							<table class='table table-bordered responsive'>
								<thead class='table-dark'>
									<tr class='text-center'>
										<th style='width:12%;'> S.No </th>
										<th style='width:20%;'>Item</th>
										<th style='width:20%;'>Duration</th>
										<th style='width:20%;'>Quantity</th>
										<th style='width:20%;'>Units</th>
										<th style='width:20%;'>Value (Rs.)</th>
									</tr>
								</thead>
								<tbody class='rawadding'>";
								$working_no=1;
								foreach ($working_capital as $key => $value3) {	

									$html .=	"<tr>
											<td align='center'>$working_no</td>
											<td>$value3->item
											</td>
											<td>
												 $value3->duration </td>
											<td style='text-align:right;'>
												 $value3->quantity </td>
												 <td>$raw</td>
											<td style='text-align:right;'>
												 $value3->value </td>
												 
										</tr>";
										// <tr>
										// 	<td align='center'>2.</td>
										// 	<td>Semi finished goods stock
	
										// 	</td>
										// 	<td>
										// 		 $working_capital->semifinished_duration </td>
										// 	<td style='text-align:right;'>
										// 		 $working_capital->semifinished_quantity </td>
										// 		 <td>$semi_finished</td>
										// 	<td style='text-align:right;'>
										// 		 $working_capital->semifinished_value </td>
										// </tr>
										// <tr>
										// 	<td align='center'>3.</td>
										// 	<td>Finished goods stock
	
										// 	</td>
										// 	<td>
										// 		 $working_capital->finished_duration </td>
										// 	<td style='text-align:right;'>
										// 		 $working_capital->finished_quantity </td>
										// 		 <td>$finished</td>
										// 	<td style='text-align:right;'>
										// 		 $working_capital->finished_value </td>
										// </tr>
										// <tr>
										// 	<td align='center'>4.</td>
										// 	<td>One month production expenses (Utilisation + Wages + salaries)
	
										// 	</td>
										// 	<td>
										// 		 $working_capital->expenses_duration </td>
										// 	<td style='text-align:right;'>
										// 		 $working_capital->expenses_quantity </td>
										// 		 <td>$expense</td>
										// 	<td style='text-align:right;'>
										// 		 $working_capital->expenses_value </td>
										// </tr>
										// <tr>
										// 	<td align='center'>5.</td>
										// 	<td>Bills Receivables
	
										// 	</td>
										// 	<td>
										// 		 $working_capital->bills_duration </td>
										// 	<td style='text-align:right;'>
										// 		 $working_capital->bills_quantity </td>
										// 		 <td>$bill</td>
										// 	<td style='text-align:right;'>
										// 		 $working_capital->bills_value </td>
										// </tr>";
									
										$duration              += $value3->duration ? $value3->duration :0;
	
										$qty                  += $value3->quantity ?  $value3->quantity :0;
	
										$val                  += $value3->value ? $value3->value :0;

											$working_no++;
								}
											$html .="</tbody>
								<tfoot>
									<tr>
										<th colspan='2' style='text-align:right'>Total</th>
										<th>
											 $duration  </th>
										<th style='text-align:right;'>
											 $qty  </th>
											 <th></th>
										<th style='text-align:right;'>
											 $val  </th>
										</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<h5>4.3 TOTAL COST OF PROJECT</h5>
					<div class='row'>
						<div class='col-sm-12 col-md-12'>
							<table class='table table-bordered responsive'>
								<thead class='table-dark'>
									<tr class='text-center'>
										<th style='width:2%;'> S.No </th>
										<th style='width:20%;'>Particulars</th>
										<th style='width:20%;'>Value</th>
									</tr>
								</thead>
								<tbody class='rawadding'>
									
										<tr>
											<td align='center'>1.</td>
											<td>Fixed Capital (Total of Item No.4.1)
											</td>
											<td style='text-align:right;'>
												 $fixed </td>                                     
										</tr>
										<tr>
											<td align='center'>2.</td>
											<td>Working Capital (Total of Item No.4.2)
	
											</td>
											<td style='text-align:right;'>
												 $val </td>                                       
										</tr>
										<tr>
											<td align='center'>3.</td>
											<td>Preliminary & Pre-operative expenses
	
											</td>
											<td style='text-align:right;'>
												 $project->preliminary_expenses </td>                                    
	
										</tr>";
										$no              = $fixed + $val
											+ $project->preliminary_expenses;
									
											$html .="</tbody>
								<tfoot>
									<tr>
										<th colspan='2' style='text-align:right'>Total</th>
										<th style='text-align:right;'>
											 $no  </th>                              
										
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<h5>4.4 MEANS OF FINANCE</h5>
					<div class='row'>
						<div class='col-sm-12 col-md-12'>
							<table class='table table-bordered responsive'>
								<thead class='table-dark'>
									<tr class='text-center'>
										<th style='width:2%;'> S.No </th>
										<th style='width:20%;'>Particulars</th>
										<th style='width:20%;'>Value (Rs.)</th>
										<th style='width:20%;'>Remarks</th>
									</tr>
								</thead>
								<tbody class='rawadding'>";	
								$means_no=1;
								foreach ($means_finance as $key => $value4) {									
									$html .=	"<tr>
											<td align='center'>$means_no</td>
											<td>$value4->item
	
											</td>
											<td style='text-align:right;'>
												 $value4->value </td>
											<td>
												 $value4->remarks </td>                                       
										</tr>";
										// <tr>
										// 	<td align='center'>2.</td>
										// 	<td>Subsidy
	
										// 	</td>
										// 	<td style='text-align:right;'>
										// 		 $means_finance->subsidy_value </td>
										// 	<td>
										// 		 $means_finance->subsidy_remark </td>                                      
										// </tr>
										// <tr>
										// 	<td align='center'>3.</td>
										// 	<td>Term Loan	
										// 	</td>
										// 	<td style='text-align:right;'>
										// 		 $means_finance->loan_value </td>
										// 	<td>$means_finance->loan_remark </td>                                       
										// </tr>
										// <tr>
										// 	<td align='center'>4.</td>
										// 	<td>Own Investment
	
										// 	</td>
										// 	<td style='text-align:right;'>
										// 		 $means_finance->investment_value </td>
										// 	<td>
										// 		 $means_finance->investment_remark </td>                                       
										// </tr>
										// <tr>
										// 	<td align='center'>5.</td>
										// 	<td>Any Other
	
										// 	</td>
										// 	<td style='text-align:right;'>
										// 		 $means_finance->other_value </td>
										// 	<td>
										// 		 $means_finance->other_remark </td>
										// 	<!-- <td>
										// 			 $value1->office_remarks </td> -->
										// </tr>";
									
										$working  += $value4->value ?  $value4->value :0;

										$means_no++;
								}
								$html .="</tbody>
								<tfoot>
									<tr>
										<th colspan='2' style='text-align:right'>Total</th>
										<th style='text-align:right;'> $working </th>                              
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<h5>4.5 PROJECT PROFITABILITY ANALYSIS</h5>
					<div class=row>
						<div class=col-sm-12 col-md-12>
							<table class=table table-bordered responsive>
								<thead class=table-dark>
									<tr class=text-center>
										<th style=width:2%;> S.No </th>
										<th style=width:20%;>Item</th>                                    
										<th style=width:20%;>Value</th>	
									</tr>
								</thead>
								<tbody class=rawadding>
									
										<tr>
											<td align=center>1.</td>
											<td>Sales Revenue
											</td>
											<td style='text-align:right;'>
												 $project->sales_revenue </td>                                      
										</tr>
										<tr>
											<td align=center>2.</td>
											<td>Manufacturing Expenses (2.3+2.4+2.5)
											</td>
											<td style='text-align:right;'>
												 $project->manufacturing_expenses </td>                                       
										</tr>
										<tr>
											<td align=center>3.</td>
											<td>Selling & Distribution Expenses
											</td>
											<td style='text-align:right;'>
												 $project->distribution_expenses </td>                                    
										</tr>
										<tr>
											<td align=center>4.</td>
											<td>Administrative Expenses
	
											</td>
											<td style='text-align:right;'>
												 $project->administrative_expenses </td>                                       
										</tr>
										<tr>
											<td align=center>5.</td>
											<td>Interest for Term Loan and Working Capital
	
											</td>
											<td style='text-align:right;'>
												 $project->interest_loan </td>                                       
										</tr>
										<tr>
											<td align=center>6.</td>
											<td>Depreciation
	
											</td>
											<td style='text-align:right;'>
												 $project->depreciation </td>                                       
										</tr>
										<tr>
											<td align=center>7.</td>
											<td>Gross Profit
	
											</td>
											<td style='text-align:right;'>
												 $project->gross_profit </td>
										  
										</tr>
										<tr>
											<td align=center>8.</td>
											<td>Income tax
	
											</td>
											<td style='text-align:right;'>
												 $project->income_tax </td>                                        
										</tr>
										<tr>
											<td align=center>9.</td>
											<td>Net profit
	
											</td>
											<td style='text-align:right;'>
												 $project->net_profit </td>                                       
										</tr>						      
								</tbody>                        
							</table>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<div class='table-responsive'>
        <h3>Supplementary Details</h3>        
        <div class='step-tab-panel' data-step='step3'>
            <div class='container'>
                <h5>5.0 SUPPLEMENTARY DETAILS</h5>
                <div class='row'>
                    <div class='col-sm-12 col-md-12'>
                        <table class='table table-bordered responsive'>
                            <thead class='table-dark'>
                                <tr class='text-center'>
                                    <th style='width:2%;'> S.No </th>
                                    <th style='width:15%;'> Give Details
                                    </th>
                                    <th style='width:15%;'></th>                                   
                                </tr>
                            </thead>
                            <tbody class='rawadding'>
                                
                                    <tr>
                                        <td align='center'>5.1</td>
                                        <td>Do you own House/Property etc. ?
                                        </td>
                                        <td>";
                                             if($project->own_house == 1)
											 {
												$html .="<span>Yes</span>";

											 }else{
												$html .="<span>No</span>";
											 }
                                       $html .=" </td>                                        
                                    </tr>
                                    <tr>
                                        <td align='center'>5.2</td>
                                        <td>Own Insurance Policy
                                        </td>
                                        <td>
                                             $project->own_insurance_policy </td>                                        
                                    </tr>
                                    <tr>
                                        <td align='center'>5.3</td>
                                        <td>Any Interest in other firms

                                        </td>
                                        <td>
                                             $project->interest_other_firms </td>                                       
                                    </tr>
                                    <tr>
                                        <td align='center'>5.4</td>
                                        <td>Present Monthly Income
                                        </td>
                                        <td>
                                             Rs.$project->monthly_income </td>                                       
                                    </tr>                              
                            </tbody>
                        </table>
                    </div>
                </div> <br><br>
            </div>
        </div>
    </div>
		<h5>6.0 REFERENCES</h5>
		<div class='row'>
			<div class='col-sm-12 col-md-12'>
				<table class='table table-bordered responsive'>
					<thead class='table-dark'>
						<tr class='text-center'>
							<th style='width:2%;'> S.No </th>
							<th style='width:20%;'> Name</th>
							<th style='width:20%;'>Address</th>
							<th style='width:20%;'>Occupation</th>										
						</tr>
					</thead>
					<tbody class='eduadding'>";

						$number5=1;
						foreach ($user_references as $key => $value) {									
						
						   $html  .= "<tr class='edupresent_row_in_post'>
								<td align='center'> $number5 </td>
								
								<td> $value->name
								</td>
								<td> $value->address
								</td>
								<td> $value->occupation
								</td>											
							</tr>";
							$number5++;
						 }						
				   $html .="</tbody>
				</table>
			</div>
		</div> <br><br>			
		<div class='table-responsive '>
        <h3>Payment Details</h3>
        
			<div class='step-tab-panel' data-step='step3'>
				<div class='container'>
					<div class='row'>
						<div class='col-sm-12 col-md-12'>											
						   <table class='table table-bordered responsive'>					
								  <tbody class='referenceadding'>							         							
								     <tr>														  
										<th class='table-dark'>Payment Amount : </th>
										<td>Rs.&nbsp; $basics->transaction_amount</td>
									 </tr>
									 <tr>														  
										<th class='table-dark'>Transaction Number. : </th>
										<td> $basics->transaction_number</td>
									 </tr>
									 <tr>														  
										<th class='table-dark'>Transaction Date : </th>
										<td> $trans_date</td>
									 </tr>
									 <tr>														  
										<th class='table-dark'>Payment Status : </th>
										<td>";
										if ($basics->payment_status == 1)
										{
										 $html .="<span><b>Success</b></span>";
										}else{
											$html .="<span><b>Fail</b></span>";
										}
										 $html .="</td>
									</tr>			
								</tbody>								
							</table>
						</div>
					</div> <br><br>			
				</div>
			</div>
		</div>	 
       <table border='1'>
	
		</table><!--system generated close-->
			
		</table><!--final table close-->
			</section>
		  </body>
		</html>";
		//echo $html;exit;
		$mpdf->AddPage('P', '', '', '', '', 19, 20, 20, 22, 0, 0);
		$mpdf->WriteHTML($html);
		$filename = 'Project_Report.pdf';
		//$fileroot = $filename;
		$mpdf->Output($filename, 'D');
		$this->set(compact('filename'));
		// $mpdf->Output();
		exit();
	}
}
