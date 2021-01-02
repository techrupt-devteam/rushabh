

<script type="text/javascript">

function removeDocumentRow(rowId){
	$('#' + rowId).remove();
}

function addDocumentRow(){
    //console.log($('#id_value').val());
    $('#id_value_add').val($('#id_value').val());
    

	var rowCount = $('#tbl_document > tbody tr').length;
	var lastRowId = $('#tbl_document > tbody tr:last').attr('id');
	var idPartArr = lastRowId.split('_');
	var newIdNo = parseInt(idPartArr[2]) + 1;
	var rowsr = rowCount+1;


	var newRow = '<tr id="tbl_document_' + newIdNo + '">' +

		'<td>'+rowsr+'<input type="text" name="id[]" id="id_value_add" style="display: none;"><input type="text" id="type_value" name="type[]" value="Body Dimensions" style="display: none;">'+
		'</td>' +

		'<td>'+'<input type="text" name="list[]" class="form-control" placeholder="List">'+'</td>' + 

		'<td>'+
		'<div class="input-group">'+
		'<input type="text" name="details[]" class="form-control" placeholder="Details">'+
		/*'<span class="input-group-btn">'+
			'<button type="button" id="btn_upload_doc_file_<?=$i?>" data-loading-text="Loading..." onclick="loadDocFile('+newIdNo+');" class="btn btn-primary"><i class="fa fa-upload" style="color:white;"></i></button>'+
		'</span>'+*/
		'</div>'+
		'<span class="text-danger" id="doc_file_error_' + newIdNo + '"></span>'+
		'</td>'+
		
		'<td><a href="javascript:void(0);" class="btn btn-default" onclick="removeDocumentRow(\'tbl_document_' + newIdNo + '\');"><i class="fa fa-trash"></i></a></td>' +

		'</tr>';
	$('#tbl_document > tbody:last-child').append(newRow);
	console.log(newRow);
}
function removeEngineRow(rowId){
	$('#' + rowId).remove();
}

function addEngineRow(){
	console.log(1);
    //console.log($('#id_value').val());
    //$('#id_value_add').val($('#id_value').val());

	var rowCount = $('#tbl_document1 > tbody tr').length;
	var lastRowId = $('#tbl_document1 > tbody tr:last').attr('id');
	var idPartArr = lastRowId.split('_');
	var newIdNo = parseInt(idPartArr[2]) + 1;
	var rowsr = rowCount+1;

	var newRow = '<tr id="tbl_document1_' + newIdNo + '">' +
		'<td>'+rowsr+'<input type="text" name="id[]" id="id_value_add" style="display: none;"><input type="text" id="type_value" name="type[]" value="Engine" style="display: none;">'+
		'</td>' +

		'<td>'+'<input type="text" name="list[]" class="form-control" placeholder="List">'+'</td>' + 

		'<td>'+
		'<div class="input-group">'+
		'<input type="text" name="details[]" class="form-control" placeholder="Details">'+
		/*'<span class="input-group-btn">'+
			'<button type="button" id="btn_upload_doc_file_<?=$i?>" data-loading-text="Loading..." onclick="loadDocFile('+newIdNo+');" class="btn btn-primary"><i class="fa fa-upload" style="color:white;"></i></button>'+
		'</span>'+*/
		'</div>'+
		'<span class="text-danger" id="doc_file_error_' + newIdNo + '"></span>'+
		'</td>'+
		'<td><a href="javascript:void(0);" class="btn btn-default" onclick="removeDocumentRow(\'tbl_document1_' + newIdNo + '\');"><i class="fa fa-trash"></i></a></td>' +

		'</tr>';
	$('#tbl_document1 > tbody:last-child').append(newRow);
	console.log(newRow);
}

</script>