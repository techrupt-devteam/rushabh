<?php $filename ="book_appointment_export.xls";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
?><table class="table table-striped table-bordered table-hover" id="sample_6" width="100%" border="1">
							<thead>
							<tr>
								<th width="4%" colspan="1" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Rendering engine: activate to sort column ascending" role="columnheader" tabindex="0">Sr. No.</th>
                    <th width="11%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Name</th>
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Email</th>
                    <th width="15%" colspan="1" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Mobile No</th>
                    <th width="15%" colspan="1" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Location</th>
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Appoinment Date</th>

                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Status</th>

                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Created at</th>
</tr>
							</thead>
							<tbody>
							<?php if($book_appointment_list){
	                   $i = 1;
	                   foreach($book_appointment_list as $val){	
	            ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $val['name']; ?></td>
   <td><?php echo $val['email']; ?></td>
   <td><?php echo $val['mobile']; ?></td>
   <td><?php echo $val['location']; ?></td>
   <td><?php echo $val['appoinment_date']; ?></td>
   <td><?php echo $val['status']; ?></td>
   <td><?php $originalDate = $val['created_at']; $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?></td>
    </tr>
  <?php $i++;}}?>
							
							</tbody>
							</table>