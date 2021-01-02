
<div class="content-wrapper">
 <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Manage Feedback</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
    <div class="col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Manage Feedback
          <div class="btn-toolbar pull-right">
                <!-- <div class="btn-group"> 
                   <a href="<?php echo base_url('admin/manage_booking/export');?>" class="btn btn-primary btn-sm pull-right">Download Excel</a>
                  </div> -->
            </div>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr >
                      <th >Sr</th>
                      <th class="">Full Name</th>
                      <th class="">Email </th>
                      <th class="">Mobile </th>
                      <th class="">Location </th>
                      <th class="">Created date</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($feedback_list as $row): $cnt++; ?>
                   <tr>
                   <td value="<?php echo $row['id']; ?>"><?php echo $cnt; ?></td>
                   <td><a href="<?php echo base_url('admin/feedback/view_feedback'); ?>/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a> </td> 
                 <!--  <td><?php echo $row['name']; ?></td> -->
                   <td><?php echo $row['email']; ?></td>
                   <td><?php echo $row['mobile']; ?></td>
                   <td><?php echo $row['location']; ?></td>
                   <td><?php $originalDate = $row['created_at'];
                              $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?></td>
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
