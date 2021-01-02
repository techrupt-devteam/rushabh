<!-- Ckeditor -->
<script src="plugins/ckeditor/ckeditor.js"></script>
<script src="plugins/ckeditor/samples/js/sample.js"></script>
<!-- <link rel="stylesheet" href="plugins/ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="plugins/ckeditor/toolbarconfigurator/lib/codemirror/neo.css"> -->

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Add Bikes & Scooters</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>



<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">



    <div class="panel panel-default">
        <div class="panel-heading">Specifications Detail
          <div class="btn-toolbar pull-right">
              <div class="btn-group"> 
                 <a href="<?php echo site_url('admin/manage_bikes_scooters');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
              </div>
            </div>
        </div>
        <div class="panel-body" style="padding-left: 7px;">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" data-placement="bottom" title="Body Dimensions">Body Dimensions </a></li>
              <li><a href="#transactional_details" data-toggle="tab" data-placement="bottom" title="Engine">Engine</a></li>
              <li><a href="#Tax_Insurance" data-toggle="tab" data-placement="bottom" title="Transmission">Transmission <!-- <span class="caret"></span> --></a></li>
              <li><a href="#Attachments" data-toggle="tab" data-placement="bottom" title="Tyres & brakes">Tyres & brakes</a></li>
              <li><a href="#Attached-to-vehicle" data-toggle="tab" data-placement="bottom" title="Frame & Suspension">Frame & Suspension</a></li>
              <li><a href="#Electricals" data-toggle="tab" data-placement="bottom" title="Electricals">Electricals</a></li>
              
            </ul>
            <div class="tab-content overflow">
              <div class="tab-pane active" id="tab_1">
                  <div class="col-lg-12">
                   <div class="row"> 
                    <form action="" method="post">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped" ><thead>
                        <tr>
                          <th width="5%">Sr.</th>
                          <th class="">List</th>
                          <th class="">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $cnt=0; foreach($body_dimensions as $row): $cnt++; ?>
                          <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['list']; ?> <input type="text" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;"><input type="text" name="bikesid[]" value="<?php echo $row['id']; ?>" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="<?php echo $row['details']; ?>"><input type="text" name="type[]" value="Body Dimensions" style="display: none;"></td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                        </table>
                      </div>

                      <div class="col-md-12" style="text-align: center;">
                        <button name="submit" value="submit" type="submit" class="btn btn-primary"> Submit </button>
                        <a href="<?php echo site_url('admin/manage_bikes_scooters');?>" type="button" class="btn lg btn-danger btn_cancel">Cancel</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="transactional_details">
                <div class="col-lg-12">  
                  <div class="row"> 
                    <form action="" method="post">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped" ><thead>
                        <tr>
                          <th width="5%">Sr.</th>
                          <th class="">List</th>
                          <th class="">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                          
                          <tr>
                            <td>1<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Type<input type="text" name="list[]" value="Type" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="4 stroke, SI Engine"></td>
                          </tr>

                          <tr>
                            <td>2<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Displacement<input type="text" name="list[]" value="Displacement" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="124cc"></td>
                          </tr>

                          <tr>
                            <td>3<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Max net power<input type="text" name="list[]" value="Max net power" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="8kW @ 7500 rpm"></td>
                          </tr>

                          <tr>
                            <td>4<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Max net torque<input type="text" name="list[]" value="Max net torque" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="10.9 N-m @ 6000 rpm"></td>
                          </tr>

                          <tr>
                            <td>5<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Fuel System<input type="text" name="list[]" value="Fuel System" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="PGM-FI"></td>
                          </tr>

                          <tr>
                            <td>6<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Bore x Stroke<input type="text" name="list[]" value="Bore x Stroke" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="50.0 X 63.1 mm"></td>
                          </tr>

                          <tr>
                            <td>7<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Compression ratio<input type="text" name="list[]" value="Compression ratio" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="10.0:1"></td>
                          </tr>

                          <tr>
                            <td>8<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Starting method<input type="text" name="list[]" value="Starting method" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Self/Kick"></td>
                          </tr>
                          
                        </tbody>
                        </table>
                      </div>

                      <div class="col-md-12" style="text-align: center;">
                        <button name="submit_engine" value="submit_engine" type="submit_engine" class="btn btn-primary"> Submit </button>
                        <a href="<?php echo site_url('admin/manage_bikes_scooters');?>" type="button" class="btn lg btn-danger btn_cancel">Cancel</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="Tax_Insurance">
               <div class="col-lg-12">  
                  <div class="row"> 
                    <form action="" method="post">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped" ><thead>
                        <tr>
                          <th width="5%">Sr.</th>
                          <th class="">List</th>
                          <th class="">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                          
                          <tr>
                            <td>1<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Transmission" style="display: none;"></td>
                            <td>Clutch Type<input type="text" name="list[]" value="Clutch Type" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Multiplate Wet Clutch"></td>
                          </tr>

                          <tr>
                            <td>2<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Transmission" style="display: none;"></td>
                            <td>No. of Gears<input type="text" name="list[]" value="No. of Gears" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="5 Gears"></td>
                          </tr>
                        </tbody>
                        </table>
                      </div>

                      <div class="col-md-12" style="text-align: center;">
                        <button name="submit_transmission" value="submit_transmission" type="submit_transmission" class="btn btn-primary"> Submit </button>
                        <a href="<?php echo site_url('admin/manage_bikes_scooters');?>" type="button" class="btn lg btn-danger btn_cancel">Cancel</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="Attachments">
               <div class="col-lg-12">  
                  <div class="row"> 
                    <form action="" method="post">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped" ><thead>
                        <tr>
                          <th width="5%">Sr.</th>
                          <th class="">List</th>
                          <th class="">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                          
                          <tr>
                            <td>1<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Tyres & brakes" style="display: none;"></td>
                            <td>Tyre Size & Type (Front)<input type="text" name="list[]" value="Tyre Size & Type (Front)" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="80/100-18 M/C 47P, Tubeless"></td>
                          </tr>

                          <tr>
                            <td>2<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Tyres & brakes" style="display: none;"></td>
                            <td>Tyre Size & Type (Rear)<input type="text" name="list[]" value="Tyre Size & Type (Rear)" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="80/100-18 M/C 54P, Tubeless"></td>
                          </tr>

                          <tr>
                            <td>3<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Tyres & brakes" style="display: none;"></td>
                            <td>Brake Size & Type (Front)<input type="text" name="list[]" value="Brake Size & Type (Front)" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Disc 240 mm, Drum 130 mm"></td>
                          </tr>

                           <tr>
                            <td>4<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Tyres & brakes" style="display: none;"></td>
                            <td>Brake Size & Type (Rear)<input type="text" name="list[]" value="Brake Size & Type (Rear)" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Drum 130 mm"></td>
                          </tr>
                          
                        </tbody>
                        </table>
                      </div>

                      <div class="col-md-12" style="text-align: center;">
                        <button name="submit_tyres_brakes" value="submit_tyres_brakes" type="submit_tyres_brakes" class="btn btn-primary"> Submit </button>
                        <a href="<?php echo site_url('admin/manage_bikes_scooters');?>" type="button" class="btn lg btn-danger btn_cancel">Cancel</a>
                      </div>
                    </form>
                  </div>
                </div>
            </div>

            <div class="tab-pane" id="Attached-to-vehicle">   
              <div class="col-lg-12">  
                  <div class="row"> 
                    <form action="" method="post">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped" ><thead>
                        <tr>
                          <th width="5%">Sr.</th>
                          <th class="">List</th>
                          <th class="">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                          
                          <tr>
                            <td>1<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Frame & Suspension" style="display: none;"></td>
                            <td>Frame Type<input type="text" name="list[]" value="Frame Type" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Diamond Type"></td>
                          </tr>

                          <tr>
                            <td>2<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Frame & Suspension" style="display: none;"></td>
                            <td>Front Suspension<input type="text" name="list[]" value="Front Suspension" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Telescopic"></td>
                          </tr>

                          <tr>
                            <td>3<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Frame & Suspension" style="display: none;"></td>
                            <td>Rear Suspension<input type="text" name="list[]" value="Rear Suspension" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Hydraulic Type"></td>
                            
                          </tr>
                        </tbody>
                        </table>
                      </div>

                      <div class="col-md-12" style="text-align: center;">
                        <button name="submit_frame_suspension" value="submit_frame_suspension" type="submit_frame_suspension" class="btn btn-primary"> Submit </button>
                        <a href="<?php echo site_url('admin/manage_bikes_scooters');?>" type="button" class="btn lg btn-danger btn_cancel">Cancel</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="Electricals">   
              <div class="col-lg-12">  
                  <div class="row"> 
                    <form action="" method="post">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped" ><thead>
                        <tr>
                          <th width="5%">Sr.</th>
                          <th class="">List</th>
                          <th class="">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                          
                          <tr>
                            <td>1<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Electricals" style="display: none;"></td>
                            <td>Battery<input type="text" name="list[]" value="Battery" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="12V, 5.0Ah"></td>
                          </tr>

                          <tr>
                            <td>2<input type="text" name="bike_scooter_id[]" value="1" style="display: none;"><input type="text" name="type[]" value="Electricals" style="display: none;"></td>
                            <td>Head lamp<input type="text" name="list[]" value="Head lamp " style="display: none;"></td>
                            <td><input type="text" name="details[]" value="LED, DC"></td>
                          </tr>
                        </tbody>
                        </table>
                      </div>

                      <div class="col-md-12" style="text-align: center;">
                        <button name="submit_electricals" value="submit_electricals" type="submit_electricals" class="btn btn-primary"> Submit </button>
                        <a href="<?php echo site_url('admin/manage_bikes_scooters');?>" type="button" class="btn lg btn-danger btn_cancel">Cancel</a>
                      </div>
                    </form>
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


    </div>
    </div>
  </form>
</section>
</div>


<script>
  initSample();
</script>