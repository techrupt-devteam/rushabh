

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Edit Slider</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Edit Slider
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/manage_slider/view_slider');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                  </div>
            </div>
        </div>
        <div class="panel-body">
          <div class="row">
             <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Title<span style="color: red;">*</span></label>
                <div class="">
                  <input type="text" name="title" value="<?php echo $slider_data['title']; ?>" class="form-control" autocomplete="off" placeholder="Please enter title" required="required">
                </div>
            </div>
            
            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Image</label>
                <div class="">
                  <input type="file" name="image" class="form-control" autocomplete="off" placeholder="Please enter email" >
                  <?php if($slider_data['image']) {?>
                  <a href="<?php echo base_url(); ?>assets/admin/post_image/<?php echo $slider_data['image']; ?>" target="_tab">View Image</a><?php }else{ ?>
                  <?php } ?>
                </div>
            </div>
            
          </div>
          <br><br>
          <div class="mb-12" style="text-align: center;">
              <button name="submit" value="submit" type="submit" class="btn btn-primary"> Submit </button>
              <a href="<?php echo base_url(); ?>admin/manage_slider/view_slider" type="button" class="btn lg btn-danger btn_cancel">Cancel</a>
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


