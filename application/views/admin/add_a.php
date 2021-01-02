

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Add Inbond calls</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Add Inbond calls
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/inbond_callsa');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                  </div>
            </div>
        </div>
        <div class="panel-body">
          <div class="row">
            
              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Title</label>
                  <div class="">
                    <input type="text" name="title" class="form-control" maxlength="20" autocomplete="off" placeholder="Title">
                  </div>
                </div>
              </div>

              <!--  <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Location</label>
                  <div class="">
                    <select class="form-control select2" name="location">
                    <option value="">Select</option>
                    <option value="Mumbai Naka">Mumbai Naka</option>
                    <option value="Uttam Nagar">Uttam Nagar</option>
                    <option value="Indira Nagar">Indira Nagar </option>
                    <option value="Mhasrul"> Mhasrul </option>
                    <option value="Ambad"> Ambad </option>
                  </select>
                  </div>
                </div>
              </div> -->

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Upload files</label>
                  <div class="">
                    <input type="file" name="file" class="form-control" autocomplete="off">
                  </div>
                </div>
              </div>
            
            <div class="col-md-12" style="text-align: center;"><br><br>
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


