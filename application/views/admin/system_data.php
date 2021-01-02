<style type="text/css">
  .bell{
  -webkit-animation: ring 4s .7s ease-in-out infinite;
  -webkit-transform-origin: 50% 4px;
  -moz-animation: ring 4s .7s ease-in-out infinite;
  -moz-transform-origin: 50% 4px;
  animation: ring 4s .7s ease-in-out infinite;
  transform-origin: 50% 4px;
}

@-webkit-keyframes ring {
  0% { -webkit-transform: rotateZ(0); }
  1% { -webkit-transform: rotateZ(30deg); }
  3% { -webkit-transform: rotateZ(-28deg); }
  5% { -webkit-transform: rotateZ(34deg); }
  7% { -webkit-transform: rotateZ(-32deg); }
  9% { -webkit-transform: rotateZ(30deg); }
  11% { -webkit-transform: rotateZ(-28deg); }
  13% { -webkit-transform: rotateZ(26deg); }
  15% { -webkit-transform: rotateZ(-24deg); }
  17% { -webkit-transform: rotateZ(22deg); }
  19% { -webkit-transform: rotateZ(-20deg); }
  21% { -webkit-transform: rotateZ(18deg); }
  23% { -webkit-transform: rotateZ(-16deg); }
  25% { -webkit-transform: rotateZ(14deg); }
  27% { -webkit-transform: rotateZ(-12deg); }
  29% { -webkit-transform: rotateZ(10deg); }
  31% { -webkit-transform: rotateZ(-8deg); }
  33% { -webkit-transform: rotateZ(6deg); }
  35% { -webkit-transform: rotateZ(-4deg); }
  37% { -webkit-transform: rotateZ(2deg); }
  39% { -webkit-transform: rotateZ(-1deg); }
  41% { -webkit-transform: rotateZ(1deg); }

  43% { -webkit-transform: rotateZ(0); }
  100% { -webkit-transform: rotateZ(0); }
}

@-moz-keyframes ring {
  0% { -moz-transform: rotate(0); }
  1% { -moz-transform: rotate(30deg); }
  3% { -moz-transform: rotate(-28deg); }
  5% { -moz-transform: rotate(34deg); }
  7% { -moz-transform: rotate(-32deg); }
  9% { -moz-transform: rotate(30deg); }
  11% { -moz-transform: rotate(-28deg); }
  13% { -moz-transform: rotate(26deg); }
  15% { -moz-transform: rotate(-24deg); }
  17% { -moz-transform: rotate(22deg); }
  19% { -moz-transform: rotate(-20deg); }
  21% { -moz-transform: rotate(18deg); }
  23% { -moz-transform: rotate(-16deg); }
  25% { -moz-transform: rotate(14deg); }
  27% { -moz-transform: rotate(-12deg); }
  29% { -moz-transform: rotate(10deg); }
  31% { -moz-transform: rotate(-8deg); }
  33% { -moz-transform: rotate(6deg); }
  35% { -moz-transform: rotate(-4deg); }
  37% { -moz-transform: rotate(2deg); }
  39% { -moz-transform: rotate(-1deg); }
  41% { -moz-transform: rotate(1deg); }

  43% { -moz-transform: rotate(0); }
  100% { -moz-transform: rotate(0); }
}

