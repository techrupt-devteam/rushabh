

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">View System Data</li>

    </ol>
  </div>
</div>
<div class="clearfix"></div>
    <!-- Main content -->
    <section  class="content mt-12">
      <div class="content mt-12">
        <div class="row">
          <!-- right column -->
          <div class="col-xs-12">
            <!-- general form elements disabled -->
            <div class="panel panel-default">
              <div class="panel-heading"> View System Data
                <div class="btn-toolbar pull-right">
                  <div class="btn-group">
                  <a href="<?php echo site_url('admin/system_data');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a> 
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <?php foreach($system_data as $row); ?>
              <div class="panel-body">
              
                  <div class="row">
                     <div class="col-md-12">
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label><strong>Full Name - </strong><?php echo $row['name']; ?></label>
                      </div>                      
                    
                      <div class="form-group">
                        <label><strong>Enquiry Date - </strong><?php $originalDate = $row['enquiry_date']; $newDate = date("d-m-Y", strtotime($originalDate)); if($originalDate){ echo $newDate;}else{echo '-'; } ?></label>
                      </div>
                      <div class="form-group">
                        <label><strong>Source - </strong><?php echo $row['source']; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>Contact To - </strong><?php echo $row['contact_to']; ?></label>
                      </div>

                       
                      <div class="form-group">
                        <label><strong>Follow Up Date - </strong><?php $originalDate = $row['follow_up_date']; $newDate = date("d-m-Y", strtotime($originalDate)); if($originalDate){ echo $newDate;}else{echo '-'; }  ?></label>
                      </div>
                      
                    </div>


                    <div class="col-sm-6">
                     <div class="form-group">
                        <label><strong>Enquiry No - </strong><?php echo $row['enquiry_no']; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>Mobile No - </strong><?php echo $row['mobile']; ?></label>
                      </div>
                      
                      <div class="form-group">
                        <label><strong>Model Name - </strong><?php echo $row['model']; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>RM - </strong><?php echo $row['rm']; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>Remarks - </strong><?php echo $row['remarks']; ?></label>
                      </div>
                     
                    </div>


                  </div>
                  
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  