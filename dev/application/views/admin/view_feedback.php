

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">View Feedback</li>
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
              <div class="panel-heading"> View Feedback
                <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/feedback');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                  </div>
            </div>
              </div>
              <!-- /.card-header -->
              <?php foreach($feedback as $row); ?>
              <div class="panel-body">
              
                  <div class="row">
                     <div class="col-md-12">
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label><strong>Full Name - </strong><?php echo $row['name']; ?></label>
                      </div>                      
                      <div class="form-group">
                        <label><strong>Mobile No - </strong><?php echo $row['mobile']; ?></label>
                      </div>

                    
                      <div class="form-group">
                        <label><strong>Address - </strong><?php echo $row['address']; ?></label>
                      </div>
                     

                      
                    </div>


                    <div class="col-sm-6">
                      <div class="form-group">
                        <label><strong>Email id - </strong><?php echo $row['email']; ?></label>
                      </div>

                       <div class="form-group">
                        <label><strong>Location - </strong><?php echo $row['location']; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>Message </strong><?php echo $row['message']; ?></label>
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
  