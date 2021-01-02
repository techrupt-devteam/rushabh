<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

<!--- basic page needs
   ================================================== -->
<meta charset="utf-8">
<title>Nutridock</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- mobile specific metas
   ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS
   ================================================== -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/base.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/vendor.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/main.css">

<!-- script
   ================================================== -->
<script src="<?php echo base_url(); ?>assets/landing/js/modernizr.js"></script>
<script src="<?php echo base_url(); ?>assets/landing/js/pace.min.js"></script>

<!-- Favicons -->
<link href="<?php echo base_url(); ?>assets/landing/assets/img/favicon.png" rel="icon">
<link href="<?php echo base_url(); ?>assets/landing/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '316179316273053');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=316179316273053&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177525089-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-177525089-1');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M4D4D79');</script>
<!-- End Google Tag Manager -->


</head>

<body id="top">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4D4D79"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- header 
   ================================================== -->
<header id="header">
  <div class="row" style="position: relative;">
    <div class="header-logo"> <a href="https://nutridock.com/">Nutridock</a> </div>
    <nav id="header-nav-wrap">
      <ul class="header-main-nav">
        <li class="current"><a class=""  href="https://nutridock.com/" title="Home">Home</a></li>
        <li><a class=""  href="https://nutridock.com/" title="About Us">About Us</a></li>
        <li><a class=""  href="https://nutridock.com/#webinar" title="Webinar">Webinar</a></li>
        <li><a class=""  href="https://nutridock.com/#survey" title="Survey Questions">Survey Questions</a></li>
        <li><a href="https://nutridock.com/#download" title="Contact Us">Contact Us</a></li><!--class="smoothscroll"-->
      </ul>
      <!-- <a href="#" title="sign-up" class="button button-primary cta">Sign Up</a> --> 
    </nav>
    <a class="header-menu-toggle" href="#"><span>Menu</span></a> </div>
</header>
<!-- /header --> 

<!-- home
   ================================================== -->


<section id="webinar">
  <div class="row pricing-content">
    <div class="col-four pricing-intro">
            <img src="<?php echo base_url() ?>assets/landing/images/webinar.jpg">
        </div>
        <div class="col-eight pricing-table">
          <h1 class="intro-header aos-init aos-animate" data-aos="fade-up">Our Webinar</h1>
           <!-- <form id="web_order_summery_form" action="<?php echo base_url(); ?>/nutridock_payment/capture_payment" method="post"> -->
           
            <form id="web_order_summery_form" action="<?php echo base_url(); ?>/nutridock_re/capture_payment" method="post">
            
            <small id="err_details" style="color:red;"></small>
          <ul class="row p-0 mb-0">
             
                <li class="col-six mt-2" style="list-style: none;">
                    
                  <label class="gfield_label">Full Name <span class="gfield_required" style="color: red;">*</span></label>
                  <div class="ginput_container ginput_container_text">
                  <input type="text" id="name" autocomplete="off" name="name" required>
                   
                  </div>
                </li>
                
                <li class="col-six mt-2" style="list-style: none;">
                  <label class="gfield_label">Email Id <span class="gfield_required" style="color: red;">*</span></label>
                  <div class="ginput_container ginput_container_email">
                     <input type="email" id="email" name="email" autocomplete="off" required>
                  </div>
                </li>
                <li class="col-six col-lg-3 mt-2" style="list-style: none;">
                  <label class="gfield_label"> Phone <span class="gfield_required" style="color: red;">*</span></label>
                  <div class="ginput_container ginput_container_email">
                    <input type="text" id="mobile" name="mobile" maxlength="10" autocomplete="off" required>
                    <input type="hidden" id="id_paid" name="id_paid">
                  </div>
                </li>
                <li class="col-six col-lg-3 mt-2" style="list-style: none;">
                  <label class="gfield_label"> Age <span class="gfield_required" style="color: red;">*</span></label>
                  <div class="ginput_container">
                     <input type="text" id="age" name="age" required>
                  </div>
                </li>
                <li class="col-six mt-2" style="list-style: none;">
                  <label class="gfield_label">City</label>
                  <div class="ginput_container">
                   <input type="text" id="city" name="city" autocomplete="off"> 
                  </div>
                </li>
                <li class="col-twelve mt-2" style="list-style: none;">
                  <div class="ginput_container ginput_container_email text-center">
                    <button type="button" id="rzp-button" style="--content:">
                      <div class="left"></div>
                        Pay Now
                      <div class="right"></div>  
                    </button>
                  </div>
                </li>
                <li class="col-12 mt-4" style="list-style: none;">
                <div class="ginput_container ginput_container_email text-center">
                  <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id">
                </div>
              </li>
              </ul>
            </form>  
        </div>
   </div>
</section>

