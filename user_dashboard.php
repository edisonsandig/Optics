<?php
	session_start();
	include_once 'db.php';

if(!isset($_SESSION['student_id'])){
		header('location: user_login.php');
	}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<meta charset="utf-8">
<title>ASEAN Residences Dormitory System</title>
</head>



<body>
<div class="blue_header" >
	<span>"A Home Away From Home" </span>
</div> 


<div class="pic_header">
	<p>User's Panel</p>
</div>


<!--**********************************************************!-->
 

<div class="box">
	<a href='#'>EDIT ACCOUNT</a>
</div>

<div class="box">
	<a href='#'>VIEW ANNOUCEMENTS</a>
</div>

<div class="box">
	<a href='#'>VIEW ACCOUNTS</a>
</div>

<div class="box">
	<a href='#'>UPLOAD PHOTOS</a>
</div>

<div class="box">
	<a href='#'>MESSAGE THE ADMIN</a>
</div>

<div class="box">
	<a href='incident.php'>INCIDENT REPORT</a>
</div>

<div class="box">
	<a href='index.php'>LOG OUT</a>
</div>

<!--**********************************************************!-->


<div class="blue_footer_bottom" ></div> 

<div class="pic_footer"> 
	<p>© 2016 [BSIT-3A OPTICS]. All rights reserved.</p>
</div>

</body>
</html>