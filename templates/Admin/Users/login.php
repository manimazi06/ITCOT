<style>
.error{
	color:red;
	
}
</style>
       <div class="container">
			<div class="row">
				<div class="col-md-12">					
					<div class="auth-wrapper">
				<div class="auth-box p-4 bg-white rounded">
				 <center><b><?= $this->Flash->render() ?></b></center>
							<div class="logo-fiber text-center mt-4 mb-4">
                                <img src="<?php echo $this->Url->image('../images/itcot_logo.png');?>"/>
							</div>
					<div id="loginform">
						<div class="logo">
							<h3 class="box-title mb-3 text-center">Sign In </h3>
						</div>
						<!-- Form -->
						<div class="row">
							<div class="col-12">
								<div class="form-horizontal mt-3 form-material">
								 <?php echo $this->Form->create($user,['id'=>'FormID',"autocomplete"=>"off",'enctype'=>'multipart/form-data','class'=>'sign-in-form']); ?>

									<div class="form-group mb-3">
										<div class="">
											<label>Username</label>
                                            <?= $this->Form->control('username', ['required' => true,'class'=>'form-control','placeholder'=>' Username','label'=>false]) ?>
										</div>
									</div>
									<div class="form-group mb-4">
										<div class="">
											<label>Password</label>
                                            <?= $this->Form->control('password', ['required' => true,'class'=>'form-control','placeholder'=>' Password','label'=>false]) ?>
											</div>
									</div>
									<div class="form-group text-center mt-5 mb-4">
										<div class="col-xs-12">
											<button class="btn btn-info d-block w-100 waves-effect waves-light" type="submit">Log In</button>
										</div>
									</div>
								 <?php echo $this->Form->End();?>
                                    </div>
							</div>
						</div>
					</div>
				</div>
				</div>
				</div>
			</div>
	 </div>

                
