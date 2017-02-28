<?php
	session_start();
	include_once 'db.php';

	if(isset($_SESSION['admin_id'])!=""){
		header('location: dashboard');
	}
	if(isset($_POST['login'])){
		$admin_username=mysqli_real_escape_string($connection, $_POST['admin_username']);
		$admin_password=mysqli_real_escape_string($connection, $_POST['admin_password']);
		$result=mysqli_query($connection, "SELECT * FROM admin WHERE admin_username='".$admin_username."' and admin_password='".$admin_password."'");

		if($row=mysqli_fetch_array($result)){
			$_SESSION['admin_id']=$row['admin_id'];
			header('location: dashboard');
		}
		else{
			$note='';
		}
	}
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ASEAN Residences Dormitory System</title>
</head>



<body>
<input name="admin_username" type="text" required>
<input name="admin_password" type="password" required>

<input type="submit" name="login" value="LOG IN"></input>

</body>
</html>