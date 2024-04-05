<!-- Login box.scss -->
       <div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="auth-wrapper">
				<div class="auth-box p-4 bg-white rounded">
							<div class="logo-fiber text-center mt-4 mb-4">
                                <img src="<?php echo $this->Url->image('../images/itcot_logo.png');?>"/>
							</div>
					<div id="loginform">
						<div class="logo">
							<h3 class="box-title mb-3 text-center">Sign In </h3>
						</div>
						<!-- Form -->
                        <?= $this->Flash->render() ?>
						<div class="row">
							<div class="col-12">
								<form class="form-horizontal mt-3 form-material">
                                   <?= $this->Form->create($user,['class'=>'form-horizontal mt-3 form-material']) ?>
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
								 <?= $this->Form->end() ?>
                                    </form>
							</div>
						</div>
					</div>
				</div>
				</div>
				</div>
			</div>
	 </div>

                
