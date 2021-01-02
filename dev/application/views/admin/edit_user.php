

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Edit User</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Edit User
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/manage_user');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                  </div>
            </div>
        </div>
        <div class="panel-body">
          <div class="row">
             <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> First Name<span style="color: red;">*</span></label>
                <div class="">
                  <input type="text" name="first_name" value="<?php echo $users_data['first_name']; ?>" class="form-control" autocomplete="off" placeholder="Please enter name" required="required">
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
                <label class="control-label"> Location<span style="color: red;">*</span></label>
                <div class="">
                  <select class="form-control select2" name="location" required="required">
                    <option value="">Select</option>
                    <option <?php if($users_data['location']=='Mumbai Naka') { ?> selected='selected' <?php } ?> value="Mumbai Naka">Mumbai Naka</option>
                    <option <?php if($users_data['location']=='Uttam Nagar') { ?> selected='selected' <?php } ?> value="Uttam Nagar">Uttam Nagar</option>
                    <option <?php if($users_data['location']=='Indira Nagar') { ?> selected='selected' <?php } ?> value="Indira Nagar">Indira Nagar </option>
                    <option <?php if($users_data['location']=='Mhasrul') { ?> selected='selected' <?php } ?> value="Mhasrul"> Mhasrul </option>
                    <option <?php if($users_data['location']=='Ambad') { ?> selected='selected' <?php } ?> value="Ambad"> Ambad </option>
                  </select>
                </div>
            </div>

            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Email<span style="color: red;">*</span></label>
                <div class="">
                  <input type="email" name="email" value="<?php echo $users_data['email']; ?>" class="form-control" autocomplete="off" placeholder="Please enter email" required="required">
                </div>
            </div>

            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Password<span style="color: red;">*</span></label>
                <div class="">
                  <input type="password" name="password" value="<?php echo $users_data['password']; ?>" class="form-control" autocomplete="off" placeholder="Please enter password" required="required">
                </div>
            </div>

            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Image</label>
                <div class="">
                  <input type="file" name="image" class="form-control" autocomplete="off" placeholder="Please enter email" >
                </div>
            </div>


            <!-- <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Roles</label>
                <div class="">
                  <select class="form-control select2" name="roles[]" multiple>
                    <option value="">Select</option>
                    <option <?php if($users_data['roles']=='Sales') { ?> selected='selected' <?php } ?> value="Sales">Sales</option>
                    <option <?php if($users_data['roles']=='Service') { ?> selected='selected' <?php } ?> value="Service">Service</option>
                    <option <?php if($users_data['roles']=='Finance') { ?> selected='selected' <?php } ?> value="Finance">Finance</option>
                    <option <?php if($users_data['roles']=='Insurance') { ?> selected='selected' <?php } ?> value="Insurance">Insurance</option>
                  </select>
                </div>
            </div> -->
            
          </div>
          <br><br>
          <div class="mb-12" style="text-align: center;">
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
  </form>
</section>
</div>


