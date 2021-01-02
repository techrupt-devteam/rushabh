<style>.parsley-maxlength{color:red}</style>
<main>
<div class="bg-fixed breadcrumb-area dark padding-xl shadow text-center text-light"style="background-image:url(assets/images/bodyshop.jpg)">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6 text-left">
<h1>Bodyshop</h1>
</div>
<div class="col-md-6 col-sm-6 text-right">
<ul class="breadcrumb">
<li><a href="index.php">Home</a></li>
<li><a href="#">Pages</a></li>
<li class="active">Bodyshop</li>
</ul>
</div>
</div>
</div>
</div>
<div class="container-fluid innerpage">
<div class="container">
<div class="contact-form mt-5">
<div class="formsection">
<form action="" data-parsley-validate="parsley" method="post"><!-- send_mail_bodyshop.php onsubmit="return submitUserForm()"-->
<fieldset class="form-book">
<legend>Contact Information</legend>
<div class="row">
	<div class="col-md-6">
	<div class="form-row">
		<div class="form-group col-12">
			<label for="inputAddress">Full Name<span class="red">*</span></label>
			<input class="form-control"name="full_name"required data-parsley-required-message="Please Enter Full Name"id="Name"placeholder="Name"data-parsley-pattern-message="Enter Valid Name (text only)"pattern="^[a-zA-Z.,/ $()]+$"value=""></div>
		</div>
		<div class="form-row">
			<div class="form-group col-12">
				<label for="inputAddress2">Email <span class="red">*</span></label>
				<input class="form-control single-line text-box input-validation-error"name="email"required data-parsley-required-message="Please enter email."id="Email"placeholder="Enter Email ID"data-parsley-pattern-message="Enter Valid Email Id (abc@gmail.com)"pattern="^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$"value=""data-val="true"style="max-width:100%"data-val-regex="Please enter a valid E-mail">
			</div>
			</div>
			<div class="form-row">
				<div class="form-group col-12">
					<label for="inputAddress2">Phone No. <span class="red">*</span></label>
					<input class="form-control single-line text-box valid"name="phone_no"required required data-parsley-required-message="Please Enter Mobile Number"id="phone_no"placeholder="Enter Phone No"data-parsley-pattern-message="Mobile Number Should Starts with 7/8/9 AND 10 Digit"pattern="^[7-9]\d{9}$"value=""data-val="true"style="max-width:100%"data-parsley-length="[10,10]"data-parsley-length-message="Enter Valid 10 Digit  Mobile Number."data-parsley-type="digits"></div></div>
				</div>
				<div class="col-md-6">
					<div class="form-group"><label for="inputAddress2">Vehicle No<span class="red">*</span></label>
						<input class="form-control"name="vehicle_no"required data-parsley-required-message="Please enter a Vehicle No"id="inputAddress2"placeholder="Enter Vehicle No">
					</div>
					<div class="form-row">
						<label for="inputAddress2">Message</label>
						<div class="form-group col-12">
							<div class="input-group">
								<textarea aria-label="With textarea"class="form-control"name="s_message"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group col-md-6 mt-3">
						<div class="g-recaptcha"data-callback="verifyCaptcha"data-sitekey="6LcBH9kUAAAAAIntEDp0A3pBwPjc5FpdubYliEAl"></div><div id="g-recaptcha-error">
							
						</div>
					</div>
				</div>
			</div>
					</fieldset>
					<input class="redbutton1 mt-3" name="submit" type="submit" value="Submit">
				</form>
				</div>
			</div>
		</div>
	</div>
</main>

<script>
function submitUserForm(){
return 0!=grecaptcha.getResponse().length||(document.getElementById("g-recaptcha-error").innerHTML='<span style="color:red;">This field is required.</span>',!1)}function verifyCaptcha(){document.getElementById("g-recaptcha-error").innerHTML=""
}
</script>