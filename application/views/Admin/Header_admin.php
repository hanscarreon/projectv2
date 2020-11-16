<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GMSUSA - ADMIN</title>

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

<body id="page-top" class="">
<style>
  h1,h2,h3,h4,h5,button,a:not(.email-table),option {
    text-transform: capitalize;
  }
  .anim{
    transition-duration: 0.5s;
    transition-delay: 0s;
  }
</style>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-color-dark-blue side-admin sidebar sidebar-dark accordion toggled anim" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard/index/ongoing/published') ?>">
      <div class="sidebar-brand-icon ">
        <i class="fas fa-mask"></i>
      </div>
      <div class="sidebar-brand-text mx-3">GMSUSA APP </div>
    </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard/index/ongoing/published">
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
        <a class="nav-link" href="<?php echo base_url() ?>admin/meeting/">
          <i class="far fa-calendar-alt"></i>
          <span>Meeting Schedule</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-plus-square"></i>
          <span>Account</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-color-dark-blue py-2 collapse-inner rounded">
            <h6 class="collapse-header">Options</h6>
            <a class="collapse-item" href="<?php echo base_url() ?>admin/account/index/student/published">View Students</a>
            <a class="collapse-item" href="<?php echo base_url() ?>admin/account/index/guidance/published">View Guidance</a>
            <a class="collapse-item" href="<?php echo base_url() ?>admin/account/create">Create Account</a>
          </div>
        </div>
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
            <h6 class="collapse-header">status</h6>
            <a class="collapse-item" href="<?php echo base_url() ?>admin/cases/index/closed/">Closed Case</a>
            <a class="collapse-item" href="<?php echo base_url() ?>admin/cases/index/recommended/">Recommended to</a>
            <!-- <a class="collapse-item" href="<?php echo base_url() ?>admin/intervention/index/name/ongoing">Intervention</a> -->
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
        <a class="nav-link" href="<?php echo base_url('admin/archive/index/') ?>">
          <i class="fas fa-archive"></i>
          <span>Archive</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/analytic/index/date1/date2/xall/xall/xall') ?>">
          <i class="fas fa-chart-bar"></i>
          <span>Analytics</span></a>
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

            <!-- Nav Item - Alerts -->

            <!-- Nav Item - Messages -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo ucwords($dp[0]['admin_fname']) ?></span>
                <img class="img-profile rounded-circle" src="<?php  echo !empty($dp[0]['user_pic']) ? base_url().$dp[0]['admin_pic']: base_url('resources/img/stud.png') ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a> -->
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
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