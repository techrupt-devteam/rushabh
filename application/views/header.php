<!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="utf-8" />
        <?php
        /*if($canonical!= " "){
            echo '<link rel="canonical" href="'.$canonical.'">'; 
        }elseif($canonical == " "){
            echo '<link rel="canonical" href=" ">'; 
        }*/
        ?>
        <meta content="width=device-width,initial-scale=1,user-scalable=no" name="viewport" />
        <meta content="<?php echo $pgKeywords  ?>" name="keywords" />
        <meta content="<?php echo $pgDesc  ?>" name="description" />
        <meta content="no-cache, no-store, must-revalidate" http-equiv="Cache-Control" />
        <meta content="no-cache" http-equiv="Pragma" />
        <meta content="0" http-equiv="Expires" />
        <title><?php echo $title; ?></title>
        <base href="<?php echo base_url(); ?>" />
        <link href="assets/images/favicon.ico" rel="icon" type="image/x-icon" />
        <link href="assets/lib/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/custom.css" rel="stylesheet" />
        <link href="assets/css/responsive.css" rel="stylesheet" />
        <!--<link href="assets/css/font-awesome.min.css" rel="stylesheet" />-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">
        <script>
            !(function (e, t, a, n) {
                (e[n] = e[n] || []), e[n].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                var g = t.getElementsByTagName(a)[0],
                    m = t.createElement(a);
                (m.async = !0), (m.src = "https://www.googletagmanager.com/gtm.js?id=GTM-P2D2GSW"), g.parentNode.insertBefore(m, g);
            })(window, document, "script", "dataLayer");
        </script>
        </head>
        <body>
<noscript>
 <iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-P2D2GSW" style="display: none; visibility: hidden;" width="0"></iframe>
</noscript>
<div class="top-section-menu">
 <div class="container">
   <ul class="float-left">
     <li> 
      <a href="mailto:enquiry@rushabh2w.com"><i class="fa fa-envelope-o" style="font-size: 16px;"></i> enquiry@rushabh2w.com </a> </li>
     <li> <a href="tel:8888877649"><i class="fa fa-phone" style="font-size: 16px;"></i> +91 88888 77649</a> </li>
     <li class="d-none d-md-inline-block"> <a href="https://www.google.com/maps/place/Rushabh+Honda/@19.988205,73.7832223,17z/data=!3m1!4b1!4m5!3m4!1s0x3bddeb5957398ce5:0x295ca6b42b0ab1e8!8m2!3d19.988205!4d73.785411"> 
      <i class="fa fa-map-marker" style="font-size: 16px;"></i> Plot No.14, Mumbai - Agra National Hwy, Mumbai Naka, </a> 
     </li>
   </ul>
    <ul class="d-none d-sm-block float-right social-header social-icons">
      <li style="padding: 1px 7px !important;"> <a href="https://www.facebook.com/Rushabh-Honda-Two-Wheeler-Authorized-Dealer-102346901489879/" target="_blank"><i class="fa fa-facebook"></i></a> 
      </li>
      <li style="padding: 1px 6px !important;"> 
        <a href="https://instagram.com/rushabh_bike_scooter?igshid=k3bb3qeb4u66" target="_blank"><i class="fa fa-instagram"></i></a> 
      </li>
    </ul>
  </div>
        </div>
