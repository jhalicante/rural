<html>  
    <head>  
        <title>PHP - Sending multiple forms data through jQuery Ajax</title>  
		
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
   <br />

   
   <div align="right" style="margin-bottom:5px;">
    <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
   </div>
   <br />
   <form method="post" id="">
    <div class="table-responsive">
     <table class="table" id="user_data">
      <tr>
       <th>First Name</th>
	   <th>Middle Name</th>
       <th>Last Name</th>
       <th>Age</th>
        <th>Position</th>  
		 <th>Status</th>  
		 <th>Disability</th>  
       <th>Remove</th>
      </tr>
     </table>
    </div>
   </form>

   <br />
  </div>
  <div id="user_dialog" title="Add Data">
   <div class="form-group">
    <label>Enter First Name</label>
    <input type="text" name="first_name" id="first_name" class="form-control" />
    <span id="error_first_name" class="text-danger"></span>
   </div>
      <div class="form-group">
    <label>Enter Middle Name</label>
    <input type="text" name="middle_name" id="middle_name" class="form-control" />
    <span id="error_middle_name" class="text-danger"></span>
   </div>
   <div class="form-group">
    <label>Enter Last Name</label>
    <input type="text" name="last_name" id="last_name" class="form-control" />
    <span id="error_last_name" class="text-danger"></span>
   </div>
      <div class="form-group">
    <label>Age</label>
    <input type="text" name="age" id="age" class="form-control" />
    <span id="error_age" class="text-danger"></span>
   </div>
   <div class="form-group">
       <label>Position</label>
				<select id="position" name ="position" placeholder="Select Role" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Role</option>
						<option value="Father">Father</option>
				        <option value="Mother">Mother</option>
						<option value="Son">Son</option>
						<option value="Daughter">Daughter</option>
						<option value="Uncle">Uncle</option>
						</select>
    <span id="error_position" class="text-danger"></span>
   </div>
   
    <div class="form-group">
       <label>Status</label>
			<select id="status" name ="status" placeholder="Select Status" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Status</option>
						<option value="Preschool">Preschool</option>
				        <option value="School">School</option>
						<option value="No">No</option>
						<option value="Pregnant">Pregnant</option>
						<option value="Lactation">Lactation</option>

						</select>
    <span id="error_status" class="text-danger"></span>
   </div>  
   
       <div class="form-group">
       <label>Disability</label>
			<select id="disability" name ="disability" placeholder="Select disability" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select disability</option>
						<option value="Yes">Yes</option>
				        <option value="No">No</option>


						</select>
    <span id="error_disability" class="text-danger"></span>
   </div>  
   
   
   <div class="form-group" align="center">
    <input type="hidden" name="row_id" id="hidden_row_id" />
    <button type="button" name="save" id="save" class="btn btn-info">Save</button>
   </div>
  </div>
  <div id="action_alert" title="Action">

  </div>
    </body>  
</html> 

