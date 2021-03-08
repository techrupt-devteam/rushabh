<style type="text/css">
    .parsley-required {
        color: red
    }
</style>

<main>
    <div class="bg-fixed breadcrumb-area dark padding-xl shadow text-center text-light" style="background-image:url(assets/images/Finance.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-md-left">
                    <h1>Online Booking</h1>
                </div>
                <div class="col-md-6 col-sm-6 text-md-right">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Booking</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container innerpage">
        <div class="contact-form my-5">
            <div class="formsection">
                <form action="" data-parsley-validate="parsley" enctype="multipart/form-data" method="post" role="form" onsubmit="return submitUserForm();">
                    <fieldset class="form-book">
                        <legend>Contact Information</legend>
                        <div class="row">
                            <div class="col-md-6 mb-2 col-lg-4"><label for="inputAddress">Full Name</label><span class="text-danger parsley-required">*</span> <input class="form-control" id="inputAddress" name="name" required required placeholder="Enter your Full Name" data-parsley-required-message="Please Enter Full Name"
                                    pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Enter Valid Name (text only)"></div>
                            <div class="col-md-6 mb-2 col-lg-4"><label for="inputAddress2">Mobile No.</label><span class="text-danger parsley-required">*</span> <input class="form-control" id="inputAddress2" name="mobile" required required placeholder="Enter your Mobile No." data-parsley-required-message="Please Enter Mobile Number"
                                    pattern="^[7-9]\d{9}$" data-parsley-pattern-message="Mobile Number Should Starts with 7/8/9 AND 10 Digit" data-parsley-length="[10,10]" data-parsley-length-message="Enter Valid 10 Digit  Mobile Number." data-parsley-type="digits"
                                    maxlength="10"></div>
                            <div class="col-md-6 mb-2 col-lg-4"><label for="inputAddress2">Email</label><span class="text-danger parsley-required">*</span> <input class="form-control" id="inputAddress2" name="email" required placeholder="Enter your Email" data-parsley-required-message="Please Enter Email ID"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" data-parsley-type="email" data-parsley-type-message="Enter Valid Email id(abc@gmail.com)" type="email"></div>
                            <div class="col-md-6 mb-2 col-lg-4"><label for="inputAddress2">Select City</label><span class="text-danger parsley-required">*</span><select class="form-control" name="city" required aria-invalid="false" aria-required="true"><option value="Nashik">Nashik</option></select></div>
                            <div
                                class="mb-2 col-lg-8 col-md-12"><label for="inputAddress2">Address</label><span class="text-danger parsley-required">*</span><textarea aria-label="With textarea" class="form-control" name="address" rows="1" data-parsley-errors-container="#error_address" placeholder="Enter Your Address"
                                    required></textarea><span class="text-danger parsley-required" id="error_address"></span></div>
            </div>
            </fieldset>
            <fieldset class="form-book mt-4">
                <legend>Bike & Scooter Details</legend>
                <div class="row">

                    <div class="col-md-6 mb-2 col-lg-4">
                        <label for="inputAddress2">Bike & Scooter Brand</label><span class="text-danger parsley-required">*</span>
                        <select class="form-control" name="car" required aria-invalid="false" aria-required="true" id="car" onchange="function_car()">
            <option value="">Select Vehicle</option>
            <?php foreach($product as $row){ ?>
            <option value="<?php echo $row->car; ?>"><?php echo $row->car; ?></option>
            <?php } ?>
        </select>
                    </div>

                    <div class="col-md-6 mb-2 col-lg-4">
                        <label for="inputAddress2">Bike & Scooter Variant</label><span class="text-danger parsley-required">*</span><select class="form-control" name="varient" required aria-invalid="false" aria-required="true" id="varient" onchange="function_varient()"><option value="">Select Variant</option></select></div>
                    <div
                        class="col-md-6 mb-2 col-lg-4"><label for="inputAddress2">Color</label><span class="text-danger parsley-required">*</span><select class="form-control" name="color" required aria-invalid="false" aria-required="true" id="__color" onchange="function_color()"><option value="">Select Color</option></select></div>
                <div
                    class="col-md-6 mb-2 col-lg-4"><label for="inputAddress2">Our Showroom<span class="text-danger parsley-required">*</span></label><select class="form-control" name="location" required data-parsley-required-message="Please Select Location"><option value=" ">Select</option><option value="Mumbai Naka">Mumbai Naka</option><option value="Uttam Nagar">Uttam Nagar</option>
                    <!--<option value="Indira Nagar">Indira Nagar</option>-->
                    <option value="Mhasrul">Mhasrul</option></select></div>
        <div
            class="col-md-6 mb-2 col-lg-4"><label for="inputAddress2">Any Special Request</label><textarea aria-label="With textarea" class="form-control" name="special_request" rows="1"></textarea></div>
    <div class="col-md-6 mb-2 col-lg-4"><label for="inputAddress2">On Road Cost</label><br><i class="fa-rupee-sign fas"></i> <span id="roadprice_span">0.00 </span><input class="form-control" id="roadprice" name="roadprice" required placeholder="On Road Cost" type="hidden"></div>
    <div class="col-md-6 mb-2 col-lg-4"><label for="inputAddress2">Do you Require Finance</label><span class="text-danger parsley-required">*</span>
        <div>
            <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" id="customRadioInline1" name="finance" required type="radio" data-parsley-errors-container="#error_finance" value="Yes"><label for="customRadioInline1" class="custom-control-label">Yes</label></div>
            <div
                class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" id="customRadioInline2" name="finance" required type="radio" value="No"><label for="customRadioInline2" class="custom-control-label">No</label></div><span class="text-danger parsley-required" id="error_finance"></span></div>
    </div>
    </div>
    </fieldset>
    <fieldset class="form-book mt-4">
        <legend>Documents Required</legend>
        <div class="row">
            <div class="col-md-6 mb-2 col-lg-4"><label for="inputAddress2">Adhar Card</label>
                <div class="input-group mb-3">
                    <div class="custom-file"><input class="custom-file-input" id="adhar_cart" name="adhar_cart" type="file" data-parsley-errors-container="#error_adhar" onchange="function_adhar_cart()"><label for="adhar_cart" class="custom-file-label">Choose file</label></div>
                </div><span class="text-danger parsley-required" id="error_adhar"></span></div>
            <div class="col-md-6 mb-2 col-lg-4"><label for="inputAddress2">Pan Card</label>
                <div class="input-group mb-3">
                    <div class="custom-file"><input class="custom-file-input" id="pan_card" name="pan_card" type="file" data-parsley-errors-container="#error_pancard" onchange="function_pan_card()"><label for="pan_card" class="custom-file-label">Choose file</label></div>
                </div><span class="text-danger parsley-required" id="error_pancard"></span></div>
            <div class="col-md-6 mb-2 col-lg-4"><label for="inputAddress2">Date Of Birth</label><input class="form-control" id="datetoday" name="dob" type="date" placeholder="Enter your Date Of Birth"></div>
            <div class="col-md-6 mb-2">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="exampleCheck1" name="conditions" required type="checkbox" data-parsley-errors-container="#error_terms">
                    <label for="exampleCheck1" class="custom-control-label">I Agree With "RUSHABH HONDA.<span class="text-danger">*</span></label>
                    <a href="<?php echo base_url(); ?>terms-conditions" style="color:#fff">Terms and Conditions.</a>
                </div>
    
                <span class="text-danger parsley-required" id="error_terms"></span>
                
            </div>
            
             <!-- <div class="form-group col-md-">
                          <div class="g-recaptcha" data-sitekey="6LcBH9kUAAAAAIntEDp0A3pBwPjc5FpdubYliEAl" data-callback="verifyCaptcha"></div>
                          <div id="g-recaptcha-error"></div>
                        </div> -->
        </div>
    </fieldset><button class="btn mt-3 redbutton" name="submit" type="submit" value="submit">Submit</button></form>
    </div>
    </div>
    </div>
