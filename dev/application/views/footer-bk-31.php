<section class="brochure-download">
<div class="container">
<div class="row">
<div class="col-md-5 col-lg-3"></div>
<div class="col-md-7 col-lg-9">
<ul class="broserandbooking">
<li>
<a href="<?php echo base_url(); ?>book-your-service" class="hvr-sweep-to-top">Online service booking</a>
</li>
<li>
<a href="<?php echo base_url(); ?>download-e-brochure" class="hvr-sweep-to-top">Download E-brochure</a>
</li>
</ul>
</div>
</div>
</div>
</section>
<div class="newsletter_section ptb-80">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 col-md-12 mb-3">
<div class="newsletter_text">
<h2>Get All Updates</h2>
<p>Sign up our newsleter today. Also get allert for new product.</p>
</div>
</div>
<div class="col-lg-7 col-md-12">
<div class="newsletter_form">
<form action="" method="post">
<input type="email" name="email" placeholder="Type your email">
<button type="submit" name="submit" value="submit">Subscribe</button>
</form>
</div>
</div>
</div>
</div>
</div>
<footer>
<div class="container">
<div class="row">
<div class="col-md-3 mb-social mb-3">
<a href="<?php echo base_url(); ?>" class="footer-logo"><img src="assets/images/logo.png"></a>
<ul class="social-icons">
<li>
<a href="https://www.facebook.com/Rushabh-Honda-Two-Wheeler-Authorized-Dealer-102346901489879/" target="_blank">
<i class="fa fa-facebook"></i>
</a>
</li>
<li>
<a href="https://instagram.com/rushabh_bike_scooter?igshid=k3bb3qeb4u66" target="_blank">
<i class="fa fa-instagram"></i></a>
</li>
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
<ul>
<li><a href="tel: +918888877649">Enquiry : +91 88888 77649</a></li>
<li><a href="mailto:enquiry@rushabh2w.com">enquiry@rushabh2w.com</a></li>
<li> <p class="total">Total Sales :12k</p></li>
<li><p class="total"> Till date Service: 78k</p></li>
</ul>
</div>
</div>
</div>
<div class="copyright-section text-center">
<div class="container">
<p class="float-left">© Rushabh Honda. all rights reserved. </p>
<p class="float-right">Design &amp; Developed By <a href="http://techrupt.com/" target="_blank">Techrupt</a></p>
</div>
<div class="clearfix"></div>
</div>
<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"></a>

<!--  
<script type="text/javascript" src="assets/floatton/jquery-migrate.js"></script>
<script type="text/javascript" src="assets/floatton/jquery_003.js"></script> -->


</footer>
<script type="text/javascript" src="assets/floatton/jquery.js"></script>	
<script src="assets/lib/js/bootstrap.js"></script>
<script src="assets/lib/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/js/jquery.min.js"></script>
<script src="assets/js/megamenu.js" defer></script>
<script src="assets/js/bjqs-1.3.min.js" defer></script>
<script src="assets/js/news.js" defer></script>
<script src="assets/js/lazysizes.min.js" async></script>
<!-- <script src="assets/js/all.min.js" async></script> -->
<script>jQuery(window).on("load",function(){jQuery("#preloader__status").fadeOut();jQuery("#preloader").delay(350).fadeOut("slow");jQuery("body").delay(350).css({overflow:"visible"})});</script>
<script type="text/javascript">$(document).ready(function(){$(window).scroll(function(){if($(this).scrollTop()>50){$("#back-to-top").fadeIn()}else{$("#back-to-top").fadeOut()}});$("#back-to-top").click(function(){$("body,html").animate({scrollTop:0},400);return false})});</script>
<script type="text/javascript">(function(){var c={whatsapp:"+918888877649",call_to_action:"",position:"left"};var f=document.location.protocol,e="whatshelp.io",b=f+"//static."+e;var d=document.createElement("script");d.type="text/javascript";d.async=true;d.src=b+"/widget-send-button/js/init.js";d.onload=function(){WhWidgetSendButton.init(e,f,c)};var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(d,a)})();</script>
<script class="secret-source" defer>/*<![CDATA[*/jQuery(document).ready(function(a){a("#banner-fade").bjqs({responsive:true})});$(function(){$(".video").videoPopup()});$(function(){var a=new Date();var e=a.getMonth()+1;var b=a.getDate()+1;var c=a.getFullYear();if(e<10){e="0"+e.toString()}if(b<10){b="0"+b.toString()}var d=c+"-"+e+"-"+b;$("#datepicker_today").attr("min",d)});/*]]>*/


const picker = document.getElementById('datepicker_today');
picker.addEventListener('input', function(e){
  var day = new Date(this.value).getUTCDay();
  if([0].includes(day)){
    e.preventDefault();
    this.value = '';
    alert('Sunday not allowed');
  }
});


</script>
</body>
</html>