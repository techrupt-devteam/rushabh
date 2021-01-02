<div class="content-wrapper">
 <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">System Data</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
    <div class="col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading"> System Data
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <strong><a href="<?php echo site_url('admin/system_data/add');?>" class="btn btn-info pull-right"><i class="la la-plus icon"></i></a></strong>
                  </div>
            </div>
        </div>
        <div class="panel-body">
            <!--https://stackoverflow.com/questions/41529928/time-difference-in-php-->
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr >
                      <th >Sr.No</th>
                      <th class="">Name</th>
                      <!-- <th class="">Enquiry no </th> -->
                      <th class="">E.&nbsp;Date</th>
                      <th class="">Mobile</th>
                      <th class="">Source</th>
                      <th class="">Model&nbsp;Name</th>
                      <th class="">Follow&nbsp;Date</th>
                      <th class="">Status </th>
                      <th class="">Contact&nbsp;to</th>
                      <th class="">Action</th>
                      <th class="">Call status</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($system_data_list as $row): $cnt++; ?>
                  <tr ><!-- data-href="add-party.php" class="cursor-pointer" -->
                   <td><?php echo $cnt; ?></td>
                   <td><?php echo $row['name']; ?></td>
                   <!-- <td><?php echo $row['enquiry_no']; ?></td> -->
                   <td><?php $originalDate = $row['enquiry_date'];
                              $newDate = date("d-m-Y", strtotime($originalDate)); 
                              if($originalDate){
                                echo $newDate;
                              }else{
                                echo '-';
                              }
                              ?></td>
                   <td><?php echo $row['mobile']; ?></td>
                   <td><?php echo $row['source']; ?></td>
                   <td><?php echo $row['model']; ?></td>
                   <td><?php $originalDate = $row['follow_up_date'];
                              $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; 
                              if($originalDate){
                                echo $newDate;
                              }else{
                                echo '-';
                              }?></td>
                   <td>
                    <div class="col-md-12">
                      <input type="hidden"  value="<?php echo $row['id']; ?>">
                       <select class="form-control" name="status" onchange="selectStatus(this);" id="status" data="<?php echo $row['id']; ?>" name="id" id="id">
                        <option value="">Select</option>
                        <option  <?php if($row['status'] == 'Hot'){  ?> selected="selected" <?php } ?> value="Hot">Hot</option>
                        <option  <?php if($row['status'] == 'Cold'){  ?> selected="selected" <?php } ?> value="Cold">Cold</option>
                        <option  <?php if($row['status'] == 'Warm'){  ?> selected="selected" <?php } ?> value="Warm">Warm</option>
                        <option  <?php if($row['status'] == 'Booked'){  ?> selected="selected" <?php } ?> value="Booked">Booked</option>
                         <option  <?php if($row['status'] == 'Invoice'){  ?> selected="selected" <?php } ?> value="Invoice">Invoice</option>
                        <option  <?php if($row['status'] == 'Lost'){  ?> selected="selected" <?php } ?> value="Lost">Lost</option>
                        <option  <?php if($row['status'] == 'Pending'){  ?> selected="selected" <?php } ?> value="Pending">Pending</option>
                         </select>
                    </div>
                  </td>
                  <td><?php echo $row['contact_to']; ?></td>
                   <td>
                    <a href="<?php echo base_url(); ?>admin/system_data/edit/<?php echo $row['id'] ?>" class="btn btn-default"><i class="fa fa-pencil"></i></a>&nbsp;<a href="<?php echo base_url(); ?>admin/system_data/delete/<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record ?');" class="btn btn-default"><i class="la la-trash icon"></i></a>
                  </td> 
                   <td>
                    <?php $data = $this->db->query("select TIMESTAMPDIFF(MINUTE,created_at,NOW()) as t from system_data where id='".$row['id']."'")->result();
                    $time ='';
                   foreach($data as $value)
                   {
                    $time = $value->t;
                    
                  }
                    if($time > 30 && $row['status']==" "){
                     ?>
                    
                    <a href="javascript:;" id="colourButton" class="btn btn-danger"><em class="fa fa-bell" style=""></em></a>
                  <?php
                  } else{?>
                 
                      <a href="javascript:;" id="colourButton" class="btn btn-default"><em class="fa fa-bell" style=""></em></a> 
                      <?php } ?>
                 
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                  
                </table>
              </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>

<script type="text/javascript">
  function edit_popop(e,category_id){      
    if(!$(e.target).hasClass('special_td')) {
      $('#add-trip').modal('show');
    }
  }

  function selectStatus(el)
  {
    var status = $(el).val();
    var id = $(el).attr('data');
    console.log(status);
    if(status!=""){
     
      $.ajax({
        url: "<?php echo base_url("admin/system_data/savedata");?>",
        type: "POST",
        data: {
          status: status,
          id: id
        },
        cache: false,
        success: function(dataResult){
          var dataResult = JSON.parse(dataResult);

          console.log(dataResult);
          window.location.href="<?php echo base_url("admin/system_data");?>";
         alert('Status updated successfully');
          
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }
}


</script>
