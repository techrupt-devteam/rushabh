<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Add Slider</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Add Slider
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/manage_slider/view_slider');?>" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" data-original-title="Back">
                    <i class="la la-arrow-right icon"></i>
                   </a>
                  </div>
            </div>
        </div>
        <div class="panel-body">
          <div class="row">
            
              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Title <span style="color: red;">*</span></label>
                  <div class="">
                    <input type="text" name="title" class="form-control" maxlength="20" autocomplete="off" placeholder="Title" required>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Sort <span style="color: red;">*</span></label>
                  <div class="">
                    <input type="text" name="sort" class="form-control" maxlength="20" autocomplete="off" placeholder="Sort" required>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-md-8">
                <label class="control-label"> Slider Image <span style="color: red;">*</span></label>
                <div class="mb-12">
                  <div id="image-preview" style="background-size:cover;background-image: url('dist/images/default-img.jpg');width: 100%;height: 400px;">
                    <label for="image-upload1" id="image-label1"><i class="fa fa-camera" aria-hidden="true"></i></label>
                    <input type="file" name="image" class="user-file" id="image-upload" accept="image/x-png,image/gif,image/jpeg,image/png" required/>
                  </div>
                </div>
            </div>
            
            <div class="col-md-8" style="text-align: center;">
              <div class="mb-12">
                  <button name="submit" value="submit" type="submit" class="btn btn-primary"> Submit </button>
                  <!-- <input class="btn lg btn-danger btn_cancel" type="button" name="purchase_submit" value="Cancel" autocomplete="off"> -->
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


