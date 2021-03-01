<?php
$error = '';


if ( isset($_POST['submit-form']) ) 
{
	$fullname = $_POST['fullname'];
	$fullname = ucwords( trim($fullname) );
	for ($i=10; $i>2;)
		$fullname = str_replace(str_repeat(' ', $i--), ' ', $fullname);
	if ( !preg_match('/^[ ]*[a-zA-Z]{2,30}[ ]+[a-zA-Z]{2,30}[ ]*|[ ]*[a-zA-Z]{2,30}[ ]+[a-zA-Z]{2,30}[ ]+[a-zA-Z]{2,30}[ ]*$/', $fullname) )
		$error .= 'Error in fullname<br>';


	$birthdate = $_POST['birthdate'];
	if ( empty($birthdate) )
		$error .= 'Error in birthdate';
	else
		$birthdate = date('d M, Y');


	$gender = strtoupper( $_POST['gender'] );
	if ( empty($gender) )
		$error .= 'Gender is empty<br>';


	$state = ucwords( $_POST['state'] );
	for ($i=10; $i>2;)
		$state = str_replace(str_repeat(' ', $i--), ' ', $state);
	if ( !preg_match('/^[a-zA-Z \-]{2,50}$/', $state) )
		$error .= 'Error in state<br>';


	$address = ucwords( $_POST['address'] );
	for ($i=10; $i>2;)
		$address = str_replace(str_repeat(' ', $i--), ' ', $address);
	if ( !preg_match('/^[a-zA-Z0-9.,\/ \-]{2,50}$/', $address) )
		$error .= 'Error in address<br>';
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<style type="text/css">
		body{
			background-color:#171b4a;
		}
		form{
			width: 400px;
			margin: 20vh auto auto auto;
			padding: 30px;
			border-radius: 10px;
			background-color: #fff;
			box-shadow: 0 0 7px #fff;
		}
		h4{
			font-family: sans-serif;
			text-align: center;
			color: #101873;
			font-size: 1.5em;
			margin-top: 0;
		}
		.form-group{
			margin-bottom:20px; 
		}
		.form-group:last-child{
			 margin-top: 30px;
			margin-bottom: 0px;
		}
		label{
			color:#777;
		}
		input, select{
			padding: 6px;
			padding-top: 5px;
			display: block;
			width: 100%;
			color:#444;
			letter-spacing: 1.1px;
			box-sizing: border-box;
			border: none;
			border-bottom: 0.5px solid #d6d6d6;
		}
		input:focus, select:focus{
			outline: none;
			background-color: #f4f4f4;
		}
		.btn{
			border: none;
			border-radius: 7px;
			padding: 13px 20px;
		}
		.btn:hover{
			transition:0.7s;
			outline: none;
		}
		.btn:focus{
			outline: none;
		}
		.btn-primary{
			background-color: #101873;
			color: #fff;
		}
		.btn-primary:hover{
			background-color: #171b4a;
			cursor: pointer;
		}
		#error{
			color: red;
			font-style: italic;
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars(''); ?>">
		<h4>SideHustle Registration Form</h4>
		
		<?php if (!empty($error)) echo "<div id='error'>{$error}</div>"; ?>

		<?php
		if ( isset($_POST['submit-form']) ) 
			echo "<p>
					<b>Fullname:</b> {$fullname}<br>
					<b>Birthdate:</b> {$birthdate}<br>
					<b>Gender:</b> {$gender}<br>
					<b>State:</b> {$state}<br>
					<b>Address:</b> {$address}<br>
				  </p>";
		?>
		<div class="form-group">
			<label>Fullname</label>
			<input type="text" name="fullname" pattern="^[ ]*[a-zA-Z]{2,30}[ ]+[a-zA-Z]{2,30}[ ]*|[ ]*[a-zA-Z]{2,30}[ ]+[a-zA-Z]{2,30}[ ]+[a-zA-Z]{2,30}[ ]*$" required="true">
		</div>
		<div class="form-group dd">
			<label>Birthdate</label>
			<input type="date" name="birthdate" required="true">
		</div>
		<div class="form-group">
			<label>Gender</label>
			<select name="gender" required="true">
				<option></option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>
		</div>
		<div class="form-group">
			<label>State of origin</label>
			<input type="text" name="state" pattern="^[a-zA-Z \-]{2,50}$" required="true">
		</div>
		<div class="form-group">
			<label>Address</label>
			<input type="text" name="address" pattern="^[a-zA-Z0-9.,\/ \-]{2,100}$" required="true">
		</div>
		<div class="form-group dd">
			<button type="submit" name="submit-form" class="btn btn-primary">Submit</button>
		</div>
	</form>
</body>
</html>
