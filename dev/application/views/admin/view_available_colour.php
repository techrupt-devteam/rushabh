
<style type="text/css">
  .modal-dialog-centered {
    -webkit-transform: translate(0,-50px) !important;
    transform: translate(0,-50px) !important;
    top: 40%;
}
</style>
<div class="content-wrapper">
  <!-- Open Modal -->

 <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active"> View Available Colour</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"> View Available Colour
					<div class="btn-toolbar pull-right">
	             <!--  <div class="btn-group">  -->
                   <strong>
                    <!-- <a href="<?php echo site_url('admin/manage_bikes_scooters/add_available_colour');?>" class="btn btn-default" data-toggle="tooltip" data-placement="bottom"data-original-title="Add Slider"> 
                      <i class="la la-plus icon"></i></a> -->
                      <a href="javascript:;" type="button" data-target="#myModal" class="btn btn-default" data-toggle="modal"><i class="la la-plus icon"></i></a>&nbsp;
                      <a href="<?php echo site_url('admin/manage_bikes_scooters');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                    </strong>
		              <!-- </div> -->
		        </div>
				</div>
				<div class="panel-body">
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th >Sr.No</th>
                      <th class="">Colour</th>
                      <th class="">Image </th>
                      <th class="">Action </th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($available_colour_data as $row): $cnt++; ?>
                   <tr>
                   <td><?php echo $cnt; ?></td>
                   <td><?php echo $row['colour']; ?></td>
                   <td><img style="width:150px; height:98px;" src="<?php echo base_url(); ?>assets/admin/post_image/bikes_scooters/<?php echo $row['image']; ?>"></td>
                   <td>
                    <a data-target="#EditModal<?php echo $row['id']; ?>"  value="<?php echo $row['id']; ?>" class="btn btn-default" data-toggle="modal" href="javascript:;" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit colour"><i class="la la-pencil icon"></i></a>
                    <!-- <?php echo base_url(); ?>admin/manage_slider/edit/<?php echo $row['id'] ?> -->


                    <a href="<?php echo base_url(); ?>admin/manage_available_colour/delete/<?php echo $row['bike_scooter_id'] ?>/<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record ?');" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete Slider"><i class="la la-trash icon"></i></a>
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
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="">
  <div class="modal-dialog modal-dialog-centered modal-lg" >
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <!-- Modal content-->
    <div class="modal-content" style="margin-top: -50px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Available Colour</h4>
      </div>
      

      <div class="modal-body">
        <div class="row">
             
             <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Colour<span style="color: red;">*</span></label>
                <div class="">
                  <input type="text" name="colour" class="form-control" autocomplete="off" placeholder="Please colour" required="required">
                  <input type="hidden" value="<?php echo $id; ?>" name="id" >
                </div>
            </div>

            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Image<span style="color: red;">*</span></label>
                <div class="">
                  <input type="file" name="image" class="form-control" autocomplete="off"  >
                </div>
            </div>
          </div>


           <div class="row">
             <div class="col-sm-6 col-xl-6 col-md-6">
              <label class="control-label">  Image Title<span style="color: red;">*</span></label>
              <div class="">
               <input type="text" name="image_title" class="form-control" autocomplete="off" placeholder="Please enter image meta title" required="required">
              </div>
            </div>
              <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label">  Image Description<span style="color: red;">*</span></label>
                <div class="">
                    <input type="text" name="image_description" class="form-control" autocomplete="off" placeholder="Please enter description" required="required">
                </div>
            </div>
          </div>



      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </form>

  </div>
</div>
<!-- Close Modal -->

<!-- Edit Modal -->
 <?php foreach($available_colour_data as $row): ?>
<div id="EditModal<?php echo $row['id']; ?>" class="modal fade" role="dialog" style="">
  <div class="modal-dialog modal-dialog-centered modal-lg" >
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <!-- Modal content-->
    <div class="modal-content" style="margin-top: -50px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Available Colour</h4>
      </div>
      

      <div class="modal-body">
        <div class="row">
             <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Colour<span style="color: red;">*</span></label>
                <div class="">
                  <input type="text" value="<?php echo $row['colour']; ?>" name="colour" class="form-control" autocomplete="off" placeholder="Please colour" required="required">
                  <input type="hidden" value="<?php echo $row['id']; ?>" name="edit_id" >
                  <input type="hidden" value="<?php echo $row['bike_scooter_id']; ?>" name="id" >
                </div>
            </div>

            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Image<span style="color: red;">*</span></label>
                <div class="">
                  <input type="file" name="image" class="form-control" autocomplete="off"  >
                </div>
            </div>
          </div>

          <div class="row">
             <div class="col-sm-6 col-xl-6 col-md-6">
              <label class="control-label">  Image Title<span style="color: red;">*</span></label>
              <div class="">
               <input type="text" name="image_title" value="<?php echo $row['image_title']; ?>" class="form-control" autocomplete="off" placeholder="Please enter image meta title" required="required">
              </div>
            </div>
              <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label">  Image Description<span style="color: red;">*</span></label>
                <div class="">
                    <input type="text" name="image_description" value="<?php echo $row['image_description']; ?>" class="form-control" autocomplete="off" placeholder="Please enter description" required="required">
                </div>
            </div>
          </div>


      </div>
      <div class="modal-footer">
        <button type="submit" name="submit_edit" value="submit_edit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </form>

  </div>
</div>
<?php endforeach; ?>
<!-- Edit Close Modal -->


<script type="text/javascript">
  function edit_popop(e,category_id){      
    if(!$(e.target).hasClass('special_td')) {
      $('#add-trip').modal('show');
    }
  }

 function getId(){
  var id = $('#colour_id').data('id');
  console.log(id);
 }
</script>
