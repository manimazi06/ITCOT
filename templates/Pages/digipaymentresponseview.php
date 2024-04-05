<style>     
.step-footer {
    text-align: center !important;
}
.badge {
    --bs-badge-font-size: 1.5em !important;
	
}
</style>        
<?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => '', "autocomplete" => "off",'action'=>'paymentresponse']); ?>
<div class="container-fluid">
 <div class="step-app row justify-content-center" id="demo">		   	
	<div class="step-content col-lg-6 col-md-8 col-sm-12">
	   <div class="step-tab-panel" data-step="step10">
		  <h3 class="tab2-head">Payment Status</h3>
		     <?php if($transactions['transactionstatus'] == 'success'){ ?>
				<span class="badge bg-success">Congratulations! 
					
					Your Payment done!</span>
			 <?php  }else{ ?>
                 	<span class="badge bg-danger">Payment failed! Please Try again later.
					
					</span>
			 
			 <?php  } ?>		

		  <hr style="width: 150px; margin-top: 5px" />
			 <div class="container">
				<div class="row">         
				<div class="col-sm-8 col-md-12">
				<table align='center' width='100%' cellpadding='5'>
					<tr>
						<td>
						<b>Transaction Status: </b>
						<?php echo $transactions['transactionstatus'];?>
						</td>
					</tr>
					<tr>
						<td>
						<b>Transaction Number: </b>
						<?php echo $transactions['transaction_number'];?>
						</td>
					</tr>
					<?php /*if($transactions['Transaction']['transactionstatus'] == 'Success' && $programregistration['Programregistration']['publicprogram_id'] == 32){?>
					<tr>
						<td>
						<b>Google Map for Venue: </b>
						<a target="_blank" href='https://goo.gl/maps/g1axhBQp2RjFPuMJ6'>https://goo.gl/maps/g1axhBQp2RjFPuMJ6</a>
						</td>
					</tr>
					<?php }*/?>
				</table>
					  <table class="table table-bordered responsive">					
						  <tbody class="referenceadding">							         							
							   <tr>														  
									<td><b>Name :</b></td>
									<td><?php echo $user['name']; ?></td>
								</tr>
								<tr>														  
									<td><b>Mobile No. :</b></td>
									<td><?php echo $user['mobile_no']; ?></td>
								</tr>
								 <tr>														  
									<td><b>Email :</b></td>
									<td><?php echo $user['email']; ?></td>
								</tr>
								<tr>														  
									<td><b>Amount :</b></td>
									<td><?php echo 'Rs. 1'; ?></td>
								</tr>			
						</tbody>								
					</table>
					
				 <div class="form-group text-center">					
					<?php if($transactions['transactionstatus'] == 'success'){ ?>					
					<?php echo $this->Html->link('Back to Digi Library',array('action'=>'digitallibrary'),array("class"=>"btn btn-primary"));?>
					<?php  }else{ ?>
					<?php echo $this->Html->link('Back to Digi Library',array('action'=>'digitallibrary'),array("class"=>"btn btn-primary"));?>
					<?php echo $this->Html->link('Go to Payment',array('action'=>'digitalpayment'),array("class"=>"btn btn-danger"));?>
					<?php } ?>
				</div>
				</div>		
			</div>					
		  </div><br><br>	
	   </div>
	</div>
  </div>
</div>
<?php echo $this->Form->End(); ?>
