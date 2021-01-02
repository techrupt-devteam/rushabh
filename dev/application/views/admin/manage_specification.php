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
              <?php //print_r($body_dimensions_data); die; 
              //foreach($body_dimensions_data as $value_row);
              ?>
              <div class="tab-pane active" id="tab_1">
                  <div class="col-lg-12">  
                  <div class="row"> 
                    <form action="" method="post" enctype="multipart/form-data">
                   <div class="col-md-6">
                      <label class="control-label"> Image<span style="color: red;">*</span></label>
                       <div class="">
                        <input type="file" name="image" class="form-control" autocomplete="off" <?php if($body_dimensions_data!=''){ ?> required="required" <?php } ?> >
                        <input type="hidden" name="image_name" <?php if($body_dimensions_data['image']!=''){ ?> value="<?php echo $body_dimensions_data['image']; ?>" <?php }else{ ?> value="" <?php } ?> >
                      </div>
                   
                      <br>
                      <label class="control-label">Image Title<span style="color: red;">*</span></label>
                      <div class="">
                        <input type="text" name="image_title" placeholder="Please enter image title" class="form-control"  value="<?php echo $body_dimensions_data['image_title']; ?>" autocomplete="off" required="required">
                      </div>
                  </div>
                  
                  <div class="col-md-6">
                      <label class="control-label"> Image Description<span style="color: red;">*</span></label>
                      <div class="">
                        <input type="text" name="image_description" <?php if($body_dimensions_data){ ?> value="<?php echo $body_dimensions_data['image_description']; ?>" <?php }else{ ?> value="" <?php } ?> placeholder="Please enter image description" class="form-control" autocomplete="off" required="required">
                      </div>
                  </div>
            
                    <div class="table-responsive">
                      <br>
                      <style>
                       .modal-body{
                        height: auto !important; 
                       }
                        </style>
                        <p style="text-align: right;width:100%;font-weight:bold;margin-right: 30px;"><a href="javascript:void(0);" class="btn btn-info" onclick="addDocumentRow();"><i class="la la-plus icon"></i></a></p>
                    <table id="tbl_document" class="table table-bordered table-responsive-sm">
                      <thead>
                        <tr style="text-align: center;">
                          <th width="2%">Sr</th>
                          <th width="10%">List</th>
                          <th width="10%">Details </th>
                          <th width="10%">Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no_of_document = 0;
                      if($this->input->post('list')){
                        $no_of_document = count($this->input->post('list'));
                      }
                      if(isset($body_dimensions)){
                        $no_of_dimensions = count($body_dimensions);
                      }
                      for($i=0; $i <= $no_of_dimensions; $i++){
                          $doc_id_val = set_value('doc_id['.$i.']',isset($body_dimensions[$i]['id'])? $body_dimensions[$i]['id'] : '');
                          $list_val = set_value('doc['.$i.']',isset($body_dimensions[$i]['list'])? $body_dimensions[$i]['list'] : '');
                          $details_val = set_value('doc['.$i.']',isset($body_dimensions[$i]['details'])? $body_dimensions[$i]['details'] : ''); 
                          //if($i!=$no_of_dimensions){
                          ?>
                      <tr id="tbl_document_<?=$i?>">
                        <td><?=$i+1?>
                            <input type="text" id="id_value" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;">
                             <input type="text" id="type_value" name="type[]" value="Body Dimensions" style="display: none;">
                            <input type="hidden" class="bikesid_value" name="bikesid[]" value="<?php echo $doc_id_val; ?>" style="display: none;">
                            <input type="hidden" name="total_count" value="<?php echo $no_of_dimensions; ?>">
                        </td>
                        <td>
                          <input type="text" name="list[]" class="form-control" placeholder="List" value="<?=$list_val?>" required=required>
                        </td>
                        <td>
                          <div class="input-group">
                          <input type="text" name="details[]" class="form-control" placeholder="Details" value="<?=$details_val?>" required=required>
                          </div>
                        </td>
                        <td>
                            <!-- <a href="#" data-original-title="Edit" data-toggle="modal" data-target="#myModal" class="btn btn-default openModel"><i class="la la-pencil icon"></i></a> -->
                            <button type="button" data-original-title="Edit" data-val="<?php echo $doc_id_val; ?>" data-name="<?=$list_val?>" data-details="<?=$details_val?>" data-bikes-scooters="<?php echo $bikes_scooters['id']; ?>" data-toggle="modal" data-target="#myModal" class="btn btn-default bodyDimensionModel"><i class="la la-pencil icon"></i></button>
                            <!-- <a href="#" data-original-title="Delete" data-toggle="tooltip" class="btn btn-default"><i class="la la-trash icon"></i></a> -->
                            <a href="javascript:void(0);" class="btn btn-default" onclick="removeDocumentRow('tbl_document_<?=$i?>');"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php } //} ?>
                      </tbody>
                    </table>
                      </div>
                      
                         <div class="col-md-12">
                          <label class="control-label"> Description</label>
                          <div class="">
                            <textarea name="description" class="form-control" rows="3" placeholder="Description"><?php if($body_dimensions_data){ echo $body_dimensions_data['description']; }else{ echo ""; }; ?></textarea>
                          </div>
                      </div>
                      <div class="col-md-12" style="text-align: center;"><br>
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
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="table-responsive">
                     <!--<table class="table table-bordered table-striped" ><thead>
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
                        </tbody>
                        </table> -->
                       <p style="text-align: right;width:100%;font-weight:bold;margin-right: 30px;"><a href="javascript:void(0);" class="btn btn-info" onclick="addEngineRow();"><i class="la la-plus icon"></i></a></p>
                      <table id="tbl_document1" class="table table-bordered table-responsive-sm">
                      <thead>
                        <tr style="text-align: center;">
                          <th width="2%">Sr</th>
                          <th width="10%">List</th>
                          <th width="10%">Details </th>
                          <th width="10%">Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no_of_document1 = 0;
                      if($this->input->post('list')){
                        $no_of_document1 = count($this->input->post('list'));
                      }
                      if(isset($engine)){
                        $no_of_engine = count($engine);
                      }
                      for($i=0; $i <= $no_of_engine; $i++){
                        $doc_id_val = set_value('doc_id['.$i.']',isset($engine[$i]['id'])? $engine[$i]['id'] : '');
                        $list_val = set_value('doc['.$i.']',isset($engine[$i]['list'])? $engine[$i]['list'] : '');
                        $details_val = set_value('doc['.$i.']',isset($engine[$i]['details'])? $engine[$i]['details'] : '');  ?>
                      <tr id="tbl_document1_<?=$i?>">
                        <td><?=$i+1?>
                          <input type="text" id="id_value" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;">
                           <input type="text" id="type_value" name="type[]" value="Engine" style="display: none;">
                          <input type="hidden" class="bikesid_value" name="bikesid[]" value="<?php echo $doc_id_val; ?>" style="display: none;">
                          <input type="hidden" name="total_count" value="<?php echo $no_of_engine; ?>">
                        </td>
                        <td>
                          <input type="text" name="list[]" class="form-control" placeholder="List" value="<?=$list_val?>" required=required>
                        </td>
                        <td>
                          <div class="input-group">
                          <input type="text" name="details[]" class="form-control" placeholder="Details" value="<?=$details_val?>" required=required>
                          </div>
                        </td>
                        <td>
                          <button type="button" data-original-title="Edit" data-val="<?php echo $doc_id_val; ?>" data-name="<?=$list_val?>" data-details="<?=$details_val?>" data-bikes-scooters="<?php echo $bikes_scooters['id']; ?>" data-toggle="modal" data-target="#myModal" class="btn btn-default bodyDimensionModel"><i class="la la-pencil icon"></i></button>
                          <a href="javascript:void(0);" class="btn btn-default" onclick="removeDocumentRow('tbl_document1_<?=$i?>');"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php } ?>
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
              <?php include('body_dimensions_table_js.php');?>


              <div class="tab-pane" id="Tax_Insurance">
               <div class="col-lg-12">  
                  <div class="row"> 
                    <form action="" method="post">
                    <div class="table-responsive">
                      <!-- <table class="table table-bordered table-striped" ><thead>
                        <tr>
                          <th width="5%">Sr.</th>
                          <th class="">List</th>
                          <th class="">Details</th>
                        </tr>
                        </thead>
                        <tbody>

                          <?php $cnt=0; foreach($transmission as $row): $cnt++; ?>
                            <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['list']; ?> <input type="text" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;"><input type="text" name="bikesid[]" value="<?php echo $row['id']; ?>" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="<?php echo $row['details']; ?>"><input type="text" name="type[]" value="Transmission" style="display: none;"></td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                        </table> -->
                      <p style="text-align: right;width:100%;font-weight:bold;margin-right: 30px;"><a href="javascript:void(0);" class="btn btn-info" onclick="addTransmissionRow();"><i class="la la-plus icon"></i></a></p>
                      <table id="tbl_document2" class="table table-bordered table-responsive-sm">
                      <thead>
                        <tr style="text-align: center;">
                          <th width="2%">Sr</th>
                          <th width="10%">List</th>
                          <th width="10%">Details </th>
                          <th width="10%">Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no_of_document2 = 0;
                      if($this->input->post('list')){
                        $no_of_document2 = count($this->input->post('list'));
                      }
                      if(isset($transmission)){
                        $no_of_transmission = count($transmission);
                      }
                      for($i=0; $i <= $no_of_transmission; $i++){
                        $doc_id_val = set_value('doc_id['.$i.']',isset($transmission[$i]['id'])? $transmission[$i]['id'] : '');
                        $list_val = set_value('doc['.$i.']',isset($transmission[$i]['list'])? $transmission[$i]['list'] : '');
                        $details_val = set_value('doc['.$i.']',isset($transmission[$i]['details'])? $transmission[$i]['details'] : '');  ?>
                      <tr id="tbl_document2_<?=$i?>">
                        <td><?=$i+1?>
                          <input type="text" id="id_value" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;">
                           <input type="text" id="type_value" name="type[]" value="Transmission" style="display: none;">
                          <input type="hidden" class="bikesid_value" name="bikesid[]" value="<?php echo $doc_id_val; ?>" style="display: none;">
                          <input type="hidden" name="total_count" value="<?php echo $no_of_engine; ?>">
                        </td>
                        <td>
                          <input type="text" name="list[]" class="form-control" placeholder="List" value="<?=$list_val?>" required=required>
                        </td>
                        <td>
                          <div class="input-group">
                          <input type="text" name="details[]" class="form-control" placeholder="Details" value="<?=$details_val?>" required=required>
                          </div>
                        </td>
                        <td>
                          <button type="button" data-original-title="Edit" data-val="<?php echo $doc_id_val; ?>" data-name="<?=$list_val?>" data-details="<?=$details_val?>" data-bikes-scooters="<?php echo $bikes_scooters['id']; ?>" data-toggle="modal" data-target="#myModal" class="btn btn-default bodyDimensionModel"><i class="la la-pencil icon"></i></button>
                          <a href="javascript:void(0);" class="btn btn-default" onclick="removeTransmissionRow('tbl_document2_<?=$i?>');"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php } ?>
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
                      <!-- <table class="table table-bordered table-striped" ><thead>
                        <tr>
                          <th width="5%">Sr.</th>
                          <th class="">List</th>
                          <th class="">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $cnt=0; foreach($tyres_brakes as $row): $cnt++; ?>
                            <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['list']; ?> <input type="text" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;"><input type="text" name="bikesid[]" value="<?php echo $row['id']; ?>" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="<?php echo $row['details']; ?>"><input type="text" name="type[]" value="Tyres & brakes" style="display: none;"></td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                        </table> -->
                       <p style="text-align: right;width:100%;font-weight:bold;margin-right: 30px;"><a href="javascript:void(0);" class="btn btn-info" onclick="addTyresBrakesRow();"><i class="la la-plus icon"></i></a></p>
                      <table id="tbl_document3" class="table table-bordered table-responsive-sm">
                      <thead>
                        <tr style="text-align: center;">
                          <th width="2%">Sr</th>
                          <th width="10%">List</th>
                          <th width="10%">Details </th>
                          <th width="10%">Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no_of_document3 = 0;
                      if($this->input->post('list')){
                        $no_of_document3 = count($this->input->post('list'));
                      }
                      if(isset($tyres_brakes)){
                        $no_of_tyres_brakes = count($tyres_brakes);
                      }
                      for($i=0; $i <= $no_of_tyres_brakes; $i++){
                        $doc_id_val = set_value('doc_id['.$i.']',isset($tyres_brakes[$i]['id'])? $tyres_brakes[$i]['id'] : '');
                        $list_val = set_value('doc['.$i.']',isset($tyres_brakes[$i]['list'])? $tyres_brakes[$i]['list'] : '');
                        $details_val = set_value('doc['.$i.']',isset($tyres_brakes[$i]['details'])? $tyres_brakes[$i]['details'] : '');  ?>
                      <tr id="tbl_document3_<?=$i?>">
                        <td><?=$i+1?>
                          <input type="text" id="id_value" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;">
                           <input type="text" id="type_value" name="type[]" value="Tyres & Brakes" style="display: none;">
                          <input type="hidden" class="bikesid_value" name="bikesid[]" value="<?php echo $doc_id_val; ?>" style="display: none;">
                          <input type="hidden" name="total_count" value="<?php echo $no_of_engine; ?>">
                        </td>
                        <td>
                          <input type="text" name="list[]" class="form-control" placeholder="List" value="<?=$list_val?>" required=required>
                        </td>
                        <td>
                          <div class="input-group">
                          <input type="text" name="details[]" class="form-control" placeholder="Details" value="<?=$details_val?>" required=required>
                          </div>
                        </td>
                        <td>
                          <button type="button" data-original-title="Edit" data-val="<?php echo $doc_id_val; ?>" data-name="<?=$list_val?>" data-details="<?=$details_val?>" data-bikes-scooters="<?php echo $bikes_scooters['id']; ?>" data-toggle="modal" data-target="#myModal" class="btn btn-default bodyDimensionModel"><i class="la la-pencil icon"></i></button>
                          <a href="javascript:void(0);" class="btn btn-default" onclick="removeTyresBrakesRow('tbl_document3_<?=$i?>');"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php } ?>
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
                     <!--  <table class="table table-bordered table-striped" ><thead>
                        <tr>
                          <th width="5%">Sr.</th>
                          <th class="">List</th>
                          <th class="">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $cnt=0; foreach($frame_suspension as $row): $cnt++; ?>
                            <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['list']; ?> <input type="text" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;"><input type="text" name="bikesid[]" value="<?php echo $row['id']; ?>" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="<?php echo $row['details']; ?>"><input type="text" name="type[]" value="Frame & Suspension" style="display: none;"></td>
                          </tr>
                          <?php endforeach; ?>
                         
                        </tbody>
                        </table> -->

                        <p style="text-align: right;width:100%;font-weight:bold;margin-right: 30px;"><a href="javascript:void(0);" class="btn btn-info" onclick="addFrameSuspensionRow();"><i class="la la-plus icon"></i></a></p>
                      <table id="tbl_document4" class="table table-bordered table-responsive-sm">
                      <thead>
                        <tr style="text-align: center;">
                          <th width="2%">Sr</th>
                          <th width="10%">List</th>
                          <th width="10%">Details </th>
                          <th width="10%">Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no_of_document4 = 0;
                      if($this->input->post('list')){
                        $no_of_document4 = count($this->input->post('list'));
                      }
                      if(isset($frame_suspension)){
                        $no_of_frame_suspension = count($frame_suspension);
                      }
                      for($i=0; $i <= $no_of_frame_suspension; $i++){
                        $doc_id_val = set_value('doc_id['.$i.']',isset($frame_suspension[$i]['id'])? $frame_suspension[$i]['id'] : '');
                        $list_val = set_value('doc['.$i.']',isset($frame_suspension[$i]['list'])? $frame_suspension[$i]['list'] : '');
                        $details_val = set_value('doc['.$i.']',isset($frame_suspension[$i]['details'])? $frame_suspension[$i]['details'] : '');  ?>
                      <tr id="tbl_document4_<?=$i?>">
                        <td><?=$i+1?>
                          <input type="text" id="id_value" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;">
                           <input type="text" id="type_value" name="type[]" value="Frame & Suspension" style="display: none;">
                          <input type="hidden" class="bikesid_value" name="bikesid[]" value="<?php echo $doc_id_val; ?>" style="display: none;">
                          <input type="hidden" name="total_count" value="<?php echo $no_of_engine; ?>">
                        </td>
                        <td>
                          <input type="text" name="list[]" class="form-control" placeholder="List" value="<?=$list_val?>" required=required>
                        </td>
                        <td>
                          <div class="input-group">
                          <input type="text" name="details[]" class="form-control" placeholder="Details" value="<?=$details_val?>" required=required>
                          </div>
                        </td>
                        <td>
                          <button type="button" data-original-title="Edit" data-val="<?php echo $doc_id_val; ?>" data-name="<?=$list_val?>" data-details="<?=$details_val?>" data-bikes-scooters="<?php echo $bikes_scooters['id']; ?>" data-toggle="modal" data-target="#myModal" class="btn btn-default bodyDimensionModel"><i class="la la-pencil icon"></i></button>
                          <a href="javascript:void(0);" class="btn btn-default" onclick="removeFrameSuspensionRow('tbl_document4_<?=$i?>');"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php } ?>
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
                     <!--  <table class="table table-bordered table-striped" ><thead>
                        <tr>
                          <th width="5%">Sr.</th>
                          <th class="">List</th>
                          <th class="">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                          
                          <?php $cnt=0; foreach($electricals as $row): $cnt++; ?>
                            <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['list']; ?> <input type="text" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;"><input type="text" name="bikesid[]" value="<?php echo $row['id']; ?>" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="<?php echo $row['details']; ?>"><input type="text" name="type[]" value="Electricals" style="display: none;"></td>
                          </tr>
                          <?php endforeach; ?>
                          
                        </tbody>
                        </table> -->

                        <p style="text-align: right;width:100%;font-weight:bold;margin-right: 30px;"><a href="javascript:void(0);" class="btn btn-info" onclick="addElectricalsRow();"><i class="la la-plus icon"></i></a></p>
                      <table id="tbl_document5" class="table table-bordered table-responsive-sm">
                      <thead>
                        <tr style="text-align: center;">
                          <th width="2%">Sr</th>
                          <th width="10%">List</th>
                          <th width="10%">Details </th>
                          <th width="10%">Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no_of_document5 = 0;
                      if($this->input->post('list')){
                        $no_of_document5 = count($this->input->post('list'));
                      }
                      if(isset($electricals)){
                        $no_of_electricals = count($electricals);
                      }
                      for($i=0; $i <= $no_of_electricals; $i++){
                        $doc_id_val = set_value('doc_id['.$i.']',isset($electricals[$i]['id'])? $electricals[$i]['id'] : '');
                        $list_val = set_value('doc['.$i.']',isset($electricals[$i]['list'])? $electricals[$i]['list'] : '');
                        $details_val = set_value('doc['.$i.']',isset($electricals[$i]['details'])? $electricals[$i]['details'] : '');  ?>
                      <tr id="tbl_document5_<?=$i?>">
                        <td><?=$i+1?>
                          <input type="text" id="id_value" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;">
                           <input type="text" id="type_value" name="type[]" value="Electricals" style="display: none;">
                          <input type="hidden" class="bikesid_value" name="bikesid[]" value="<?php echo $doc_id_val; ?>" style="display: none;">
                          <input type="hidden" name="total_count" value="<?php echo $no_of_engine; ?>">
                        </td>
                        <td>
                          <input type="text" name="list[]" class="form-control" placeholder="List" value="<?=$list_val?>" required=required>
                        </td>
                        <td>
                          <div class="input-group">
                          <input type="text" name="details[]" class="form-control" placeholder="Details" value="<?=$details_val?>" required=required>
                          </div>
                        </td>
                        <td>
                          <button type="button" data-original-title="Edit" data-val="<?php echo $doc_id_val; ?>" data-name="<?=$list_val?>" data-details="<?=$details_val?>" data-bikes-scooters="<?php echo $bikes_scooters['id']; ?>" data-toggle="modal" data-target="#myModal" class="btn btn-default bodyDimensionModel"><i class="la la-pencil icon"></i></button>
                          <a href="javascript:void(0);" class="btn btn-default" onclick="removeElectricalsRow('tbl_document5_<?=$i?>');"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php } ?>
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


<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="margin-top: 150px;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Edit Specification</h4>
        </div>
        <form action="" method="POST">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <label class="control-label"> List<span style="color: red;">*</span></label>
               <div class="">
                <input type="text" id="bodydimensionname" name="list" class="form-control" placeholder="List" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <label class="control-label"> Details<span style="color: red;">*</span></label>
               <div class="">
                <input type="text" id="bodydimensiondetails" name="details" class="form-control" placeholder="Details" required="required">
              </div>
            </div>
            <input type="hidden" id="bodydimensionid" name="id">
            <input type="hidden" id="bodydimensionbikesscootersid" name="bikes_scooters_id">
        </div>
        </div>
        <div class="modal-footer"><br>
          <button name="update_bodydimension" value="update_bodydimension" type="update_bodydimension" class="btn btn-primary"> Submit </button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

<!-- Modal close -->

<script>
  initSample();
</script>

