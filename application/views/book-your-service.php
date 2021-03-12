<main>
        <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/images/book--service.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-sm-left text-center">
                    <h1>Book Your Service</h1>
                </div>
                <div class="col-md-6 col-sm-6 text-sm-right text-center">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <marquee width="100%" direction="left" height="40px" style="padding: 10px;font-size: 16px;color: #f00;font-weight: 600;">
Sevice booking is close on <span class="text-dark">13th March 2021. </span>Sorry for inconvenience.
</marquee>
  <div class="container-fluid innerpage">
    <div class="container">
      <div class="contact-form mt-5">
        <!-- <form action="send_mail_bookservice.php" class="registration-form" method="post" role="form" data-parsley-validate="parsley" onsubmit="return submitUserForm();"> -->

          <form action="" class="registration-form" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();"><!-- send_mail_bookservice.php -->


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
                <label>Your Email ID <span class="parsley-required text-danger">*</span></label>
                 <input style="max-width: 100%;"  class="form-control" name="Email" id="Email" type="text" value="" placeholder="Email" pattern="^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$" data-parsley-pattern-message="Enter Valid Email Id (abc@gmail.com)" required>
              </div>
              <div class="col-md-12 col-lg-8 mb-3">
                <label>Your Address</label>
                <textarea class="form-control" cols="20" id="Address" name="Address" rows="2" placeholder="Enter Your Address"></textarea>
              </div>

               <div class="col-md-6 col-lg-4 mb-2">
                <label>Location <span class="parsley-required text-danger">*</span></label>
                 <select class="form-control" name="location" required="required" id="location" data-parsley-required-message="Please Select Location" onchange="selectLocation();">
                    <option value="">Select Location</option>
                    <option value="Mumbai Naka">Mumbai Naka</option>
                    <!-- <option value="Uttam Nagar">Uttam Nagar</option> -->
                    <!--<option value="Indira Nagar">Indira Nagar </option>-->
                    <!-- <option value="Mhasrul"> Mhasrul </option> -->
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
                  <option value="Accidental Repair">Accidental Repair</option>
                </select>
              </div>
              <div class="col-md-6 col-lg-4 mb-2">
                <label>Vehicle No. <span class="parsley-required text-danger">*</span></label>
                <input type="text" id="vehical_no" name="vehical_no" class="form-control" required data-parsley-required-message="Please Enter Vehicle Number." placeholder="Vehicle No.">
              </div>
              <div class="col-md-6 col-lg-4 mb-2">
                <label>Select Date<span class="parsley-required text-danger">*<small> (Sunday close)</small></span></label>
                <input style="max-width: 100%;" class="form-control" name="Date" type="date" value="" data-parsley-type="Date" required data-parsley-required-message="Please Select Date" placeholder="DD/MM/Year" data-parsley-type-message="Enter Valid Date" id="datepicker_today" data-parsley-mindate="<?php echo date('d-m-Y');?>" onchange="handler(event);"  >
                <div class='validation' id='validation' style="color: red;"></div>
              </div>

              <div class="col-md-12 col-lg-8 mb-2">
                <label>Remark</label>
                 <textarea style="max-width: 100%;" class="form-control" cols="20" id="Remarks" name="Remarks" rows="2" placeholder="Remark"></textarea>
              </div>
              
              <div class="col-md-12 col-lg-4 mb-2"><br><br>
                <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="exampleCheck1" name="conditions" data-parsley-errors-container="#error_terms" required="">
                <label class="custom-control-label" for="exampleCheck1"> Terms & Conditions <span class="parsley-required text-danger">*</span>
                </label>
               </div>
              </div>

            </div>
            <div class="row">
             <!--  <div class="col-md-12 mb-2">
              <div class="g-recaptcha" data-sitekey="6LcBH9kUAAAAAIntEDp0A3pBwPjc5FpdubYliEAl" data-callback="verifyCaptcha"></div>
                <div id="g-recaptcha-error"></div>
              </div>  -->
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
  
   console.log(date);
   var location = $('#location').val();
   //console.log(location);

   if(date=='2021-03-13')
   {
      alert('Service booking is close today');
      $('#datepicker_today').val('');
      return false;
   }else{
      return true;
   }
  
    
 /* if(location=='Mumbai Naka'){
     if(date=='2020-12-31'){
         alert('Service booking is close today');
        $('#datepicker_today').val('');
        return false;
     }
    if(date=='2020-11-12')
   {
      alert('Service booking is close');
      $('#datepicker_today').val('');
      return false;
    }else if(date=='2020-11-13'){
      alert('Service booking is close');
      $('#datepicker_today').val('');
      return false;
    }else if(date=='2020-11-14'){
      alert('Service booking is close');
      $('#datepicker_today').val('');
      return false;
    }else if(date=='2020-11-15'){
      alert('Service booking is close');
      $('#datepicker_today').val('');
      return false;
    }else if(date=='2020-11-16'){
      alert('Service booking is close');
      $('#datepicker_today').val('');
      return false;
    }
  }else if(location==''){
      if(date=='2020-12-31'){
         alert('Service booking is close today');
        $('#datepicker_today').val('');
        return false;
     }
    alert('Please select location first !!');
    $('#datepicker_today').val('');
    return false;
  }*/
}

function selectLocation()
{
  var location = $('#location').val();
  if(location=='Mumbai Naka'){
    $('#datepicker_today').val('');
    return false;
  }
}
</script>
