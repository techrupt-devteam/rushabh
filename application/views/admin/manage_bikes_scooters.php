
<div class="content-wrapper">
 <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Manage Bikes Scooters</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"> Manage Bikes Scooters
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <strong><a href="<?php echo site_url('admin/manage_bikes_scooters/add');?>" class="btn btn-default pull-right"><i class="la la-plus icon"></i></a></strong>
                  </div>
            </div>
        </div>
				<div class="panel-body">
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr >
                      <th >Sr.No</th>
                      <th class="">Name</th>
                      <th class="">Type </th>
                      <th class="">Meta Title </th>
                      <th class="">Image </th>
                      <!--<th class="">Created Date </th>-->
                      <th class="">Action </th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($bikes_scooters_list as $row): $cnt++; ?>
                  <tr>
                   <td><?php echo $cnt; ?></td>
                   <td><?php echo $row['name']; ?></td>
                   <td><?php echo $row['type']; ?></td>
                   <td><?php $original_string1=$row['meta_title'];  $limited_string = word_limiter($original_string1 , 5, ''); echo $limited_string; ?>...</td>
                   <td><img style="width:70px; height:70px;" src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>"></td>
                  <!-- <td style="text-align: center;"><?php $originalDate=$row['created_at'];$newDate=date("d-m-Y",strtotime($originalDate));echo $newDate;  ?></td>-->
                   <td>
                      <a href="<?php echo base_url(); ?>admin/manage_bikes_scooters/edit/<?php echo $row['id'] ?>" data-original-title="Edit" data-toggle="tooltip" class="btn btn-default"><i class="la la-pencil icon"></i></a>
                      <a href="<?php echo base_url(); ?>admin/manage_bikes_scooters/delete/<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you  to delete this record?');" data-original-title="Delete" data-toggle="tooltip" class="btn btn-default"><i class="la la-trash icon"></i></a>
                      <a href="<?php echo base_url(); ?>admin/manage_specification/<?php echo $row['id'] ?>" data-original-title="Specifications" data-toggle="tooltip" class="btn btn-default" ><i class="la la-table"></i></a>
                      <a href="<?php echo base_url(); ?>admin/manage_specification_details/<?php echo $row['id'] ?>" data-original-title="Specifications" data-toggle="tooltip" class="btn btn-default" ><i class="la la-envelope"></i></a>
                      
                      <a href="<?php echo base_url(); ?>admin/manage_available_colour/<?php echo $row['id'] ?>" data-original-title="Available Color" data-toggle="tooltip" class="btn btn-default" ><i class="la la-photo"></i></a>
                  </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>



               <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    <!-- Modal end -->


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
</script>
