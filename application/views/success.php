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


<style type="text/css">
  .parsley-required{
    color: red;
  }
  .innerpage {
    max-width: 650px;
    padding: 22px;
    box-shadow: 2px 2px 7px;
    margin: 4rem auto;
    border-radius: 10px;
}
</style>



<main>
  <div class="container innerpage">
  <div class="my-4">
  <h2 class="innerpageHeading text-center" style="font-weight: 600;font-size: 39px;text-align: center;color: #222;"> Thank You</h2>
  <i class="fa fa-check-circle mt-3" aria-hidden="true" style="font-size: 56px;
    margin: 10px auto;
    display: block;
    width: 45px;
    color: #e5000a;">
  </i>
  <div class="row">
    <div class="formsection text-center col-md-12 mx-auto mt-3">
      <h5 class="">Your assured Gift is on it's way to your message.</h5>
      <h5>For more details contact us - 88888 77649</h5>
     <center>Receipt sent on Email</center>
    </div>  
  </div>
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-social mb-3"><a href="<?php echo base_url(); ?>" class="footer-logo">
  <img src="assets/images/rushabh-honda/logo.png" title="Rushabh Honda | Logo | Honda Two wheeler Dealers in Nashik" alt="Honda Two wheeler vehicles available at best prices exclusively at Rushabh Honda. Leading Honda two wheeler dealers for years in Nashik."></a>
                <ul
                    class="social-icons">
                    <li><a href="https://www.facebook.com/Rushabh-Honda-Two-Wheeler-Authorized-Dealer-102346901489879/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://instagram.com/rushabh_bike_scooter?igshid=k3bb3qeb4u66" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
            </div>
            <div class="col-lg-3 col-6">
                <h4>Top Sections</h4>
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
                    <li><a href="<?php echo base_url(); ?>online-booking">Book your Vehicle Now</a></li>
                    <li><a href="<?php echo base_url(); ?>finance">Finance</a></li>
                    <li><a href="<?php echo base_url(); ?>insurance">Insurance</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-6">
                <h4>QUICK LINKS</h4>
                <ul>
                    <li><a href="<?php echo base_url(); ?>offers">Offers</a></li>
                    <li><a href="<?php echo base_url(); ?>honda-shield">Honda Shield</a></li>
                    <li><a href="<?php echo base_url(); ?>honda-genuine-engine-oil">Honda Genuine Engine Oil</a></li>
                    <li><a href="<?php echo base_url(); ?>genuine-parts">Honda Genuine Parts</a></li>
                    <li><a href="<?php echo base_url(); ?>feedback">Feedback/Queries</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-sect">
                <h4>Contact details</h4>
                <ul class="row no-gutters">
                    <li class="col-5 col-sm-12 text-left"><a href="tel: +918888877649"><span class="d-none d-md-inline-block">Enquiry : </span> +91 88888 77649</a></li>
                    <li class="col-7 col-sm-12"><a href="mailto:enquiry@rushabh2w.com"> enquiry@rushabh2w.com</a></li>
                    <li class="d-none d-md-block">
                        <p class="total">Total Sales :12k</p>
                    </li>
                    <li class="d-none d-md-block">
                        <p class="total">Till date Service: 78k</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright-section text-center">
        <div class="container">
            <p class="float-left">© Rushabh Honda. all rights reserved.</p>
            <p class="float-right">Design & Developed By <a href="http://techrupt.in/" target="_blank" style="color:#17a2b8">Techrupt</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="d-md-none d-block mobile-shortcut">
        <div class="row no-gutters">
            <div class="col">
                <div class="mobile-footer-icon">
                   <a href="<?php echo base_url(); ?>book-your-service" class="hvr-icon-wobble-horizontal">
                    <i class="fa fa-motorcycle"></i> 
                    <b class="footer-sticky1"> Service</b>
                    </a> 
                </div>
            </div>
            <div class="col border-left border-right">
                <div class="mobile-footer-icon">
                   <a href="<?php echo base_url(); ?>online-booking" class="hvr-icon-wobble-horizontal">
                    <i class="fa fa-shopping-cart"></i> 
                    <b class="footer-sticky1">Booking</b>
                    </a> 
                </div>
            </div>
            <div class="col border-right">
                <div class="mobile-footer-icon">
                   <a href="<?php echo base_url(); ?>download-e-brochure" class="hvr-icon-wobble-horizontal">
                    <i class="fa fa-map-o"></i> 
                    <b class="footer-sticky1"> Brochure</b>
                  </a> 
                </div>
            </div>
            <div class="col">
                <div class="mobile-footer-icon">
                   <a href="<?php echo base_url(); ?>insurance" class="hvr-icon-wobble-horizontal">
                    <i class="fa fa-road"></i> 
                    <b class="footer-sticky1"> Insurance</b>
                 </a> 
                </div>
            </div>
        </div>
    </div>
    <!-- <a href="#" class="btn btn-light btn-lg back-to-top" id="back-to-top" role="button"></a> -->

