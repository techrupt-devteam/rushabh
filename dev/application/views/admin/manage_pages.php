
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
                    <a href="<?php echo site_url('admin/manage_pages/add');?>" class="btn btn-default" data-toggle="tooltip" data-placement="bottom"data-original-title="Add Pages"> 
                      <i class="la la-plus icon"></i></a>
                    </strong>
		              </div>
		        </div>
				</div>
				<div class="panel-body">
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr >
                      <th >Sr.No</th>
                      <th class="">Type</th>
                      <th class="">Name </th>
                      <th class="">Action </th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($pages_list as $row): $cnt++; ?>
                   <tr>
                   <td><?php echo $cnt; ?></td>
                   <td><?php echo $row['type']; ?></td>
                   <td><?php echo $row['name']; ?></td>
                   <td> 
                    <a href="<?php echo base_url(); ?>admin/manage_pages/edit/<?php echo $row['id'] ?>" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit Page"><i class="la la-pencil icon"></i></a>
                    <a href="<?php echo base_url(); ?>admin/manage_slider/delete/<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record ?');" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete Page"><i class="la la-trash icon"></i></a>
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
