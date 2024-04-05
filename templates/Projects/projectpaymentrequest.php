<style>     
.step-footer {
    text-align: center !important;
}

.razorpay-payment-button{
	display:none;
}
</style>        
		<?php // print_r($this->Url->webroot);  exit(); ?>
<?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => '', "autocomplete" => "off",'action'=>'paymentresponse']); ?>
<?php echo $this->Form->input('transaction_id',array('type'=>'hidden','value'=>$transactionID));?>
<div class="container-fluid">
         <div class="step-app row justify-content-center" id="demo">		   	
			<div class="step-content col-lg-6 col-md-8 col-sm-12">
               <div class="step-tab-panel" data-step="step10">
                  <h3 class="tab2-head">Payment Confirmation</h3>
                  <hr style="width: 150px; margin-top: 5px" />
                     <div class="container">
                        <div class="row">         
						<div class="col-sm-8 col-md-12">
                              <table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th colspan = "3">Payment Confirmation</th>																		
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
			<?php if($project['payment_status'] == ''){ ?>

			<div class="step-footer">
               <!--button data-step-action="prev" class="step-btn btn">Previous</button-->
               <button type="submit" class="btn btn-info rounded-pill px-4 waves-effect waves-light">Confirm & pay</button>
               <!--button data-step-action="finish" class="step-btn btn">Finish</button-->
            </div>
			<?php } ?>
          </div>
     </div>
	<script
			src="https://checkout.razorpay.com/v1/checkout.js"
			data-key="<?php echo $data['key']?>"
			data-amount="<?php echo $data['amount']?>"
			data-currency="<?php echo $data['currency']?>"
			data-name="<?php echo $data['name']?>"
			data-description="<?php echo $data['description']?>"
			data-prefill.name="<?php echo $data['prefill']['name']?>"
			data-prefill.email="<?php echo $data['prefill']['email']?>"
			data-prefill.contact="<?php echo $data['prefill']['contact']?>"
			data-notes.shopping_order_id="<?php echo $data['reference_no']?>"
			data-image="<?php echo $data['image']?>"
			data-order_id="<?php echo $data['order_id']?>">
		</script>
	 <?php echo $this->Form->End(); ?>
