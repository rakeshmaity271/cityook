<?php echo $head;?>
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <!-- <img src="assets/images/logo/stack-logo-dark.png" alt="branding logo"> -->
                    </div>
                  </div>
                  <?php  if(!empty($message)) { ?>
                    <div id="infoMessage" class="alert alert-danger mb-2" role="alert">
                      <?php echo $message;?>
                    </div>
                  <?php } ?>
                  
                  <!-- <div ><?php echo $message;?></div> -->
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Login Credentials</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body pt-0 text-center">
                    <a href="#" class="btn btn-social mb-1 mr-1 btn-outline-facebook">
                      <span class="fa fa-facebook"></span>
                      <span class="px-1">facebook</span>
                    </a>
                    <a href="#" class="btn btn-social mb-1 mr-1 btn-outline-google">
                      <span class="fa fa-google-plus font-medium-4"></span>
                      <span class="px-1">google</span>
                    </a>
                  </div>
                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2">
                    <span>OR Using Account Details</span>
                  </p>
                  <div class="card-body pt-0">
                    <form class="form-horizontal" action="<?php echo base_url();?>auth/login" method="post">
                      <fieldset class="form-group floating-label-form-group">
                        <label for="user-name">Your Username</label>
                        <!-- <input type="text" class="form-control" id="user-name" placeholder="Your Username"> -->
                        <?php echo form_input($identity);?>
                      </fieldset>
                      <fieldset class="form-group floating-label-form-group mb-1">
                        <label for="user-password">Enter Password</label>
                        <!-- <input type="password" class="form-control" id="user-password" placeholder="Enter Password"> -->
                        <?php echo form_input($password);?>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-sm-left">
                          <fieldset>
                            <!-- <input type="checkbox" id="remember-me" class="chk-remember"> -->
                            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                            <label for="remember-me"> Remember Me</label>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                      </div>
                      <button type="submit" class="btn btn-outline-primary btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                 
                 
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <?php echo $script;?>