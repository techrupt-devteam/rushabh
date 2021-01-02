

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Edit Inbond calls</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Edit Inbond calls
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/inbond_calls');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                  </div>
            </div>
        </div>
        <div class="panel-body">
          <div class="row">
            
              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Name <span style="color: red;">*</span></label>
                  <div class="">
                    <input type="text" name="name" value="<?php echo $inbond_data['name']; ?>" class="form-control" autocomplete="off" placeholder="Name" required>
                  </div>
                </div>
              </div>

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Enquiry No <span style="color: red;">*</span></label>
                  <div class="">
                    <input type="text" name="enquiry_no" value="<?php echo $inbond_data['enquiry_no']; ?>" class="form-control" autocomplete="off" placeholder="Enquiry No" required>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Date <span style="color: red;">*</span></label>
                  <div class="input-group date">
                    <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                    <input type="text" name="date" value="<?php echo $inbond_data['date']; ?>" class="form-control datepicker" autocomplete="off" placeholder="Date" required>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Mobile <span style="color: red;">*</span></label>
                  <div class="">
                    <input type="text" name="mobile" value="<?php echo $inbond_data['mobile']; ?>" class="form-control" autocomplete="off" placeholder="Mobile" required>
                  </div>
                </div>
              </div>

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Source <small>(e.g facebook,etc)</small></label>
                  <div class="">
                    <input type="text" name="source" value="<?php echo $inbond_data['source']; ?>" class="form-control" autocomplete="off" placeholder="Source" required>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Model No <span style="color: red;">*</span></label>
                  <div class="">
                    <input type="text" name="model" value="<?php echo $inbond_data['model']; ?>" class="form-control" autocomplete="off" placeholder="Model No" required>
                  </div>
                </div>
              </div>

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">City <span style="color: red;">*</span></label>
                  <div class="">
                    <input type="text" name="city" value="<?php echo $inbond_data['city']; ?>" class="form-control" autocomplete="off" placeholder="City" required>
                  </div>
                </div>
              </div>

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Contact to <span style="color: red;">*</span></label>
                  <div class="">
                    <input type="text" name="contact_to" value="<?php echo $inbond_data['contact_to']; ?>" class="form-control" autocomplete="off" placeholder="Contact to" required>
                  </div>
                </div>
              </div>

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Status</label>
                  <div class="">
                    <select class="form-control select2" name="status">
                    <option value="">Select</option>
                    <option value="Hot">Hot</option>
                    <option value="Cold">Cold</option>
                    <option value="Warm">Warm </option>
                    <option value="Done">Done </option>
                    <option value="Lost">Lost</option>
                    <option value="Pending">Pending</option>
                  </select>
                  </div>
                </div>
              </div>

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Follow Up Date <span style="color: red;">*</span></label>
                  <div class="input-group date">
                    <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                    <input type="text" name="follow_up_date" value="<?php echo $inbond_data['follow_up_date']; ?>" class="form-control datepicker" autocomplete="off" placeholder="Date" required >
                  </div>
                </div>
              </div>

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Remarks</label>
                  <div class="">
                    <textarea type="text" rows="3" name="remarks" class="form-control" placeholder="Remarks"><?php echo $inbond_data['remarks']; ?></textarea>
                  </div>
                </div>
              </div>
            
            <div class="col-md-12" style="text-align: center;">
              <div class="mb-12">
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
    </div>
  </form>
</section>
</div>


