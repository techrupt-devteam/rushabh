<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  .text-warning-col{
    color: #ed1c24;
  }
.login-5 {
    min-height: 100vh;
    position: relative;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: center;
    padding: 30px;
    align-items: center;
}
.login-5 .bg-img {
    bottom: 0;
    text-align: center;
    padding: 0px;
    z-index: 999;
    background-size: auto;
    background-size: cover;
    top: 0;
    opacity: 1;
}
.login-5 .bg-img::before {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    background-color: #eaeaea;
    left: 0px;
    top: 0px;
    z-index: -1;
}
.login-logo {
    width: 150px;
    margin: .5rem auto;
}
.login-5 .login-box {
    max-width: 800px;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
    background: #fff;
    margin: 0 auto;
    padding: 0px;
    border-bottom: 3px solid #ed1c24;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    width: 100% !important;
}
.hold-transition.login-page {
    background-color: #484848;
}

.footer_login p {
    color: #e1d9d9 !important;
  }
.hold-transition.login-page {
    background: #4d4b4b;
}
.login-5 .login-inner-form .details {
    padding: 40px 15px;
}
.login-5 .bg-img {
    padding: 100px 30px;
}
.login-5 .bg-img p {
    color: #333;
    margin-bottom: 37px;
}
@media only screen and (max-width: 600px) {
  .signupform {
    padding: 1em 0 0px !important;
  }
  .container {
    padding: 5px !important;
}
.col-xs-12{
  padding: 5px !important;
}
.login-5 .login-inner-form .details{
  padding: 6px 32px;
}
.login-box-body, .register-box-body{
  padding: 15px 0px 0px !important;
}
.footer.footer_login{
  bottom: 8px !important;
}
}
</style>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rushabh Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <base href="<?php echo base_url(); ?>assets/admin/">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/main.css">
  <link rel="stylesheet" href="dist/css/style.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
</head>

<body class="hold-transition login-page">
  <div class="signupform login-5">
    <div class="container">
      <div class="agile_info row login-box">
        <div class="col-md-5 col-pad-0 bg-img none-992 hidden-sm hidden-xs"> 

        <a href="javascript:void(0)"> 
          <img src="<?php echo base_url(); ?>assets/admin/img/logo.png" class="login-logo">
      </a>
        <h4>Welcome Back</h4>
        <p>To Keep connected with us please login with your personal info</p>
       
       
      </div>
        <div class="col-xs-12 col-md-7 col-pad-0 align-self-center">
          <div class="login-inner-form">
            <div class="details">
              <div class="text-center hidden-sm hidden-xs">
                <h2>Sign into your account</h2>
              </div>

               <div class="login-logo hidden-lg hidden-md" style="margin: 0 auto;"> 
                <a> 
                  <img src="<?php echo base_url(); ?>assets/admin/img/logo.png" class="login-logo" style="max-width: 80px;"> 
                </a> 
               </div>
              <!-- /.login-logo -->
              <div class="login-box-body">
                <form method="post" action="">

                  <?php if(isset($message)){?>
                  <div class="text-warning">
                    <?=$message?>
                  </div>
                  <?php } else{ ?>
                  <div class="text-warning"> </div>
                  <?php } ?>
                  
                  <div class="form-group has-feedback text-left">
                    <label class="control-label">Email Address</label>
                    <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback hidden-xs"></span>
                  </div>

                  <div class="form-group has-feedback text-left">
                    <label class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Password">
                    <span class="fa fa-unlock-alt form-control-feedback hidden-xs"></span>
                  </div>
                  <div class="row mb-12">
                    <div class="col-xs-12 text-left mb-12">
                      <a href="#" data-toggle="modal" data-target="#forget-password" class="forget-password">I forgot my password</a>
                     </div>

                     <div class="col-sm-6 col-xs-8 login-btn col-sm-offset-3 col-xs-offset-2 mb-12 mt-2">
                        <button type="submit" value="submit" name="submit" class="btn btn-danger btn-block btn-flat" style="height: 46px;line-height: 25px;min-width: 120px;border-radius: 4px">Sign In</button>
                     </div>
                      
                    <!-- /.col -->
                  </div>
                </form>
              <div class="clearfix"></div>
              </div>
              <!-- /.login-box-body -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer footer_login hidden-xs">
    <p>
      © 2020 Rushabh Honda . All Rights Reserved | Design by 
      <a href="viryatech.in" target="blank">
        <strong>Techrupt</strong> 
      </a>
      </p>
  </div>
  </div>



<div id="forget-password" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-middle">

    <!-- Modal content-->
    <div class="modal-content" style="border-radius:0;">
                    <div class="modal-header bg-black">
                      <button style="font-size: 20px;opacity: 0.8;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <img src="dist/img/close.svg" width="18px">
                      </button>        
                         <h4 class="modal-title"> Forgot Password </h4>       
                    </div>                  
                <form action="http://192.168.0.33/BMB/adminchangepassword" method="POST" id="forget_form" novalidate="novalidate">
                      <div class="modal-body" style="overflow: hidden;">
                        <div class="col-sm-10 col-md-offset-1" style="margin-bottom:15px">
                          <input type="text" name="username_email" id="username_email" class="form-control" placeholder="e.g johngoldsmith@example.com" autocomplete="off" maxlength="40">
                            <div class="clearfix"></div>
                          <span style="color:red"></span>
                        </div>
                    </div>
                    <div class="modal-footer" style="text-align:center">
                        <input type="hidden" value="" class="form-control" name="user_id" id="user_id">
                          <button type="submit" name="submit" id="submit" class="btn btn-primary">Forgot Password</button> 
                    </div>
                  </form>
                </div>

  </div>
</div>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>

  
