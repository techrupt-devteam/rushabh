
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
                                <td>
                                    <label for="oldpassword">On road cost</label>:</td>
                                    
                                                                        <td>           
            
                                    <span ><?php echo $row->road_cost; ?></span>    
                                </td>
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