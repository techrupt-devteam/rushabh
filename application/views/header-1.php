<!doctype html>
<html lang=en>
<head>
<meta charset=utf-8>
<meta name=viewport content="width=device-width,initial-scale=1,user-scalable=no">
<meta name=keywords content="<?php echo $pgKeywords ?>">
<meta name=description content="<?php echo $pgDesc ?>">
<meta http-equiv=Cache-Control content="no-cache, no-store, must-revalidate">
<meta http-equiv=Pragma content=no-cache>
<meta http-equiv=Expires content=0>
<title><?php echo $title; ?></title>
<base href="<?php echo base_url(); ?>">
<link rel=icon href=assets/images/favicon.ico type=image/x-icon>
<link rel=stylesheet href=assets/lib/css/bootstrap.min.css>
<link rel=stylesheet href=assets/css/custom.css>
<!-- <link href=assets/css/materialdesignicons.css rel=stylesheet>
<link rel=preload href=assets/css/materialdesignicons.min.css> -->
<link rel=stylesheet href=assets/css/responsive.css>
<link rel=stylesheet href=assets/css/font-awesome.min.css>
<script>!function(e,t,a,n){e[n]=e[n]||[],e[n].push({"gtm.start":(new Date).getTime(),event:"gtm.js"});var g=t.getElementsByTagName(a)[0],m=t.createElement(a);m.async=!0,m.src="https://www.googletagmanager.com/gtm.js?id=GTM-P2D2GSW",g.parentNode.insertBefore(m,g)}(window,document,"script","dataLayer")</script>
</head>
<body>
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2D2GSW" height=0 width=0 style=display:none;visibility:hidden></iframe>
</noscript>
<div class=top-section-menu>
<div class=container>
<ul class=float-left>
<li>
<a href=mailto:enquiry@rushabh2w.com>
<i class="fa fa-envelope-o" style=font-size:16px></i> enquiry@rushabh2w.com</a></li>
<li>
<a href=tel:8888877649>
<i class="fa fa-phone" style=font-size:16px></i> Enquiry +91 88888 77649</a>
</li>
<li>
<a href="https://www.google.com/maps/place/Rushabh+Honda/@19.988205,73.7832223,17z/data=!3m1!4b1!4m5!3m4!1s0x3bddeb5957398ce5:0x295ca6b42b0ab1e8!8m2!3d19.988205!4d73.785411">
<i class="fa fa-map-marker" style=font-size:16px></i> Plot No.14, Mumbai - Agra National Hwy, Mumbai Naka,</a></li>
</ul>
<ul class="social-icons social-header float-right d-none d-sm-block">
<li style="padding:1px 7px!important">
<a href=https://www.facebook.com/Rushabh-Honda-Two-Wheeler-Authorized-Dealer-102346901489879/ target=_blank>
<i class="fa fa-facebook"></i>
</a>
</li>
<li style="padding:1px 6px!important">
<a href="https://instagram.com/rushabh_bike_scooter?igshid=k3bb3qeb4u66" target=_blank>
<i class="fa fa-instagram"></i>
</a>
</li>
</ul>
</div>
</div>
<header class="header-menu sticky-top">
<div id=preloader class="page-loader loaded">
<div id=preloader__status>
<div class=page-loader-body>
<div class=center id=loop></div>
<div class=center id=bike-wrapper>
<div class=centerBike id=bike></div>
</div>
</div>
</div>
</div>
<div class="menu-container d-flex">
<a href="<?php echo base_url(); ?>" class=logo>
<img data-src=assets/images/logo.png class=lazyload style=max-width:70px>
</a>
<div class="float-right align-self-center mx-auto">
<div class=clearfix></div>
<div class=menu>
<ul>
<li><a href=javascript:;>Bikes / Scooters</a>
<ul class=vechicle>
<li>
<a href=javascript:;>
<img data-src=assets/images/dropdown-motorcycle.webp src="" class=lazyload><span>Bikes</span>
</a>
<ul>
<li><a href="<?php echo base_url(); ?>sp-125">SP 125</a></li>
<li><a href="<?php echo base_url(); ?>shine-disc-bsvi">Shine BS VI</a></li>
<li><a href="<?php echo base_url(); ?>cb-unicorn">New Unicorn BS-VI</a></li>
<li><a href="<?php echo base_url(); ?>cd-110-dream">CD 110 Dream</a></li>
<li><a href="<?php echo base_url(); ?>x-blade">X-Blade</a></li>
<li><a href="<?php echo base_url(); ?>livo">LIVO</a></li>
</ul>
</li>
<li><a href=javascript:;><img data-src=assets/images/dropdown-scooter.webp src="" class=lazyload> <span>Scooter</span></a>
<ul>
<li><a href="<?php echo base_url(); ?>dio-BS-VI">DIO BS VI</a></li>
<li><a href="<?php echo base_url(); ?>activa-6g">Activa 6G</a></li>
<li><a href="<?php echo base_url(); ?>activa-125-bs-vi">Activa 125-BS-VI</a></li>
<li><a href="<?php echo base_url(); ?>grazia-125">Grazia 125</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="<?php echo base_url(); ?>about">About Us</a></li>
<li><a href=javascript:;>Workshop</a>
<ul>
<li><a href="<?php echo base_url(); ?>our-workshop-locations"><span>Our Workshop Locations </span></a></li>
<li><a href="<?php echo base_url(); ?>book-your-service"><span>Book Your Service </span></a></li>
<li><a href="<?php echo base_url(); ?>bodyshop"><span>Bodyshop</span></a></li>
</ul>
</li>
<li><a href=javascript:;>Allied Parameters</a>
<ul>
<li><a href="<?php echo base_url(); ?>finance"><span>Finance</span></a></li>
<li><a href="<?php echo base_url(); ?>insurance"><span> Insurance </span></a></li>
<li><a href="<?php echo base_url(); ?>amc"><span> AMC </span></a></li>
</ul>
</li>
<li><a href="<?php echo base_url(); ?>online-booking">Book Now</a></li>
<li><a href="<?php echo base_url(); ?>contact-us">Contact Us</a></li>
<?php if($offers){ ?>
<li class="alertPulse-css blink_me"><a href="<?php echo base_url(); ?>offers"> Offers | <i class="fa fa-percent"></i></a></li><?php } ?>
</ul>
</div>
</div>
<a href="<?php echo base_url(); ?>" class="logo d-none d-sm-block">
<img data-src=assets/images/Honda-Logo.png class=lazyload style=max-width:70px>
</a>
<div class=clearfix></div>
</div>
</header>
<div class=sticky-container>
<ul class=sticky>
<li class=hover-item>
<a href="<?php echo base_url(); ?>online-booking" class=hvr-icon-wobble-horizontal>
<i class="fa fa-shopping-cart"></i>
<b class=footer-sticky1>Online Booking</b>
</a>
</li>
</ul>
</div>
</body></html>