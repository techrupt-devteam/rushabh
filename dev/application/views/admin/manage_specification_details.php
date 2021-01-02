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
              <?php foreach($body_dimensions as $row); ?>
              <div class="tab-pane active" id="tab_1">
                  <div class="col-lg-12">  
                  <div class="row"> 
                    <form action="" method="post" enctype="multipart/form-data">
                   <div class="col-md-6">
                      <label class="control-label"> Image<span style="color: red;">*</span></label>
                      <div class="">
                        <input type="file" name="image" class="form-control" autocomplete="off" value="<?php echo isset($row['image'])?? ''; ?>" <?php if(isset($row['image'])==''){ ?> required="required" <?php } ?>>
                        <input type="hidden" name="image_name" value="<?php echo isset($row['image']); ?>">
                        <?php if(isset($row['image'])){ ?>
                        <a href="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo isset($row['image']); ?>" target="_tab">View Image</a><?php } ?>
                      </div>
                      
                      <label class="control-label">Image Title<span style="color: red;">*</span></label>
                      <div class="">
                        <input type="text" name="image_title" placeholder="Please enter image title" class="form-control" value="<?php echo isset($row['image_title']) ?? ''; ?>" autocomplete="off" required="required">
                      </div>
                  </div>
                  
                  <div class="col-md-6">
                      <label class="control-label"> Image Description<span style="color: red;">*</span></label>
                      <div class="">
                        <input type="text" name="image_description" value="<?php isset($row['image_description']) ?? ''; ?>" placeholder="Please enter image description" class="form-control" autocomplete="off" required="required">
                      </div>
                  </div>
            
                    <div class="table-responsive">
                      <br>
                      <style>
                        .para_box{
                          background-color: #e8e9ef;
                          padding: 5px;
                          width: 100%;
                          cursor: pointer;
                        }
                        .modal-body{
                          height: 500px;
                          overflow-y: auto;
                        }
                        .textalign{
                          text-align: right;
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
                    <?php $no_of_document = 1;
                      if($this->input->post('list')){
                        $no_of_document = count($this->input->post('list'));
                      }
                      if(isset($body_dimensions)){
                        $no_of_dimensions= count($body_dimensions);
                      }
                      for($i=0; $i <= $no_of_dimensions; $i++){
                          $doc_id_val = set_value('doc_id['.$i.']',isset($body_dimensions[$i]['id'])? $body_dimensions[$i]['id'] : '');
                          $list_val = set_value('doc['.$i.']',isset($body_dimensions[$i]['list'])? $body_dimensions[$i]['list'] : '');
                          $details_val = set_value('doc['.$i.']',isset($body_dimensions[$i]['details'])? $body_dimensions[$i]['details'] : '');
                          
                      ?>
                      <tr id="tbl_document_<?=$i?>">
                        <td><?=$i+1?>
                            <input type="text" id="id_value" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;">
                             <input type="text" id="type_value" name="type[]" value="Body Dimensions" style="display: none;">
                            <!--<input type="text" name="bikesid[]" value="<?php echo $row['id']; ?>" style="display: none;">-->
                        </td>
                        <td>
                          <?php if($this->router->fetch_method()=="edit"){ ?>
                            <input type="hidden" name="document_id[]" value="">
                          <?php } ?>
                          <input type="text" name="list[]" class="form-control" placeholder="List" value="<?=$list_val?>">
                        </td>
                        <td>
                          <div class="input-group">
                          <input type="text" name="details[]" class="form-control" placeholder="Details" value="<?=$details_val?>">
                          <!--<span class="input-group-btn">
                            <button type="button" id="btn_upload_doc_file_<?=$i?>" data-loading-text="Loading..." onclick="loadDocFile(<?=$i?>);" class="btn btn-primary"><i class="fa fa-upload" style="color:white;"></i></button>
                          </span>-->
                          </div>
                          <span class="text-danger" id="doc_file_error_<?=$i?>"></span>
                        </td>
                        
                        <td>
                          <?php if($i==0){ ?>
                            <!--<a href="javascript:void(0);" onclick="removeDocumentRow('tbl_document_<?=$i?>');"><i class="fa fa-trash"></i></a>-->
                            <a href="#" data-original-title="Edit" data-toggle="tooltip" class="btn btn-default"><i class="la la-pencil icon"></i></a>
                            <a href="#" data-original-title="Edit" data-toggle="tooltip" class="btn btn-default"><i class="la la-trash icon"></i></a>
                          <?php }  else{ ?>
                            
                          <?php } ?>
                        </td>
                      </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                      </div>
                      
                      <?php include('body_dimensions_table_js.php');?>
                    
                         <div class="col-md-12">
                          <label class="control-label"> Description</label>
                          <div class="">
                            <textarea name="description" class="form-control" rows="3" placeholder="Description"><?php echo isset($row['description']); ?></textarea>
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

                          <?php $cnt=0; foreach($transmission as $row): $cnt++; ?>
                            <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['list']; ?> <input type="text" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;"><input type="text" name="bikesid[]" value="<?php echo $row['id']; ?>" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="<?php echo $row['details']; ?>"><input type="text" name="type[]" value="Transmission" style="display: none;"></td>
                          </tr>
                          <?php endforeach; ?>
                          <!-- <tr>
                            <td>1<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Transmission" style="display: none;"></td>
                            <td>Clutch Type<input type="text" name="list[]" value="Clutch Type" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="Multiplate Wet Clutch"></td>
                          </tr>

                          <tr>
                            <td>2<input type="text" name="bike_scooter_id[]" value="7" style="display: none;"><input type="text" name="type[]" value="Transmission" style="display: none;"></td>
                            <td>No of Gears<input type="text" name="list[]" value="No of Gears" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="5"></td>
                          </tr> -->
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
                          <?php $cnt=0; foreach($tyres_brakes as $row): $cnt++; ?>
                            <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['list']; ?> <input type="text" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;"><input type="text" name="bikesid[]" value="<?php echo $row['id']; ?>" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="<?php echo $row['details']; ?>"><input type="text" name="type[]" value="Tyres & brakes" style="display: none;"></td>
                          </tr>
                          <?php endforeach; ?>
                          <!-- <tr>
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
                          </tr> -->
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
                          <?php $cnt=0; foreach($frame_suspension as $row): $cnt++; ?>
                            <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['list']; ?> <input type="text" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;"><input type="text" name="bikesid[]" value="<?php echo $row['id']; ?>" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="<?php echo $row['details']; ?>"><input type="text" name="type[]" value="Frame & Suspension" style="display: none;"></td>
                          </tr>
                          <?php endforeach; ?>
                         <!--  <tr>
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
                            
                          </tr> -->
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
                          
                          <?php $cnt=0; foreach($electricals as $row): $cnt++; ?>
                            <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['list']; ?> <input type="text" name="id[]" value="<?php echo $bikes_scooters['id']; ?>" style="display: none;"><input type="text" name="bikesid[]" value="<?php echo $row['id']; ?>" style="display: none;"></td>
                            <td><input type="text" name="details[]" value="<?php echo $row['details']; ?>"><input type="text" name="type[]" value="Electricals" style="display: none;"></td>
                          </tr>
                          <?php endforeach; ?>
                          <!-- <tr>
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
                          </tr> -->
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

<script>
    function loadDocFile(docNo) {
  $('#form-upload').remove();
  
  $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" accept=".pdf" /></form>');

  $('#form-upload input[name=\'file\']').trigger('click');
  
  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }
  
  timer = setInterval(function() {
    if ($('#form-upload input[name=\'file\']').val() != '') {
      clearInterval(timer);   
      
      $.ajax({
        //url: '<?php //echo base_url('admission/doc_file_upload'); ?>',        
        type: 'post',   
        dataType: 'json',
        data: new FormData($('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,   
        beforeSend: function() {
          $('#btn_upload_doc_file_'+docNo).html('<i class="fa fa-spinner fa-spin fa-1x fa-fw" style="color:white;"></i>');
        },
        complete: function() {
          $('#btn_upload_doc_file_'+docNo).html('<i class="fa fa-upload" style="color:white;"></i>');
        },  
        success: function(json) {
          $('input[id=\'doc_file_'+docNo+'\']').attr('value', json['filename']);
          $('#doc_file_error_'+docNo).html(json['file_error']);
        },        
      });
    }
  }, 500);
}


</script>