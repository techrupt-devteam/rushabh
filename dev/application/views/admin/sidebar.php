

<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">          
             
       <img src="dist/images/avatar/avatar1.jpg" class="img-circle" alt="User Image">
                                    </div>
        <div class="pull-left info">
          <p>Rushabh</p>
          <a href="#" class="Online"><span class="indicator label-success"></span> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <?php if($this->session->userdata('apple_adminusr') == 1 || $this->session->userdata('apple_adminusr') == 5){ ?>
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="">
          <a href="<?php echo base_url('admin/secure/home'); ?>">
            <i class="la la-th-large icon"></i>
            <span>Dashboard</span>
          </a>
        </li>

       <!--  <li class="">
          <a href="<?php echo site_url('admin/manage_slider/view_slider');?>">
            <i class="la la-image icon"></i>
            <span>Manage Slider</span>
          </a>          
        </li> -->

         <li class="treeview">
          <a href="">
            <i class="la la-car icon"></i>
            <span>Manage Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>  
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/manage_slider/view_slider');?>"><i class="fa fa-circle-o"></i> Manage Slider </a></li>
            <!-- <li><a href="<?php echo site_url('admin/manage_pages');?>"><i class="fa fa-circle-o"></i> Pages </a></li> -->

            <li><a href="<?php echo site_url('admin/manage_bikes_scooters');?>"><i class="fa fa-circle-o"></i> Bikes/Scooters </a></li>
          </ul>        
        </li>

        <!-- <li class="">
          <a href="https://www.facebook.com/ads/lead_gen/export_csv/
    ?id=<FORM_ID>
    &type=form
    &from_date=1482698431
    &to_date=1482784831">
            <i class="la la-facebook icon"></i>
            <span>Facebook</span>
          </a>          
        </li> -->

        <li class="">
          <a href="<?php echo site_url('admin/manage_booking'); ?>">
            <i class="la la-edit icon"></i>
            <span>Manage Booking</span>
          </a>          
        </li>

        <li class="">
          <a href="<?php echo site_url('admin/book_your_service');?>">
            <i class="la la-motorcycle icon"></i>
            <span>Book your service</span>
          </a>          
        </li>

        <!-- <li class="">
          <a href="<?php echo site_url('admin/book_appointment');?>">
            <i class="la la-file-text-o icon"></i>
            <span>Book Appoinment</span>
          </a>          
        </li> -->

        <li class="">
          <a href="<?php echo site_url('admin/enquiry');?>">
            <i class="la la-question icon"></i>
            <span>Enquiry</span>
          </a>          
        </li>

        <li class="">
          <a href="<?php echo site_url('admin/finance');?>">
            <i class="la la-rupee icon"></i>
            <span>Finance</span>
          </a>          
        </li>

        <li class="">
          <a href="<?php echo site_url('admin/insurance');?>">
            <i class="la la-edit icon"></i>
            <span>Insurance</span>
          </a>          
        </li>

        <li class="">
          <a href="<?php echo site_url('admin/offers');?>">
            <i class="la la-book icon"></i>
            <span> Offers</span>
          </a>          
        </li>

        <li class="">
          <a href="<?php echo site_url('admin/contact_us');?>">
            <i class="la la-phone icon"></i>
            <span>Contact Us</span>
          </a>          
        </li>

        <li class="">
          <a href="<?php echo site_url('admin/feedback');?>">
            <i class="la la-comment icon"></i>
            <span>Feedback</span>
          </a>          
        </li>

        <li class="">
          <a href="<?php echo site_url('admin/manage_user');?>">
            <i class="la la-user icon"></i>
            <span>Manage User</span>
          </a>          
        </li>

         <!-- <li class="">
          <a href="<?php echo site_url('admin/inbond_calls');?>">
            <i class="la la-users icon"></i>
            <span>Inbond Calls</span>
          </a>          
        </li> -->

        <li>
          <a href="<?php echo site_url('admin/system_data');?>">
            <i class="la la-calculator icon"></i>
            <span>Inbound Calls</span>
          </a>
          <!-- <ul class="treeview-menu">
               <li class="">
                <a href="<?php echo site_url('admin/inbond_call');?>"><i class="fa fa-circle-o"></i> Upload Files 
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo site_url('admin/inbond_callsm');?>"><i class="fa fa-circle-o"></i> Mumbai Naka </a></li>
                  <li><a href="<?php echo site_url('admin/inbond_callsu');?>"><i class="fa fa-circle-o"></i> Uttam Nagar </a></li>
                  <li><a href="<?php echo site_url('admin/inbond_callsi');?>"><i class="fa fa-circle-o"></i> Indira Nagar </a></li>
                  <li><a href="<?php echo site_url('admin/inbond_callsmh');?>"><i class="fa fa-circle-o"></i> Mhasrul  </a></li>
                  <li><a href="<?php echo site_url('admin/inbond_callsa');?>"><i class="fa fa-circle-o"></i> Ambad </a></li>
                </ul> 
               </li>
               <li class="">
                <a href="<?php echo site_url('admin/system_data');?>"><i class="fa fa-circle-o"></i> System Data</a>
              </li>
          </ul> -->
        </li>

       <!--  <li class="">
          <a href="<?php echo site_url('admin/manage_user');?>">
            <i class="la la-user icon"></i>
            <span>Home</span>
          </a>          
        </li> -->

        
      </ul>
    <?php }else{ ?>

      
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="">
          <a href="<?php echo base_url('admin/secure/home'); ?>">
            <i class="la la-th-large icon"></i>
            <span>Dashboard</span>
          </a>
        </li>
         

        <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Service', $array) || in_array('CRE', $array))

        { ?>
        <li class="">
          <a href="<?php echo site_url('admin/manage_booking'); ?>">
            <i class="la la-edit icon"></i>
            <span>Manage Booking</span>
          </a>          
        </li>
      <?php } ?>

        <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Service', $array) || in_array('CRE', $array))
        { ?>
        <li class="">
          <a href="<?php echo site_url('admin/book_your_service');?>">
            <i class="fa fa-cog fa-spin1"></i>
            <span>Book your service</span>
          </a>          
        </li>
      <?php } ?>
      <!--  <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Book Appoinment', $array))
        { ?>
        <li class="">
          <a href="<?php echo site_url('admin/book_appointment');?>">
            <i class="la la-file-text-o icon"></i>
            <span>Book Appoinment</span>
          </a>          
        </li>
      <?php } ?> -->

        <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Enquiry', $array))
        { ?>
        <li class="">
          <a href="<?php echo site_url('admin/enquiry');?>">
            <i class="la la-question icon"></i>
            <span>Enquiry</span>
          </a>          
        </li>
      <?php } ?>

        <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Finance', $array))
        { ?>
        <li class="">
          <a href="<?php echo site_url('admin/finance');?>">
            <i class="la la-rupee icon"></i>
            <span>Finance</span>
          </a>          
        </li><?php } ?>

        <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Insurance', $array))
        { ?>
          <li class="">
          <a href="<?php echo site_url('admin/insurance');?>">
            <i class="la la-edit icon"></i>
            <span>Insurance</span>
          </a>          
        </li>
         <?php } ?>
       

        <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Contact Us', $array))
        { ?>
        <li class="">
          <a href="<?php echo site_url('admin/contact_us');?>">
            <i class="la la-phone icon"></i>
            <span>Contact Us</span>
          </a>          
        </li>
      <?php } ?>

      <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Inbond Calls', $array) || in_array('Sales', $array))
        { ?>
        <li class="">
          <a href="<?php echo site_url('admin/system_data');?>">
            <i class="la la-user icon"></i>
            <span>Inbound Calls</span>
          </a>          
        </li>
      <?php } ?>

      <?php $comma_separated_values = $this->session->userdata('roles'); 
        $array = explode(',', $comma_separated_values);
        if(in_array('Feedback', $array) || in_array('CRE', $array))
      { ?>
      <li class="">
        <a href="<?php echo site_url('admin/feedback');?>">
          <i class="la la-comments icon"></i>
          <span>Feedback</span>
        </a>          
      </li>
      <?php } ?>
      
      <?php $comma_separated_values = $this->session->userdata('roles'); 
              $array = explode(',', $comma_separated_values);
              if(in_array('Nutridock', $array))
        { ?>
        <li class="">
          <a href="<?php echo site_url('admin/webinar'); ?>">
            <i class="la la-edit icon"></i>
            <span>Webinar</span>
          </a>          
        </li>
        <li class="" style="display:none;">
          <a href="<?php echo site_url('admin/webinar'); ?>">
            <i class="la la-edit icon"></i>
            <span>Webinar</span>
          </a>          
        </li>
        
      <?php } ?>

      </ul>

    <?php } ?>
    </section>
    <!-- /.sidebar -->
  </aside>