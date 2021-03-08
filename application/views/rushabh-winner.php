<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<?php if(!empty($canonical)) echo '<link rel="canonical" href="'.base_url($canonical).'">'; ?>
<meta content="width=device-width,initial-scale=1,user-scalable=no" name="viewport" />
<meta content="<?php echo $pgKeywords  ?>" name="keywords" />
<meta content="<?php echo $pgDesc  ?>" name="description" />
<meta content="no-cache, no-store, must-revalidate" http-equiv="Cache-Control" />
<meta content="no-cache" http-equiv="Pragma" />
<meta content="0" http-equiv="Expires" />
<title><?php echo $title; ?></title>
<base href="<?php echo base_url(); ?>" />
<link href="assets/images/favicon.ico" rel="icon" type="image/x-icon" />
<link href="assets/lib/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/custom.css" rel="stylesheet" />
<link href="assets/css/responsive.css" rel="stylesheet" />
<!--<link href="assets/css/font-awesome.min.css" rel="stylesheet" />-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">
<!-- Sweetalert message link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<!-- Sweetalert message link -->

</head>
<body>
<div class="top-section-menu">
 <div class="container">
   <ul class="float-left">
     <li> 
      <a href="mailto:enquiry@rushabh2w.com"><i class="fa fa-envelope-o" style="font-size: 16px;"></i> enquiry@rushabh2w.com </a> </li>
     <li> <a href="tel:8888877649"><i class="fa fa-phone" style="font-size: 16px;"></i> +91 88888 77649</a> </li>
     <li class="d-none d-md-inline-block"> <a href="https://www.google.com/maps/place/Rushabh+Honda/@19.988205,73.7832223,17z/data=!3m1!4b1!4m5!3m4!1s0x3bddeb5957398ce5:0x295ca6b42b0ab1e8!8m2!3d19.988205!4d73.785411"> 
      <i class="fa fa-map-marker" style="font-size: 16px;"></i> Plot No.14, Mumbai - Agra National Hwy, Mumbai Naka, </a> 
     </li>
   </ul>
    <ul class="d-none d-sm-block float-right social-header social-icons">
      <li style="padding: 1px 7px !important;"> <a href="https://www.facebook.com/Rushabh-Honda-Two-Wheeler-Authorized-Dealer-102346901489879/" target="_blank"><i class="fa fa-facebook"></i></a> 
      </li>
      <li style="padding: 1px 6px !important;"> 
        <a href="https://instagram.com/rushabh_bike_scooter?igshid=k3bb3qeb4u66" target="_blank"><i class="fa fa-instagram"></i></a> 
      </li>
    </ul>
  </div>
</div>
<main>
<section class="border-top" >
    <div class="row cs-gallery no-gutters" lg-uid="lg0">
        <div class="col-md-12 px-3 px-lg-5">
        <div class="col-md-4 col-md-4 offset-md-4"><h2>Rushabh Winner</h2></div>
        <form action="" method="post" id="offer">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 col-md-4 offset-md-4">
                        <label>Your Booking ID <span style="color:red">*</span></label>
                        <input class="form-control" id="booking_id" name="booking_id" placeholder="Your Booking ID" style="max-width:100%" data-parsley-pattern-message="Enter Valid Name (text only)"  value="" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group" >
                <div class="row">
                <div class="col-md-4 mt-3 offset-md-4">
                    <button autocomplete="off" class="btn btn-danger redbutton" data-loading-text="Submitting..." id="button" name="submit" type="button" onclick="confirmWinner();" value="submit">Submit</button>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</section>
</main>
<p style="padding-bottom: 200px;"></p>
<footer>
    <div class="copyright-section text-center">
        <div class="container">
            <p class="float-left">© Rushabh Honda. all rights reserved.</p>
            <p class="float-right">Design & Developed By <a href="http://techrupt.in/" target="_blank" style="color:#17a2b8">Techrupt</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
</footer>

<script type="text/javascript" src="assets/floatton/jquery.js"></script>
<script src="assets/lib/js/bootstrap.js"></script>
<script src="assets/lib/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/js/jquery.min.js"></script>
<script src="assets/js/megamenu.js" defer></script>
<script src="assets/js/bjqs-1.3.min.js" defer></script>
<script src="assets/js/news.js" defer></script>
<script src="assets/js/lazysizes.min.js" async></script>   

<!-- Sweetalert message script open-->
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<!-- Sweetalert message script close-->

<script type="text/javascript">    
function confirmWinner(){
    var $selector = $('#offer'),
    form = $selector.parsley();
    var booking_id = $('#booking_id').val();
    if(form.validate()) {
        $.ajax({
        type: "POST",
        url: "<?php echo base_url(''); ?>rushabh_winner/winner",
        data: {booking_id:booking_id},
        /*cache: false,*/
        success: function(result){
          var data = $.parseJSON(result);
          var item = data['msg'];
          console.log(data['msg']);
          if(data['msg']!="empty"){
            swal({
              title: "<span style='font-size: 20px;'><span style='color:red;'>Congrats!</span> Here's a gift for you.</span><br><span style='font-size:20px;'>"+item+"</span>",

              type: "success",
              timer: 5000,
              html: true,
              showConfirmButton: true
            }, function(){
              location.reload(true);
            });  
          }else if(data['msg']=="empty"){
            var error_msg = "Sorry !\n You does not won any gift.";
            swal({
              title: error_msg,
              type: "error",
              timer: 4000,
              showConfirmButton: true
            }, function(){
              location.reload(true);
            });
          }
        }
      });
    }
}
</script>
</body>
</html>




    