<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  .text-warning-col{
    color: #ed1c24;
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

  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
</head>

<body class="hold-transition login-page">
  <div class="signupform">
    <div class="container">
      <div class="agile_info">
        <div class="col-md-6">
          <div class="left_grid_info">
            <h1>Rushabh Admin</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
            <img src="dist/images/login_img.png">
          </div>
        </div>
        <div class="col-md-6">
          <div class="w3_info">
            <!-- <h2>Login to your Account</h2>
            <p>Enter your details to login.</p> -->
            <div class="login-box">
              <div class="login-logo">
                <!-- <a href="#"><b>Logistics</b> Admin </a> -->
                <img src="<?php echo base_url(); ?>assets/admin/img/logo.png">
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
                  
                  <div class="form-group has-feedback">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>

                  <div class="form-group has-feedback">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row mb-12">
                    <!-- <div class="col-xs-6 mb-12">
                      <div class="checkbox icheck">
                        <label style="padding-left: 2px;color: #000;">
                          <input type="checkbox"> &nbsp; Remember Me
                        </label>
                      </div>
                    </div> -->
                    <!-- /.col -->
                    <div class="col-xs-6 text-right mb-12">
                      <a href="#" data-toggle="modal" data-target="#forget-password" class="forget-password">I forgot my password</a>
                     </div>

                     <div class="col-xs-12 mb-12">
                        <!-- <a type="submit" href="index.php" class="btn btn-danger btn-block btn-flat" style="height: 40px;line-height: 25px"> Sign In </a>  -->
                        <button type="submit" value="submit" name="submit" class="btn btn-danger btn-block btn-flat" style="height: 40px;line-height: 25px; ">Sign In</button>
                     </div>
                      
                    <!-- /.col -->
                  </div>
                </form>
              <div class="clearfix"></div>
                
                <!-- /.social-auth-links -->

                
                

              </div>
              <!-- /.login-box-body -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer footer_login">
    <p>© 2020 Rushabh2w login . All Rights Reserved | Design by <a href="viryatech.in" target="blank"><strong>Virya Tech</strong> </a></p>
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

  
