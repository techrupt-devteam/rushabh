
<style type="text/css">
	.customer-details td, th {
    border: 0px;
	}
	.customer-details td span {
    font-size: 15px;
    font-weight: 600;
}
.customer-details td label {
    color: #333;
    font-size: 14px;
}
</style>
<main>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="container innerpage">
  <div class="my-5" style="min-height:350px">
  <h2 class="innerpageHeading text-center">Pay Now</h2>
  	<div class="row">
    <div class="formsection col-md-10 mx-auto">
       <!-- Form Open -->
      <div class="formsection">
        <div class="my-4">
        	<h5 style="border-bottom: 1px dashed #222;padding-bottom: 15px;">Customer Details</h5></div>
          <div class="box-body">
            <?php  foreach($booking as $row); ?>
                    <div class="form-group">
                        <table class="table border-0 customer-details" width="100%" border="0">
                            <tr>
                                <td>
                                    <label for="oldpassword">Full Name</label>: </td>
                                    <td>           
                                    <span ><?php echo $row->name; ?></span>    
                                </td>
                                <td>
                                    <label for="oldpassword">Contact No</label>:</td>
                                    <td>            
                                    <span ><?php echo $row->mobile; ?></span>
                                </td>
                            </tr>
                            
                             <tr>
                                <td>
                                    <label for="oldpassword">Email Id</label>: </td>       
                                    <td>           
          
                                    <span ><?php echo $row->email; ?></span>    
                                </td>
                                <td>
                                    <label for="oldpassword">City</label>:</td>
                                    <td>           
            
                                    <span ><?php echo $row->city; ?></span>    
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <label for="oldpassword">Address</label>: </td>
                                    <td>           
           
                                    <span><?php echo $row->address; ?></span>    
                                </td>
                                <td>
                                    <label for="oldpassword">Bikes / Scooters</label>: </td>
                                    <td>           
           
                                    <span><?php echo $row->car; ?></span>    
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <label for="oldpassword">Bikes / Scooters varient</label>:</td> 
                                     <td>           
        
                                    <span ><?php echo $row->varient; ?></span>    
                                </td>
                                <td>
                                    <label for="oldpassword">Bikes / Scooters Color</label>: </td>  
                                    <td>           
         
                                    <span><?php echo $row->color; ?></span>    
                                </td>
                            </tr>
                            <tr>
                                <td><label for="oldpassword">On road cost</label>:</td>
                                <td><span ><?php echo $row->road_cost; ?></span></td>
                            </tr>
                        </table>
                    </div>
                </div>
      </div>

      <!-- Form Open Close -->
  <div class="form-row pb-3">
  <div class="form-group col-lg-12" style="padding-top: 1.3rem;border-top: 1px dashed #222;">
    <center>
      <p><label for="inputAddress">Token Amount</label></p>
      <span style="font-size: 38px;"><b><i class="fa fa-inr"></i> 1000</b></span>
    </center>
  </div>
  </div>
 
    <center>
      <button type="button" id="rzp-button" class="redbutton1">Pay Now</button>
    </center>
 <form id="web_order_summery_form" action="<?php echo base_url(); ?>payment/callback" method="post"><!-- https://rushabh2w.com/admin/admin/capture_payment /<?php //echo $id; ?> -->
        <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id" >
        <input type="hidden" id="token_id" name="token_id" value="<?php echo base64_decode($id); ?>">
      </form>
    </div>
    </div>
</div>
	
  
  </div>
  
  
  
</main>
<!-- End Cart -->

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

    <?php
        $amt       = 100;//100000
       /* $name      = 'suraj';
        $email     = 'suraj.hoh@gmail.com';
        $mobile_no = '9766453326';
        $address   = 'nashik';*/
    ?>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="assets/js/parsley.js"></script> 
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script type="text/javascript">
     
      var options = {
    "key": "rzp_test_nf0j2zhJBIeTOQ", 

    //"amount": 100, 
    "amount": "<?php echo $amt ?>", 
    "currency": "INR",
    "name": "RUSHABH HONDA",
    "description": "",
    "image": "<?php echo base_url(); ?>assets/images/logo.png",

    "handler": function (response){
      console.log(response.razorpay_payment_id);
      $('#razorpay_payment_id').val(response.razorpay_payment_id);
      document.getElementById("web_order_summery_form").submit();
    },
    "prefill": {
        "name": "<?php echo $row->name; ?>",
        "email": "<?php echo $row->email; ?>",
        "contact": "<?php echo $row->mobile; ?>"
    },
    "notes": {
        "address": "<?php echo $row->address;?>"
    },
    "theme": {
        "color": "#000"
    }
};

var rzp1 = new Razorpay(options);
document.getElementById('rzp-button').onclick = function(e){
  console.log(rzp1);
  rzp1.open();
  e.preventDefault();
}
    </script>