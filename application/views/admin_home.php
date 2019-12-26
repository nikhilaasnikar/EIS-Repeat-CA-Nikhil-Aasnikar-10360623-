 <!-- <form method="post" action="<?php echo base_url(); ?>Admin/login_validation">  
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
           </form>   -->

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Webstrot Admin : Widget</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/unix.css" rel="stylesheet">
    <link href="<?php echo base_url();?>./assets/adminassets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-content">
                        <div class="login-logo">
                            <!-- <a href="index.html"><span>Admin Login</span></a> -->
                        </div>
                        <div class="login-form">
                            <h4>Admin Login</h4>
                   <form method="post" action="<?php echo base_url(); ?>admin/login_validation">  
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
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>