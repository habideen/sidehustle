<?php
if (isset($_POST[]) {
    $fullname = $_POST['fullname'];
    if (!preg_match("/^[ ]*[a-zA-Z]{2,30}[ ]+[a-zA-Z]{2,30}[ ]*|[ ]*[a-zA-Z]{2,30}[ ]+[a-zA-Z]{2,30}[ ]+[a-zA-Z]{2,30}[ ]*$/", $fullname))
        $error .= "Invalid name<br>";


    $birthdate = $_POST['birthdate'];

    
    $gender = $_post['gender'];
    

    $state = $_post['state'];

    $address = $_post['address'];
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
			padding: 10px 15px;
		}
		.btn:hover{
			transition:0.7s;
		}
		.btn-primary{
			background-color: #000c96;
			color: #fff;
		}
		.btn-primary:hover{
			background-color: #171b4a;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars(''); ?>">
  <?php 
    if (isset($_POST[]) {
        echo "<div class='form-group'>Fullname:{$fullname}<br>Birthdate:{$birthdate}<br>Gender:{$gender}<br>State:{$state}<br>Address:{$address}</div>";
    }
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
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select>
		</div>
		<div class="form-group">
			<label>State of origin</label>
			<input type="text" name="state" pattern="^[a-zA-Z \-]{2,50}$" required="true">
		</div>
		<div class="form-group">
			<label>Address</label>
			<input type="text" name="address" pattern="^[a-zA-Z \-]{2,100}$" required="true">
		</div>
		<div class="form-group dd">
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</div>
	</form>
</body>
</html>
