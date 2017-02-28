<?php
	session_start();
	include_once 'db.php';
	
if(!isset($_SESSION['admin_id'])){
		header('location: admin_login.php');
	}
	
	$error=false;
	
	if(isset($_POST['signup'])){
		$LastName=mysqli_real_escape_string($connection, $_POST['LastName']);
        $VillaName=mysqli_real_escape_string($connection, $_POST['VillaName']);
		$RoomType=mysqli_real_escape_string($connection, $_POST['RoomType']);
		$SNum=mysqli_real_escape_string($connection, $_POST['SNum']);
		$Course=mysqli_real_escape_string($connection, $_POST['Course']);
		$YearLevel=mysqli_real_escape_string($connection, $_POST['YearLevel']);
		$Birthday=mysqli_real_escape_string($connection, $_POST['Birthday']);
		$Address=mysqli_real_escape_string($connection, $_POST['Address']);
		$ContactNum=mysqli_real_escape_string($connection, $_POST['ContactNum']);
		$Email=mysqli_real_escape_string($connection, $_POST['Email']);
		$FirstName=mysqli_real_escape_string($connection, $_POST['FirstName']);
		$MiddleName=mysqli_real_escape_string($connection, $_POST['MiddleName']);
		$user_name=mysqli_real_escape_string($connection, $_POST['user_name']);
		$password=mysqli_real_escape_string($connection, $_POST['password']);
		$category=mysqli_real_escape_string($connection, $_POST['category']);
		$religion=mysqli_real_escape_string($connection, $_POST['religion']);
		$gender=mysqli_real_escape_string($connection, $_POST['gender']);
		
		
		$LastName=ucwords($LastName);
		$VillaName=ucwords($VillaName);
		$RoomType=ucwords($RoomType);
		$SNum=ucwords($SNum);
		$Course=ucwords($Course);
		$YearLevel=ucwords($YearLevel);
		$Birthday=ucwords($Birthday);
		$Address=ucwords($Address);
		$ContactNum=ucwords($ContactNum);
		$Email=ucwords($Email);
		$FirstName=ucwords($FirstName);
		$MiddleName=ucwords($MiddleName);
		$user_name=ucwords($user_name);
		$password=ucwords($password);
		$category=ucwords($category);
		$religion=ucwords($religion);
		$gender=ucwords($gender);
		
		
		
		
	if(!$error){
			if(mysqli_query($connection, "INSERT INTO dormers (LastName, VillaName, RoomType, SNum, Course, YearLevel, Birthday, Address, ContactNum, Email, FirstName, MiddleName, user_name, password, category, religion, gender) VALUES ('".$LastName."', '".$VillaName."', '".$RoomType."', '".$SNum."', '".$Course."', '".$YearLevel."', '".$Birthday."', '".$Address."', '".$ContactNum."', '".$Email."', '".$FirstName."', '".$MiddleName."','".$user_name."','".$password."','".$category."','".$religion."','".$gender."')")){
				header('location: back.php');
			}
			else{
				$note="Email already exists.";
			}
		}
	}
?>




<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="flexboxgrid.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<title>ASEAN Residences Dormitory System</title>
</head>



<body>
<div class="blue_header" ><span>"A Home Away From Home" </span></div> 


<div class="pic_headers"> <p>CREATE ACCOUNT</p></div>
<nav class="yellow_nav_new">
	    	<div class="menus">
        	<ul>
                <li><a href="tables.php" class="menus_a">DASHBOARD</a></li>
                <li><a href="tables.php" class="menus_a">VIEW MEMBERS</a></li>
                <li><a href="inbox.php" class="menus_a">MESSAGES</a></li>
                <li><a href="admin_login.php" class="menus_a">LOG OUT</a></li>

            </ul>
        
        </div>
</nav> 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input class="input_textbox" name="SNum" type="text" placeholder="Student Number" required><br>
<input class="input_textbox" name="user_name" type="text" placeholder="User Name" required><br>
<input class="input_textbox" name="password" type="password" placeholder="Password" required><br>
<input class="input_textbox_drop" name="category" type="text" placeholder="Category" required><br>
<input class="input_textbox" name="VillaName" type="text" placeholder="Villa Name" required><br>
<input class="input_textbox" name="RoomType" type="text" placeholder="Room Type" required><br>
<input class="input_textbox" name="LastName" type="text" placeholder="Last Name" required><br>
<input class="input_textbox" name="FirstName" type="text" placeholder="First Name" required><br>
<input class="input_textbox" name="MiddleName" type="text" placeholder="Middle Name" required><br>
<input class="input_textbox" name="Course" type="text" placeholder="Course" required><br>
<input class="input_textbox" name="gender" type="text" placeholder="Gender M/F" required><br>
<input class="input_textbox" name="YearLevel" type="text" placeholder="Year Level" required><br>
<input class="input_textbox" name="Birthday" type="date" placeholder="Birthday" required><br>
<input class="input_textbox" name="Address" type="text" placeholder="Address" required><br>
<input class="input_textbox" name="ContactNum" type="text" placeholder="Contact Number" required><br>
<input class="input_textbox" name="Email" type="text" placeholder="Email" required><br>
<input class="input_textbox" name="religion" type="text" placeholder="Religion">


<input class="button" type="submit" name="signup" value="CREATE"></input>

<div class="blue_header_bottom" ></div> 

<div class="pic_footer"> 
	<p>© 2016 [BSIT-3A OPTICS]. All rights reserved.
    </p>
</div>

</form>
</body>
</html>