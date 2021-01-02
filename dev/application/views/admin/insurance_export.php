<?php $filename ="insurance_export.xls";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
?><table class="table table-striped table-bordered table-hover" id="sample_6" width="100%" border="1">
							<thead>
							<tr>
								<th width="4%" colspan="1" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Rendering engine: activate to sort column ascending" role="columnheader" tabindex="0">Sr. No.</th>
                    <th width="11%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Name</th>
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Email</th>
                    <th width="15%" colspan="1" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Phone No</th>
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >Location</th>

                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" >For Insurance </th>

                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0">Vehicle Registration</th>
                   
                    <th width="15%" rowspan="1" class="sorting" aria-controls="dynamic-table" aria-label="Browser: activate to sort column ascending" role="columnheader" tabindex="0" > Created Date</th>
</tr>
							</thead>
							<tbody>
							<?php if($insurance_list){
	                   $i = 1;
	                   foreach($insurance_list as $val){	
	            ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $val['full_name']; ?></td>
   <td><?php echo $val['email']; ?></td>
   <td><?php echo $val['phone_no']; ?></td>
   <td><?php echo $val['location']; ?></td>
   <td><?php echo $val['for_insurance']; ?></td>
   <td><?php echo $val['reg_no']; ?></td>
   <td><?php echo $val['created_at']; ?></td>
   
    </tr>
  <?php $i++;}}?>
							
							</tbody>
							</table>