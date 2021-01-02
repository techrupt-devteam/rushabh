<style>
    .parsley-min {
        color: red;
    }
</style>
<main>
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/images/book--service.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-md-left"><h1>Book Your Service</h1></div>
                <div class="col-md-6 col-sm-6 text-md-right">
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
                <form action="" class="registration-form" method="post" data-parsley-validate="parsley">
                    <fieldset class="form-book">
                        <legend>Personal & Vehicle Detail</legend>
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-2">
                                <label>Your Name <span class="parsley-required text-danger">*</span></label>
                                <input
                                    class="form-control"
                                    id="Name"
                                    name="Name"
                                    value=""
                                    pattern="^[a-zA-Z.,/ $()]+$"
                                    required
                                    data-parsley-required-message="Please Enter Full Name"
                                    placeholder="Name"
                                    data-parsley-pattern-message="Enter Valid Name (text only)"
                                />
                            </div>
                            <div class="col-md-6 col-lg-4 mb-2">
                                <label>Mobile No. <span class="parsley-required text-danger">*</span></label>
                                <input
                                    id="mobile"
                                    name="mobile"
                                    class="form-control"
                                    pattern="^[7-9]\d{9}$"
                                    data-parsley-pattern-message="Mobile Number should starts with 7/8/9 And 10 Digit"
                                    data-parsley-maxlength="10"
                                    required
                                    data-parsley-required-message="Please Enter Mobile Number"
                                    placeholder="Mobile"
                                    data-parsley-type="digits"
                                    maxlength="10"
                                />
                            </div>
                            <div class="col-md-6 col-lg-4 mb-2">
                                <label>Your Email ID <span class="parsley-required text-danger">*</span></label>
                                <input
                                    style="max-width: 100%;"
                                    class="form-control"
                                    name="Email"
                                    id="Email"
                                    value=""
                                    placeholder="Email"
                                    pattern="^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$"
                                    data-parsley-pattern-message="Enter Valid Email Id (abc@gmail.com)"
                                    required
                                />
                            </div>
                            <div class="col-md-12 col-lg-8 mb-3"><label>Your Address</label><textarea class="form-control" cols="20" id="Address" name="Address" rows="2" placeholder="Enter Your Address"></textarea></div>
                            <div class="col-md-6 col-lg-4 mb-2">
                                <label>Location <span class="parsley-required text-danger">*</span></label>
                                <select class="form-control" name="location" required data-parsley-required-message="Please Select Location">
                                    <option value=" ">Select Location</option>
                                    <option value="Mumbai Naka">Mumbai Naka</option>
                                    <option value="Indira Nagar">Indira Nagar</option>
                                    <option value="Ambad">Ambad</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-2">
                                <label>Select Service <span class="parsley-required text-danger">*</span></label>
                                <select class="form-control" data-val="true" id="service" name="service" required>
                                    <option value="">Select Services</option>
                                    <option value="Free Service">Free Service</option>
                                    <option value="Paid Service">Paid Service</option>
                                    <option value="Accidental Repair">Accidental Repair</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-2">
                                <label>Vehicle No. <span class="parsley-required text-danger">*</span></label>
                                <input id="vehical_no" name="vehical_no" class="form-control" required data-parsley-required-message="Please Enter Vehicle Number." placeholder="Vehicle No." />
                            </div>
                            <div class="col-md-6 col-lg-4 mb-2">
                                <label>
                                    Select Date<span class="parsley-required text-danger">*<small> (Sunday close)</small></span>
                                </label>
                                <input
                                    style="max-width: 100%;"
                                    class="form-control"
                                    name="Date"
                                    type="date"
                                    value=""
                                    data-parsley-type="Date"
                                    required
                                    data-parsley-required-message="Please Select Date"
                                    placeholder="DD/MM/Year"
                                    data-parsley-type-message="Enter Valid Date"
                                    id="datepicker_today"
                                    data-parsley-mindate="<?php echo date('d-m-Y'); ?>"
                                    onchange="handler(event)"
                                />
                                <div class="validation" id="validation" style="color: red;"></div>
                            </div>
                            <div class="col-md-12 col-lg-8 mb-2"><label>Remark</label><textarea style="max-width: 100%;" class="form-control" cols="20" id="Remarks" name="Remarks" rows="2" placeholder="Remark"></textarea></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="exampleCheck1" name="conditions" data-parsley-errors-container="#error_terms" required />
                                    <label class="custom-control-label" for="exampleCheck1">Terms & Conditions <span class="parsley-required text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <button id="submit" onclick="onSubmit()" class="btn mt-2" type="submit" value="submit" name="submit" data-loading-text="Submitting..." autocomplete="off" class="redbutton">Submit</button>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- <script src="assets/js/parsley.js"></script><script src="https://www.google.com/recaptcha/api.js"></script> -->
<script>
    function submitUserForm(){
    	return 0!=grecaptcha.getResponse().length||(document.getElementById("g-recaptcha-error").innerHTML='<span style="color:red;">This field is required.</span>',!1)
    }
    function verifyCaptcha(){
    	document.getElementById("g-recaptcha-error").innerHTML=""
    }
    function handler(e){
    	var a=e.target.value;
    	$.ajax({
    		url:"<?php echo base_url("book_your_service/demo_test"); ?>",
    		type:"POST",
    		data:{
    			data1:a
    		},
    		success:function(e){
    			JSON.parse(e);"true"==e?($("#datepicker_today").val(""),$(".validation").append("Please Select Next date as Today's Servicings are full.")):$("#validation").remove()}})
    }
    $(function(){
    	$("#datepicker_today").datepicker({
    		daysOfWeekDisabled:[0,6]
    	})
    })

   function onSubmit(){
   	//alert(1);
   	var vehical_no = $('#vehical_no').val();
   	var pattern = "^[a-zA-z]{2}\s[0-9]{2}\s[0-9]{4}$";
     iif (pattern.test(vehical_no)==false) {
     	//if (pattern.eregi(vehical_no)==false) {
        alert(1);
        return true;

     }
     else {
     	alert(2);
        return false;
    }
   }
</script>
