<main><div class="text-center bg-fixed breadcrumb-area dark padding-xl shadow text-light"style="background-image:url(assets/images/contact-us.jpg)"><div class="container"><div class="row"><div class="col-md-6 col-sm-6 text-md-left"><h1>contact</h1></div><div class="col-md-6 col-sm-6 text-md-right"><ul class="breadcrumb"><li><a href="<?php echo base_url(); ?>">Home</a></li><li class="active">contact</li></ul></div></div></div></div><section class="container bg-overlay-content mb-5 mb-md-6"style="margin-top:-38px"><div class="row"><div class="col-lg-3 col-sm-6 mb-grid-gutter"><div class="border-0 box-shadow-lg card h-100"><div class="text-center card-body"><i class="mb-3 fas fa-map-marker-alt text-primary"style="font-size:2.25rem"></i><h3 class="mb-2 h6">Address,
Location</h3><p class="mb-2 font-size-sm">Plot No.14,
Mumbai - Agra National Hwy,
Mumbai Naka,
Nasik</p></div></div></div><div class="col-lg-3 col-sm-6 mb-grid-gutter"><div class="border-0 box-shadow-lg card h-100"><div class="text-center card-body"><i class="mb-3 fas fa-clock text-danger"style="font-size:2.25rem"></i><h3 class="mb-2 h6">Working hours</h3><ul class="font-size-sm list-unstyled mb-0"><li>Mon - Fri: 10AM - 5PM</li><li>Sat: 10AM - 5PM</li></ul></div></div></div><div class="col-lg-3 col-sm-6 mb-grid-gutter"><div class="border-0 box-shadow-lg card h-100"><div class="text-center card-body"><i class="mb-3 fas fa-phone-alt text-info"style="font-size:2.25rem"></i><h3 class="mb-2 h6">Phone numbers</h3><ul class="font-size-sm list-unstyled mb-0"><li><span class="mr-1">Enquiry :</span><a href="tel:+91 88888 77649"class="nav-link-style">+91 88888 77649</a></li></ul></div></div></div><div class="col-lg-3 col-sm-6 mb-grid-gutter"><div class="border-0 box-shadow-lg card h-100"><div class="text-center card-body"><h3 class="mb-2 h6">Email addresses</h3><ul class="font-size-sm list-unstyled mb-0"><li><span class="mr-1">Customer service:</span><a href="enquiry@rushabh2w.com"class="nav-link-style">enquiry@rushabh2w.com</a></li><li><span class="mr-1">Tech support:</span><a href="mailto:support@example.com"class="nav-link-style">it@sevagroup.co.in</a></li></ul></div></div></div></div></section><section class="border-top"id="map"><div class="row cs-gallery no-gutters"lg-uid="lg0"><div class="col-lg-6 px-3 px-lg-5"><div class="contact-form mb-1 mt-1"><h2>Contact Us</h2>

