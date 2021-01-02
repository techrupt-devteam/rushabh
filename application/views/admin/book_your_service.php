<!--<link rel="stylesheet" type="text/css" href="dist/css/dataTables.bootstrap.min.css">-->
<style>
	.input-group {
		position: relative;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		-ms-flex-align: stretch;
		align-items: stretch;
		width: 100%;
	}
	 .input-group > .form-control{
	 	position: relative;
		-ms-flex: 1 1 auto;
		flex: 1 1 auto;
		width: 1%;
		min-width: 0;
		margin-bottom: 0;
	 }
	 .input-group-append {
			margin-left: -1px;
  	 }
	 .input-group-append{
	  	display: -ms-flexbox;
		display: flex;
	  }
	  .pagination li strong {
		display: flex;
		float: left;
		border: 1px solid #ddd;
		padding: 6px 12px;
		color: #fff;
		cursor: default;
		background-color: #ea1111;
		border-color: #da1a1a;
		border-radius: 4px;
		margin: 0px 5px;
	}
	.pagination > li > a{
		margin-right: 5px;
	}
	.btn-dark{
		background-color: #333;
		border-color: #282a2b;
		color: #fff;
	}
	.btn.btn-dark:hover {
		background-color: #666;
		color: #FFF;
	}
</style>
<div class="content-wrapper">
  <div class="col-md-12">
    <div class="row"><ol class="breadcrumb"><li><a href="<?php echo base_url(); ?>admin/secure/home" data-original-title="Go to Home" data-placement="bottom" data-toggle="tooltip" title=""><em class="fa fa-home"></em></a></li><li class="active">Book your service</li></ol></div></div><div class="clearfix"></div>
    <section class="content mt-12"><div class="row"><div class="col-xs-12"><div class="panel panel-default">
        
        <div class="panel-heading">
          <form method='post' action="<?= base_url() ?>admin/book_your_service" >
           <div class="row pull-left" style="width: 100%;max-width: 380px;">
            <div class="col-sm-12">
            <div class="input-group">
                <input type='text' id="search_id" name='search' value='<?= $search ?>' placeholder="Search" class="form-control">
                <div class="input-group-append">
                    <input type='submit' name='submit_search' value='Search' class="btn btn-dark">
                </div>
            </div>
           </div> 
          </div>   
         </form>
        <div class="pull-right btn-toolbar">
    <div class="btn-group">
    <a href="<?php echo base_url('admin/book_your_service/export'); ?>" class="btn btn-primary btn-sm pull-right">Download Excel</a>
    </div></div></div>
    
    
      <div class="panel-body">
          <div class="table-responsive">
                <table class="table" id="tclean" style="border-bottom: 1px solid #ddd;">
                  <thead>
                    <tr >
                      <tr>
                        <th>Sr.</th>
                        <th class="">Customer</th>
                        <th style="width: 150px;">Vehicle No</th>
                        <th class="">Booking Date</th>
                        <th class="">Location</th>
                        <th class="">Reported Date</th>
                        <th class="">Status</th>
                        <th class="">Created Date</th>
                      </tr>
                  </thead>
                  <tbody>
                 <?php  $sno = $row+1;
                        foreach($book_your_service_list as $data){
                          

                          echo "<tr>";
                          echo "<td>".$sno."</td>";
                           echo "<td class='customer-details'><a href='".base_url('admin/book_your_service/view_booking_service').'/'.$data['id']."'>".$data['name']."<div>
                              <span><i class='fa fa-envelope-o'></i>". $data['email']."</div>
                               <div>
                            <span><i class='la la-phone'></i></span>".$data['mobile']."
                            </div>
							</a>
                            </td>";
                          echo "<td>".$data['vehical_no']."</td>";
                          if($data['booking_date']){
                            $originalDate=$data['booking_date']; $newDate=date("d-m-Y",strtotime($originalDate));
                            echo "<td>".$newDate."</td>";
                          }else{
                            echo "<td>".'-'."</td>";
                          }
                          
                          echo "<td>".$data['location']."</td>";
                          if($data['reported_date']){
                              $originalDate=$data['reported_date'];$newDate1=date("d-m-Y",strtotime($originalDate)); 
                          echo "<td>".$newDate1."</td>";
                          }else{
                            echo "<td>".'-'."</td>";
                          }
                          echo "<td>
                          <div class='col-md-12'>
                          <select name='status' id='status' class='form-control' onchange='selectStatus(this)' data='".$data['id']."'>
                            <option value='Select'>Select</option>
                            <option value='Reported' ".($data['status']=='Reported' ? 'selected="selected"' : '').">Reported</option>
                            <option value='Non Reported' ".($data['status']=='Non Reported' ? 'selected="selected"' : '').">Non Reported</option>
                          </select>
                          </div></td>";

                          if($data['created_at']){
                              $originalDate=$data['created_at'];$created_at=date("d-m-Y",strtotime($originalDate)); 
                          echo "<td>".$created_at."</td>";
                          }else{
                            echo "<td>".'-'."</td>";
                          }

                          echo "</tr>";
                          $sno++;

                        }
                        if(count($book_your_service_list) == 0){
                          echo "<tr>";
                          echo "<td colspan='3'>No record found.</td>";
                          echo "</tr>";
                        }
                 ?>
                  </tbody>
                </table>

                <!-- <p><?php echo $links; ?></p> -->
                <!-- Paginate -->
               <div class="pull-right position-relative">
               <ul class="pagination">
               	<li>
                	<?= $pagination; ?>
                </li>
               </ul>
               </div>
              </div>
			</div>
