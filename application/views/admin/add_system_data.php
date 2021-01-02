<style>
  body {
  background: #A9D9C3;
}
#register_form h1 {
  text-align: center;
}
#register_form {
  width: 37%;
  margin: 100px auto;
  padding-bottom: 30px;
  border: 1px solid #918274;
  border-radius: 5px;
  background: white;
}
#register_form input {
  width: 80%;
  height: 35px;
  margin: 5px 10%;
  font-size: 1.1em;
  padding: 4px;
  font-size: .9em;
}
#reg_btn {
  height: 35px;
  width: 80%;
  margin: 5px 10%;
  color: white;
  background: #3B5998;
  border: none;
  border-radius: 5px;
}
/*Styling for errors on form*/
.form_error span {
  width: 80%;
  height: 35px;
  margin: 3px 10%;
  font-size: 1.1em;
  color: #D83D5A;
}
.form_error input {
  border: 1px solid #D83D5A;
}

/*Styling in case no errors on form*/
.form_success span {
  width: 80%;
  height: 35px;
  margin: 3px 10%;
  font-size: 1.1em;
  color: green;
}
.form_success input {
  border: 1px solid green;
}
#error_msg {
  color: red;
  text-align: center;
  margin: 10px auto;
}
</style>

<div class="content-wrapper">
<div class="col-md-12">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin/secure/home" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Go to Home"> <em class="fa fa-home"></em> </a></li>
      <li class="active">Add systme data</li>
    </ol>
  </div>
</div>
<div class="clearfix"></div>
<section class="content mt-12">
  <div class="row">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Add systme data
          <div class="btn-toolbar pull-right">
                <div class="btn-group"> 
                   <a href="<?php echo site_url('admin/system_data');?>" class="btn btn-info pull-right"><strong><i class="la la-arrow-right icon"></i></strong></a>
                  </div>
            </div>
        </div>
        <div id="error_msg"></div>
        <div class="panel-body">
          <div class="row">
            
              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Customer Name </label>
                  <div class="">
                    <input type="text" tabindex="1" name="name" class="form-control" autocomplete="off" placeholder="Customer Name">
                  </div>
                </div>
              </div>

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Enquiry no</label>
                  <div class="">
                    <input type="text" tabindex="2" name="enquiry_no" class="form-control" autocomplete="off" placeholder="Enquiry no">
                  </div>
                </div>
              </div>

               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Enquiry Date</label>
                  <div class="">
                    <input type="date" tabindex="3" name="enquiry_date" class="form-control" autocomplete="off" placeholder="Date">
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Mobile</label>
                  <div class="">
                    <input type="text" id="mobile" tabindex="4" name="mobile" class="form-control" autocomplete="off" placeholder="Mobile">
                    <!-- <span class='hello' style="color: red;"></span> -->
                     <div id='mob_validation' style="color: red;"></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Source <small>(e.g. Facebook,etc)</small></label>
                  <div class="">
                    <input type="text" tabindex="5" name="source" class="form-control" autocomplete="off" placeholder="Source">
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Model Name</label>
                  <div class="">
                    <!-- <input type="text" name="model" class="form-control" autocomplete="off" placeholder="Model No"> -->
                     <select class="form-control select2" tabindex="6" name="model">
                      <option value="">Select</option>
                      <option value="Hornet 2.0">Hornet 2.0</option>
                      <option value="SP125">SP125</option>
                      <option value="Shine BS VI">Shine BS VI</option>
                      <option value="New Unicorn BS-VI">New Unicorn BS-VI</option>
                      <option value="CD 110 Dream">CD 110 Dream</option>
                      <option value="X-Blade">X-Blade</option>
                      <option value="LIVO">LIVO</option>
                      <option value="DIO BS VI">DIO BS VI</option>
                      <option value="Activa 6G">Activa 6G</option>
                      <option value="Activa 125-BS-VI">Activa 125-BS-VI</option>
                      <option value="Grazia 125">Grazia 125</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">City</label>
                  <div class="">
                    <input type="text" tabindex="7" name="city" class="form-control" autocomplete="off" placeholder="City">
                  </div>
                </div>
              </div> -->

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Contact to(SM)</label>
                  <div class="">
                    <input type="text" tabindex="8" name="contact_to" class="form-control" autocomplete="off" placeholder="SM">
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">RM</label>
                  <div class="">
                    <input type="text" tabindex="8" name="rm" class="form-control" autocomplete="off" placeholder="RM">
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Follow up date</label>
                  <div class="">
                    <input type="date" tabindex="10" name="follow_up_date" class="form-control" autocomplete="off" placeholder="Follow Up Date">
                  </div>
                </div>
              </div>

              <!--  <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Location</label>
                  <div class="">
                    <select class="form-control select2" tabindex="12" name="location">
                    <option value="">Select</option>
                    <option value="Mumbai Naka">Mumbai Naka</option>
                    <option value="Uttam Nagar">Uttam Nagar</option>
                    <option value="Indira Nagar">Indira Nagar </option>
                    <option value="Mhasrul"> Mhasrul </option>
                    <option value="Ambad"> Ambad </option>
                  </select>
                  </div>
                </div>
              </div> -->

             


               <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Remarks</label>
                  <div class="">
                   <textarea name="remarks" tabindex="11" class="form-control" rows="3" placeholder="Remarks"> </textarea>
                  </div> 
                </div>
              </div>

              <!--  <div class="col-sm-6 col-xl-6 col-md-6">
                <div class="mb-12">
                  <label class="control-label">Upload files</label>
                  <div class="">
                    <input type="file" name="file" class="form-control" autocomplete="off">
                  </div>
                </div>
              </div> -->
            
            <div class="col-md-12" style="text-align: center;"><br><br>
              <div class="mb-12">
                  <button name="submit" tabindex="13" onclick="" value="submit" type="submit" class="btn btn-primary"> Submit </button>
                  <a href="<?php echo base_url(); ?>admin/secure/home" type="button" class="btn lg btn-danger btn_cancel">Cancel</a>
              </div>
            </div>
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

<script type="text/javascript">
  
</script>
