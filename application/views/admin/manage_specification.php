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
                    <form action="" method="post" enctype="multipart/form-data">
                   <div class="col-md-6">
                      <label class="control-label"> Image<span style="color: red;">*</span></label>
                      <div class="">
                        <input type="file" name="image" class="form-control" autocomplete="off">
                      </div>
                  </div>
            
                    <div class="table-responsive">
                      <br>
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
                          
                          <?php $cnt=0; foreach($engine as $row): $cnt++; ?>
                            <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['list']; ?> <input type="text" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;"><input type="text" name="bikesid[]" value="<?php echo $row['id']; ?>" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="<?php echo $row['details']; ?>"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                          </tr>
                         <?php endforeach; ?>

                          <!-- <tr>
                            <td>2<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Displacement<input type="text" name="list[]" value="Displacement" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="184.40 cc"></td>
                          </tr>

                          <tr>
                            <td>3<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Max net power<input type="text" name="list[]" value="Max net power" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="12.7 kW @ 8500 rpm"></td>
                          </tr>

                          <tr>
                            <td>4<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Max net torque<input type="text" name="list[]" value="Max net torque" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="16.1 N-m @ 6000 rpm"></td>
                          </tr>

                          <tr>
                            <td>5<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Bore<input type="text" name="list[]" value="Bore" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="61.0 mm"></td>
                          </tr>

                          <tr>
                            <td>6<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Stroke<input type="text" name="list[]" value="Stroke" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="63.09 mm"></td>
                          </tr>

                          <tr>
                            <td>7<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Fuel System<input type="text" name="list[]" value="Fuel System" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="PGM-FI"></td>
                          </tr>

                          <tr>
                            <td>8<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Compression Ratio<input type="text" name="list[]" value="Compression Ratio" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="9.5:1"></td>
                          </tr>

                          <tr>
                            <td>9<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Air filter type<input type="text" name="list[]" value="Air filter type" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Viscous Paper Filter"></td>
                          </tr>

                          <tr>
                            <td>10<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Engine" style="display: none;"></td>
                            <td>Starting method<input type="text" name="list[]" value="Starting method" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Self Start"></td>
                          </tr>-->
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
                            <td>1<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Transmission" style="display: none;"></td>
                            <td>Clutch Type<input type="text" name="list[]" value="Clutch Type" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Multiplate Wet Clutch"></td>
                          </tr>

                          <tr>
                            <td>2<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Transmission" style="display: none;"></td>
                            <td>No of Gears<input type="text" name="list[]" value="No of Gears" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="5"></td>
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
                            <td>1<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Tyres & brakes" style="display: none;"></td>
                            <td>Tyre Size (Front)<input type="text" name="list[]" value="Tyre Size (Front)" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="110/70-17 M/C 54S (Tubeless)"></td>
                          </tr>

                          <tr>
                            <td>2<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Tyres & brakes" style="display: none;"></td>
                            <td>Tyre Size (Rear)<input type="text" name="list[]" value="Tyre Size (Rear)" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="140/70- 17 M/C 66S (Tubeless)"></td>
                          </tr>

                          <tr>
                            <td>3<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Tyres & brakes" style="display: none;"></td>
                            <td>Brake Type & Size (Front)<input type="text" name="list[]" value="Brake Type & Size (Front)" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Disc - 276 mm (1 Channel ABS)"></td>
                          </tr>

                          <tr>
                            <td>4<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Tyres & brakes" style="display: none;"></td>
                            <td>Brake Type & Size (Rear)<input type="text" name="list[]" value="Brake Type & Size (Rear)" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Disc - 220 mm"></td>
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
                            <td>1<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Frame & Suspension" style="display: none;"></td>
                            <td>Frame Type<input type="text" name="list[]" value="Frame Type" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Diamond Type"></td>
                          </tr>

                          <tr>
                            <td>2<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Frame & Suspension" style="display: none;"></td>
                            <td>Front <input type="text" name="list[]" value="Front" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Upside down Fork (USD)"></td>
                          </tr>

                          <tr>
                            <td>3<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Frame & Suspension" style="display: none;"></td>
                            <td>Rear<input type="text" name="list[]" value="Rear" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Monoshock"></td>
                            
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
                            <td>1<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Electricals" style="display: none;"></td>
                            <td>Battery<input type="text" name="list[]" value="Battery" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="12V, 5.0 Ah"></td>
                          </tr>

                          <tr>
                            <td>2<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Electricals" style="display: none;"></td>
                            <td>Head lamp<input type="text" name="list[]" value="Head lamp" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="LED"></td>
                          </tr>

                           <tr>
                            <td>3<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Electricals" style="display: none;"></td>
                            <td>Tail lamp<input type="text" name="list[]" value="Tail lamp" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="LED"></td>
                          </tr>

                           <tr>
                            <td>3<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Electricals" style="display: none;"></td>
                            <td>Winkers<input type="text" name="list[]" value="Winkers" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="LED"></td>
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
</section>
</div>


<script>
  initSample();
</script>