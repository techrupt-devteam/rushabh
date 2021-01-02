<style>
    .parsley-maxlength {
        color: red;
    }
</style>
<main>
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/images/book-your-service.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-md-left"><h1>AMC</h1></div>
                <div class="col-md-6 col-sm-6 text-md-right">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">AMC</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid innerpage">
        <div class="container">
            <div class="contact-form mt-5 mb-5">
                <div class="formsection">
                    <form action="" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">
                        <fieldset class="form-book">
                            <legend>Contact Information</legend>
                            <div class="row">
                                <div class="col-md-6 col-lg-4 mb-2">
                                    <label for="inputAddress">Full Name<span class="text-danger">*</span></label>
                                    <input
                                        class="form-control"
                                        id="Name"
                                        name="full_name"
                                        value=""
                                        pattern="^[a-zA-Z.,/ $()]+$"
                                        required
                                        data-parsley-required-message="Please Enter Full Name"
                                        placeholder="Name"
                                        data-parsley-pattern-message="Enter Valid Name (text only)"
                                    />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-2">
                                    <label for="inputAddress2">Email<span class="text-danger">*</span></label>
                                    <input
                                        style="max-width: 100%;"
                                        class="form-control text-box single-line input-validation-error"
                                        data-val="true"
                                        data-val-regex="Please enter a valid E-mail"
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                        data-parsley-required-message="Please enter email."
                                        data-parsley-pattern-message="Enter Valid Email Id (abc@gmail.com)"
                                        id="Email"
                                        name="email"
                                        required
                                        value=""
                                        placeholder="Enter Email ID"
                                    />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-2">
                                    <label for="inputAddress2">Phone No.<span class="text-danger">*</span></label>
                                    <input
                                        style="max-width: 100%;"
                                        class="form-control text-box single-line valid"
                                        id="phone_no"
                                        name="phone_no"
                                        required
                                        value=""
                                        placeholder="Enter Phone No"
                                        pattern="^[7-9]\d{9}$"
                                        data-parsley-pattern-message="Mobile Number Should Starts with 7/8/9 AND 10 Digit"
                                        data-parsley-length="[10,10]"
                                        data-parsley-length-message="Enter Valid 10 Digit  Mobile Number."
                                        required
                                        data-parsley-required-message="Please Enter Mobile Number"
                                        data-parsley-type="digits"
                                    />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-2">
                                    <label for="inputAddress2">Vehicle No<span class="text-danger">*</span></label>
                                    <input class="form-control" id="inputAddress2" name="vehicle_no" placeholder="Enter Vehicle No" required data-parsley-required-message="Please enter a Vehicle No" />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-2">
                                    <label for="inputAddress2">Location<span class="text-danger">*</span></label>
                                    <select class="form-control" name="location" aria-required="true" data-parsley-required-message="Please select location" aria-invalid="false" required>
                                        <option value=" ">Select</option>
                                        <option value="Mumbai Naka">Mumbai Naka</option>
                                        <option value="Uttam Nagar">Uttam Nagar</option>
                                        <!--<option value="Indira Nagar">Indira Nagar</option>-->
                                        <!--<option value="Mhasrul">Mhasrul</option>-->
                                        <option value="Ambad">Ambad</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-2"><label for="inputAddress2">Message</label>
                                    <textarea class="form-control" name="s_message" aria-label="With textarea" placeholder="Message"></textarea>
                                </div>
                                
                                <div class="form-group col-md-4">
                                  <div class="g-recaptcha" data-sitekey="6LcBH9kUAAAAAIntEDp0A3pBwPjc5FpdubYliEAl" data-callback="verifyCaptcha"></div>
                                  <div id="g-recaptcha-error"></div>
                                </div>
                            </div>
                        </fieldset>
                        <input type="submit" name="submit" class="redbutton1 mt-3" value="submit" />
                    </form>
                </div>
            </div>
            <h3 class="block-3">Features:</h3>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="block1-box"><img alt="" src="assets/images/saving-icon-amc.svg" class="img-fluid" />Savings up to 30%</div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="block1-box"><img alt="" src="assets/images/genuine-parts.svg" class="img-fluid" />4 Maintenance services*</div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="block1-box"><img alt="" src="assets/images/two-freewashing-amc.svg" class="img-fluid" />3 Additional free washing*</div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="block1-box"><img alt="" src="assets/images/discount-icon-10per.svg" class="img-fluid" />10% discount on Labour charges (except accidental)</div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="block1-box"><img alt="" src="assets/images/discount-icon-05per.png" class="img-fluid" />5% discount on spare parts and accessories</div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="block1-box"><img alt="" src="assets/images/discount-icon-05per.png" class="img-fluid" />5% discount on Honda Genuine Engine oil</div>
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
