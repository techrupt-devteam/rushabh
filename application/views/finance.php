<style>
    .parsley-maxlength {
        color: red;
    }
    .parsley-minlength {
        color: red;
    }
    .parsley-required {
        color: red;
    }
</style>
<main>
    <div class="bg-fixed breadcrumb-area dark padding-xl shadow text-center text-light" style="background-image: url(assets/images/Finance.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-md-left"><h1>Finance</h1></div>
                <div class="col-md-6 col-sm-6 text-md-right">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Finance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 container-fluid innerpage">
        <div class="container">
            <form action="" data-parsley-validate="parsley" method="post" onsubmit="return submitUserForm();">
                <fieldset class="form-book">
                    <legend>Contact Information</legend>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-2">
                            <label for="inputAddress">Full Name</label><span class="text-danger parsley-required">*</span>
                            <input
                                class="form-control"
                                name="full_name"
                                required
                                id="Name"
                                data-parsley-pattern-message="Enter Valid Name (text only)"
                                data-parsley-required-message="Please Enter Full Name"
                                pattern="^[a-zA-Z.,/ $()]+$"
                                placeholder="Name"
                                value=""
                            />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-2">
                            <label for="inputAddress2">Phone No.</label><span class="text-danger parsley-required">*</span>
                            <input
                                class="form-control single-line text-box valid"
                                name="phone_no"
                                required
                                required
                                id="phone_no"
                                data-parsley-pattern-message="Mobile Number Should Starts with 7/8/9 AND 10 Digit"
                                data-parsley-required-message="Please Enter Mobile Number"
                                pattern="^[7-9]\d{9}$"
                                placeholder="Phone No"
                                value=""
                                style="max-width: 100%;"
                                data-parsley-length="[10,10]"
                                data-parsley-length-message="Enter Valid 10 Digit  Mobile Number."
                                data-parsley-type="digits"
                                maxlength="10"
                            />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-2">
                            <label for="inputAddress2">Email</label><span class="text-danger parsley-required">*</span>
                            <input
                                class="form-control single-line text-box input-validation-error"
                                name="email"
                                required
                                id="Email"
                                data-parsley-pattern-message="Enter Valid Email Id (abc@gmail.com)"
                                data-parsley-required-message="Please Enter Email."
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                placeholder="Email"
                                value=""
                                style="max-width: 100%;"
                                data-val="true"
                                data-val-regex="Please enter a valid E-mail"
                            />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-2">
                            <label for="inputAddress2">Select City</label><span class="text-danger parsley-required">*</span>
                            <select class="form-control" name="city" required aria-invalid="false" aria-required="true">
                                <option value="Nashik">Nashik</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-2">
                            <label for="inputEmail4">Annual Income (Rs.)</label><span class="text-danger parsley-required">*</span>
                            <select class="form-control" name="annual_income" required>
                                <option value="1-2 lakhs">1-2 lakhs</option>
                                <option value="2-3 lakhs">2-3 lakhs</option>
                                <option value="3-4 lakhs">3-4 lakhs</option>
                                <option value="4-5 lakhs">4-5 lakhs</option>
                                <option value="5-6 lakhs">5-6 lakhs</option>
                                <option value="6-7 lakhs">6-7 lakhs</option>
                                <option value="7-8 lakhs">7-8 lakhs</option>
                                <option value="8-9 lakhs">8-9 lakhs</option>
                                <option value="9-10 lakhs">9-10 lakhs</option>
                                <option value="10-11 lakhs">10-11 lakhs</option>
                                <option value="11-12 lakhs">11-12 lakhs</option>
                                <option value="12+ lakhs">12+ lakhs</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-2">
                            <label for="inputEmail4">Purchase Time Frame</label><span class="text-danger parsley-required">*</span>
                            <select class="form-control" name="purchase_time" required>
                                <option value="Immidiate">Immidiate</option>
                                <option value="2 weeks">2 weeks</option>
                                <option value="3 weeks">3 weeks</option>
                                <option value="4 weeks">4 weeks</option>
                                <option value="4-6 weeks">4-6 weeks</option>
                                <option value="6+ weeks">6+ weeks</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-2">
                            <label for="inputAddress2">Select Location</label><span class="text-danger parsley-required">*</span>
                            <select class="form-control" name="location" required aria-invalid="false" aria-required="true" data-parsley-required-message="Please Select Location.">
                                <option value=" ">Select</option>
                                <option value="Mumbai Naka">Mumbai Naka</option>
                                <option value="Uttam Nagar">Uttam Nagar</option>
                                <!--<option value="Indira Nagar">Indira Nagar</option>-->
                                <!--<option value="Mhasrul">Mhasrul</option>
                                <option value="Ambad"> Ambad </option>-->
                            </select>
                        </div>
                        <div class="mb-2 col-lg-8 col-md-12"><label for="inputEmail4">Your Message</label><textarea aria-label="With textarea" class="form-control" name="s_message" placeholder="Your Message"></textarea></div>
                    </div>
                    <div class="row">
                        <div class="mb-2 col-12">
                            <div class="custom-checkbox custom-control">
                                <input class="custom-control-input" name="conditions" required id="exampleCheck1" data-parsley-errors-container="#error_terms" type="checkbox" />
                                <label for="exampleCheck1" class="custom-control-label">I Agree With Terms and Conditions.<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-4">
                            
                          <div class="g-recaptcha" data-sitekey="6LcBH9kUAAAAAIntEDp0A3pBwPjc5FpdubYliEAl" data-callback="verifyCaptcha"></div>
                          <div id="g-recaptcha-error"></div>
                        </div>
    
    
                    </div>
                    <input class="redbutton1" name="submit" type="submit" value="Submit" />
                </fieldset>
            </form>
        </div>
        <div class="container mt-5">
            <div class="formsection mb-5">
                <div id="mixedSlider">
                    <div class="MS-content">
                        <div class="item">
                            <div class="imgTitle"><img alt="" src="assets/images/financier-HDFC1.jpg" /></div>
                        </div>
                        <div class="item">
                            <div class="imgTitle"><img alt="" src="assets/images/financier-IDFC2.jpg" /></div>
                        </div>
                        <div class="item">
                            <div class="imgTitle"><img alt="" src="assets/images/financier-indusind.jpg" /></div>
                        </div>
                        <div class="item">
                            <div class="imgTitle"><img alt="" src="assets/images/financier-shriram.jpg" /></div>
                        </div>
                        <div class="item">
                            <div class="imgTitle"><img alt="" src="assets/images/financier-manba.jpg" /></div>
                        </div>
                        <div class="item">
                            <div class="imgTitle"><img alt="" src="assets/images/financier-tata-capital.jpg" /></div>
                        </div>
                        <div class="item">
                            <div class="imgTitle"><img alt="" src="assets/images/financier-LT.jpg" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/multislider.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script>
    $("#basicSlider").multislider({ continuous: !0, duration: 2e3 }), $("#mixedSlider").multislider({ duration: 750, interval: 3e3 });
</script>
<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
<script>
    function submitUserForm() {
        return 0 != grecaptcha.getResponse().length || ((document.getElementById("g-recaptcha-error").innerHTML = '<span style="color:red;">This field is required.</span>'), !1);
    }
    function verifyCaptcha() {
        document.getElementById("g-recaptcha-error").innerHTML = "";
    }
</script>