<header class="header-menu sticky-top">
          <!--<div class="loaded page-loader" id="preloader">
    <div id="preloader__status">
              <div class="page-loader-body">
        <div class="center" id="loop"></div>
        <div class="center" id="bike-wrapper">
                  <div class="centerBike" id="bike"></div>
                </div>
      </div>
            </div>
  </div>-->
          <div class="d-flex menu-container"> <a href="<?php echo base_url(); ?>" class="logo"> <img
                        class="lazyload"
                        data-src="assets/images/rushabh-honda/logo.png"
                        title="Rushabh Honda | Logo | Honda Two wheeler Dealers in Nashik"
                        alt="Honda Two wheeler vehicles available at best prices exclusively at Rushabh Honda. Leading Honda two wheeler dealers for years in Nashik."
                    /> </a>
    <div class="float-right align-self-center mx-auto">
              <div class="clearfix"></div>
              <div class="menu">
        <ul>
                  <li> <a href="javascript:;">Bikes / Scooters</a>
            <ul class="vechicle">
                      <li> <a href="javascript:;"><img class="lazyload" data-src="assets/images/dropdown-motorcycle.webp" src="" /><span>Bikes</span></a>
                <ul class="remove-arrow">
                          <li><a href="<?php echo base_url(); ?>sp-125">SP 125</a></li>
                          <li><a href="<?php echo base_url(); ?>shine-disc-bsvi">Shine BS VI</a></li>
                          <li><a href="<?php echo base_url(); ?>cb-unicorn">New Unicorn BS-VI</a></li>
                          <li><a href="<?php echo base_url(); ?>cd-110-dream">CD 110 Dream</a></li>
                          <li><a href="<?php echo base_url(); ?>x-blade">X-Blade</a></li>
                          <li><a href="<?php echo base_url(); ?>livo">LIVO</a></li>
                          <li><a href="<?php echo base_url(); ?>hornet2-0">Hornet2.0</a></li>
                        </ul>
              </li>
                      <li> <a href="javascript:;"><img class="lazyload" data-src="assets/images/dropdown-scooter.webp" src="" /> <span>Scooter</span></a>
                <ul class="remove-arrow">
                          <li><a href="<?php echo base_url(); ?>dio-BS-VI">DIO BS VI</a></li>
                          <li><a href="<?php echo base_url(); ?>activa-6g">Activa 6G</a></li>
                          <li><a href="<?php echo base_url(); ?>activa-125-bs-vi">Activa 125-BS-VI</a></li>
                          <li><a href="<?php echo base_url(); ?>grazia-125">Grazia 125</a></li>
                          <li><a href="<?php echo base_url(); ?>activa-anniversary-edition">Activa Anniversary Edition</a></li>
                        </ul>
              </li>
                    </ul>
          </li>
                  <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
                  <li> <a href="javascript:;">Workshop</a>
            <ul>
                      <li> <a href="<?php echo base_url(); ?>our-workshop-locations"><span>Our Workshop Locations</span></a> </li>
                      <li> <a href="<?php echo base_url(); ?>book-your-service"><span>Book Your Service</span></a> </li>
                    </ul>
          </li>
                  <li> <a href="javascript:;">Allied Parameters</a>
            <ul>
                      <li> <a href="<?php echo base_url(); ?>finance"><span>Finance</span></a> </li>
                      <li> <a href="<?php echo base_url(); ?>insurance"><span>Insurance</span></a> </li>
                      <li> <a href="<?php echo base_url(); ?>amc"><span>AMC</span></a> </li>
                    </ul>
          </li>
                  <li><a href="<?php echo base_url(); ?>online-booking">Book Now</a></li>
                  <li><a href="<?php echo base_url(); ?>contact-us">Contact Us</a></li>
                  <?php if($offers){ ?>
                  <li class="alertPulse-css blink_me"> <a href="<?php echo base_url(); ?>offers">Offers | <i class="fa fa-percent"></i></a> </li>
                  <?php } ?>
                </ul>
      </div>
            </div>
    <a href="https://www.honda2wheelersindia.com/" target="_blank" class="d-none d-sm-block logo"> <img
                        class="lazyload"
                        data-src="assets/images/Honda-Logo.png"
                        style="max-width: 70px;"
                        title="Rushabh Honda | Logo | Honda Two wheeler Dealers in Nashik"
                        alt="Honda Two wheeler vehicles available at best prices exclusively at Rushabh Honda. Leading Honda two wheeler dealers for years in Nashik."
                    /> </a>
    <div class="clearfix"></div>
  </div>
        </header>
        <div class="sticky-container d-none d-md-block">
          <ul class="sticky">
            <li class="hover-item"> 
              <a href="<?php echo base_url(); ?>our-workshop-locations" class="hvr-icon-wobble-horizontal">
                <i class="fa fa-map-marker"></i> 
                <b class="footer-sticky1"> Find Workshop</b></a> 
            </li>
            <li class="hover-item"> 
              <a href="<?php echo base_url(); ?>book-your-service" class="hvr-icon-wobble-horizontal">
                <i class="fa fa-motorcycle"></i> 
                <b class="footer-sticky1"> Book Service</b></a> 
            </li>
            <li class="hover-item"> 
              <a href="<?php echo base_url(); ?>online-booking" class="hvr-icon-wobble-horizontal">
                <i class="fa fa-shopping-cart"></i> 
                <b class="footer-sticky1">Online Booking</b></a> 
            </li>
            <li class="hover-item"> 
              <a href="<?php echo base_url(); ?>download-e-brochure" class="hvr-icon-wobble-horizontal">
                <i class="fa fa-map-o"></i> 
                <b class="footer-sticky1"> Brochure</b></a> 
            </li>
            <li class="hover-item"> 
              <a href="<?php echo base_url(); ?>insurance" class="hvr-icon-wobble-horizontal">
                <i class="fa fa-road"></i> 
                <b class="footer-sticky1"> Insurance</b></a> 
            </li>
            
        </ul>
        </div>
</body>
</html>
