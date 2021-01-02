

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Edit systme data</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Edit systme data
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/system_data');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                  </div>
            </div>
        </div>
        <div class="panel-body">
          <div class="row">
            
              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Customer Name <span style="color: red;">*</span></label>
                  <div class="">
                    <input type="text" tabindex="1" value="<?php echo $system_data['name'] ?>" name="name" class="form-control" required="required" autocomplete="off" placeholder="Customer Name">
                  </div>
                </div>
              </div>

               <!-- <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Enquiry no</label>
                  <div class="">
                    <input type="text" value="<?php echo $system_data['name'] ?>" tabindex="2" name="enquiry_no" class="form-control" autocomplete="off" placeholder="Enquiry no">
                  </div>
                </div>
              </div> -->

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Enquiry Date</label>
                  <div class="">
                    <input type="date" tabindex="3" value="<?php echo $system_data['enquiry_date'] ?>" name="enquiry_date" class="form-control" autocomplete="off" placeholder="Date">
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Mobile</label>
                  <div class="">
                    <input type="text" tabindex="4" value="<?php echo $system_data['mobile'] ?>" name="mobile" class="form-control" autocomplete="off" placeholder="Mobile">
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Source <small>(e.g. Facebook,etc)</small></label>
                  <div class="">
                    <input type="text" tabindex="5" value="<?php echo $system_data['source'] ?>" name="source" class="form-control" autocomplete="off" placeholder="Source">
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Model Name</label>
                  <div class="">
                   
                     <select class="form-control select2" tabindex="6" name="model">
                      <option value="">Select</option>
                      <option <?php if($system_data['model'] == 'SP125'){ ?> selected="selected" <?php } ?> value="SP125">SP125</option>
                      <option <?php if($system_data['model'] == 'Shine BS VI'){ ?> selected="selected" <?php } ?> value="Shine BS VI">Shine BS VI</option>
                      <option <?php if($system_data['model'] == 'New Unicorn BS-VI'){ ?> selected="selected" <?php } ?> value="New Unicorn BS-VI">New Unicorn BS-VI</option>
                      <option <?php if($system_data['model'] == 'CD 110 Dream'){ ?> selected="selected" <?php } ?> value="CD 110 Dream">CD 110 Dream</option>
                      <option <?php if($system_data['model'] == 'X-Blade'){ ?> selected="selected" <?php } ?> value="X-Blade">X-Blade</option>
                      <option <?php if($system_data['model'] == 'LIVO'){ ?> selected="selected" <?php } ?> value="LIVO">LIVO</option>
                      <option <?php if($system_data['model'] == 'DIO BS VI'){ ?> selected="selected" <?php } ?> value="DIO BS VI">DIO BS VI</option>
                      <option <?php if($system_data['model'] == 'Activa 6G'){ ?> selected="selected" <?php } ?> value="Activa 6G">Activa 6G</option>
                      <option <?php if($system_data['model'] == 'Activa 125-BS-VI'){ ?> selected="selected" <?php } ?> value="Activa 125-BS-VI">Activa 125-BS-VI</option>
                      <option <?php if($system_data['model'] == 'Grazia 125'){ ?> selected="selected" <?php } ?> value="Grazia 125">Grazia 125</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">City</label>
                  <div class="">
                    <input type="text" tabindex="7" name="city" class="form-control" autocomplete="off" placeholder="City">
                  </div>
                </div>
              </div> -->

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Contact to</label>
                  <div class="">
                    <input type="text" value="<?php echo $system_data['contact_to'] ?>" tabindex="8" name="contact_to" class="form-control" autocomplete="off" placeholder="Contact to">
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Follow up date</label>
                  <div class="">
                    <input type="date" value="<?php echo $system_data['follow_up_date'] ?>" tabindex="10" name="follow_up_date" class="form-control" autocomplete="off" placeholder="Follow Up Date">
                  </div>
                </div>
              </div>

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Location</label>
                  <div class="">
                    <select class="form-control select2" tabindex="12" name="location">
                    <option value="">Select</option>
                    <option <?php if($system_data['location'] == 'Mumbai Naka'){ ?> selected="selected" <?php } ?> value="Mumbai Naka">Mumbai Naka</option>
                    <option <?php if($system_data['location'] == 'Uttam Nagar'){ ?> selected="selected" <?php } ?> value="Uttam Nagar">Uttam Nagar</option>
                    <option <?php if($system_data['location'] == 'Indira Nagar'){ ?> selected="selected" <?php } ?> value="Indira Nagar">Indira Nagar </option>
                    <option <?php if($system_data['location'] == 'Mhasrul'){ ?> selected="selected" <?php } ?> value="Mhasrul"> Mhasrul </option>
                    <option <?php if($system_data['location'] == 'Ambad'){ ?> selected="selected" <?php } ?> value="Ambad"> Ambad </option>
                  </select>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Remarks</label>
                  <div class="">
                   <!--  <input type="text" name="remarks" class="form-control" autocomplete="off" placeholder="Follow Up Date"> -->
                   <textarea name="remarks" tabindex="11" class="form-control" rows="3" placeholder="Remarks"><?php echo $system_data['remarks'] ?></textarea>
                  </div> 
                </div>
              </div>
              <!--  <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Upload files</label>
                  <div class="">
                    <input type="file" name="file" class="form-control" autocomplete="off">
                  </div>
                </div>
              </div> -->
            
            <div class="col-md-12" style="text-align: center;"><br><br>
              <div class="mb-12">
                  <button name="submit" tabindex="13" value="submit" type="submit" class="btn btn-primary"> Submit </button>
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
    </div>
  </form>
</section>
</div>


