
<div class="content-wrapper">
 <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Contact Us</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"> Contact Us
					<div class="btn-toolbar pull-right">
	              <div class="btn-group"> 
		           <!--  <a data-toggle="tooltip" data-placement="bottom" class="btn btn-default" data-original-title="Refresh"> <i class="fa fa-refresh"></i>  </a> 
		            <a class="btn btn-default btn btn-circle show-tooltip" href="add-party.php"  data-original-title="Add Party"> <i class="fa fa-plus"></i> </a> 
	              <a class="btn btn-default" data-toggle="tooltip" data-placement="bottom" href="" data-original-title="Deactive multiple records"> <i class="fa fa-lock"></i> </a> 
		              <a class="btn btn-default" title="" data-toggle="tooltip" data-placement="bottom" href="" data-original-title="Active multiple records"> <i class="fa fa-unlock"></i> </a>
		              <a class="btn btn-default" title="" data-toggle="tooltip" data-placement="bottom" href="#" data-original-title="Delete"> <i class="fa fa-trash-o"></i> 
		              </a>  -->
                   <a href="<?php echo base_url('admin/contact_us/export');?>" class="btn btn-primary btn-sm pull-right">Download Excel</a>
		              </div>
		        </div>
				</div>
				<div class="panel-body">
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr >
                      <th >Sr</th>
                      <th class="">Name</th>
                      <th class="">Email </th>
                      <th class="">Mobile </th>
                      <th class="">Status</th>
                      <th class="">Created Date </th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($contact_us_list as $row): $cnt++; ?>
                  <tr ><!-- data-href="add-party.php" class="cursor-pointer" -->
                   <td><?php echo $cnt; ?></td>
                   <td><?php echo $row['name']; ?></td>
                   <td><?php echo $row['email']; ?></td>
                   <td><?php echo $row['mobile']; ?></td>
                    <td>
                    <div class="col-md-12">
                      <input type="hidden"  value="<?php echo $row['id']; ?>">
                      <select class="form-control select2" name="status" onchange="selectStatus(this);" id="status" data="<?php echo $row['id']; ?>" name="id" id="id">
                        <option value="Select">Select</option>
                        <option <?php if($row['status'] == 'Hot'){  ?> selected="selected" <?php } ?> value="Hot">Hot</option>
                        <option <?php if($row['status'] == 'Cold'){  ?> selected="selected" <?php } ?> value="Cold">Cold</option>
                        <option <?php if($row['status'] == 'Warm'){  ?> selected="selected" <?php } ?> value="Warm">Warm</option>
                        <option <?php if($row['status'] == 'Done'){  ?> selected="selected" <?php } ?> value="Done">Done</option>
                        <option <?php if($row['status'] == 'Lost'){  ?> selected="selected" <?php } ?> value="Lost">Lost</option>
                        <option <?php if($row['status'] == 'Pending'){  ?> selected="selected" <?php } ?> value="Pending">Pending</option>
                      </select>
                    </div>
                  </td>   
                  <td style="text-align: center;"><?php $originalDate = $row['created_at'];
                              $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?></td>     
                   
				           
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

<div id="add-trip" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-middle">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-black">
        <button type="button" class="close" data-dismiss="modal"><img src="dist/img/close.svg" width="18px"></button>
        <h4 class="modal-title">Create Trip Type </h4>
      </div>
      <div class="modal-body overflow">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-12">
              <label class="control-label margin-btm"> Vehicle Part Number </label>
              <input type="text" value="" class="form-control" placeholder="Vehicle Part Number" autocomplete="off" maxlength="30">
           </div>
          </div>
          <div class="col-md-6">
            <div class="mb-12">
              <label class="control-label margin-btm">Part Name</label>
              <input type="text" value="" class="form-control" placeholder="Part Name" autocomplete="off" maxlength="30">
           </div>
          </div>
          <div class="col-md-6">
            <div class="mb-12">
              <label class="control-label margin-btm">Part Type</label>
              <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                <option>Truck</option>
                <option>Trolley</option>
              </select>
           </div>
          </div>
        </div>
       <div class="clearfix"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>

  </div>
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
        url: "<?php echo base_url("admin/contact_us/savedata");?>",
        type: "POST",
        data: {
          status: status,
          id: id
        },
        cache: false,
        success: function(dataResult){
          var dataResult = JSON.parse(dataResult);

          console.log(dataResult);
          window.location.href="<?php echo base_url("admin/contact_us");?>";
          alert('Status updated successfully');
          /*if(dataResult.statusCode==200){
            $("#butsave").removeAttr("disabled");
            $('#fupForm').find('input:text').val('');
            $("#success").show();
            $('#success').html('Data added successfully !');            
          }
          else if(dataResult.statusCode==201){
             alert("Error occured !");
          }*/
          
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }


  }
</script>