<div id="our-webinar" class="overlay-1">
  <div class="popup-1">
    <h2>Webinar Details</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">
          <p> 
      Are you someone who’s suffering from some mental health issues? Do you know the food and nutrition you intake make the foundation of your happiness? Well, 
            don’t you agree that good food brings the good mood? 
          </p>
          <p>  
            Think about it. Your brain is always “on.” It takes care of your thoughts and movements, your breathing, your senses — it works hard 24/7, even while you’re asleep. This means your brain requires a constant supply of fuel. That “fuel” comes from the foods you eat — and what’s in that fuel makes all the difference.
      </p>
          <p>       
            If you’re someone who is fighting a war against mental trauma, this webinar is for you. To cope with depression we need a toolbox of strategies. From ingredients that target particular low moods, to the links between diet and resilience. We can make a difference in such a simple way. 
      </p>
          <p>Join us for a talk show to harness the power of nutrition to stay calm and well, which will last about 45 mins with a 15 min live Q&A session. Only limited seats available!!</p>
          <h3 class="title-web-pop">Event Details</h3>  
          <ul class="event-detail">
            <li>
              <span class="event-topic">Topic : </span> “Role of Nutrition on Mental Well Being”
            </li>
            <li>
              <span class="event-topic"> Date : </span> 12th Sept’20
            </li>
            <li>
              <span class="event-topic"> Time : </span> 5 pm
            </li>
            <li>
              <span class="event-topic"> Venue : </span> Zoom
            </li>
            <li><span class="event-topic"> Fee: </span> Rs 150 </li>
          </ul>
          <h3 class="title-web-pop">Topics covered in the entirety of the webinar</h3>
          <ul class="topics-covered">
            <li>
              Depression and its domination of the modern world 
            </li>
            <li>
              The Deafening Claws Of Stress  
            </li>
            <li>
              Link between Nutrition and Mental Health.
            </li>
            <li>
              Simple and Easy Diets and Daily Habits
            </li>
            <li>
              Busting myths with factual data across nutrition and mental health.
            </li>
          </ul>
          <div class="alert alert-info">
            Take a walk with us in this journey of the mind and we promise to guide you through every step of the way.  
          </div>
    </div>
  </div>
</div>
<!-- Java Script
    ================================================== --> 


 <?php
  $amt       = 1000;//150
  $amt_value = $amt.'00';
?>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


<script src="<?php echo base_url(); ?>assets/landing/js/jquery-2.1.3.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/landing/js/plugins.js"></script> 
<script src="<?php echo base_url(); ?>assets/landing/js/main.js"></script> 
<script src="<?php echo base_url(); ?>assets/landing/assets/vendor/jquery.easing/jquery.easing.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/landing/assets/vendor/php-email-form/validate.js"></script> 



<script type="text/javascript"> 
   jQuery(document).ready(function(){
   /* jQuery('#btnShowHide').on('click', function(event) {    
   
        jQuery('#divShowHide').toggle('show');
        jQuery('#divShowHide1').toggle('hide');
      });*/

      jQuery('#close').on('click', function(event) {    
      //console.log(2);    
          jQuery('#divShowHide').toggle('hide');
          jQuery('#divShowHide1').toggle('hide');
      });
  });
</script>

<script type="text/javascript">
    function show(str){
        document.getElementById('divShowHide1').style.display = 'none';
        document.getElementById('divShowHide').style.display = 'block';
    }
    function show2(sign){
        document.getElementById('divShowHide1').style.display = 'block';
        document.getElementById('divShowHide').style.display = 'none';
    }
</script>
<script type="text/javascript">
    $('#datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker').datepicker("setDate", new Date());
</script>

<script type="text/javascript">


  var razor;
    var url = "<?php echo base_url(); ?>";
    var name = $('#name').val();
    var email = $('#email').val();
    var age = $('#age').val();
    var mobile = $('#mobile').val();
    var city = $('#city').val();
    var name1 = "Nutridock";
   
    var options = {

    "key": "rzp_live_qW1poYrCW3uQa9", //rzp_live_qW1poYrCW3uQa9
    //"key": "rzp_test_EDuPsXnNFa3Atn", 
    //"amount": 100, 
    "amount": "100", //15000
    "currency": "INR",
    "name": "Nutridock",
    "description": "By Seva Automotive",
    "image": "https://rushabh2w.com/assets/landing/assets/img/logo.png",

    "handler": function (response){
      console.log(response);
      $('#razorpay_payment_id').val(response.razorpay_payment_id);
      razor = response.razorpay_payment_id;
      document.getElementById("web_order_summery_form").submit();
    },
    "prefill": {
        "name": name,
        "email": email,
        "contact": mobile,
        "age": age,
    },
    "notes": {
        "address": city
    },
    "theme": {
        "color": "#000"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button').onclick = function(e){

var name_value = $('#name').val();
var email_value = $('#email').val();
var mobile_value = $('#mobile').val();
var age_value = $('#age').val();
var city_value = $('#city').val();
//var token = $('#_token').val();


  if(name_value!='' && email_value!='' && mobile_value!='' && age_value!=''){
  rzp1.open();
  e.preventDefault();

  jQuery.ajax({
    type: "POST",
    url: "<?php echo base_url(); ?>nutridock_re/checkout",
    //dataType: 'html',
    data: {name: name_value, email: email_value,mobile:mobile_value,age:age_value,city:city_value},
    success: function(res) 
    {
      //console.log(res);
      $('#id_paid').val(res);
      
      
      if(res)
      {
      //alert('Data saved successfully'); 
      window.location.href = "<?php echo base_url(); ?>nutridock_re/capture_payment";
      }
      else
      {
      //alert('Data not saved');  
      //window.location.href = "http://localhost/nutridock/failed";
     // console.log(1);
      }
      
    },
    error:function()
    {
    alert('data not saved');  
    }
    });

  }else{
    $('#err_details').html('* Please enter all mandatory details');
  }

}
    </script>



</body>
</html>