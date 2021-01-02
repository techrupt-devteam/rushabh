<div class="content-wrapper"><div class="col-md-12"><div class="row"><ol class="breadcrumb"><li><a href="<?php echo base_url(); ?>admin/secure/home"data-original-title="Go to Home"data-placement="bottom"data-toggle="tooltip"title=""><em class="fa fa-home"></em></a></li><li class="active">Book your service</li></ol></div></div><div class="clearfix"></div><section class="content mt-12"><div class="row"><div class="col-xs-12"><div class="panel panel-default"><div class="panel-heading">Book your service<div class="pull-right btn-toolbar"><div class="btn-group"><a href="<?php echo base_url('admin/book_your_service/export'); ?>"class="btn btn-primary btn-sm pull-right">Download Excel</a></div></div></div><div class="panel-body"><div class="table-responsive"><table class="table table-bordered table-striped"id="example1"><thead><tr><th>Sr.</th><th class="">Customer</th><th style="width: 150px;">Vehicle No</th><th class="">Booking Date</th><th class="">Location</th><th class="">Reported Date</th><th class="">Status</th><th class="">Created Date</th></tr></thead><tbody><?php $cnt='';foreach($book_your_service_list as $row):$cnt++; ?><tr><td><?php echo $cnt; ?></td><td class="customer-details"><a href="<?php echo base_url('admin/book_your_service/view_booking_service'); ?>/<?php echo base64_encode($row['id']); ?>"><?php echo $row['name']; ?><div><span><i class="fa fa-envelope-o"></i><?php echo $row['email']; ?></div><div><span><i class="la la-phone"></i></span><?php echo $row['mobile']; ?></div></a></td><td style="text-transform:uppercase"><?php echo $row['vehical_no']; ?></td><td><?php $originalDate=$row['booking_date'];$newDate=date("d-m-Y",strtotime($originalDate));echo $newDate; ?></td><td style="text-align:center"><?php echo $row['location']; ?></td><td><?php if($row['reported_date']){ ?><?php $originalDate=$row['reported_date'];$newDate=date("d-m-Y",strtotime($originalDate));echo $newDate; ?><?php }else{ ?><button class="btn btn-default hello"type="button"data-id="<?php echo $row['id']; ?>"data-target="#myModal"data-toggle="modal"onclick="modal_value(this)"style="text-align:center"><i class="fa fa-calendar"></i></button><?php } ?></td><td><div class="col-md-12"><input type="hidden"value="<?php echo $row['id']; ?>"><select id="status"id="id"name="status"name="id"class="form-control select2"data="<?php echo $row['id']; ?>"onchange="selectStatus(this)"><option value="Select">Select</option><option value="Reported"selected<?php if($row['status']=='Reported'){ ?><?php } ?>>Reported</option><option value="Non Reported"selected<?php if($row['status']=='Non Reported'){ ?><?php } ?>>Non Reported</option></select></div></td><td><?php $originalDate=$row['created_at'];$newDate=date("d-m-Y",strtotime($originalDate));echo $newDate; ?></td></tr><?php endforeach; ?></tbody></table></div></div></div></div></div></section></div><div class="fade modal modal-gray"role="dialog"id="myModal"><div class="modal-dialog modal-dialog-centered modal-sm"role="document"><div class="modal-content"><div class="modal-header"><button class="close"type="button"aria-label="Close"data-dismiss="modal"><span aria-hidden="true">×</span></button><h4 class="modal-title"id="">Manage Reported Date</h4></div><div class="modal-body"><form action=""class="form-horizontal"enctype="multipart/form-data"method="post"><div class="row"><div class="col-xs-12"><div class="col-md-6 col-sm-6 col-xl-6"><label class="control-label">Reported Date<span style="color:red">*</span></label><div class=""><input type="hidden"class="service_id"name="service_id"> <input type="date"class="form-control"name="reported_date"autocomplete="off"placeholder="Please reported date"required></div></div></div></div><div class="row"><div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"style="margin-top:2rem"><button class="btn btn-success"type="submit"name="submit"value="submit">Save</button></div></div></form></div></div></div></div><script type="text/javascript">function edit_popop(a,t){$(a.target).hasClass("special_td")||$("#add-trip").modal("show")}function selectStatus(a){var t=$(a).val(),l=$(a).attr("data");console.log(t),""!=t?$.ajax({url:"<?php echo base_url("admin/book_your_service/savedata"); ?>",type:"POST",data:{status:t,id:l},cache:!1,success:function(a){var a=JSON.parse(a);console.log(a),window.location.href="<?php echo base_url("admin/book_your_service"); ?>",alert("Status updated successfully")}}):alert("Please fill all the field !")}function modal_value(a){var t=$(a).attr("data-id");console.log(t),$(".service_id").val(t)}</script>