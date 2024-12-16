<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>People's Point</title>
<meta name="author" content="Themezinho">
<meta name="description" content="">
<meta name="keywords" content="">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="">
<meta property="og:image" content="">
<meta property="og:site_name" content="">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">

<!-- TWITTER META -->
<meta name="twitter:card" content="">
<meta name="twitter:site" content="">
<meta name="twitter:creator" content="">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">

<!-- FAVICON FILES -->
<link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
<link href="ico/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link href="<?php echo base_url('assets/')?>revolution/css/settings.css" rel="stylesheet">
<link href="<?php echo base_url('assets/')?>css/flaticon.css" rel="stylesheet">
<link href="<?php echo base_url('assets/')?>css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/')?>css/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo base_url('assets/')?>css/odometer.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/')?>css/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/')?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/')?>css/base.css" rel="stylesheet">
<link href="<?php echo base_url('assets/')?>css/style.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        p{
            text-align: left;
            font-size: large;
        }
        h4{
            text-align: left;
            font-size: 20px;
        }

        .main-partners{
            padding: 50px 0px;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Ensure the overlay is on top */
        }
        .loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .load{
            border: 8px solid #f3f3f3;
            border-radius: 50%;
            border-top: 8px solid #3498db;
            width: 50px;
            height: 50px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
            margin:auto;
            left:0;
            right:0;
            top:0;
            bottom:0;
            position:fixed;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

    </style>

    

</head>
<body>

<div class="overlay">
    <div class="load"></div>
</div>

<div class="preloader">
  <svg class="spinner" id="pageloader_anime" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
    <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
  </svg>
</div>

<header class="int-header" style="background: url(<?php echo base_url();?>/assets/images/<?php echo $imageFilename?>);">
  <nav class="navbar navbar-default navbar-fixed-top transition">
   <div class="top-bar">
      <div class="container">
        <div class="row"> <div class="col-md-6 col-sm-6 hidden-xs">
            <ul class="top-menu">
              <li><a href="contact-us">Our Offices</a></li>
              <li><a onclick="openModal()">Career</a></li>
              <!-- <li><a href="on-press.html">News</a></li> -->
              <!-- <li><a href="support.html">Terms & Conditions</a></li> -->
            </ul>
            <!-- end top-menu --> 
          </div>
          <!-- end col-6 -->
          <div class="col-md-6 col-sm-6 col-xs-12">
           
            <ul class="social-media">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
            <!-- end social-media --> 
            <span class="social-text">Connect with Us</span> 
            <!-- end social-text --> 
            <!-- end language -->
            </div>
          <!-- end col-6 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#collapse-nav"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="<?=base_url()?>"> <img src="<?php echo base_url()?>assets/logo.png" alt="Image" class="logo-light"> <img  src="<?php echo base_url()?>assets/logo.png" alt="Image" class="logo-dark">
        </a> </div>
      <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="collapse-nav">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url('')?>">Home</a></li>
          <li><a href="about-us">About Us</a></li>
          <li><a href="our-services">Our Services</a></li>
          <li><a href="testimonials">Testimonials</a></li>
          <li><a href="contact-us">Contact Us</a></li>
        </ul>
        <a href="#" onclick="openModal()" class="quote-btn">Get Hired</a>
        <a href="tel:7008469491"><span class="phone"><i class="fa fa-phone" aria-hidden="true"></i> +91 7008469491</span> </a>
        <!-- end phone --> 
      </div>
    </div>
    
  </nav>
 
  
<!-- end preloader -->
<!--<header class="int-header">-->
<!--  <nav class="navbar navbar-default navbar-fixed-top transition">-->
<!--  <div class="container">-->
<!--      <div class="navbar-header">-->
<!--        <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#collapse-nav"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>-->
<!--        <a class="navbar-brand" href="index.html"> <img src="<?php echo base_url('assets/')?>images/logo.jpeg" alt="Image" class="logo-light"> <img src="<?php echo base_url('assets/')?>images/logo.jpeg" alt="Image" class="logo-dark">-->
<!--        </a> </div>-->
<!--      <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="collapse-nav">-->
<!--        <ul class="nav navbar-nav">-->
<!--          <li><a href="<?php echo base_url('')?>">Home</a></li>-->
<!--          <li><a href="about-us">About Us</a></li>-->
<!--          <li><a href="our-services">Our Services</a></li>-->
<!--          <li><a href="testimonials">Testimonials</a></li>-->
<!--          <li><a href="contact-us">Contact Us</a></li>-->
<!--        </ul>-->
<!--      </div>-->
<!--    </div>-->
<!--  </nav>-->