

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Send - Email</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  
    <div class="col-12">
        
      <div class="panel panel-default">
        <div class="panel-heading"> Send - Email
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/webinar');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                  </div>
            </div>
        </div>
        <div class="panel-body">
            
             <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                        <label class="">
                          <input type="radio" checked="checked" name="r1" value="2" onchange="show(this.value)">
                          <span class="checkmark"></span> Send mail to paid client
                        </label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="">
                          <input type="radio" name="r1" id="e1" value="3" onchange="show2()">
                          <span class="checkmark"></span> Send mail to unpaid client
                        </label>
                    </div>
                </div>
                <hr>
            
            
        <form class="form-horizontal" action="<?php echo base_url(); ?>admin/webinar/send_email" method="post" enctype="multipart/form-data">
            
          <div class="row" id="sh1">
               <?php foreach($arr_data as $row):?>
                <input type="hidden" value="<?php echo $row['email']; ?>" name="email_multiple[]">
                <input type="hidden" value="<?php echo $row['name']; ?>" name="name[]">
            <?php endforeach; ?>
            
             <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label">Subject<span style="color: red;">*</span></label>
                <div class="">
                  <input type="text" name="title" class="form-control" autocomplete="off" placeholder="Please enter title" required="required">
                </div>
            </div>
            <div class="col-sm-6 col-xl-6 col-md-6">
                <label class="control-label"> Zoom Link</label>
                <div class="">
                  <input type="text" name="zoom_link" class="form-control" autocomplete="off" placeholder="Please enter zoom link">
                </div>
            </div>
            <br><br><br><br><br><br>
             <div class="col-sm-12 col-xl-12 col-md-12" style="text-align: center;">
              <button name="submit" value="submit" type="submit" class="btn btn-primary"> Submit </button>
              <a href="<?php echo base_url(); ?>admin/secure/home" type="button" class="btn lg btn-danger btn_cancel">Cancel</a>
          </div>
          </div>
        </form>
            
        
        <form class="form-horizontal" action="<?php echo base_url(); ?>admin/webinar/send_email_pending" method="post" enctype="multipart/form-data">
            
       
          <div class="row" id="sh2" style="display:none;">
              
               <?php foreach($arr_pending_data as $pending_row):?>
            <input type="hidden" value="<?php echo $pending_row['email']; ?>" name="email_multiple[]"> 
        <?php endforeach; ?>
             <div class="col-md-12">
                <label class="control-label">Subject<span style="color: red;">*</span></label>
                <div class="">
                  <input type="text" name="title" class="form-control" autocomplete="off" placeholder="Please enter title" required="required">
                </div>
            </div>
            
            <div class="col-md-12">
                <label class="control-label"> Description</label>
                <div class="">
                  <textarea rows="4" class="form-control w-100" name="description" placeholder="Description"></textarea>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="col-sm-12 col-xl-12 col-md-12" style="text-align: center;">
              <button name="submit" value="submit" type="submit" class="btn btn-primary"> Submit </button>
              <a href="<?php echo base_url(); ?>admin/secure/home" type="button" class="btn lg btn-danger btn_cancel">Cancel</a>
          </div>
          </div>
          <br><br>
          
            </form>
      </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>


  <!-- Modal waiting end  -->



</section>
</div>

<script type="text/javascript">
    function show(str){
        document.getElementById('sh2').style.display = 'none';
        document.getElementById('sh1').style.display = 'block';
    }
    function show2(sign){
        document.getElementById('sh2').style.display = 'block';
        document.getElementById('sh1').style.display = 'none';
    }
</script>
