<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Kasir Blue X</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plugins/datatables.bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plugins/animate.min.css"/>
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logomi.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>Blue X Kasir</b>
                </a>

             

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo $this->session->userdata('kasir_nama'); ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="<?php echo base_url(); ?>assets/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href="<?php echo base_url('Login/keluar'); ?>"><span class="fa fa-sign-out"></span></a></li>
                        <li><a href=""><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple"><a href="<?php echo base_url('Manager'); ?>"><span class="fa-home fa"></span>Dasboard</a></li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-database"></span> Master Data
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="<?php echo base_url('Data_room'); ?>">Data Room</a></li>
                        <li><a href="<?php echo base_url('Data_barang'); ?>">Data Barang</a></li>
                        <li><a href="<?php echo base_url('Data_stok'); ?>">Data stok</a></li>
                        <li><a href="<?php echo base_url('Data_kasir'); ?>">Data Kasir</a></li>
                        <li><a href="<?php echo base_url('Data_voucher'); ?>">Data Voucher</a></li>
                        <li><a href="<?php echo base_url('Data_paket'); ?>">Data Paket</a></li>
                        <li><a href="<?php echo base_url('Data_wp'); ?>">Data WP</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="icons icon-notebook"></span> Laporan
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">ChartJs</a></li>
                        <li><a href="morris.html">Morris</a></li>
                        <li><a href="flot.html">Flot</a></li>
                        <li><a href="sparkline.html">SparkLine</a></li>
                      </ul>
                    </li>
                   
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->

      
          <!-- start: content -->
            <div id="content">
                