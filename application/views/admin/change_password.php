

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="index.php" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Change Password</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">


  <form class="form-horizontal" action="" method="post">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Change Password</div>
        <div class="panel-body">
          <div class="row">
            <div class="col-xl-12">
              <div class="row">
               

               <div class="col-sm-offset-4 col-sm-6 col-xl-4 col-md-4">
                    <div class="mb-12">
                      <?php if(isset($message)){?>
                  <div class="text-warning">
                    <?=$message?>
                  </div>
                  <?php } ?>
                  
                    </div>
                </div>
              <div class="col-sm-offset-4 col-sm-6 col-xl-4 col-md-4">
                <div class="mb-12">
                  <label class="control-label">Old Password</label>
                  <div class="">
                    <input type="text" name="old_pwd" class="form-control" maxlength="20" autocomplete="off" placeholder="Old Password">
                  </div>
                </div>
              </div>

               <div class="col-sm-offset-4 col-sm-6 col-xl-4 col-md-4">
                <div class="mb-12">
                  <label class="control-label">New Password</label>
                  <div class="">
                    <input type="text" name="new_pwd" class="form-control" maxlength="20" autocomplete="off" placeholder="New Password">
                  </div>
                </div>
              </div>

              <div class="col-sm-offset-4 col-sm-6 col-xl-4 col-md-4">
                <div class="mb-12">
                  <label class="control-label">Confirm Password</label>
                  <div class="">
                    <input type="text" name="confirm_pwd" class="form-control" maxlength="20" autocomplete="off" placeholder="Confirm Password">
                  </div>
                </div>
              </div>
            

              <div class="col-sm-offset-4 col-sm-6 col-xl-4 col-md-4">
                <div class="" style="text-align: center;">
                  <br>
                  <input name="user_id" type="hidden" value="1" autocomplete="off">
                  <button name="submit" value="submit" type="submit" class="btn btn-primary"> Submit </button>
                  <input class="btn lg btn-danger btn_cancel" type="button" name="purchase_submit" value="Cancel" autocomplete="off">
                </div>
              </div>



             
            </div>
          </div>
         
        </div>
      </div>
    </div>

      
     
    </div>
    </div>
    </div>
    </div>
    </div>
  </form>
</section>
</div>






