<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $page_title; ?></title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<base href="<?php echo base_url(); ?>assets/admin/">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/main.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="dist/css/style.css">
<!-- Morris chart -->
<!-- <link rel="stylesheet" href="bower_components/morris.js/morris.css"> -->

<!-- Date Picker -->
<link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">


<link rel="stylesheet" type="text/css" href="dist/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap4.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">

 <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16"> 

<link rel="stylesheet" type="text/css" href="dist/icon-css/line-awesome.css">

<link rel="stylesheet" type="text/css" href="dist/icon-css/line-awesome.min.css">
</head>
<body class="sidebar-mini skin-black">
<div class="wrapper">
<header class="main-header"> 
  <!-- Logo --> 
  <a href="<?php echo base_url(); ?>admin/secure/home" style="background-color: #db1818;" class="logo navbar-brand"> 
  <!-- mini logo for sidebar mini 50x50 pixels --> 
  <span class="logo-mini" style="margin-left: -6px;">
    <img src="<?php echo base_url(); ?>assets/images/icon-rushabh.svg" >
  </span> 
  <!-- logo for regular state and mobile devices --> 
  <span class="logo-lg">
    <!-- <img src="dist/img/company-logo.png" style="max-width: 100%"> -->
    <h3 style="font-size: 22px;"> <img src="<?php echo base_url(); ?>assets/images/icon-rushabh.svg" style="width:33px;">  Rushabh Honda</h3>
  </span> </a> 
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top"> 
    <!-- Sidebar toggle button--> 
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
   <!-- <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search" style="margin-top: 12px;"> 
      <div class="form-group"> 
        <input type="search" id="search" class="form-control top-search no-border" placeholder="Search" autocomplete="off" style="width: 260px;height: 35px"> </div> 
     </form>-->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
       
        <li>
           <a href="<?php echo base_url(); ?>admin/back_up" > 
             <i class="fa fa-cloud-download" aria-hidden="true"></i> 
            </a>

        </li>
       

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu"> 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
            <img src="<?php echo base_url(); ?>assets/admin/post_image/<?php echo $this->session->userdata('image');?>" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo $this->session->userdata('name'); ?></span> 
          </a>
          <ul class="dropdown-menu user-arrow">
            <!-- User image -->
            <li class="user-header">
              <div class="customer_user_img">
                <!-- <img class="img-responsive" src="dist/images/user2-160x160.jpg"> -->
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/admin/post_image/<?php echo $this->session->userdata('image');?>">
              </div>
              <div class="company-details-header">
                <div class="company_name_side"><?php echo $this->session->userdata('name'); ?> </div>
                <!-- <div class="user-id">User ID: <?php echo $this->session->userdata('apple_adminusr'); ?> </div> -->
                <div class="user-id"><?php echo $this->session->userdata('email'); ?></div>
              </div>

              <div class="profile-setting-btn">
                <ul>
                  <li>
                    <a href="<?php echo base_url('admin/profile/index/'); echo $this->session->userdata('apple_adminusr'); ?>" class="my-account"><i class="la la-user icon-header"></i>  User Profile </a>
                  </li>
                  <li>
                    <a class="logout" href="<?php echo base_url('admin/change_password');?>"><i class="la la-lock icon-header"></i> Change Password </a> 
                  </li>
                  <li>
                    <a class="logout" href="<?php echo base_url('admin/secure/logoff');?>"><i class="la la-sign-out icon-header"></i> Sign out </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Menu Footer-->
            
          </ul>
        </li>

        <!-- Control Sidebar Toggle Button --> 
        <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
      </ul>
    </div>
  </nav>
</header>