<script>  
$(document).ready(function(){ 
 
 var count = 0;

 $('#user_dialog').dialog({
  autoOpen:false,
  width:400
 });

 $('#add').click(function(){
  $('#user_dialog').dialog('option', 'title', 'Add Data');
  $('#first_name').val('');
   $('#middle_name').val('');
  $('#last_name').val('');
    $('#age').val('');
	$('#position').val('');
	$('#status').val('');
		$('#disability').val('');
  $('#error_first_name').text('');
    $('#error_middle_name').text('');
  $('#error_last_name').text('');
   $('#error_age').text('');
      $('#error_position').text('');
	$('#error_status').text('');
		$('#error_disability').text('');
  $('#first_name').css('border-color', '');
   $('#middle_name').css('border-color', '');
  $('#last_name').css('border-color', '');
    $('#position').css('border-color', '');
    $('#age').css('border-color', '');
	 $('#status').css('border-color', '');
	 $('#disability').css('border-color', '');
  $('#save').text('Save');
  $('#user_dialog').dialog('open');
 });

 $('#save').click(function(){
  var error_first_name = '';
  var error_middle_name = '';
  var error_last_name = '';
   var error_age = '';
   var error_status = '';
var error_position = '';
   var error_disability = '';
  var first_name = '';
   var middle_name = '';
  var last_name = '';
   var age = '';
      var status = '';
      var position = '';
	  var disability = '';
  if($('#first_name').val() == '')
  {
   error_first_name = 'First Name is required';
   $('#error_first_name').text(error_first_name);
   $('#first_name').css('border-color', '#cc0000');
   first_name = '';
  }
  else
  {
   error_first_name = '';
   $('#error_first_name').text(error_first_name);
   $('#first_name').css('border-color', '');
   first_name = $('#first_name').val();
  } 
    if($('#middle_name').val() == '')
  {
   error_middle_name = 'middle Name is required';
   $('#error_middle_name').text(error_middle_name);
   $('#middle_name').css('border-color', '#cc0000');
   middle_name = '';
  }
  else
  {
   error_middle_name = '';
   $('#error_middle_name').text(error_middle_name);
   $('#middle_name').css('border-color', '');
   middle_name = $('#middle_name').val();
  } 
  
  if($('#last_name').val() == '')
  {
   error_last_name = 'Last Name is required';
   $('#error_last_name').text(error_last_name);
   $('#last_name').css('border-color', '#cc0000');
   last_name = '';
  }
  else
  {
   error_last_name = '';
   $('#error_last_name').text(error_last_name);
   $('#last_name').css('border-color', '');
   last_name = $('#last_name').val();
  }
    if($('#age').val() == '')
  {
   error_age = 'Age is required';
   $('#error_age').text(error_age);
   $('#age').css('border-color', '#cc0000');
   age = '';
  }
  else
  {
   error_age = '';
   $('#error_age').text(error_age);
   $('#age').css('border-color', '');
   age = $('#age').val();
  } 
  
      if($('#position').val() == '')
  {
   error_position = 'Position is required';
   $('#error_position').text(error_position);
   $('#position').css('border-color', '#cc0000');
   position = '';
  }
  else
  {
   error_position = '';
   $('#error_position').text(error_position);
   $('#position').css('border-color', '');
   position = $('#position').val();
  } 
        if($('#status').val() == '')
  {
   error_status = 'Status is required';
   $('#error_status').text(error_status);
   $('#status').css('border-color', '#cc0000');
   status = '';
  }
  else
  {
   error_status = '';
   $('#error_status').text(error_status);
   $('#status').css('border-color', '');
   status = $('#status').val();
  } 
  if($('#disability').val() == '')
  {
   error_status = 'Disability is required';
   $('#error_disability').text(error_disability);
   $('#disability').css('border-color', '#cc0000');
   status = '';
  }
  else
  {
   error_disability = '';
   $('#error_disability').text(error_disability);
   $('#disability').css('border-color', '');
   disability = $('#disability').val();
  } 
  if(error_first_name != '' || error_last_name != '')
  {
   return false;
  }
  else
  {
   if($('#save').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row_'+count+'">';
    output += '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+count+'" class="first_name" value="'+first_name+'" /></td>';
	output += '<td>'+middle_name+' <input type="hidden" name="hidden_middle_name[]" id="middle_name'+count+'" value="'+middle_name+'" /></td>';   
   output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+count+'" value="'+last_name+'" /></td>';
  output += '<td>'+age+' <input type="hidden" name="hidden_age[]" id="age'+count+'" value="'+age+'" /></td>';
 output += '<td>'+position+' <input type="hidden" name="hidden_position[]" id="position'+count+'" value="'+position+'" /></td>';
  output += '<td>'+status+' <input type="hidden" name="hidden_status[]" id="status'+count+'" value="'+status+'" /></td>';
  output += '<td>'+disability+' <input type="hidden" name="hidden_disability[]" id="disability'+count+'" value="'+disability+'" /></td>';
          
	output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
    output += '</tr>';
    $('#user_data').append(output);
   }
   else
   {
    var row_id = $('#hidden_row_id').val();
    output = '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+row_id+'" class="first_name" value="'+first_name+'" /></td>';
  output = '<td>'+middle_name+' <input type="hidden" name="hidden_middle_name[]" id="middle_name'+row_id+'" class="middle_name" value="'+middle_name+'" /></td>';
  output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+row_id+'" value="'+last_name+'" /></td>';
   output += '<td>'+age+' <input type="hidden" name="hidden_age[]" id="age'+row_id+'" value="'+age+'" /></td>';
    output += '<td>'+position+' <input type="hidden" name="hidden_position[]" id="position'+row_id+'" value="'+position+'" /></td>';
    output += '<td>'+status+' <input type="hidden" name="hidden_status[]" id="status'+row_id+'" value="'+status+'" /></td>';
   output += '<td>'+disability+' <input type="hidden" name="hidden_disability[]" id="disability'+row_id+'" value="'+disability+'" /></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
    $('#row_'+row_id+'').html(output);
   }

   $('#user_dialog').dialog('close');
  }
 });


 $(document).on('click', '.remove_details', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this row data?"))
  {
   $('#row_'+row_id+'').remove();
  }
  else
  {
   return false;
  }
 });



 
});  
</script>
