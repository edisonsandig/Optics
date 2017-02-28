<?php
	session_start();
	include_once 'db.php';

if(!isset($_SESSION['admin_id'])){
		header('location: ./');
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
	<p>Administrator's Panel</p>
</div>

 
<!--**********************************************************!-->
<div class="box">
	<a href='tables.php'>VIEW MEMBERS</a>
</div>

<div class="box">
	<a href='create_acc.php'>CREATE ACCOUNT</a>
</div>

<div class="box">
	<a href='#'>UPLOAD PHOTOS</a>
</div>

<div class="box">
	<a href='#'>ENTERTAIN MESSAGES</a>
</div>

<div class="box">
	<a href='#'>GENERATE REPORTS</a>
</div>

<div class="box">
	<a href='#'>CREATE AN EVENT</a>
</div>

<div class="box">
	<a href='#'>CREATE AN ANNOUNCEMENT</a>
</div>

<div class="box">
	<a href='admin_login.php'>LOG OUT</a>
</div>


<!--**********************************************************!-->


<div class="blue_footer_bottom" ></div> 

<div class="pic_footer"> 
	<p>© 2016 [BSIT-3A OPTICS]. All rights reserved.</p>
</div>

</body>
</html>