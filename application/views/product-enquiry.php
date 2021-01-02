

<style>
  .parsley-maxlength{
    color:red;
  }
  .parsley-minlength{
    color:red;
  }
</style>  
<main>
  <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/images/enquiry-banner.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left">
                    <h1>Enquiry</h1>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Enquiry </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  <div class="container-fluid innerpage">
    <div class="container">
      <!-- <form action="send_mail.php" class="registration-form" id="submitMicroProductEnquiry" data-parsley-validate="parsley" method="post" role="form"  onsubmit="return submitUserForm();"> -->

      <form action="" class="registration-form" method="post" data-parsley-validate="parsley"><!-- send_mail.php onsubmit="return submitUserForm();"-->

       <fieldset class="form-book mt-4">
        <legend>
          Detail's
        </legend>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-2">
             <label>Your Name <span class="parsley-required text-danger">*</span></label>
             <input style="max-width: 100%;" class="form-control"  id="Name" name="Name" type="text" value="" pattern="^[a-zA-Z.,/ $()]+$" required data-parsley-required-message="Please Enter Full Name" placeholder="Name" data-parsley-pattern-message="Enter Valid Name (text only)">
          </div>
          <div class="col-md-6 col-lg-4 mb-2">
            <label>Mobile <span class="parsley-required text-danger">*</span></label>
            <input style="max-width: 100%;" class="form-control text-box single-line valid" data-val="true"  data-parsley-required-message="Please enter mobile no."  pattern="^[7-9]\d{9}$" data-parsley-pattern-message="Mobile Number should starts with 7/8/9 And 10 Digits" data-parsley-type="digits" id="MobileNo" name="MobileNo" required="required" type="text" placeholder="Mobile" value="" maxlength="10">
          </div>
          <div class="col-md-6 col-lg-4 mb-2">
            <label>Email <span class="parsley-required text-danger">*</span></label>
            <input style="max-width: 100%;" class="form-control text-box single-line input-validation-error" data-val="true" data-val-regex="Please enter a valid E-mail" pattern="^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$" data-parsley-required-message="Please enter email." data-parsley-pattern-message="Enter Valid Email Id (abc@gmail.com)" id="Email" name="Email" required="required" type="text" value="" placeholder="Email">
          </div>

          <div class="col-md-6 col-lg-4 mb-2">
            <label>Location <span class="parsley-required text-danger">*</span></label>
             <select class="form-control" name="location" required data-parsley-required-message="Please select location">
                <option value=" ">Select Location</option>
                <option value="Mumbai Naka">Mumbai Naka</option>
                <option value="Uttam Nagar">Uttam Nagar</option>
                <option value="Indira Nagar">Indira Nagar </option>
                <option value="Mhasrul"> Mhasrul </option>
                <option value="Ambad"> Ambad </option>
              </select>
          </div>

          <div class="col-md-8 col-lg-8 mb-2">
            <label>Your Address </label>
           <!--  <input style="max-width: 100%;" class="form-control text-box single-line valid" data-val="true"  data-parsley-required-message="Please enter address."  id="MobileNo" name="MobileNo" required="required" type="text" placeholder="Address" value=""> -->

           <textarea style="max-width: 100%;" placeholder="Address" class="form-control" cols="20" id="Address" name="address" rows="3"></textarea>
          </div>
          <!-- <div class="col-md-12 col-lg-4 mb-2">
            <label>Remarks/Suggestions</label>
            <textarea style="max-width: 100%;" placeholder="Remarks/Suggestions" class="form-control" cols="20" id="Remarks" name="Remarks" rows="3"></textarea>
          </div> -->
          <!-- <div class="col-md-12 col-lg-8 mb-2">
              <div class="g-recaptcha" data-sitekey="6LcBH9kUAAAAAIntEDp0A3pBwPjc5FpdubYliEAl" data-callback="verifyCaptcha"></div>
              <div id="g-recaptcha-error"></div>
          </div> -->
        </div>
      </fieldset>
      <div class="mt-3 mb-4">
            <button id="submit" type="submit" name="submit" value="submit" data-loading-text="Submitting..." autocomplete="off" class="btn redbutton">Submit</button>
          </div>
       </form>
    </div>
  </div>

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
</script>
