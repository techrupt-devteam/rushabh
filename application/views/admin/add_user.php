

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Add User</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Add User
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
                  <input type="text" name="first_name" class="form-control" autocomplete="off" placeholder="Please enter name" required="required">
                </div>
            </div>
            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Last Name</label>
                <div class="">
                  <input type="text" name="last_name" class="form-control" autocomplete="off" placeholder="Please enter last name">
                </div>
            </div>
            
            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Mobile No</label>
                <div class="">
                  <input type="number" name="mobile_no" class="form-control" maxlength="10" autocomplete="off" placeholder="Please enter mobile no">
                </div>
            </div> 

            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Location<span style="color: red;">*</span></label>
                <div class="">
                  <select class="form-control select2" name="location" required="required">
                    <option value="">Select</option>
                    <option value="Mumbai Naka">Mumbai Naka</option>
                    <option value="Uttam Nagar">Uttam Nagar</option>
                    <option value="Indira Nagar">Indira Nagar </option>
                    <option value="Mhasrul"> Mhasrul </option>
                    <option value="Ambad"> Ambad </option>
                  </select>
                </div>
            </div>

            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Email<span style="color: red;">*</span></label>
                <div class="">
                  <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Please enter email" required="required">
                </div>
            </div>

            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Password<span style="color: red;">*</span></label>
                <div class="">
                  <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Please enter password" required="required">
                </div>
            </div>

            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Image</label>
                <div class="">
                  <input type="file" name="image" class="form-control" autocomplete="off" placeholder="Please enter email" >
                </div>
            </div>
            
            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Roles<span style="color: red;">*</span></label>
                <div class="">
                  <select class="form-control select2" name="roles[]" multiple required="required">
                    <option value="">Select</option>
                    <option value="Sales">Sales</option>
                    <option value="Service">Service</option>
                    <!--<option value="Appointment">Appointment</option>-->
                    <option value="Enquiry">Enquiry</option>
                    <option value="Finance">Finance</option>
                    <option value="Insurance">Insurance</option>
                    <option value="Offers">Offers</option>
                    <option value="Contact Us">Contact Us</option>
                    <option value="Feedback">Feedback</option>
                    <option value="CRE">CRE</option>
                  </select>
                </div>
            </div>
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

    <!-- Modal -->

    <!-- Modal waiting -->
  <div class="modal fade modal-gray" id="i-modal-manage-permission" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog " role="document"><!-- modal-lg -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="">Manage Permission</h4>
        </div>       
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-12">
               
              <table class="table  table-bordered">
                <thead>
                <tr>
                  <th width="15px;" style="text-align: center;">Set/Unset</th>
                  <th width="15px;">Permission Name</th>
                </tr>
                </thead>
                <tbody id=""><!-- i-set-permission-tabel-tbody -->
                <?php foreach($permission as $row): ?>
                <tr>
                  <td style="text-align: center;"><input type="checkbox" name="" class="select_all" onchange="setUnsetPermission(this,event,'+index+')" ></td>
                  <td><?php echo $row->name; ?></td>
                </tr>
              <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>   
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                <!-- <button type="button" data-toggle="tooltip" title="Close" class="btn btn-default btn-sm pull-right" data-dismiss="modal"><i class="fa fa-times"></i> Close</button> -->

                <button type="button" style="margin-right: 10px;" class="btn btn-success btn-sm pull-right" data-dismiss="modal" data-toggle="tooltip" title="Save"><i class="fa fa-floppy-o"></i> Save </button><!-- id="i-save-permission" -->
                
               <!--  <button type="button" class="btn btn-success btn-sm pull-right
                " id="i-update-permission" style="margin-right: 10px;" data-toggle="tooltip" title="Update"><i class="fa fa-pencil"></i> Update</button> -->
            </div>
         </div>    
      </div>
    </div>
  </div>
</div>
  <!-- Modal waiting end  -->
  </form>


</section>
</div>


