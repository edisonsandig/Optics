<?php
	session_start();
	include_once 'db.php';
	
	if(!isset($_SESSION['student_id'])){
		header('location: user_dashboard.php');
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
<div class="pic_header"> <p>INCIDENT REPORT</p></div>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<div class="validation"> Thank you for reporting your concern. We will immediately proccess your request. Just standby on any updates!</div>.
<br>
<a class="link" href="user_dashboard.php">Back to dasboard</a>



</body>
</html>