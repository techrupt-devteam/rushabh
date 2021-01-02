
<style>
  .parsley-min{
    color: red;
  }
</style>
<main>
        <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/images/book--service.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left">
                    <h1>Book Your Service</h1>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  <div class="container-fluid innerpage">
    <div class="container">
      <div class="contact-form mt-5">
        <!-- <form action="send_mail_bookservice.php" class="registration-form" method="post" role="form" data-parsley-validate="parsley" onsubmit="return submitUserForm();"> -->

          <form action="" class="registration-form" method="post" data-parsley-validate="parsley"><!-- send_mail_bookservice.php onsubmit="return submitUserForm();"-->


          <fieldset class="form-book">
            <legend>Personal & Vehicle Detail</legend>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-2">
                <label>Your Name <span class="parsley-required text-danger">*</span></label>
                 <input class="form-control"  id="Name" name="Name" type="text" value=""  pattern="^[a-zA-Z.,/ $()]+$" required data-parsley-required-message="Please Enter Full Name" placeholder="Name" data-parsley-pattern-message="Enter Valid Name (text only)">
              </div>
              <div class="col-md-6 col-lg-4 mb-2">
                <label>Mobile No. <span class="parsley-required text-danger">*</span></label>
                <input type="text" id="mobile" name="mobile" class="form-control"  pattern="^[7-9]\d{9}$" data-parsley-pattern-message="Mobile Number should starts with 7/8/9 And 10 Digit" data-parsley-maxlength="10" required data-parsley-required-message="Please Enter Mobile Number" placeholder="Mobile" data-parsley-type="digits" maxlength="10">
              </div>
              <div class="col-md-6 col-lg-4 mb-2">
                <label>Your Email ID</label>
                 <input style="max-width: 100%;"  class="form-control" name="Email" id="Email" type="text" value="" placeholder="Email" pattern="^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$" data-parsley-pattern-message="Enter Valid Email Id (abc@gmail.com)">
              </div>
              <div class="col-md-12 col-lg-8 mb-3">
                <label>Your Address</label>
                <textarea class="form-control" cols="20" id="Address" name="Address" rows="2" placeholder="Enter Your Address"></textarea>
              </div>

               <div class="col-md-6 col-lg-4 mb-2">
                <label>Location</label>
                 <select class="form-control" name="location" required="required" data-parsley-required-message="Please Select Location">
                    <option value=" ">Select Location</option>
                    <option value="Mumbai Naka">Mumbai Naka</option>
                    <option value="Uttam Nagar">Uttam Nagar</option>
                    <option value="Indira Nagar">Indira Nagar </option>
                    <option value="Mhasrul"> Mhasrul </option>
                    <option value="Ambad"> Ambad </option>
                  </select>
              </div>


            </div>

            <div class="row">
              <div class="col-md-6 col-lg-4 mb-2">
                <label>Select Service <span class="parsley-required text-danger">*</span></label>
                <select class="form-control" data-val="true"  id="service" name="service" required="required">
                  <option value="">Select Services</option>
                  <option value="Free Service">Free Service</option>
                  <option value="Paid Service">Paid Service</option>
                </select>
              </div>
              <div class="col-md-6 col-lg-4 mb-2">
                <label>Vehicle No. <span class="parsley-required text-danger">*</span></label>
                <input type="text" id="vehical_no" name="vehical_no" class="form-control" required data-parsley-required-message="Please Enter Vehicle Number." placeholder="Vehicle No.">
              </div>
              <div class="col-md-6 col-lg-4 mb-2">
                <label>Select Date<span class="parsley-required text-danger">*</span></label>
                <input style="max-width: 100%;"  class="form-control" name="Date" type="date" value="" data-parsley-type="Date" required data-parsley-required-message="Please Select Date" placeholder="DD/MM/Year" data-parsley-type-message="Enter Valid Date" id="datepicker_today" data-parsley-mindate="<?php echo now();?>" onchange="handler(event);"  >
                <div class='validation' id='validation'></div>
              </div>

              <div class="col-md-12 col-lg-8 mb-2">
                <label>Remark</label>
                 <textarea style="max-width: 100%;" class="form-control" cols="20" id="Remarks" name="Remarks" rows="2" placeholder="Remark"></textarea>
              </div>

            </div>
            <div class="row">
              <div class="col-md-12 mb-2">
                <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="exampleCheck1" name="conditions" data-parsley-errors-container="#error_terms" required="">
                <label class="custom-control-label" for="exampleCheck1">
                  <a href="terms-conditions.php">*Terms & Conditions</a>
                </label>
               </div>
              </div>
              <!-- <div class="col-md-12 mb-2">
                <div class="g-recaptcha" data-sitekey="6LcBH9kUAAAAAIntEDp0A3pBwPjc5FpdubYliEAl" data-callback="verifyCaptcha"></div>
                <div id="g-recaptcha-error"></div>
              </div> -->
            </div>
          </fieldset>
          
           <button id="submit" class="btn mt-2" type="submit" value="submit" name="submit" data-loading-text="Submitting..." autocomplete="off" class="redbutton">Submit</button>
        </form>
      </div>
    </div>
  </div>
<!--   <div class="online-booking">
    <div class="container">
      <div class="row">
        
        <div class="col-md-6 mx-auto">
          <div class="online-service">
            <h3>Download E-brochure</h3>
            <i><img src="assets/images/online-service2.png"></i> <a href="download-e-brochure.php" class="hvr-sweep-to-top">Download</a> </div>
        </div>
      </div>
    </div>
  </div> -->
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
<script src="assets/lib/js/bootstrap.js"></script> 
<script src="assets/lib/js/bootstrap.min.js"></script> 
<script src="assets/lib/js/bootstrap.bundle.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 

<script src="assets/js/parsley.js"></script> 
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
// document.getElementById('g-recaptcha-error').innerHTML = 'block';
function submitUserForm() {
    var response = grecaptcha.getResponse();
    // alert(response);die();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
function handler(e){
  var date=e.target.value;
   $.ajax({
    url: "demo_test.php", 
    type:'POST',
    data:{
    data1 : date // will be accessible in $_POST['data1']
    },
    success: function(response){
      var data = JSON.parse(response);
      if(response== 'true')
      {
        $("#datepicker_today").val("");
        $(".validation").append("Please Select Next date as Today's Servicings are full.");
      }else{
        $("#validation").remove();
      }
  }});
}
 
</script>