</main>
<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"crossorigin="anonymous"integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="></script>
<script src="assets/js/parsley.js"></script>
 -->
 
<script src="https://www.google.com/recaptcha/api.js"></script>


<script type="text/javascript">
    function function_adhar_cart() {
        $("#adhar_cart").val() ? (document.getElementById("pan_card").required = !1, $("#error_pancard").text("")) : document.getElementById("pan_card").required = !0
    }

    function function_pan_card() {
        $("#pan_card").val() ? (document.getElementById("adhar_cart").required = !1, $("#error_adhar").text("")) : document.getElementById("adhar_cart").required = !0
    }

    function function_car() {
        var e = $("#car").val();
        console.log(e), $.ajax({
            url: "<?php echo base_url(); ?>online_booking/getvarient",
            type: "post",
            data: {
                id: e
            },
            success: function(e) {
                console.log(e), $("#varient").html(e)
            }
        })
    }

    function function_varient() {
        var e = $("#varient").val(),
            t = $("#car").val();
        $.ajax({
            url: "<?php echo base_url(); ?>online_booking/getcolor",
            type: "post",
            data: {
                id: e,
                car: t
            },
            success: function(e) {
                $("#__color").html(e)
            }
        })
    }

    function function_color() {
        var e = $("#__color").val(),
            t = $("#varient").val(),
            a = $("#car").val();
        $.ajax({
            url: "<?php echo base_url(); ?>online_booking/getprice",
            type: "post",
            data: {
                id: e,
                varient: t,
                car: a
            },
            success: function(e) {
                $("#roadprice_span").html(e), $("#roadprice").val(e)
            }
        })
    }

    function submitUserForm() {
        return 0 != grecaptcha.getResponse().length || (document.getElementById("g-recaptcha-error").innerHTML = '<span style="color:red;">This field is required.</span>', !1)
    }

    function verifyCaptcha() {
        document.getElementById("g-recaptcha-error").innerHTML = ""
    }
    $(document).ready(function() {
        $(function() {
            var e = new Date,
                t = e.getMonth() + 1,
                a = e.getDate(),
                n = e.getFullYear();
            t < 10 && (t = "0" + t.toString()), a < 10 && (a = "0" + a.toString());
            var r = n + "-" + t + "-" + a;
            $("#datetoday").attr("max", r)
        })
    })
</script>