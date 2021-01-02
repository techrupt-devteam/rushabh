
<div class="content-wrapper">
 <div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Inbond Calls</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
    <div class="col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Inbond Calls
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <strong><a href="<?php echo site_url('admin/inbond_callsmh/add_mh');?>" class="btn btn-info pull-right"><i class="la la-plus icon"></i></a></strong>
                  </div>
            </div>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr >
                      <th >Sr.No</th>
                      <th class="">Title</th>
                      <th class="">File </th>
                      <th class="">Location </th>
                      <th class="">Created Date </th>
                       <th class="">Action </th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $cnt=''; foreach($inbond_calls_list as $row): $cnt++; ?>
                  <tr ><!-- data-href="add-party.php" class="cursor-pointer" -->
                   <td><?php echo $cnt; ?></td>
                   <td><?php echo $row['title']; ?></td>
                   <td><?php echo $row['file']; ?></td>
                   <td><?php echo $row['location']; ?></td>
                    <td><?php $originalDate = $row['created_at'];
                              $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?></td> 
                   <td>
                    <a href="<?php echo base_url(); ?>admin/inbond_callsmh/view_info/<?php echo $row['id'] ?>" class="btn btn-default"><i class="la la-table icon"></i></a>
                    <a href="<?php echo base_url(); ?>admin/inbond_callsmh/delete/<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record ?');" class="btn btn-default"><i class="la la-trash icon"></i></a>
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

  function selectStatus(el)
  {
    var status = $(el).val();
    var id = $(el).attr('data');
    console.log(status);
    if(status!=""){
     
      $.ajax({
        url: "<?php echo base_url("admin/book_appointment/savedata");?>",
        type: "POST",
        data: {
          status: status,
          id: id
        },
        cache: false,
        success: function(dataResult){
          var dataResult = JSON.parse(dataResult);

          console.log(dataResult);
          window.location.href="<?php echo base_url("admin/book_appointment");?>";
         alert('Status updated successfully');
          
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }


  }
</script>