</div>
</div>
</div>
</section>
</div>

          <div class="fade modal modal-gray"role="dialog"id="myModal">
            <div class="modal-dialog modal-dialog-middle modal-md"role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close"type="button"aria-label="Close"data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="">Manage Reported Date</h4>
                </div>
                <div class="modal-body">
                  <form action="" class="form-horizontal"  enctype="multipart/form-data" method="post"><div class="row">
                    <div class="col-xs-12">
                      <div class=""><label class="control-label">Reported Date<span style="color:red">*</span></label>
                        <!-- <div class="input-group date">
                          <input type="hidden" class="service_id" name="service_id"> 
                          <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                        <input type="text" id="datepicker1" class="form-control datepicker" name="reported_date" autocomplete="off" placeholder="Please reported date"  required>
                      </div> -->

                       <div class="input-group col-md-12">
                          <input type="hidden" class="service_id" name="service_id"> 
                          <!-- <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div> -->
                        <input type="date" id="date_value" class="form-control " name="reported_date" autocomplete="off" placeholder="Please reported date"  required><!-- datepicker -->
                      </div>

                      
                    </div>
                  </div>
                </div>
                <div class="row">
                          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center" style="margin-top:2rem">
                            <button class="btn btn-success" type="submit" name="submit" value="submit" style="min-width: 120px;">Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>


<script type="text/javascript">

  

function selectStatus(a){

  var t=$(a).val();
  

  l=$(a).attr("data");
  //console.log(l);

  var a=new Date();
  var e=a.getMonth()+1;
  var b=a.getDate();
  var c=a.getFullYear();
  
  if(e<10){
    e="0"+e.toString()
  }
  if(b<10){
    b="0"+b.toString()
  }
  var d=c+"-"+e+"-"+b;

  $.ajax({
    url:"<?php echo base_url("admin/book_your_service/savedata"); ?>",
    type:"POST",
    data:{
      status:t,id:l,reported_date:d
    },
    
    success:function(a){
      console.log(a);
      var a=JSON.parse(a);
      
      window.location.href="<?php echo base_url("admin/book_your_service"); ?>";
      alert("Status updated successfully");
    }
  });

  if(t=="Reported")
  {
    console.log(1);
    $.ajax({
      url:"<?php echo base_url("admin/book_your_service/WhatsServiceReportedGoogleReview"); ?>",
      type:"POST",
      data:{
        id:l
      },
      success:function(a){
        var a=JSON.parse(a);
        console.log(a);
        window.location.href="<?php echo base_url("admin/book_your_service"); ?>";
        alert("Status updated successfully");
      }
    });
  }
  
}


function modal_value(a){
  var t=$(a).attr("data-id");
  console.log(t);
  $(".service_id").val(t);
}

</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#search').hide();
    $('#search_id').val('');
    
  });
</script>