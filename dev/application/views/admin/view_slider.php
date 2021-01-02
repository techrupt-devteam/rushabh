
<div class="content-wrapper">
 <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active"> View Slider</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"> View Slider
					<div class="btn-toolbar pull-right">
	              <div class="btn-group"> 
                   <strong>
                    <a href="<?php echo site_url('admin/manage_slider/add_slider');?>" class="btn btn-default" data-toggle="tooltip" data-placement="bottom"data-original-title="Add Slider"> 
                      <i class="la la-plus icon"></i></a>
                    </strong>
		              </div>
		        </div>
				</div>
				<div class="panel-body">
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th >Sr.No</th>
                      <th class="">Title</th>
                      <th class="">Image </th>
                      <th class="">Action </th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($slider_list as $row): $cnt++; ?>
                   <tr>
                   <td><?php echo $cnt; ?></td>
                   <td><?php echo $row['title']; ?></td>
                   <td><img style="width:250px; height:98px;" src="<?php echo base_url(); ?>assets/admin/post_image/<?php echo $row['image']; ?>"></td>
                   <td>
                    <a href="<?php echo base_url(); ?>admin/manage_slider/edit/<?php echo $row['id'] ?>" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit Slider"><i class="la la-pencil icon"></i></a>

                    <a href="<?php echo base_url(); ?>admin/manage_slider/delete/<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record ?');" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete Slider"><i class="la la-trash icon"></i></a>
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

 
</script>
