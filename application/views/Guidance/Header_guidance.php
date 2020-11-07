<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- colors -->
  <link rel="stylesheet" href="<?php echo base_url() ?>resources/css/colors.css" >

  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/toastr/toastr.min.css">



</head>
<style>
  h1,h2,h3,h4,h5,button,a,option{
    text-transform: capitalize;
  }
  .anim{
    transition-duration: 1s;
    transition-delay: 0s;
  }
</style>

<body id="page-top" class="">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-color-dark-blue side-guidance sidebar sidebar-dark accordion toggled anim" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('guidance/dashboard/index/ongoing') ?>">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">GMSUSA APP </div>
    </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>guidance/dashboard/index/ongoing">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

       <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>guidance/meeting/">
          <i class="far fa-calendar-alt"></i>
          <span>Meeting Schedule</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Sentiment
      </div>

       <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-briefcase-medical"></i>
          <span>Cases</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="collapseThree" data-parent="#accordionSidebar">
          <div class="bg-color-dark-blue py-2 collapse-inner rounded">
            <h6 class="collapse-header">Status</h6>
            <a class="collapse-item" href="<?php echo base_url() ?>guidance/cases/index/closed/">Closed Case</a>
            <a class="collapse-item" href="<?php echo base_url() ?>guidance/cases/index/recommended/">Recommended to</a>
            <a class="collapse-item" href="<?php echo base_url() ?>guidance/cases/index/plan">Intervention</a>
          </div>
        </div>
      </li>
    

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Heading -->
      <div class="sidebar-heading">
        Settings
      </div>
     
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('guidance/profile/view/').$this->session->userdata('admin_id') ?>">
          <i class="fas fa-user-alt"></i>
          <span>Profile</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>login/logout">
          <i class="fas fa-sign-out-alt"></i>
          <span> Sign out</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <!-- <button class="rounded-circle border-0" id="sidebarToggle"></button> -->
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo ucwords($dp[0]['admin_fname']) ?></span>
                <img class="img-profile rounded-circle" src="<?php  echo !empty($dp[0]['user_pic']) ? base_url().$dp[0]['admin_pic']: base_url('resources/img/stud.png') ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url('guidance/profile/view/').$this->session->userdata('admin_id') ?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        
<!-- Begin Page Content -->
<div class="container-fluid">