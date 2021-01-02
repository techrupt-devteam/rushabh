<!-- Ckeditor -->
<script src="plugins/ckeditor/ckeditor.js"></script>
<script src="plugins/ckeditor/samples/js/sample.js"></script>
<!-- <link rel="stylesheet" href="plugins/ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="plugins/ckeditor/toolbarconfigurator/lib/codemirror/neo.css"> -->

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Add Bikes & Scooters</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Add Bikes & Scooters
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/manage_featured_vehicles');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                  </div>
            </div>
        </div>
        <div class="panel-body">
          <div class="row">
             <div class="col-sm-6 col-xl-6 col-md-6">
              <label class="control-label">  Title<span  style="color: red;">*</span></label>
               <div class="">
                  <input type="text" name="title" class="form-control" autocomplete="off" placeholder="Please enter title" required="required">
              </div>
            </div>

             <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label">  Image<span style="color: red;">*</span></label>
                <div class="">
                    <input type="file" name="image" class="form-control" autocomplete="off" placeholder="Please enter image" required="required">
                </div>
            </div>
          </div>

          <div class="row">
             <div class="col-sm-6 col-xl-6 col-md-6">
              <label class="control-label">  Page Link<span  style="color: red;">*</span></label>
               <div class="">
                  <input type="text" name="page_link" class="form-control" autocomplete="off" placeholder="Please enter link" required="required">
              </div>
            </div>
          </div>

          <div class="row">
           <div class="col-sm-12 col-xl-12 col-md-12">
              <label class="control-label"> Description</label>
              <textarea id="editor" type="text" class="form-control" placeholder="Please enter description" name="description"></textarea>              
           </div>
          </div>

          <br><br>
          <div class="mb-12" style="text-align: center;">
              <button name="submit" value="submit" type="submit" class="btn btn-primary"> Submit </button>
              <a href="<?php echo base_url(); ?>admin/secure/home" type="button" class="btn lg btn-danger btn_cancel">Cancel</a>
          </div>
      </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>

   
  
  </form>


</section>
</div>


<script>
  initSample();


  function selectType(){
     var selectvalue = $('#type').val();
     $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/manage_bikes_scooters/getBikeScooters",
            data: {'type':selectvalue},
              dataType:'json',
            success: function (data) {
              //console.log(data);
                var selOpts = "";
                $.each(data, function(k, v)
                {
                  
                    var id = data[k].id;
                    console.log(id);
                    var name = data[k].name;
                    selOpts += "<option value='"+id+"'>"+name+"</option>";
                });
                $('#name').append(selOpts);
               //alert(Result.d);
            }
            /*error: function (jqXHR, textStatus, errorThrown) {
                  alert(errorThrown);
            }*/
        });
  }
</script>