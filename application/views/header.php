<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/logo2.jpg" type="image/x-icon">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="61459705251-omuvpprmrrea7gblbife5fcpjsauncqq.apps.googleusercontent.com">
 <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="description" content="">
  
  <title>Home</title>
<!-- 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script type="text/javascript" src='http://code.jquery.com/jquery-latest.min.js'></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/web/assets/custom-icons/custom-icons.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
    
    <script src= 
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> 
    </script> 
    
    <script src= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> 
    </script> 
  <link rel="stylesheet" href="<?php echo base_url();?>assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/socicon/css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/gallery/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/custom/css/mbr-additional.css" type="text/css">

  <script type="text/javascript" src='<?php echo base_url();?>js/index.js'></script>
  <script type="text/javascript" src='<?php echo base_url();?>js/autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/weather.css">

<!-- -- -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- --- -->  
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?php echo base_url();?>">
                         <img src="<?php echo base_url();?>assets/images/logo2.jpg" alt="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class=" text-white display-2" href="<?php echo base_url();?>">
                        BED &amp; BREAKFAST</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.html"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.html">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        About Us
                    </a>
                </li></ul>-->
          <?php if($this->session->userdata('logged_in')==false)
	        {?>  <div class="navbar-buttons mbr-section-btn">
                 <a class="btn btn-sm btn-primary display-7" href="<?php echo base_url();?>login/">
            		<span class="glyphicon glyphicon-off mbr-iconfont-btn"></span>
                     &nbspLogin</a>
                    </div>
					
					<?php }else{ echo '<span style="color:white;"> Welcome '.$this->session->userdata('user_name').'!!</span>';?>
					<div class="navbar-buttons mbr-section-btn">
                 <a class="btn btn-sm btn-primary display-7" href="<?php echo base_url();?>login/logout/">
            		<span class="glyphicon glyphicon-off mbr-iconfont-btn"></span>
                    &nbspLogout</a>
                    </div>
					
					<?php }?>
        </div>
    </nav>
</section>