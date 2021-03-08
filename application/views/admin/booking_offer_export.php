<?php $filename ="booking_offer_export.xls";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
?><table class="table table-striped table-bordered table-hover" id="sample_6" width="100%" border="1">
<thead>
<tr>
    <th width="4%" colspan="1" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Rendering engine: activate to sort column ascending" role="columnheader" tabindex="0">Sr. No.</th>
    <th width="11%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Full Name</th>
    
    <th width="11%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Offer Item</th>
    <th width="11%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Booking Id</th>

    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Email</th>
    <th width="15%" colspan="1" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Mobile No</th>
    <th width="14%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >City</th>
    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Address</th>
    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Car</th>
    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Variant</th>
    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Color</th>
    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >On Road Cost</th>
    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Any Spacial Request</th>
    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Do you Require Finance</th>
    <th width="7%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Booking Date</th>
    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Transation</th>
    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Amount</th>
    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Status</th>
     <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Created Date</th>
</tr>
</thead>
<tbody>
<?php if($booking_list){
      $i = 1;
      foreach($booking_list as $val){	?>
<tr>
    <td><?php echo $i;?></td>
    <td><?php echo $val['name']; ?></td>
    <td><?php echo $val['item']; ?></td>
    <td><?php echo $val['booking_id']; ?></td>
    <td><?php echo $val['email']; ?></td>
    <td><?php echo $val['mobile']; ?></td>
    <td><?php echo $val['city']; ?></td>
    <td><?php echo $val['address']; ?></td>
    <td><?php echo $val['car']; ?></td>
    <td><?php echo $val['varient']; ?></td>
    <td><?php echo $val['color']; ?></td>
    <td><?php echo $val['road_cost']; ?></td>
    <td><?php echo $val['special_request']; ?></td>
    <td><?php echo $val['finance']; ?></td>
    <td><?php echo $val['booking_date']; ?></td>
    <td><?php echo $val['transaction_id']; ?></td>
    <td><?php echo $val['amount']; ?></td>
    <td><?php echo $val['status']; ?></td>
    <td><?php $originalDate = $val['created_at']; $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?></td>
</tr>
<?php $i++;}}?>
</tbody>
</table>