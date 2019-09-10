<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>includes/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url(); ?>includes/img/boxigo-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Boxigo</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

  <link href="https://fonts.googleapis.com/css?family=Oxygen&Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <script src="https://kit.fontawesome.com/b3d9fc0789.js"></script>


  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> -->
  <!-- CSS Files -->
  <link href="<?= base_url(); ?>includes/css/material-kit.css?v=2.0.5" rel="stylesheet" />
  <link href="<?= base_url(); ?>includes/css/style.css" rel="stylesheet" />


</head>


<body class="landing-page sidebar-collapse">

<i id="to-top"></i>



  <nav class="navbar <?php if($this->router->fetch_class() === $this->router->default_controller): ?>navbar-transparent navbar-color-on-scroll<?php endif;?>  fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a href="<?=base_url();?>home"> <img class="navbar-brand p-0" src="<?= base_url(); ?>includes/img/boxigo.png" href="<?= base_url();?>home" style="height:auto;width:100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="<?= base_url(); ?>home/aboutus" class="dropdown-toggle nav-link">
            About Us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>estimate" rel="tooltip" title="" data-placement="bottom"  data-original-title="Know more about move">
            Estimate Now
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>home/faq" rel="tooltip" title="" data-placement="bottom"  data-original-title="Click here for queries">
            <i class="fas fa-question-circle"></i> &nbsp;FAQ
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#"  data-original-title="Contact our team">
              <i class="fas fa-hands-helping"></i> &nbsp;Customer Support
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?= base_url(); ?>home/forserviceprovider"  data-original-title="For the Vendors">
            For Service Provider
            </a>
          </li>
          <li class="nav-item">
            <?php if($this->session->userdata('user_id')): ?>
              <!-- <div class="nav-link bg-transparent border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-check"></i> &nbsp;Settings
                <div class="dropdown-menu">
                  <li>
                    <a  href="#">Dashboard</a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="<?= base_url();?>estimate">Make Estimate</a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="<?= base_url();?>logout">Logout</a>
                  </li>
                </div>
              </div>
            -->
          <div class="dropdown nav-item">
              <div class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-cog"></i>&nbsp;Settings
              </div>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?= base_url();?>dashboard">Dashboard</a>
                <a class="dropdown-item" href="<?= base_url();?>estimate">Make Estimate</a>
                <a class="dropdown-item" href="<?= base_url();?>logout">Logout</a>
              </div>
            </div>
                <!-- <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?= base_url();?>logout">
                  <i class="fas fa-user-check"></i> &nbsp;Logout
                </a> -->
            <?php else: ?>
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?= base_url();?>login" data-original-title="Click here to login">
              Login
              </a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php if($this->router->fetch_class() == 'dashboard'): ?>
    <section class="section pt-5 mt-5">
      <div class="container">
        <div class="row">
  <?php endif; ?>