<form action="<?php echo base_url(); ?>contact/sendMail" method="post">
    
    <div class="form-group">
        <div class="row">
            <div class="col-md-12">
                <label>Your Name <span style="color:red">*</span></label>
                </div><div class="col-md-12 col-sm-12">
                    <input class="form-control" id="name_val" name="name" placeholder="Name"style="max-width:100%"data-parsley-pattern-message="Enter Valid Name (text only)"pattern="^[a-zA-Z.,/ $()]+$"value="">
                    </div>
                    </div>
                    <div id="err_name" style="color: red;"></div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12"><label>Mobile <span style="color:red">*</span></label></div>
                            <div class="col-md-12 col-sm-12">
                                <input class="form-control" id="mobile" name="mobile" placeholder="Mobile"style="max-width:100%"data-parsley-pattern-message="Mobile Number Should Starts with 7/8/9 AND 10 Digit"pattern="^[7-9]\d{9}$"data-parsley-length="[10,10]"data-parsley-length-message="Enter Valid 10 Digit  Mobile Number."data-parsley-type="digits">
                                </div>
                                </div>
                                <div id="err_mobile" style="color: red;"></div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12"><label>Your Email ID <span style="color:red">*</span></label>
                                        </div>
                                        <div class="col-md-12">
                                            <input class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="Email" name="email_id"placeholder="Email" style="max-width:100%"data-parsley-type="email" value=""></div></div>
                                        <div id="err_email" style="color: red;"></div>
                                    </div><div class="form-group"><div class="row"><div class="col-md-12"><label>Your Address <span style="color:red">*</span></label></div><div class="col-md-12"><textarea class="form-control"cols="20" id="Address" name="address" placeholder="Enter Your Address"rows="2"style="max-width:100%">
                                    
                                </textarea></div>
                                </div>
                                <div id="err_address" style="color: red;"></div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                <div class="col-md-12">
                                    <label>Your Message</label>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control"cols="20"id="Message"name="message"placeholder="Enter Your Message"rows="4"style="max-width:100%">
                                        </textarea>
                                        </div>
                                        <!-- <div class="form-group col-md-4">
                                            <br>
                                          <div class="g-recaptcha" data-sitekey="6LcBH9kUAAAAAIntEDp0A3pBwPjc5FpdubYliEAl" data-callback="verifyCaptcha"></div>
                                          <div id="g-recaptcha-error" style="color:red;"></div>
                                        </div> -->
                                        <div class="col-md-12 mt-3">
                                            <button autocomplete="off" class="btn btn-danger redbutton"data-loading-text="Submitting..." id="submit" name="submit" type="submit" value="submit">Submit</button>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="text-center align-items-center bg-position-center bg-size-cover col-lg-6 cs-gallery-item cs-map-popup d-flex flex-columnt justify-content-center py-7">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14997.934691251381!2d73.77665626977536!3d19.988205000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb5957398ce5%3A0x295ca6b42b0ab1e8!2sRushabh%20Honda!5e0!3m2!1sen!2sin!4v1589540371838!5m2!1sen!2sin"style="width:100%;height:100%;border:0"></iframe></div></div></section><section class="our-branch"><div class="container"><div class="row"><div class="col-md-12 mx-auto"><div class="row mu-title"><h2>Our Showroom</h2></div></div></div><div class="row"><div class="col-md-6 col-lg-4 mb-3"><div class="atbd_listing_card atbd_single_listing"><article><figure class="atbd_listing_thumbnail_area"><div><a href=""><div class="atbd-thumbnail-card card-cover"><div class="atbd-thumbnail-card-front-wrap"><img class="mb-3 img-fluid"src="assets/images/showroom-mumbai-naka.jpg"></div></div></a></div></figure><div class="atbd_listing_info"><div class="atbd_content_upper"><h4 class="atbd_listing_title"><a href="#">Mumbai Naka</a></h4><div class="atbd_listing_data_list"><ul><li><p><span class=""><i class="fa fa-map-marker"></i></span>Plot No.14,
