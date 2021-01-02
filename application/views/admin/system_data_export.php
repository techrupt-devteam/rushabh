<?php $filename ="System Data Export.xls";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
?><table class="table table-striped table-bordered table-hover" id="sample_6" width="100%" border="1">
					<thead>
					<tr>
					<th width="4%" colspan="1" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Rendering engine: activate to sort column ascending" role="columnheader" tabindex="0">Sr. No.</th>
                    <th width="11%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Name</th>
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Mobile</th>
                    <th width="15%" colspan="1" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Enquiry no </th>
                    <th width="15%" colspan="1" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Enquiry date</th>
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Source</th>
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Model</th>
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Follow Up Date</th>
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Status</th>
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > SM</th>
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > RM</th>
                     <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Remark</th>
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Created at</th>
</tr>
		</thead>
		<tbody>
		<?php if($system_data_list){
           $i = 1;
           foreach($system_data_list as $val){	
    ?>
   <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $val->name; ?></td>
   <td><?php echo $val->mobile; ?></td>
   <td><?php echo $val->enquiry_no; ?></td>
   <td><?php $originalDate = $val->enquiry_date; $newDate = date("d-m-Y", strtotime($originalDate)); if($originalDate){ echo $newDate;}else{echo '-'; } ?></td>
   <td><?php echo $val->source; ?></td>
   <td><?php echo $val->model; ?></td>
   <td><?php $originalDate = $val->follow_up_date; $newDate = date("d-m-Y", strtotime($originalDate)); if($originalDate){ echo $newDate;}else{echo '-'; }  ?></td>
   <td><?php echo $val->status; ?></td>
   <td><?php echo $val->contact_to; ?></td>
   <td><?php echo $val->rm; ?></td>
   <td><?php echo $val->remarks; ?></td>
   <td><?php $originalDate = $val->created_at; $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?></td>
    </tr>
  <?php $i++;}}?>
							
</tbody>
</table>