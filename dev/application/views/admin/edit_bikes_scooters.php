<!-- Ckeditor -->
<script src="plugins/ckeditor/ckeditor.js"></script>
<script src="plugins/ckeditor/samples/js/sample.js"></script>

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Edit Bikes & Scooters</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Edit Bikes & Scooters 
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/manage_bikes_scooters');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                  </div>
            </div>
        </div>
        <div class="panel-body">
          <div class="row">
             <div class="col-sm-6 col-xl-6 col-md-6">
              <label class="control-label">  Type<span style="color: red;">*</span></label>
              <div class="">
                <select class="form-control select2" name="type" required="required">
                  <option value="Select">Select</option>
                  <option <?php if($bikes_scooters['type'] == 'Bikes'){ ?> selected="selected" <?php } ?> value="Bikes"> Bikes</option>
                  <option <?php if($bikes_scooters['type'] == 'Scooters'){ ?> selected="selected" <?php } ?> value="Scooters"> Scooters</option>
                </select>
              </div>
            </div>

            <div class="col-sm-6 col-xl-6 col-md-6">
              <label class="control-label"> Name<span style="color: red;">*</span></label>
              <div class="">
                <input type="text" name="name" value="<?php echo $bikes_scooters['name']; ?>" class="form-control" autocomplete="off" placeholder="Please enter name" required="required">
              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-sm-6 col-xl-6 col-md-6">
              <label class="control-label"> Price<span style="color: red;">*</span></label>
              <div class="">
                <input type="text" name="price" value="<?php echo $bikes_scooters['price']; ?>" class="form-control" autocomplete="off" placeholder="Please enter price" required="required">
              </div>
            </div>
            
             <div class="col-sm-6 col-xl-6 col-md-6">
              <label class="control-label"> Image<span style="color: red;">*</span></label>
              <div class="">
                <input type="file" name="image" class="form-control" autocomplete="off" <?php if($bikes_scooters['image']==''){ ?> required="required" <?php } ?>>
                <a href="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $bikes_scooters['image']; ?>" target="_tab">View Image</a>
              </div>
            </div>
          </div>

           <div class="row">
             <div class="col-sm-6 col-xl-6 col-md-6">
              <label class="control-label">  Page Meta Title<span style="color: red;">*</span></label>
              <div class="">
               <input type="text" name="meta_title" value="<?php echo $bikes_scooters['meta_title']; ?>" class="form-control" autocomplete="off" placeholder="Please enter page meta title" required="required">
              </div>
            </div>

             <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label">  Page Meta Description<span style="color: red;">*</span></label>
                <div class="">
                    <input type="text" name="meta_description" value="<?php echo $bikes_scooters['meta_description']; ?>" class="form-control" autocomplete="off" placeholder="Please enter meta description" required="required">
                </div>
            </div>
          </div>

           <div class="row">
            <div class="col-sm-6 col-xl-6 col-md-6">
              <label class="control-label">  Image Title<span style="color: red;">*</span></label>
              <div class="">
               <input type="text" name="image_title" value="<?php echo $bikes_scooters['image_title']; ?>" class="form-control" autocomplete="off" placeholder="Please enter page meta title" required="required">
              </div>
            </div>
            
              <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label">  Image Description<span style="color: red;">*</span></label>
                <div class="">
                    <input type="text" name="image_description" class="form-control" autocomplete="off" value="<?php echo $bikes_scooters['image_description']; ?>" placeholder="Please enter meta description" required="required">
                </div>
            </div>
          </div>
          
          <div class="row">
           <div class="col-sm-6 col-xl-6 col-md-6">
              <label class="control-label"> Banner Image<span style="color: red;">*</span></label>
              <div class="">
                <input type="file" name="banner_image" class="form-control" autocomplete="off" <?php if($bikes_scooters['image']==''){ ?> required="required" <?php } ?>>
                <a href="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $bikes_scooters['banner_image']; ?>" target="_tab">View Image</a>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12 col-xl-12 col-md-12">
              <label class="control-label"> Description</label>
              <div class="">
                <textarea id="editor" type="text" class="form-control" placeholder="Please enter description" name="description"><?php echo $bikes_scooters['description']; ?></textarea>     
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
  </form>
</section>
</div>

<script>
  initSample();
</script>
