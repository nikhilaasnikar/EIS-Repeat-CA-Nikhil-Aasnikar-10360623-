<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="tabs4 cid-rwhDEq04aP" id="tabs4-c">
    <div class="container">
        <div class="login-form-bg h-100">

        <div class="container h-100">
              <?php if($this->session->userdata('loginerror')){?>
                <div class="alert alert-warning alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button><?php echo $this->session->userdata('loginerror');?></div>
                                    <?php } ?>
            <div class="row justify-content-center h-100">


                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <div class="text-center"> <h4>Login</h4></div>
       
                                <form class="mt-5  login-input" style="margin-bottom:2px;" action="<?php echo base_url('login/login_process');?>" method="post"> <div style="color:green;"><?php echo $this->session->flashdata('user_reg');?></div>
		<div style="color:red;"><?php echo $this->session->flashdata('login_error');?>
        </div>
                                    <div class="form-group">
                                        <input type="email" name="user_name" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <button class="btn form-control btn-block" style="background-color: #71cef9;margin-left: 0px;">Sign In</button>
                                  
                                </form>
                                <a href="<?php echo base_url('login/signup');?>" class="btn form-control btn-block" style="background-color: #3bae58;margin-left: 0px;">Sign Up</a>
                            </div>
                            </br>
                        <center><b><span>-OR-</span></b></center>
                        <center> <div class="g-signin2 btn btn-block" data-onsuccess="onSignIn" data-theme="dark" data-width="300"  data-longtitle="true"></div></center>
                              
                        </div>
                        <!-- <?php echo $this->authUrl; ?> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

 <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        var ID          = profile.getId();
        var Full_Name   = profile.getName();
        var Given_Name  = profile.getGivenName();
        var Family_Name = profile.getFamilyName();
        var Image_URL   = profile.getImageUrl();
        var Email       = profile.getEmail();

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>
 