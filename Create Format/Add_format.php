<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Question paper format_type</title>
<link rel="stylesheet" href="jquery-ui.css">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.2-web\fontawesome-free-5.10.2-web\css\all.css">
<link rel="stylesheet" type="text/css" href="normalize.css" >
<link rel="stylesheet" type="text/css" href="demo.css" >
<link rel="stylesheet" type="text/css" href="component.css">
<script src="modernizr.custom.js"></script>
</head>
<body>
<div class="container">
  <ul id="gn-menu" class="gn-menu-main">
    <li class="gn-trigger"> <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
      <nav class="gn-menu-wrapper">
        <div class="gn-scroller">
          <ul class="gn-menu">
            <!--<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon"><span>Search</span></a>
								</li>-->
            <li> <a class="gn-icon gn-icon-profile"><i class="fas fa-user"></i> Profile</a>
              <ul class="gn-submenu">
                <li><a class="gn-icon gn-icon-viewprofile" href="../Profile/View_profile.html"><i class="far fa-address-card"></i> View Profile</a></li>
                <li><a class="gn-icon gn-icon-editprofile" href="../Profile/Edit_profile.html"><i class="fas fa-user-edit"></i> Edit Profile</a></li>
              </ul>
            </li>
            <li> <a class="gn-icon gn-icon-service"><i class="fas fa-pen"></i>Service</a>
              <ul class="gn-submenu">
                <li><a href="../Create Format/format.php" class="gn-icon gn-icon-addquestion"><i class="far fa-file"></i>Add Question Format</a></li>
                <li><a href="../Format/Create_questionpaper (2).php" class="gn-icon gn-icon-editquestion"><i class="far fa-edit"></i> Creat Question paper</a></li>
                <!--										<li><a class="gn-icon gn-icon-deletquestion"><i class="fas fa-trash"></i> Delet Question</a></li>-->
              </ul>
            </li>
            <li><a class="gn-icon gn-icon-aboutus"><i class="fas fa-info-circle"></i> About Us</a></li>
          </ul>
        </div>
        <!-- /gn-scroller --> 
      </nav>
    </li>
    <li><a href="../menu/admin_menu.php"><i class="fas fa-home"></i> Home</a></li>
      <li><a class="codrops-icon" >
                <?php echo htmlspecialchars($_SESSION["username"]); ?>
                </a>
            </li>

    <li><a class="codrops-icon" href="../Login/logout.php"><i class="fas fa-sign-out-alt"></i><span></span></a></li>
  </ul>
  <header>
    <div class="container">
      <h1 align="center">Select unit test format_type </h1>
      <h2 align="center">Using Question Paper Generator</h2>
      <button format_type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
      <div align="right" style="margin-bottom:5px;"> </div>
      <br/>
      <form method="post" id="user_form">
        <div class="table-responsive col-md-11">
          <table class="table table-striped table-bordered" id="user_data">
            <tr>
              <th>Format</th>
              <th>Note or Main Question</th>
              <th>Chapter</th>
              <th>Difficulty</th>
              <th>Marks</th>
              <th>Details</th>
              <th>Remove</th>
            </tr>
          </table>
        </div>
        <div align="center" class="col-md-11">
          <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
        </div>
      </form>
      <br />
    </div>
    <div id="user_dialog" title="Add Data">
      <div class="form-group">
        <label>Select Note Or Question</label>
        <select name="format_type" id="format_type" class="form-control">
          <option>Note</option>
          <option>Question</option>
        </select>
        <span id="error_format_type" class="text-danger"></span> </div>
      <div class="form-group">
        <label>Enter Note</label>
        <input type="text" name="note" id="note" class="form-control" />
        <span id="error_note" class="text-danger"></span> </div>
      <div class="form-group">
        <label>Chapter Number</label>
        <select name="chepter" id="chepter" class="form-control">
          <option>Unit-1</option>
          <option>Unit-2</option>
          <option>Unit-3</option>
          <option>Unit-4</option>
          <option>Unit-5</option>
          <option>Unit-6</option>
          <option>Unit-7</option>
          <option>Unit-8</option>
          <option>Unit-9</option>
          <option>Unit-10</option>
          <option>Unit-11</option>
          <option>Unit-12</option>
          <option>Unit-13</option>
          <option>Unit-14</option>
          <option>Unit-15</option>
        </select>
        <span id="error_chepter" class="text-danger"></span> </div>
      <div class="form-group">
        <label>Difficulty Level</label>
        <select name="difficulty" id="difficulty" class="form-control">
          <option>Easy</option>
          <option>Medium</option>
          <option>Hard</option>
        </select>
        <span id="error_difficulty" class="text-danger"></span> </div>
      <div class="form-group">
        <label>Marks</label>
        <input type="number" name="marks" id="marks" class="form-control" />
        <span id="error_marks" class="text-danger"></span> </div>
      <div class="form-group" align="center">
        <input type="hidden" name="row_id" id="hidden_row_id" />
        <button type="button" name="save" id="save" class="btn btn-info">Save</button>
      </div>
    </div>
    <div id="action_alert" title="Action"> </div>
  </header>
  <script>