<button id="btnShowHide" class="floatton-btn"> 
  <span class="floatton-btn-label">
        <img src="assets/floatton/new-chat-icon.svg">
      </span> 
</button>

</footer>
<script type="text/javascript" src="assets/floatton/jquery.js"></script>
<script src="assets/lib/js/bootstrap.js"></script>
<script src="assets/lib/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/js/jquery.min.js"></script>
<script src="assets/js/megamenu.js" defer></script>
<script src="assets/js/bjqs-1.3.min.js" defer></script>
<script src="assets/js/news.js" defer></script>
<script src="assets/js/lazysizes.min.js" async></script>

<script>
    jQuery(window).on("load", function() {
        jQuery("#preloader__status").fadeOut(), jQuery("#preloader").delay(350).fadeOut("slow"), jQuery("body").delay(350).css({
            overflow: "visible"
        })
    })
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(window).scroll(function() {
            $(this).scrollTop() > 50 ? $("#back-to-top").fadeIn() : $("#back-to-top").fadeOut()
        }), $("#back-to-top").click(function() {
            return $("body,html").animate({
                scrollTop: 0
            }, 400), !1
        })
    })
</script>
<script type="text/javascript">
    ! function() {
        var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));

        if(mobile == false)
        {
             var t = {
                whatsapp: "+918888877649",
                call_to_action: "",
                position: "left"
            },
            e = document.location.protocol,
            n = "whatshelp.io",
            o = e + "//static." + n,
            i = document.createElement("script");


            i.type = "text/javascript", i.async = !0, i.src = o + "/widget-send-button/js/init.js", i.onload = function() {
                WhWidgetSendButton.init(n, e, t)
            };
            var a = document.getElementsByTagName("script")[0];
            a.parentNode.insertBefore(i, a)
        }       
    }()
</script>
<script class="secret-source" defer>
    jQuery(document).ready(function(e) {
        e("#banner-fade").bjqs({
            responsive: !0
        })
    }), $(function() {
        $(".video").videoPopup()
    }), $(function() {
        var e = new Date,
        //console.log(e);
            t = e.getMonth() + 1,
            n = e.getDate() + 1,
            a = e.getFullYear();
        t < 10 && (t = "0" + t.toString()), n < 10 && (n = "0" + n.toString());
        var i = a + "-" + t + "-" + n;
        //console.log(date());
        $("#datepicker_today").attr("min", i)
    });
    const picker = document.getElementById("datepicker_today");
    picker.addEventListener("input", function(e) {
        var t = new Date(this.value).getUTCDay();
        [0].includes(t) && (e.preventDefault(), this.value = "", alert("Sunday not allowed"))
    })
</script>

<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('#btnShowHide').on('click', function(event) {    
    console.log(1);    
        jQuery('#divShowHide').toggle('show');
    });
});
function hello()
{
   
    jQuery('#divShowHide').toggle('hide');
}
function subscriptionSubmit()
{
    var email_val = $('#email_id').val();
    var dataString = 'email_val='+ email_val;
    if(email_val==""){
        //alert(email_val);
        $('#err_email_id').html("Please enter valid email id");
        return false;
    }else{
        //alert(dataString);
         $.ajax({
                type: "POST",
                url: "<?php echo base_url(''); ?>subscription",
                data: dataString,
                cache: false,
                success: function(result){
                    //console.log(result);
                    window.location.href = 'https://rushabh2w.com/thank-you';
                }
            });
        //return true;
    }
    //alert(email);
}

</script>