Mumbai - Agra National Hwy,
Mumbai Naka,
Renuka Nagar,
Nashik,
Maharashtra 422001</p></li></ul></div></div><div class="atbd_listing_bottom_content"><div class="atbd_content_left"><div class="atbd_listting_category"><a href="https://www.google.com/maps/place/Rushabh+Honda/@19.988205,73.7832223,17z/data=!3m1!4b1!4m5!3m4!1s0x3bddeb5957398ce5:0x295ca6b42b0ab1e8!8m2!3d19.988205!4d73.785411"><span class=""><i class="fa fa-map-signs"></i></span>Place</a></div></div></div></div></article></div></div><div class="col-md-6 col-lg-4 mb-3"><div class="atbd_listing_card atbd_single_listing"><article><figure class="atbd_listing_thumbnail_area"><div><a href=""><div class="atbd-thumbnail-card card-cover"><div class="atbd-thumbnail-card-front-wrap"><img class="mb-3 img-fluid"src="assets/images/showroom-uttam-nagar.jpg"></div></div></a></div></figure><div class="atbd_listing_info"><div class="atbd_content_upper"><h4 class="atbd_listing_title"><a href="#">Uttam Nagar</a></h4><div class="atbd_listing_data_list"><ul><li><p><span class=""><i class="fa fa-map-marker"></i></span>3-4,
Roongta Mall,
Ambad Link Rd,
Incom Tax Colony,
Uttam Nagar,
Nashik,
Maharashtra 422009</p></li></ul></div></div><div class="atbd_listing_bottom_content"><div class="atbd_content_left"><div class="atbd_listting_category"><a href="https://www.google.co.in/maps/place/Rushabh+Honda,+Uttam+Nagar/@19.9683521,73.7531669,20z/data=!4m8!1m2!2m1!1s3-4,+Roongta+Mall,+Ambad+Link+Rd,+Incom+Tax+Colony,+Uttam+Nagar,+Nashik,+Maharashtra+422009!3m4!1s0x3bddeba34bcf4245:0xf47a8d80df69dc67!8m2!3d19.9683119!4d73.7532892?hl=en&authuser=0"target="_blank"><span class=""><i class="fa fa-map-signs"></i></span>Place</a></div></div></div></div></article></div></div><div class="mb-3 col-lg-4 col-md-6"><div class="atbd_listing_card atbd_single_listing"><article><figure class="atbd_listing_thumbnail_area"><div><a href=""><div class="atbd-thumbnail-card card-cover"><div class="atbd-thumbnail-card-front-wrap"><img class="mb-3 img-fluid"src="assets/images/showroom-indiranagar.jpg" title="Honda Two Wheeler Showroom | Mhasrul | Rushabh Honda" alt="Honda Two wheeler vehicles available at best prices exclusively at Rushabh Honda. Leading Honda two wheeler dealers with its workshop location in Mhasrul."></div></div></a></div></figure><div class="atbd_listing_info"><div class="atbd_content_upper"><h4 class="atbd_listing_title"><a href="#">Mhasrul</a></h4><div class="atbd_listing_data_list"><ul><li><p><span class=""><i class="fa fa-map-marker"></i></span>Shop No 1,
C Square Complex,
Ujjwala Lifespaces,
Opp Prakash Petrol Pump,
Dindori Road,
Mhasrul,
NASHIK-42200</p></li></ul></div></div><div class="atbd_listing_bottom_content"><div class="atbd_content_left"><div class="atbd_listting_category"><a href="https://maps.google.com/maps?q=20.0388092%2C73.8044071&z=17&hl=en"target="_blank"><i class="fa fa-map-signs"></i>Place</a></div></div></div></div></article></div></div><div class="col-md-6 col-lg-4 mb-3"><div class="atbd_listing_card atbd_single_listing"><article><figure class="atbd_listing_thumbnail_area"><div><a href=""><div class="atbd-thumbnail-card card-cover"><div class="atbd-thumbnail-card-front-wrap"><img class="mb-3 img-fluid"src="assets/images/showroom-mhasarul.jpg"></div></div></a></div></figure><div class="atbd_listing_info"><div class="atbd_content_upper"><h4 class="atbd_listing_title"><a href="#">Mhasrul</a></h4><div class="atbd_listing_data_list"><ul><li><p><span class=""><i class="fa fa-map-marker"></i></span>Shop No 2-3,
Pokar Arcade,
Opposite Synergy Hospital,
Dindori Road,
Mhasrul,
Nashik - 422004</p></li></ul></div></div><div class="atbd_listing_bottom_content"><div class="atbd_content_left"><div class="atbd_listting_category"><a href="https://www.google.com/maps/place/Rushabh+Honda/@20.044398,73.805833,18z/data=!4m5!3m4!1s0x0:0x8aa8a9e726e203a3!8m2!3d20.0444986!4d73.8054571?hl=en"target="_blank"><span class=""><i class="fa fa-map-signs"></i></span>Place</a></div></div></div></div></article></div></div><div class="col-md-6 col-lg-4 mb-3"><div class="atbd_listing_card atbd_single_listing"><article><figure class="atbd_listing_thumbnail_area"><div><a href=""><div class="atbd-thumbnail-card card-cover"><div class="atbd-thumbnail-card-front-wrap"><img class="mb-3 img-fluid"src="assets/images/ambad-workshop.jpg"></div></div></a></div></figure><div class="atbd_listing_info"><div class="atbd_content_upper"><h4 class="atbd_listing_title"><a href="#">Ambad</a></h4><div class="atbd_listing_data_list"><ul><li><p><span class=""><i class="fa fa-map-marker"></i></span>B-17,
Ambad MIDC,
Behind Gateway Hotel,
Ambad,
Nashik-422010</p></li></ul></div></div>
<div class="atbd_listing_bottom_content">
    <div class="atbd_content_left">
        <div class="atbd_listting_category">
            <a href="https://www.google.com/maps/place/Rushabh+Honda/@19.948986,73.731561,15z/data=!4m5!3m4!1s0x0:0xb20a76df6383ce4e!8m2!3d19.9489857!4d73.731561?hl=en"target="_blank">
                <span class=""><i class="fa fa-map-signs"></i></span>Place</a>
                </div>
                </div>
                </div>
                </div>
                </article>
                </div>
                </div>
                </div>
                </div>
                </section>
                </main>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    

function submitUserForm() {
    var name = $('#name_val').val();
    var mobile = $('#mobile').val();
    var email = $('#Email').val();
    var address = $('#Address').val();
 
    if(name==""){
        $("#err_name").html("Please Enter Full Name");
        return false;
    }else if(mobile==""){
        $('#err_mobile').html("Please Enter Mobile Number");
        return false;
    }else if(email==""){
        $('#err_email').html("Enter Valid Email id(abc@gmail.com)");
        return false;
    }else if(address==""){
        $('#err_address').html("Enter Your Full Address");
        return false;
    }else if(grecaptcha.getResponse().length == 0){
        $('#g-recaptcha-error').html("This field is required");
        return false;
    }else{
        return true;
    }
    //return 0 !=grecaptcha.getResponse().length||(document.getElementById("g-recaptcha-error").innerHTML='<span style="color:red;">This field is required.</span>',  !1)
}

function verifyCaptcha() {
    document.getElementById("g-recaptcha-error").innerHTML=""
}
function submitContactForm(){
    
}

</script>