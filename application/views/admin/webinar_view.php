

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">View user data</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> View user data
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/webinar');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                  </div>
            </div>
        </div>
        <div class="panel-body">
          <div class="row">
           
              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label"> Name</label>
                  <div class="">
                    <input type="text" tabindex="1" value="<?php echo $webinar_data['name']; ?>" name="name" class="form-control" autocomplete="off" readonly placeholder="Customer Name">
                  </div>
                </div>
              </div>

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Email</label>
                  <div class="">
                    <input type="text" value="<?php echo $webinar_data['email'] ?>" tabindex="2" name="enquiry_no" class="form-control" autocomplete="off" readonly placeholder="Enquiry no">
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Mobile No</label>
                  <div class="">
                    <input type="text" tabindex="4" value="<?php echo $webinar_data['mobile'] ?>" name="mobile" class="form-control" autocomplete="off" readonly placeholder="Mobile">
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Age</label>
                  <div class="">
                    <input type="text" tabindex="5" value="<?php echo $webinar_data['age'] ?>" name="source" class="form-control" autocomplete="off" readonly placeholder="Source">
                  </div>
                </div>
              </div>

              
              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">City </label>
                  <div class="">
                    <input type="text" value="<?php echo $webinar_data['city'] ?>" tabindex="8" name="contact_to" class="form-control" autocomplete="off" readonly placeholder="Contact to">
                  </div>
                </div>
              </div>

             
            <div class="col-md-12" style="text-align: center;"><br><br>
              <div class="mb-12">
                 <!-- <button name="submit" tabindex="13" value="submit" type="submit" class="btn btn-primary"> Submit </button>-->
                  <a href="<?php echo base_url(); ?>admin/webinar" type="button" class="btn lg btn-success btn_cancel">Ok</a>
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


