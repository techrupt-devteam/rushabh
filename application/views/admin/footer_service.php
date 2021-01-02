
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<footer class="main-footer"> Copyright &copy; 2019-2020 All rights  reserved. Designed & Develped by <a href="<?php echo base_url(); ?>" traget="_blank">Rushabh Honda</a> </footer>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<!-- <script src="bower_components/moment/min/moment.min.js"></script> -->


<script src="plugins/daterangepicker/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>

<script type="text/javascript">
$(function () {
$('#daterange').daterangepicker({format: 'DD-MM-YYYY'});

$('.daterange').daterangepicker({format: 'DD-MM-YYYY'});
  
});
</script>

<!-- Ckeditor -->


<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<!-- <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> -->
<!-- iCheck 1.0.1 -->

<!-- FastClick -->
<!-- <script src="bower_components/fastclick/lib/fastclick.js"></script> -->
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('.daterange-btn').daterangepicker({format: 'DD-MM-YYYY'});
    
    //Date picker
    $('.datepicker').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
    })

    $('.datepickermonthyear').datepicker({
      autoclose: true,
      format: 'mm-yyyy'
    })
    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

<script type="text/javascript" src="dist/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="dist/js/dataTables.bootstrap.min.js"></script>
<!-- <script src="dist/js/jquery.searchable-1.0.0.min.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    
      if($('#example').length || $('#example1').length || $('#example2').length || $('#example3').length || $('#example4').length || $('#example5').length || $('#example6').length || $('#example7').length || $('#example8').length || $('#example9').length || $('#example10').length || $('#example11').length || $('#example12').length || $('#example13').length || $('#example14').length){
         var table  = $('#example,#example1,#example2,#example3,#example4,#example5,#example6,#example7,#example8,#example9,#example10,#example11,#example12,#example13,#example14').removeAttr('width').DataTable({
        language: {
                    searchPlaceholder: "Search"
                  },
          "sDom": 'Rfrtlip',
          "aLengthMenu": [[10, 50, 100,200, -1], [10, 50, 100,200, "All"]],
          searching: true,
          info: false,
          fixedHeader: true,
          /*scrollX: true,*/
          "autoWidth" : false,
          // "columnDefs": [
          //   { width: 40, targets: 0 }
          // ],
        });
      }

      $('#search').on( 'keyup', function () {
          table.search( this.value ).draw();
      });
 });

  $('*[data-href]').on('click', function(event) {
        if(!$(event.target).hasClass('special_td')) {
          window.location = $(this).data("href");
        }
      });
  
  $(document).on("change",".select2",function(){
    var el = $(this);
    if($("#"+el.attr("id")).length >0 && el.val()==="Add New"){
      //$("#"+el.attr("id")).val('1').trigger('change');
      var modal= $("#"+el.attr("id")+" option:selected").attr("data-target");
       $("#"+el.attr("id")).select2("close");
       $( "a[data-target='"+modal+"']").click();
        $("#"+el.attr("id")).val($("#"+el.attr("id")+" option:first").val());
        $("#"+el.attr("id")).select2();
     }
  });
</script>

<script src="dist/img-preview/img-preview.min.js"></script>
<!-- <script src="dist/img-preview/img-preview1.js"></script> -->
<script type="text/javascript">
    $(document).ready(function() {
      $.uploadPreview({
        input_field: "#image-upload",
        preview_box: "#image-preview",
        label_field: "#image-label"

      });
    });

  
</script>

<script>
  
    
  function handleFileSelect(e) {
    console.dir(e);
    
    if(!e.target.files) return;
    
    selDiv.innerHTML = "";
    
    var files = e.target.files;
    for(var i=0; i<files.length; i++) {
      var f = files[i];
      
      selDiv.innerHTML += f.name + "<br/>";

    }
    
  }

/*$(function () {
     $("#laxmi").datepicker({  
         minDate:new Date();
      });
 });*/

 $(function(){
  var a=new Date();
  var e=a.getMonth()+1;
  var b=a.getDate();
  var c=a.getFullYear();
  if(e<10){e="0"+e.toString()
}if(b<10){
  b="0"+b.toString()
}var d=c+"-"+e+"-"+b;
$("#date_value").attr("min",d)

});


 
  var mobile_state = false;
   $("#mobile").on("blur", function(){

  var mobile = $('#mobile').val();
  //console.log(mobile);
  if (mobile == '') {
    mobile_state = false;
    return;
  }
  $.ajax({
    url: '<?php echo base_url("admin/system_data/mobileValidation"); ?>',
    type: 'post',
    data: {
      'username_check' : 1,
      'mobile' : mobile,
    },
    success: function(response){
      // var data = JSON.parse(response);
      console.log(response);
        if(response == "taken")
        {
          // console.log(1);
          //$("#datepicker_today").val("");
          $("#mob_validation").append("Mobile number already exits");
          
          //alert("This number already exits");
        }else{
          $("#mob_validation").remove();
        }
    }
  });

 });
 
  </script>
  

<script type="text/javascript">
  $(document).ready(function(){
    $('#search').hide();
    $('#search_id').val('');
    
  });
</script>

</body>
</html>
