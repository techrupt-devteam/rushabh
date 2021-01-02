
<style type="text/css">
  .panel-widget{
    padding: 20px 0;
  }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="col-md-12">
    <div class="row">
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> 
            <em class="fa fa-home"></em> 
          </a>
        </li>
        <li>Dashboard</li>
      </ol>
    </div>
  </div>

  <div class="clearfix"></div>
    <!-- Main content -->
    <section class="content">
      <div class="">
       


       <!-- Admin Panel -->
         <?php if($this->session->userdata('apple_adminusr') == 1 || $this->session->userdata('apple_adminusr') == 5){ ?>
      <div class="panel-body">
      <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <a href="<?php echo site_url('admin/manage_booking'); ?>">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Bookings</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($booking_list); ?></div>
                </div>
                <div class="col-auto">
                  <i class="fa fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </a>
          </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <a href="<?php echo site_url('admin/book_your_service'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Service </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($book_your_service_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/Delivery-challen.png" class="dash-icon">
                </div>
              </div>
            </div>
          </a>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <a href="<?php echo site_url('admin/feedback'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Feedback</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($feedback_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/supplier.png" class="dash-icon">
                </div>
              </div>
            </div>
            </a>
          </div>
        </div>
    
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <a href="<?php echo site_url('admin/enquiry'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Enquiries</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($enquiry_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/customer.png" class="dash-icon">
                </div>
              </div>
            </div>
           </a>
          </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <a href="<?php echo site_url('admin/finance'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Finance</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($finance_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/quatation.png" class="dash-icon">
                </div>
              </div>
            </div>
           </a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <a href="<?php echo site_url('admin/insurance'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Insurance</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($insurance_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/quatation.png" class="dash-icon">
                </div>
              </div>
            </div>
          </a>
          </div>
        </div>

       <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <a href="<?php echo site_url('admin/offers'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Offers</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($offers_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/purchase-order.png" class="dash-icon">
                </div>
              </div>
            </div>
           </a>
          </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <a href="<?php echo site_url('admin/contact_us'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Contact Us</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($contact_us_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/supplier.png" class="dash-icon">
                </div>
              </div>
            </div>
          </a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <a href="<?php echo site_url('admin/manage_user'); ?>">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total User</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($users_list); ?></div>
                  </div>
                  <div class="col-auto">
                    <img src="dist/images/customer.png" class="dash-icon">
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
     
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <a href="<?php echo site_url('admin/system_data'); ?>">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Inbound Calls</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($inbond_calls_list); ?></div>
                  </div>
                  <div class="col-auto">
                    <img src="dist/images/customer.png" class="dash-icon">
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Admin Panel End-->


     <?php }else{ ?>
 <div class="panel-body">
      <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Service', $array) || in_array('CRE', $array))

        { ?>
      <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <a href="<?php echo site_url('admin/manage_booking'); ?>">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Bookings</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($booking_list); ?></div>
                </div>
                <div class="col-auto">
                  <i class="fa fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </a>
          </div>
        </div>
        <?php } ?>

        <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Service', $array) || in_array('CRE', $array))
          { ?>
          <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <a href="<?php echo site_url('admin/book_your_service'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Service </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($book_your_service_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/Delivery-challen.png" class="dash-icon">
                </div>
              </div>
            </div>
          </a>
          </div>
        </div>
        <?php } ?>

         <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Enquiry', $array))
        { ?>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <a href="<?php echo site_url('admin/enquiry'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Enquiries</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($enquiry_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/customer.png" class="dash-icon">
                </div>
              </div>
            </div>
           </a>
          </div>
        </div>          
        <?php } ?>
        
         <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Finance', $array))
        { ?>
          <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning card-hover h-100 py-2 radius-0">
            <a href="<?php echo site_url('admin/finance'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Finance</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($finance_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/quatation.png" class="dash-icon">
                </div>
              </div>
            </div>
           </a>
          </div>
        </div>
        <?php } ?>
        <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Insurance', $array))
        { ?>   
            <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info card-hover h-100 py-2 radius-0">
            <a href="<?php echo site_url('admin/insurance'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Insurance</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($insurance_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/quatation.png" class="dash-icon">
                </div>
              </div>
            </div>
          </a>
          </div>
        </div>
        <?php } ?>

        <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Contact Us', $array))
        { ?>

           <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary card-hover h-100 py-2 radius-0">
            <a href="<?php echo site_url('admin/contact_us'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Contact Us</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($contact_us_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/supplier.png" class="dash-icon">
                </div>
              </div>
            </div>
          </a>
          </div>
        </div>
        <?php } ?>
        
        <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Inbond Calls', $array) || in_array('Sales', $array))
        { ?>
          <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning card-hover h-100 py-2 radius-0">
            <a href="<?php echo site_url('admin/system_data'); ?>">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Inbond Calls</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($inbond_calls_list); ?></div>
                  </div>
                  <div class="col-auto">
                    <img src="dist/images/customer.png" class="dash-icon">
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <?php } ?>
        <?php $comma_separated_values = $this->session->userdata('roles'); 
        $array = explode(',', $comma_separated_values);
        if(in_array('Feedback', $array) || in_array('CRE', $array))
      { ?>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <a href="<?php echo site_url('admin/feedback'); ?>">
              <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Feedback</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($feedback_list); ?></div>
                </div>
                <div class="col-auto">
                  <img src="dist/images/supplier.png" class="dash-icon">
                </div>
              </div>
            </div>
            </a>
          </div>
        </div>
        <?php } ?>
        
</div>
     <?php } ?>










    </section>
  </div>
  
