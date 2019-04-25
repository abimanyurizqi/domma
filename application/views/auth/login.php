<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box lockscreen clearfix">
					<div class="content">
						<div class="logo text-center"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo-domma.png" alt="Klorofil Logo"></a></div>
						<p class="lead">Login</p>
						<?= form_open(base_url('auth/index')); ?>
						<form action="<?php echo base_url('auth/index'); ?>" method="post">
							<?php echo $this->session->flashdata('message'); ?>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span><input type="email" class="form-control" id="email" name="email" placeholder="Enter your email ...">
							</div>
							<span><small class="text-danger"><?php echo form_error('email'); ?></small></span>
							<p></p>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span><input type="password" class="form-control" id="password" name="password" placeholder="Enter your password ...">
							</div>
							<small class="text-danger"><?php echo form_error('password'); ?></small>
							<br>
							<div class="text-center">
							<button type="submit" class="btn btn-primary">Submit</button><br><br>
	    					<a class="text-center" href="<?php echo base_url(); ?>auth/registration">Don't have account yet? Register now!</a>
	    					</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->