$(document).ready(function(){ 
	
	var count = 0;

	$('#user_dialog').dialog({
		autoOpen:false,
		width:400
	});

	$('#add').click(function(){
		$('#user_dialog').dialog('option', 'title', 'Add Data');
		$('#format_type').val('');
		$('#note').val('');
		$('#chepter').val('');
		$('#difficulty').val('');
		$('#marks').val('');
		$('#error_format_type').text('');
		$('#error_note').text('');
		$('#error_chepter').text('');
		$('#error_difficulty').text('');
		$('#error_marks').text('');
		$('#format_type').css('border-color', '');
		$('#note').css('border-color', '');
		$('#chepter').css('border-color', '');
		$('#difficulty').css('border-color', '');
		$('#marks').css('border-color', '');
		$('#save').text('Save');
		$('#user_dialog').dialog('open');
	});

	$('#save').click(function(){
		var error_format_type = '';
		var error_note = '';
		var error_chepter = '';
		var error_difficulty = '';
		var error_marks = '';
		var format_type = '';
		var note='';
		var chepter = '';
		var difficulty = '';
		var marks = '';
		
		if($('#format_type').val() == '')
		{
			error_format_type = 'format_type is required';
			$('#error_format_type').text(error_format_type);
			$('#format_type').css('border-color', '#cc0000');
			format_type = '';
		}
		else
		{
			error_format_type = '';
			$('#error_format_type').text(error_format_type);
			$('#format_type').css('border-color', '');
			format_type = $('#format_type').val();
		}	
		if($('#note').val() == '')
		{
			error_note = 'Note is required';
			$('#error_note').text(error_note);
			$('#note').css('border-color', '#cc0000');
			note = '';
		}
		else
		{
			error_note = '';
			$('#error_note').text(error_note);
			$('#note').css('border-color', '');
			note = $('#note').val();
		}	
		if($('#chepter').val() == '')
		{
			error_chepter = 'chepter number is required';
			$('#error_chepter').text(error_chepter);
			$('#chepter').css('border-color', '#cc0000');
			chepter = '';
		}
		else
		{
			error_chepter = '';
			$('#error_chepter').text(error_chepter);
			$('#chepter').css('border-color', '');
			chepter = $('#chepter').val();
		}
		if($('#difficulty').val() == '')
		{
			error_difficulty = 'Difficulty level is required';
			$('#error_difficulty').text(error_difficulty);
			$('#difficulty').css('border-color', '#cc0000');
			difficulty = '';
		}
		else
		{
			error_difficulty = '';
			$('#error_difficulty').text(error_difficulty);
			$('#difficulty').css('border-color', '');
			difficulty = $('#difficulty').val();
		}	
		if($('#marks').val() == '')
		{
			error_marks = 'Mark is required';
			$('#error_format_type').text(error_marks);
			$('#marks').css('border-color', '#cc0000');
			marks = '';
		}
		else
		{
			error_marks = '';
			$('#error_marks').text(error_marks);
			$('#marks').css('border-color', '');
			marks = $('#marks').val();
		}	
		if(error_format_type != '')
		{
			return false;
		}
		else
		{
			if($('#save').text() == 'Save')
			{
				count = count + 1;
				output = '<tr id="row_'+count+'">';
				output += '<td>'+format_type+' <input type="hidden" id="format_type[]" name="hidden_format_type[]'+count+'" class="format_type" value="'+format_type+'" /></td>';
				output += '<td>'+note+' <input type="hidden" name="hidden_note[]" id="note'+count+'" value="'+note+'" /></td>';
				output += '<td>'+chepter+' <input type="hidden" name="hidden_chepter[]" id="chepter'+count+'"  value="'+chepter+'" /></td>';
				output += '<td>'+difficulty+' <input type="hidden" name="hidden_difficulty[]" id="difficulty'+count+'" value="'+difficulty+'" /></td>';
				output += '<td>'+marks+' <input type="hidden" name="hidden_marks[]" id="marks'+count+'" value="'+marks+'" /></td>';
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
				output += '</tr>';
				$('#user_data').append(output);
			}
			else
			{
				var row_id = $('#hidden_row_id').val();
				output = '<td>'+format_type+' <input type="hidden" name="hidden_format_type[]" id="format_type'+row_id+'" class="format_type" value="'+format_type+'" /></td>';
				output = '<td>'+note+' <input type="hidden" name="hidden_note[]" id="note'+row_id+'" value="'+note+'" /></td>';
				output += '<td>'+chepter+' <input type="hidden" name="hidden_chepter[]" id="chepter'+row_id+'" value="'+chepter+'" /></td>';
				output = '<td>'+difficulty+' <input type="hidden" name="hidden_difficulty[]" id="difficulty'+row_id+'"  value="'+difficulty+'" /></td>';
				output = '<td>'+marks+' <input type="hidden" name="hidden_marks[]" id="marks'+row_id+'" value="'+marks+'" /></td>';
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
				$('#row_'+row_id+'').html(output);
			}

			$('#user_dialog').dialog('close');
		}
	});

	$(document).on('click', '.view_details', function(){
		var row_id = $(this).attr("id");
		var format_type = $('#format_type'+row_id+'').val();
		var note = $('#note'+row_id+'').val();
		$('#format_type').val(format_type);
		$('#note').val(note);
		$('#save').text('Edit');
		$('#hidden_row_id').val(row_id);
		$('#user_dialog').dialog('option', 'title', 'Edit Data');
		$('#user_dialog').dialog('open');
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

	$('#action_alert').dialog({
		autoOpen:false
	});

	$('#user_form').on('submit', function(event){
		event.preventDefault();
		var count_data = 0;
		$('.format_type').each(function(){
			count_data = count_data + 1;
		});
		if(count_data > 0)
		{
			var form_data = $(this).serialize();
			$.ajax({
				url:"insert.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#user_data').find("tr:gt(0)").remove();
					$('#action_alert').html('<p>Format Inserted Successfully</p>');
					$('#action_alert').dialog('open');
				}
			})
		}
		else
		{
			$('#action_alert').html('<p>Please Add atleast one data</p>');
			$('#action_alert').dialog('open');
		}
	});
	
});  
</script> 
</div>
<!-- /container --> 
<script src="classie.js"></script> 
<script src="gnmenu.js"></script> 
<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
</body>
</html>