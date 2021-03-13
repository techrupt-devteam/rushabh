<div class="content-wrapper">
 <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Manage Booking</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"> Manage Booking
					<div class="btn-toolbar pull-right">
	              <div class="btn-group"> 
		               <a href="<?php echo base_url('admin/manage_booking/export');?>" class="btn btn-primary btn-sm pull-right">Download Excel</a>
                   <a href="<?php echo base_url('admin/manage_booking/export_offer');?>" class="btn btn-danger btn-sm pull-right" style="margin-right: 15px;">Download Offer Detail</a>
		            </div>
		        </div>
				</div>
				<div class="panel-body">
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr >
                      <th>Sr.</th>
                      <th class="">Customer</th>
                      <th class="">Offer&nbsp;Item</th>
                      <th class="">Booking&nbsp;Id</th>
                      <th class="">City</th>
                      <th class="">Booking&nbsp;Date</th>
                      <th class="">DOB</th>
                      <th class="">Payment&nbsp;Status</th>
                      <th class="">Delivery&nbsp;Status</th>
                      <th class="">Offer&nbsp;Status</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($booking_list as $row): $cnt++; ?>
                   <tr>
                   <td value="<?php echo $row['id']; ?>"><?php echo $cnt; ?></td>
                   <td class="customer-details">
                    <a href="<?php echo base_url('admin/manage_booking/view_booking'); ?>/<?php echo base64_encode($row['id']); ?>"><?php echo $row['name']; ?>
                     <div><span><i class="fa fa-envelope-o"></i></span><?php echo $row['email']; ?></div>
                     <div><span><i class="la la-phone"></i></span><?php echo $row['mobile']; ?></div>  
                    </a> 
                  </td>
                  <td><?php if($row['item']){ echo $row['item']; }else{ echo "-"; } ?></td>
                  <td><?php if($row['booking_id']){ echo $row['booking_id']; }else{ echo "-"; } ?></td>
                  <td><?php echo $row['city']; ?></td>
                  <td style="text-align: center;"><?php $originalDate = $row['booking_date'];
                    if($originalDate!='null'){
                              $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; 
                            }else{
                              echo '-';
                            }?></td>
                    <td style="text-align: center;"><?php $originalDate = $row['dob'];
                    if($originalDate!='null' && $originalDate!=''){
                              $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; 
                            }else{
                              echo '-';
                            }?></td>
                   <td><?php echo $row['payment_status']; ?></td>
                   <td>
                    <div class="col-md-12">
                      <input type="hidden" value="<?php echo $row['id']; ?>">
                      <select class="form-control" name="status" onchange="selectStatus(this);" id="status" data="<?php echo $row['id']; ?>" name="id" id="id">
                        <option value="Select">Select</option>
                        <option <?php if($row['delivery_status'] == 'Delivered'){  ?> selected="selected" <?php } ?> value="Delivered">Delivered</option>
                        <option <?php if($row['delivery_status'] == 'Non Delivered'){  ?> selected="selected" <?php } ?> value="Non Delivered">Non Delivered</option>
                      </select>
                    </div>
                  </td>
                  <td>
                    <div class="col-md-12">
                      <input type="hidden" value="<?php echo $row['id']; ?>">
                      <select class="form-control" name="offer_status" onchange="selectOfferStatus(this);" id="offer_status" data="<?php echo $row['id']; ?>" data1="<?php echo $row['offer_item_id']; ?>">
                         <option value="Select">Select</option>
                         <option <?php if($row['offer_status'] == 'Delivered'){  ?> selected="selected" <?php } ?> value="Delivered">Delivered</option>
                         <option <?php if($row['offer_status'] == 'Non Delivered'){  ?> selected="selected" <?php } ?> value="Non Delivered">Non Delivered</option>
                      </select>
                    </div>
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
  function selectStatus(el)
  {
    var status = $(el).val();
    var id = $(el).attr('data');
    console.log(status);
    if(status!=""){
      $.ajax({
        url: "<?php echo base_url("admin/manage_booking/savedata");?>",
        type: "POST",
        data: { status: status, id: id },
        cache: false,
        success: function(dataResult){
          console.log(dataResult);
          var dataResult = JSON.parse(dataResult);
          window.location.href="<?php echo base_url("admin/manage_booking");?>";
          alert('Status updated successfully');
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }
}

function selectOfferStatus(el)
{
  var offer_status = $(el).val();
  var id = $(el).attr('data');
  var offer_id = $(el).attr('data1');
  if(offer_status!=""){
    $.ajax({
      url: "<?php echo base_url("admin/manage_booking/saveofferdata");?>",
      type: "POST",
      data: { offer_status: offer_status,id: id,offer_id:offer_id },
      cache: false,
      success: function(dataResult){
        console.log(dataResult);
        
        var dataResult = JSON.parse(dataResult);
        window.location.href="<?php echo base_url("admin/manage_booking");?>";
        alert('Offer status updated successfully');
      }
    });
  }
  else{
    alert('Please fill all the field !');
  }
}
</script>
