

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Edit Pages</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Edit Pages
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/manage_pages');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                  </div>
            </div>
        </div>
        <div class="panel-body">
          <div class="row">
             <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Type<span style="color: red;">*</span></label>
                <div class="">
                  <select class="form-control select2" name="type" required="required">
                    <option value="Select">Select</option>
                    <option value="Bikes"> Bikes</option>
                    <option value="Scooters"> Scooters</option>
                  </select>
                </div>
            </div>
            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Name <span style="color: red;">*</span></label>
                <div class="">
                  <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Please enter page name" value="<?php echo $pages['name']; ?>" required="required">
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


