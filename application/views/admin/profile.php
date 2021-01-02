

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="index.php" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">User Profile</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">


  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> User Profile</div>
        <div class="panel-body">
            <div class="row">


            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> First Name<span>*</span></label>
                <div class="">
                  <input type="text" name="first_name" value="<?php echo $users_data['first_name']; ?>" class="form-control" autocomplete="off" placeholder="Please enter name" required>
                </div>
            </div>
            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Last Name</label>
                <div class="">
                  <input type="text" name="last_name" value="<?php echo $users_data['last_name']; ?>" class="form-control" maxlength="10" autocomplete="off" placeholder="Please enter mobile no">
                </div>
            </div>
            
            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Mobile No</label>
                <div class="">
                  <input type="number" name="mobile_no" value="<?php echo $users_data['mobile_no']; ?>" class="form-control" maxlength="10" autocomplete="off" placeholder="Please enter mobile no">
                </div>
            </div> 

            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Email</label>
                <div class="">
                  <input type="email" name="email" value="<?php echo $users_data['email']; ?>" class="form-control" autocomplete="off" placeholder="Please enter email" >
                </div>
            </div>

            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Image</label>
                <div class="">
                  <input type="file" name="image" class="form-control" autocomplete="off" placeholder="Please enter email" >
                  <?php if($users_data['image']){ ?>
                  <a href="<?php echo base_url(); ?>assets/admin/post_image/<?php echo $users_data['image']; ?>" target="_tab">View Image</a>
                <?php } ?>
                </div>
            </div>
            
          </div>
          <br><br>
          <div class="row">
          <div class="col-md-12" style="text-align: center;">
            <button name="submit" value="submit" type="submit" class="btn btn-primary"> Submit </button>
            <a href="<?php echo base_url(); ?>admin/secure/home" type="button" class="btn lg btn-danger btn_cancel">Cancel</a>
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


