<!DOCTYPE html>  
 <html>  
 <head>  
      <title>Admin Login | <?php echo $title; ?></title>  
       
 </head>  
 <body>  
      <div class="container">  
           <br /><br /><br />  
           <form method="post" action="<?php echo base_url(); ?>Admin/login_validation">  
                <div class="form-group">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                    <span class="text-danger" style="color:red;"><?php echo form_error('username');?></span>                 
                </div>  
                <div class="form-group">  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                  <span class="text-danger" style="color:red;"><?php echo form_error('password');?></span>  
                </div>  
                <div class="form-group">  
                     <input type="submit" name="insert" value="Login" class="btn btn-info" />  
                     <?php  
                          echo '<label class="text-danger" style="color:red;">'.$this->session->flashdata

("error").'</label>';  
                     ?>  
                </div>  
           </form>  
      </div>  
 </body>  
 </html>  

 <!-- <body class="bg-primary">

    <div class="unix-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>Admin Login</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Reset Password</h4>
                            <form method="post" action="<?php echo base_url(); ?>Admin/login_validation">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="text" name="username" class="form-control" placeholder="Email">
                                     <span class="text-danger" style="color:red;"><?php echo form_error('username');?></span>     
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('password');?></span> 
                                </div>
                               <input type="submit" name="insert" value="Login" class="btn btn-info" />  
                     <?php  
                          echo '<label class="text-danger" style="color:red;">'.$this->session->flashdata

("error").'</label>';  
                     ?>  
                                <div class="register-link text-center">
                                    <p>Back to <a href="#"> Home</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body> -->