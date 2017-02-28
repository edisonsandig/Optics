<?php
	session_start();
	include_once 'db.php';
	
	if(!isset($_SESSION['admin_id'])){
		header('location: admin_login.php');
	}
?>




<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="flexboxgrid.min.css">
<meta charset="utf-8">
<title>ASEAN Residences Dormitory System</title>
</head>

<body>

<div class="blue_header" ><span>"A Home Away From Home" </span></div> 
<div class="pic_header"> <p>CREATE ACCOUNT</p></div>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<div class="validation">Successfuly Added To Database!</div>.
<br>
<a class="link" href="admin_dashboard.php">Back to dasboard</a>



</body>
</html>