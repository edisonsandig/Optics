<?php
	session_start();
	include_once 'db.php';

	if(isset($_POST['login'])){
		$user_name=mysqli_real_escape_string($connection, $_POST['user_name']);
		$password=mysqli_real_escape_string($connection, $_POST['password']);
		$result=mysqli_query($connection, "SELECT * FROM dormers WHERE user_name='".$user_name."' and password='".$password."'");

		if($row=mysqli_fetch_array($result)){
			$_SESSION['student_id']=$row['student_id'];
			header('location: user_dashboard.php');
		}
		else{
			$note='';
		}
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
<div class="pic_header"> <p>Users's Panel</p></div>
<?php if(isset($note)){ echo $note='<div class="alert"><span class="closebtn">×</span><strong>Error!</strong> Your user name or password is incorrect.</div>'; } ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input class="textbox" name="user_name" type="text" placeholder="USER NAME" required>
<input class="textbox" name="password" type="password" placeholder="PASSWORD" required>

<input class="button" type="submit" name="login" value="LOG IN"></input>

<div class="blue_header_bottom" ></div> 
<div class="pic_footer"> <p>© 2016 [BSIT-3A OPTICS]. All rights reserved.</p></div>
</form>

<script>
var close=document.getElementsByClassName("closebtn");
var i;
for(i=0;i<close.length;i++){
	close[i].onclick=function(){
		var div=this.parentElement;
		div.style.opacity="0";
		setTimeout(function(){ div.style.display="none"; }, 600);
	}
}
</script>
</body>
</html>