@keyframes ring {
  0% { transform: rotate(0); }
  1% { transform: rotate(30deg); }
  3% { transform: rotate(-28deg); }
  5% { transform: rotate(34deg); }
  7% { transform: rotate(-32deg); }
  9% { transform: rotate(30deg); }
  11% { transform: rotate(-28deg); }
  13% { transform: rotate(26deg); }
  15% { transform: rotate(-24deg); }
  17% { transform: rotate(22deg); }
  19% { transform: rotate(-20deg); }
  21% { transform: rotate(18deg); }
  23% { transform: rotate(-16deg); }
  25% { transform: rotate(14deg); }
  27% { transform: rotate(-12deg); }
  29% { transform: rotate(10deg); }
  31% { transform: rotate(-8deg); }
  33% { transform: rotate(6deg); }
  35% { transform: rotate(-4deg); }
  37% { transform: rotate(2deg); }
  39% { transform: rotate(-1deg); }
  41% { transform: rotate(1deg); }

  43% { transform: rotate(0); }
  100% { transform: rotate(0); }
}
@media only screen and (max-width: 600px) {
	.panel-heading{
		display: inline-block;
		height: auto !important;
	}
	.btn-toolbar.pull-right {
		margin-top: 10px;
		display: inline-block;
		float: none !important;
	}
}
</style>
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
      <div class="panel panel-default" style="height: auto;display: inline-block;width:100%">
           <form action="<?php echo base_url('admin/system_data/export');?>" method="post">
        <div class="panel-heading">
         <div class="row pull-left" style="width: 100%;max-width: 480px;">
          <div class="col-md-6" style="display: inline-flex;padding-right: 0px;margin-bottom: 5px;">
        	<span style="padding: 5px 10px 0px 0px;font-size: 14px;"> From </span> <input type="date" name="from_date" class="form-control"/>
  	      </div>  
    	  <div class="col-md-6" style="display: inline-flex;padding-right:0px">
          	<span style="padding: 5px 10px 0px 0px;font-size: 14px;width: 62px;"> To </span> <input type="date" name="to_date" class="form-control"/>
          </div>	
         </div>   
                
                
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <strong>
                    <a href="<?php echo site_url('admin/system_data/add');?>" class="btn btn-info pull-right"><i class="la la-plus icon"></i></a>&nbsp;
                    <button type="submit" class="btn btn-primary">Download Excel</button>
                    <!-- <a href="" class="btn btn-primary">Download Excel</a> -->
                  </strong>
                  </div>
            </div>
        </div>
        </form>
        <div class="panel-body">
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr >
                      <th>#</th>
                      <th class="">Detail's</th>
                      <th class="">Source</th>
                      <th class="">Model&nbsp;Name</th>
                      <th class="">Follow&nbsp;Date</th>
                      <th class="">Status </th>
                      <th class="">SM</th>
                      <th class="">RM</th>
                      <th class="">Status/Action</th>
                      <!-- <th class="">Action</th> -->
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($system_data_list as $row): $cnt++; ?>
                  <tr ><!-- data-href="add-party.php" class="cursor-pointer" -->
                   <td><?php echo $cnt; ?></td>
                   <td>
                    <div style="font-weight: 600;color: #136ab7;">
                     <a href="<?php echo base_url('admin/system_data/view'); ?>/<?php echo base64_encode($row['id']); ?>"><?php echo $row['name']; ?></a>
                    </div>
                    <div>
                      <span style="color: #975050;margin-right: 5px;"><i class="la la-phone"></i></span>
                      <?php echo $row['mobile']; ?>          
                    </div>
                    <div>
                      <div><span style="color: #666;font-size: 12px;">Enquiry no </span> <span><?php echo $row['enquiry_no']; ?></span> </div>
                      <div><span style="color: #666;font-size: 12px;">Enquiry Date </span> 
                        <span>
                          <?php  $originalDate = $row['enquiry_date'];
                              $newDate = date("d-m-Y", strtotime($originalDate));

                              if($originalDate){
                                echo $newDate;
                              }else{
                                echo '-';
                              }
                              ?>
                        </span>
                      </div>
                    </div>
                   </td>
                   
                   <td><?php echo $row['source']; ?></td>
                   <td><?php echo $row['model']; ?></td>
                   <td><?php $originalDate = $row['follow_up_date'];
                              $newDate = date("d-m-Y", strtotime($originalDate)); 
                              if($originalDate){
                                echo $newDate;
                              }else{
                                echo '-';
                              }?></td>
                   <td>
                    <div class="col-md-12">
                      <input type="hidden"  value="<?php echo $row['id']; ?>">
                       <select class="form-control" name="status" onchange="selectStatus(this);" id="status" data="<?php echo $row['id']; ?>" name="id" id="id" style="height: 34px;padding: 0;">
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
                  <td><?php echo $row['rm']; ?></td>
                   
                   <td>
                    <?php $data = $this->db->query("select TIMESTAMPDIFF(MINUTE,created_at,NOW()) as t from system_data where id='".$row['id']."'")->result();
                    $time ='';
                   foreach($data as $value)
                   {
                    $time = $value->t;
                    
                  }
                    if($row['status']=="" && 30 <= $time){
                     ?>
                    
                    <a href="javascript:;" id="colourButton" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Call Status">
                      <em class="fa fa-bell bell"></em>
                    </a>
                  <?php
                  } else{?>
                 
                      <a href="javascript:;" id="colourButton" class="btn btn-default"  data-toggle="tooltip" data-placement="bottom" title="Call Status">
                        <em class="fa fa-bell"></em></a> 
                      <?php } ?>
                 
                   
                    <a href="<?php echo base_url(); ?>admin/system_data/edit/<?php echo $row['id'] ?>" class="btn btn-default"  data-toggle="tooltip" data-placement="bottom" title="Edit">
                      <i class="fa fa-pencil"></i>
                    </a>&nbsp;
                    <a href="<?php echo base_url(); ?>admin/system_data/delete/<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record ?');" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Delete">
                      <i class="la la-trash icon"></i>
                    </a>
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
