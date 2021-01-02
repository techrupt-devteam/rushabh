
<div class="content-wrapper">
 <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Webinar</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"> Webinar
					<div class="btn-toolbar pull-right">
	              <div class="btn-group">
	               <!--<a style="margin-right: 13px;" href="<?php echo base_url('admin/webinar/send');?>" class="btn btn-success pull-right"><i class="fa fa-arrow"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
	              <a href="<?php echo base_url('admin/webinar/export');?>" class="btn btn-info pull-right"> <i class="fa fa-download"></i></a>
	              
	              <a style="margin-right: 13px;" href="<?php echo base_url('admin/webinar/view');?>" class="btn btn-primary pull-right"><i class="fa fa-envelope"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          
		              </div>
		        </div>
				</div>
				<div class="panel-body">
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr >
                      <th >Sr.</th>
                      <th class="">Name</th>
                      <th class="">Token&nbsp;no</th>
                      <th class="">Email</th>
                      <th class="">Mobile</th>
                      <th class="">Age</th>
                      <th class="">City</th>
                      <th class="">Paid&nbsp;Status</th>
                      <th class="">Created&nbsp;Date</th>
                      <th class="">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($webinar_list as $row): $cnt++; ?>
                   <tr>
                   <td><?php echo $cnt; ?></td>
                   <td class="customer-details"><?php echo $row['name']; ?></td>
                   <td class="customer-details"><?php echo $row['token_no']; ?></td>
                  <td class="customer-details">
                    <?php echo $row['email']; ?>
                  </td>
                  <td class="customer-details">
                    <?php echo $row['mobile']; ?>
                  </td>
                  <td class="customer-details">
                    <?php echo $row['age']; ?>
                  </td>
                   <td><?php echo $row['city']; ?></td>
                   <td><?php echo $row['status']; ?></td>
                   <td>
                   <?php $originalDate = $row['created_at'];
                              $newDate = date("d-m-Y", strtotime($originalDate)); 
                              if($newDate){
                                echo $newDate;     
                              }else{
                                  echo "-";
                              }
                              ?></td>
                              
                  <td><div class="btn-group">
                      <!---->
                    <a href="<?php echo base_url(); ?>admin/webinar/webinar_view/<?php echo $row['id'] ?>"class="btn btn-default" data-toggle="tooltip"data-placement="bottom"data-original-title="View user"><i class="fa fa-binoculars"></i> </a>
                    
                    <a href="<?php echo base_url(); ?>admin/webinar/delete/<?php echo $row['id'] ?>" class="btn btn-default" title="" data-toggle="tooltip" data-placement="bottom" onclick="return confirm('Are you sure to delete this record ?');" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></div></td>
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
        data: {
          status: status,
          id: id
        },
        cache: false,
        success: function(dataResult){
          var dataResult = JSON.parse(dataResult);

          console.log(dataResult);
          window.location.href="<?php echo base_url("admin/manage_booking");?>";
          alert('Status updated successfully');
          /*if(dataResult.statusCode==200){
            $("#butsave").removeAttr("disabled");
            $('#fupForm').find('input:text').val('');
            $("#success").show();
            $('#success').html('Data added successfully !');            
          }
          else if(dataResult.statusCode==201){
             alert("Error occured !");
          }*/
          
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }


  }
</script>
