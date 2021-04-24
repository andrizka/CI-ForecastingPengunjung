<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Perpus
  </title>
  <!-- Favicon -->
  <link href="<?=base_url()?>assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Icons -->
  <link href="<?=base_url()?>assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?=base_url()?>assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?=base_url()?>assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- CSS Animate -->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/animate.min.css">
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pb-0" href="<?=base_url()?>">
        <!-- <img src="<?=base_url()?>assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> -->
        <h2 style="font-size: 30px;color: #6073e3;"><i class="fa fa-book"></i> PERPUS</h2>
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
        
            </div>
          </a>

        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <h2>PERPUS</h2>
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class=" nav-link " href="<?=base_url()?>"> <i class="ni ni-chart-bar-32 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?=base_url('index.php/admin/ft')?>">
              <i class="ni ni-bullet-list-67 text-red"></i> Fakultas Teknik
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url('admin/totaldata')?>">
              <i class="ni ni-atom text-info"></i> Hitung Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url('admin/about')?>">
              <i class="ni ni-circle-08 text-pink"></i> About
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">