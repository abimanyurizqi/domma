<div class="vertical-align-wrap">
      <div class="vertical-align-middle">
        <div class="auth-box lockscreen clearfix">
          
            <div class="content">
              <div class="header">
                <div class="logo text-center"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo-domma.png" alt="Klorofil Logo"></a></div>
                <p class="lead">Register</p>
              </div>
              <?= form_open(base_url('auth/registration')); ?>
              <form action="<?php echo base_url('auth/registration'); ?>" method="post">
                <div class="form-group">
                  <label for="name" class="control-label sr-only">Fullname</label>
                  <input type="name" class="form-control" id="name" name="name" placeholder="Fullname">
                  <small class="text-danger"><?php echo form_error('name'); ?></small>
                </div>
                <div class="form-group">
                  <label for="email" class="control-label sr-only">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="email@domain.com">
                  <small class="text-danger"><?php echo form_error('email'); ?></small>
                </div>
                <div class="form-group">
                  <label for="password1" class="control-label sr-only">Password</label>
                  <input type="password" class="form-control" id="password1" name="password1"  placeholder="Password">
                  <small class="text-danger"><?php echo form_error('password1'); ?></small>
                </div>
                <div class="form-group">
                  <label for="password2" class="control-label sr-only">Password</label>
                  <input type="password" class="form-control" id="password2" name="password2"  placeholder="Password">
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-primary">Register</button><br><br>
                <a class="text-center" href="<?php echo base_url(); ?>auth/index">Already have account? Login now!</a>
              </div>
              </form>

            </div>
          
          
          
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->