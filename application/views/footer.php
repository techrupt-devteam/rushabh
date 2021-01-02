<link rel="stylesheet" href="assets/floatton/style.css" type="text/css" media="all">
<link rel="stylesheet" href="assets/floatton/floatton.css" type="text/css" media="all">

<section class="brochure-download d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5"></div>
            <div class="col-lg-9 col-md-7">
                <ul class="broserandbooking">
                    <li><a href="<?php echo base_url(); ?>book-your-service" class="hvr-sweep-to-top">Online service booking</a></li>
                    <li><a href="<?php echo base_url(); ?>download-e-brochure" class="hvr-sweep-to-top">Download E-brochure</a></li>
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
                        <input type="email" name="email" id="email_id" placeholder="Type your email"> 
                        <button type="submit" onclick="return subscriptionSubmit();" name="subscription_submit" value="subscription_submit">Subscribe</button>
                    </form>
                </div>
                <div id="err_email_id" style="margin-left: 60px; color: red; position: absolute;"></div>
            </div>
        </div>
    </div>
</div>
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
<div class="floatton-container" id="divShowHide"> 
  <span onclick="hello();" class="floatton-close dashicons dashicons-no-alt"> 
    X
  </span>
  <h4 class="welcome-text text-uppercase"> Request A Callback  </h4 >
  <div class="floatton-inner">
      <form action="<?php echo base_url(); ?>contact-us/contact-store" method="post">
        <ul class="row">
            <li class="col-md-12 mt-2">
              <label class="gfield_label">Full Name <span class="gfield_required">*</span></label>
              <div class="ginput_container">
                  <input type="text" name="name" class="large" maxlength="150" autocomplete="off" required="required">
                  <span style="color: red" id="error_name"></span>
              </div>
            </li>
           
            <li class="col-6 col-md-12 mt-2">
              <label class="gfield_label">Mobile No.<span class="gfield_required">*</span></label>
              <div class="ginput_container">
                <input type="text" name="mobile" class="input-message" autocomplete="off" maxlength="10" required="required"> 
                  <span style="color: red" id="error_message"></span>
              </div>
            </li>
    
            <li class="col-6 col-md-12 mt-2">
              <label class="gfield_label">City<span class="gfield_required">*</span></label>
              <div class="ginput_container">
                <input type="text" name="address" class="input-message" autocomplete="off" maxlength="10" required="required"> 
                  <span style="color: red" id="error_message"></span>
              </div>
            </li>
            
          </ul>
           <button class="btn btn-dark" type="submit" name="submit" value="submit">Submit</button>
      </form>
  </div>
</div>
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