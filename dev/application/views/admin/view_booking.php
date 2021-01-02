

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">View Booking</li>
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
              <div class="panel-heading"> View Booking
                <div class="btn-toolbar pull-right">
                  <div class="btn-group"> 
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <?php foreach($booking as $row); ?>
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
                      <div class="form-group">
                        <label><strong>Color - </strong><?php echo $row['color']; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>Any Special Request - </strong><?php echo $row['special_request']; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>Adhar Card - </strong><a href="<?php echo base_url(); ?><?php echo $row['adhar_card']; ?>">View</a></label>
                      </div>

                       <div class="form-group">
                        <label><strong>Date Of Birth - </strong><?php $originalDate = $row['dob'];
                              $newDate = date("d-m-Y", strtotime($originalDate));  echo $newDate; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>Transation - </strong><?php echo $row['transaction_id']; ?></label>
                      </div>
                    </div>


                    <div class="col-sm-6">
                      <div class="form-group">
                        <label><strong>Email id - </strong><?php echo $row['email']; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>City - </strong><?php echo $row['city']; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>Car - </strong><?php echo $row['car']; ?></label>
                      </div>

                       <div class="form-group">
                        <label><strong>Variant - </strong><?php echo $row['varient']; ?></label>
                      </div>

                       <div class="form-group">
                        <label><strong>On Road Cost - </strong><?php echo $row['varient']; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>Do you Require Finance - </strong><?php echo $row['finance']; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>Pan Card - </strong><a href="<?php echo base_url(); ?><?php echo $row['pan_card']; ?>">View</a></label>
                      </div>

                      <div class="form-group">
                        <label><strong>Booking Date - </strong><?php echo $row['booking_date']; ?></label>
                      </div>

                      <div class="form-group">
                        <label><strong>Paid Amount - </strong><?php echo $row['amount']; ?></label>
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
  