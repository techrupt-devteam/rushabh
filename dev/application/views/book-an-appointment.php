
<style>
  .parsley-maxlength{
    color:red;
  }
  .parsley-minlength{
    color:red;
  }
  .parsley-min{
    color:red;
  }
</style>
<main>
  <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/images/about-us.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left">
                    <h1>Book An Appointment</h1>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="https://dev.rushabh2w.com/">Home</a></li>
                        <li class="active">Appointment </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  <div class="container-fluid innerpage">
    <div class="container">
      <div class="contact-form">
      <div class="formsection">
    <!-- <form action="send_mail_bookappointment.php" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();"> -->
      <form action="" method="post" data-parsley-validate="parsley"><!-- onsubmit="return submitUserForm();" -->
        <fieldset class="form-book">
          <legend>Contact Information</legend>
        
  
  <div class="row">
  <div class="col-md-6">
  <div class="form-row">
  <div class="form-group col-12">
    <label for="inputAddress">Full Name<span class="parsley-required text-danger">*</span></label>
   <input class="form-control"  id="Name" name="full_name" type="text" value="" pattern="^[a-zA-Z.,/ $()]+$" required data-parsley-required-message="Please Enter Full Name" placeholder="Name" data-parsley-pattern-message="Enter Valid Name (text only)">

  </div>

  </div>

   <div class="form-row">

  <div class="form-group col-12">

    <label for="inputAddress2">Email<span class="parsley-required text-danger">*</span> </label>

    <input style="max-width: 100%;" class="form-control text-box single-line input-validation-error" data-val="true" data-val-regex="Please enter a valid E-mail" pattern="^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$" data-parsley-required-message="Please enter email." data-parsley-pattern-message="Enter Valid Email Id (abc@gmail.com)" id="Email" name="email" required="required" type="text" value="" placeholder="Enter Email ID">

  </div>

  </div>

</div>

    <div class="col-md-6">

    <div class="form-row">

   <div class="form-group col-12">

    <label for="inputAddress2">Phone No.<span class="parsley-required text-danger">*</span> </label>

    <input style="max-width: 100%;" type="text" id="phone_no" name="phone_no" class="form-control" pattern="^[7-9]\d{9}$" data-parsley-pattern-message="Mobile Number Should Starts with 7/8/9 AND 10 Digit" data-parsley-length="[10,10]" data-parsley-length-message = "Enter Valid 10 Digit  Mobile Number." required data-parsley-required-message="Please Enter Mobile Number" data-parsley-type="digits" placeholder="Mobile">

  </div>

  </div>

    <div class="form-row">

  <div class="form-group col-12">

    <label for="inputAddress">Date<span class="parsley-required text-danger">*</span></label>

    <input type="date" class="form-control" id="datepicker_today" name="date" placeholder="Date" required="true" data-parsley-mindate="<?php echo now();?>">

  </div>

  </div>

    </div>


<div class="col-md-6">
  <div class="form-row">
   <div class="form-group col-12">
    <label for="inputAddress2">Location<span class="parsley-required text-danger">*</span> </label>
    <select class="form-control" name="location" required="true">
        <option value=" ">Select</option>
        <option value="Mumbai Naka">Mumbai Naka</option>
        <option value="Uttam Nagar">Uttam Nagar</option>
        <option value="Indira Nagar">Indira Nagar </option>
        <option value="Mhasrul"> Mhasrul </option>
        <option value="Ambad"> Ambad </option>
    </select>
  </div>
  </div>
</div>
</div>  
</fieldset>  
 <!-- Captcha Section -->
 <!-- <div class="form-group mt-3 col-md-6">
      <div class="g-recaptcha" data-sitekey="6LcBH9kUAAAAAIntEDp0A3pBwPjc5FpdubYliEAl" data-callback="verifyCaptcha"></div>
    <div id="g-recaptcha-error"></div>
 </div> -->
 <!-- Captcha Section -->
<input type="submit" name="submit" class="redbutton1 mt-3" value="submit">



</form>

    </div>

      </div>

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


<!-- <script>
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
</script> -->

