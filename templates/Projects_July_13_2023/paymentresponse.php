<style>     
.step-footer {
    text-align: center !important;
}
</style>        
<?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => '', "autocomplete" => "off",'action'=>'paymentresponse']); ?>
<div class="container-fluid">
 <div class="step-app row justify-content-center" id="demo">		   	
	<div class="step-content col-lg-6 col-md-8 col-sm-12">
	   <div class="step-tab-panel" data-step="step10">
		  <h3 class="tab2-head">Payment Status</h3>
		  <div class="badge badge-success"> 
					Congratulations! 
					<br>
					Your Payment done!
					<br>
					<?php echo $coursedetail;?>
					<br> 
				</div>
		  <hr style="width: 150px; margin-top: 5px" />
			 <div class="container">
				<div class="row">         
				<div class="col-sm-8 col-md-12">
				<table align='center' width='100%' cellpadding='5'>
					<tr>
						<td>
						<b>Transaction Status: </b>
						<?php echo $transactions['Transaction']['transactionstatus'];?>
						</td>
					</tr>
					<tr>
						<td>
						<b>Transaction Number: </b>
						<?php echo $transactions['Transaction']['transaction_number'];?>
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
						<thead class="table-dark">
							<tr class="text-center">
								<th colspan = "3">Payment</th>																		
							</tr>
						</thead>
						  <tbody class="referenceadding">							         							
							   <tr>														  
									<td>Name : </td>
									<td><?php echo $user['name']; ?></td>
								</tr>
								<tr>														  
									<td>Mobile No. : </td>
									<td><?php echo $user['mobile_no']; ?></td>
								</tr>
								 <tr>														  
									<td>Email : </td>
									<td><?php echo $user['email']; ?></td>
								</tr>
								<tr>														  
									<td>Amount : </td>
									<td><?php echo 'Rs. 1'; ?></td>
								</tr>			
						</tbody>								
					</table>
				</div>		
			</div>					
		  </div><br><br>	
	   </div>
	</div>
  </div>
</div>
<?php echo $this->Form->End(); ?>
