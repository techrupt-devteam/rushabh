<section class="brochure-download">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-lg-3"></div>
      <div class="col-md-7 col-lg-9">
         <ul class="broserandbooking">
          <li>
            <a href="<?php echo base_url(); ?>book_your_service" class="hvr-sweep-to-top">Online service booking</a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>download_e_brochure" class="hvr-sweep-to-top">Download E-brochure</a>
          </li>
         </ul>  
      </div>
    </div>
  </div>
</section>
<div class="newsletter_section ptb-80">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-5 col-md-12">
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
     <div class="col-md-3 mb-social">
      <a href="<?php echo base_url(); ?>" class="footer-logo"><img src="assets/images/logo.png"></a>
      <ul class="social-icons">
      <li>
        <a href="https://www.facebook.com/Rushabh-Honda-Two-Wheeler-Authorized-Dealer-102346901489879/" target="_blank">
          <i class="mdi mdi-facebook"></i>
        </a>
      </li>
      <li>
        <a href="https://instagram.com/rushabh_bike_scooter?igshid=k3bb3qeb4u66" target="_blank">
          <i class="mdi mdi-instagram"></i></a>
        </li>
      </ul>
    </div>

  <div class="col-lg-3 col-6">
  <h4>Top Sections</h4>
  <ul>
  <li><a href="<?php echo base_url(); ?>">Home</a></li>
  <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
  <li><a href="<?php echo base_url(); ?>online_booking">Book your Vehicle Now</a></li>
  <!--<li><a href="contact-us.php">Test Drive</a></li>-->
  <li><a href="<?php echo base_url(); ?>finance">Finance</a></li>
  <li><a href="<?php echo base_url(); ?>insurance">Insurance</a></li>
  </ul>
  </div>

  <div class="col-lg-3 col-6">
  <h4>QUICK LINKS</h4>
  <ul>
  <li><a href="<?php echo base_url(); ?>offers">Offers</a></li>
  <!--<li><a href="#">Success Stories</a></li>-->
  <li><a href="<?php echo base_url(); ?>honda_shield">Honda Shield</a></li>
  <li><a href="<?php echo base_url(); ?>honda_genuine_engine_oil">Honda Genuine Engine Oil</a></li>
  <li><a href="<?php echo base_url(); ?>genuine_parts">Honda Genuine Parts</a></li>
  <li><a href="<?php echo base_url(); ?>feedback">Feedback/Queries</a></li>
  </ul>
  </div>

  <div class="col-md-3 mb-sect">
  <h4>Contact details</h4>
  <ul>
  <li><a href="tel: +918888877649">Enquiry : +91 88888 77649</a></li>
  <li><a href="mailto:enquiry@rushabh2w.com">enquiry@rushabh2w.com</a></li>
  <li> <p class="total">Total Sales :12k</p></li>
  <li><p class="total"> Till date Service:  78k</p></li>
  </ul>
  </div>
  
 
  </div>
  </div>
<div class="copyright-section text-center">
<div class="container">
<p class="float-left">© Rushabh Honda. all rights reserved. </p>
<p class="float-right">Design &amp; Developed By <a href="http://viryatech.in/" target="_blank">Viryatech</a></p>
</div>
<div class="clearfix"></div>
</div>
<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"></a>

</footer>
<script src="assets/lib/js/bootstrap.js"></script> 
<script src="assets/lib/js/bootstrap.bundle.min.js"></script> 
<script src="assets/lib/js/jquery.min.js" ></script> 
<script src="assets/js/megamenu.js" defer></script> 
<script src="assets/js/bjqs-1.3.min.js" defer></script>
<script src="assets/js/news.js" defer></script> 
<script src="assets/js/lazysizes.min.js" async></script>
<script src="assets/js/all.min.js" async></script> 

<script>
jQuery(window).on('load', function() {
  jQuery('#preloader__status').fadeOut();
  jQuery('#preloader').delay(350).fadeOut('slow'); 
  jQuery('body').delay(350).css({'overflow':'visible'});
})
</script>

<script type="text/javascript">
  $(document).ready(function(){
  $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#back-to-top').fadeIn();
      } else {
        $('#back-to-top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 400);
      return false;
    });
});
</script>
<script type="text/javascript">
(function () {
var options = {
whatsapp: "+918888877649", // WhatsApp number
call_to_action: "", // Call to action Message us
position: "left", // Position may be 'right' or 'left'
};
var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();


</script>
<!-- /WhatsHelp.io widget -->


<script class="secret-source" defer>
jQuery(document).ready(function($) {
  $('#banner-fade').bjqs({
  responsive  : true
  });
});
 $(function(){
                $(".video").videoPopup();
            });
   $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate() + 1;
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#datepicker_today').attr('min', minDate);
});
</script>

</body>
</html>