<main>
    <div class="bg-fixed breadcrumb-area dark padding-xl shadow text-center text-light" style="background-image: url(assets/images/location.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-md-left"><h1>Insurance</h1></div>
                <div class="col-md-6 col-sm-6 text-md-right">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Insurance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid innerpage">
        <div class="container">
            <div class="contact-form mb-5 mt-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="formsection">
                            <form action="" data-parsley-validate="parsley" method="post" onsubmit="return submitUserForm();">
                                <fieldset class="form-book">
                                    <legend>Contact Information</legend>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress">Full Name<span class="parsley-required text-danger">*</span></label>
                                            <input
                                                class="form-control"
                                                name="full_name"
                                                id="inputAddress"
                                                required
                                                data-parsley-required-message="Please Enter Full Name"
                                                placeholder="Full Name"
                                                data-parsley-pattern-message="Enter Valid Name (text only)"
                                                pattern="^[a-zA-Z.,/ $()]+$"
                                            />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress2">Email <span class="parsley-required text-danger">*</span></label>
                                            <input
                                                class="form-control"
                                                name="email"
                                                id="inputAddress2"
                                                required
                                                data-parsley-required-message="Please Enter Email ID"
                                                placeholder="Email"
                                                data-parsley-type="email"
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                                style="max-width: 100%;"
                                                data-parsley-type-message="Enter Valid Email id(abc@gmail.com)"
                                                value=""
                                            />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress2">Phone No. <span class="parsley-required text-danger">*</span></label>
                                            <input
                                                class="form-control"
                                                name="phone_no"
                                                id="inputAddress2"
                                                required
                                                data-parsley-required-message="Please Enter Mobile Number"
                                                placeholder="Phone No"
                                                data-parsley-pattern-message="Mobile Number Should Starts with 7/8/9 AND 10 Digit"
                                                pattern="^[7-9]\d{9}$"
                                                data-parsley-length="[10,10]"
                                                data-parsley-length-message="Enter Valid 10 Digit  Mobile Number."
                                                data-parsley-type="digits"
                                                style="max-width: 100%;"
                                            />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress2">Select City<span class="parsley-required text-danger">*</span></label>
                                            <select class="form-control" data-parsley-required-message="Please Select One" name="city" required data-val="true" id="city">
                                                <option value="Nashik">Nashik</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress2">For Insurance<span class="parsley-required text-danger">*</span></label>
                                            <select class="form-control" data-parsley-required-message="Please Select One" name="for_insurance" required data-val="true" id="for_insurance">
                                                <option value="New">New</option>
                                                <option value="Renew">Renew</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress2">Vehicle Registration <span class="parsley-required text-danger">*</span></label>
                                            <input class="form-control" name="reg_no" id="" required data-parsley-required-message="Please Enter Vehicle Number" placeholder="Vehicle Registration" />
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress2">Location <span class="parsley-required text-danger">*</span></label>
                                            <select class="form-control" data-parsley-required-message="Please Select Location" name="location" required>
                                                <option value=" ">Select</option>
                                                <option value="Mumbai Naka">Mumbai Naka</option>
                                                <option value="Uttam Nagar">Uttam Nagar</option>
                                                <!--<option value="Indira Nagar">Indira Nagar</option>-->
                                                <!--<option value="Mhasrul">Mhasrul</option>-->
                                                <!--<option value="Ambad"> Ambad </option>-->
                                            </select>
                                        </div>
                                        <div class="form-group col-md-8"><label for="inputAddress2">Your Message</label><textarea aria-label="With textarea" class="form-control" name="s_message" placeholder="Your Message"></textarea></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="mt-3 form-check">
                                                <input class="form-check-input" name="conditions" id="exampleCheck1" required type="checkbox" />
                                                <label for="exampleCheck1" class="form-check-label">I Agree With Terms and Conditions.<span class="parsley-required text-danger">*</span></label>
                                            </div>
                                        </div>
                                        
                                         <div class="form-group col-md-4">
                                          <div class="g-recaptcha" data-sitekey="6LcBH9kUAAAAAIntEDp0A3pBwPjc5FpdubYliEAl" data-callback="verifyCaptcha"></div>
                                          <div id="g-recaptcha-error"></div>
                                        </div>
                                    </div>
                                </fieldset>
                                <input class="mt-3 redbutton1" name="submit" type="submit" value="Submit" />
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <h5 class="insurance-title">Benefits of 5years insurance</h5>
                                <ul class="insurance">
                                    <li>One time payment for 5 year protection & No hassle of renewal</li>
                                    <li>No third party premium hike burden every year</li>
                                    <li>Worry free riding</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-12 mt-2">
                                <h5 class="insurance-title">Merits of insurance</h5>
                                <ul class="insurance">
                                    <li>Lower cost of insurance in the long run</li>
                                    <li>No TP hike burden every year</li>
                                    <li>No risk of premium loading on Claims upto 3/5 yr</li>
                                    <li>No need to remember renewal dates</li>
                                    <li>Ride worry free</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script>
    function submitUserForm() {
        return 0 != grecaptcha.getResponse().length || ((document.getElementById("g-recaptcha-error").innerHTML = '<span style="color:red;">This field is required.</span>'), !1);
    }
    function verifyCaptcha() {
        document.getElementById("g-recaptcha-error").innerHTML = "";
    }
</script>
