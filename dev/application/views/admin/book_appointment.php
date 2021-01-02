<div class="content-wrapper"><div class="col-md-12"><div class="row"><ol class="breadcrumb"><li><a href="<?php echo base_url(); ?>admin/secure/home"data-original-title="Go to Home"data-placement="bottom"data-toggle="tooltip"title=""><em class="fa fa-home"></em></a></li><li class="active">Book Appointment</li></ol></div></div><div class="clearfix"></div><section class="content mt-12"><div class="row"><div class="col-xs-12"><div class="panel panel-default"><div class="panel-heading">Book Appointment<div class="pull-right btn-toolbar"><div class="btn-group"><a href="<?php echo base_url('admin/book_appointment/export'); ?>"class="btn btn-primary btn-sm pull-right">Download Excel</a></div></div></div><div class="panel-body"><div class="table-responsive"><table class="table table-bordered table-striped"id="example1"><thead><tr><th>Sr</th><th class="">Name</th><th class="">Location</th><th class="">Appoinment Date</th><th class="">Status</th><th class="">Created Date</th></tr></thead><tbody><?php $cnt='';foreach($book_appointment_list as $row):$cnt++; ?><tr><td><?php echo $cnt; ?></td><td class="customer-details"><a href="#"><?php echo $row['name']; ?><div><span><i class="fa fa-envelope-o"></i></span><?php echo $row['email']; ?></div><div><span><i class="la la-phone"></i></span><?php echo $row['mobile']; ?></div></a></td><td><?php echo $row['location']; ?></td><td><?php $originalDate=$row['appoinment_date'];$newDate=date("d-m-Y",strtotime($originalDate));echo $newDate; ?></td> 
  <td>
    <div class="col-md-12">
      <input type="hidden"value="<?php echo $row['id']; ?>"> 
      <select id="status"id="id"name="status"name="id"class="form-control select2"data="<?php echo $row['id']; ?>"onchange="selectStatus(this)">
        <option value="Select">Select</option>
        <option value="Hot"  <?php if($row['status']=='Hot'){ ?> selected="selected" <?php } ?>>Hot</option>
        <option value="Cold" <?php if($row['status']=='Cold'){ ?> selected="selected" <?php } ?>>Cold</option>
        <option value="Warm" <?php if($row['status']=='Warm'){ ?> selected="selected" <?php } ?>>Warm</option>
        <option value="Done" <?php if($row['status']=='Done'){ ?> selected="selected" <?php } ?>>Done</option>
        <option value="Lost" <?php if($row['status']=='Lost'){ ?> selected="selected" <?php } ?>>Lost</option>
        <option value="Pending" <?php if($row['status']=='Pending'){ ?> selected="selected" <?php } ?>>Pending</option>
      </select>
    </div>
  </td>
  <td>
    <?php $originalDate=$row['created_at'];$newDate=date("d-m-Y",strtotime($originalDate));echo $newDate; ?>
      
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
<div class="fade modal"role="dialog"id="add-trip">
  <div class="modal-dialog modal-dialog-middle">
    <div class="modal-content">
      <div class="modal-header bg-black">
        <button class="close"type="button"data-dismiss="modal">
          <img src="dist/img/close.svg"width="18px">
        </button><h4 class="modal-title">Create Trip Type</h4>
      </div><div class="modal-body overflow">
        <div class="row"><div class="col-md-6">
          <div class="mb-12"><label class="control-label margin-btm">Vehicle Part Number</label><input class="form-control"value=""placeholder="Vehicle Part Number"autocomplete="off"maxlength="30"></div></div><div class="col-md-6"><div class="mb-12"><label class="control-label margin-btm">Part Name</label><input class="form-control"value=""placeholder="Part Name"autocomplete="off"maxlength="30"></div></div><div class="col-md-6"><div class="mb-12"><label class="control-label margin-btm">Part Type</label><select class="form-control select2 select2-hidden-accessible"tabindex="-1"aria-hidden="true"><option>Truck</option><option>Trolley</option></select></div></div></div><div class="clearfix"></div></div><div class="modal-footer"><button class="btn btn-primary"type="button">Submit</button></div></div></div></div><script type="text/javascript">function edit_popop(a,t){$(a.target).hasClass("special_td")||$("#add-trip").modal("show")}function selectStatus(a){var t=$(a).val(),l=$(a).attr("data");console.log(t),""!=t?$.ajax({url:"<?php echo base_url("admin/book_appointment/savedata"); ?>",type:"POST",data:{status:t,id:l},cache:!1,success:function(a){var a=JSON.parse(a);console.log(a),window.location.href="<?php echo base_url("admin/book_appointment"); ?>",alert("Status updated successfully")}}):alert("Please fill all the field !")}</script>