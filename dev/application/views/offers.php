
<main>
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/images/online-booking.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left">
                    <h1>Online Booking Offer</h1>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active">Offer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  <div class="container-fluid innerpage">
    <div class="container">
      <div class="contact-form  mt-5 mb-5">
        <div class="row">
          <div class="col-md-4">
            <img src="assets/images/1.jpg">
          </div>
          
          <div class="col-md-4">
            <img src="assets/images/3.jpg">
          </div>

          <div class="col-md-4">
            <img src="assets/images/2.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>
<!--   <div class="online-booking">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="online-service">
            <h3>Online service booking</h3>
            <i><img src="assets/images/online-service1.png"></i> <a href="book-your-service.php" class="hvr-sweep-to-top">Book Now</a> </div>
        </div>
        <div class="col-md-6">
          <div class="online-service">
            <h3>Download E-brochure</h3>
            <i><img src="assets/images/online-service2.png"></i> <a href="download-e-brochure.php" class="hvr-sweep-to-top">Download</a> </div>
        </div>
      </div>
    </div>
  </div> -->
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
<script src="assets/lib/js/bootstrap.js"></script> 
<script src="assets/lib/js/bootstrap.min.js"></script> 
<script src="assets/lib/js/bootstrap.bundle.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
<script src="assets/js/parsley.js"></script> 
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

