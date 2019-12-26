<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BNB Admin :  Dashboard</title>
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

   
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/unix.css" rel="stylesheet">
    <link href="<?php echo base_url();?>./assets/adminassets/css/style.css" rel="stylesheet">
     <link href="<?php echo base_url();?>./assets/adminassets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/bootstrap.min.css" rel="stylesheet">
    
    <link href="<?php echo base_url();?>./assets/adminassets/css/lib/unix.css" rel="stylesheet">
    <link href="<?php echo base_url();?>./assets/adminassets/css/style.css" rel="stylesheet">
    
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main Menu</li>
                       <li class="active"><a href="<?php echo base_url();?>admin/admin_dashboard/"><i class="ti-home"></i>Dashboard</a></li>
                       <li><a href="<?php echo base_url();?>admin/addbnb/"><i class="ti-plus"></i>Add Bnb</a></li>
                       <li><a href="<?php echo base_url();?>admin/view_all_bnbs/"><i class="ti-book"></i>View all Bnb</a></li>
                       <li><a href="<?php echo base_url();?>admin/weather_update/"><i class="ti-bolt"></i>Weather Update</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->


    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="<?php base_url('admin');?>"><!-- <img src="assets/images/logo.png" alt="" /> --><span>BNB Admin</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="pull-right p-r-15">
            <ul>
              
               <!--  <li class="header-icon dib"><i class="ti-email"></i> -->
                    
                </li>
                <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> <span class="user-avatar"> <?php echo $this->session->userdata('username'); ?> <i class="ti-angle-down f-s-10"></i></span>
                    <div class="drop-down dropdown-profile">
                        <div class="dropdown-content-heading">
                          
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                               
                                
                                <li><a href="<?php echo base_url(); ?>index.php/admin/logout"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                               
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->