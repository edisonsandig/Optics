<?php
	session_start();
	include_once 'db.php';
	
	if(isset($_POST['signup'])){
	$SNum=$_SESSION['SNum'];
	$result1=mysqli_query($connection, "SELECT * FROM users WHERE SNum='$SNum'");
	while($row=mysqli_fetch_assoc($result1)){
		$FirstName=$row['FirstName'];
		$LastName=$row['LastName'];
		$Email=$row['Email'];
		$VillaName=$row['VillaName'];
		$RoomType=$row['RoomType'];
		$Course=$row['Course'];
		$YearLevel=$row['YearLevel'];
		$Birthday=$row['Birthday'];
		$Address=$row['Address'];
		$ContactNum=$row['ContactNum'];
		$MiddleName=$row['MiddleName'];
	}
	
	$result2=mysqli_query($connection, "SELECT * FROM transactions WHERE SNum='$SNum' ORDER BY transact_date DESC LIMIT 1");
	$row1=mysqli_fetch_assoc($result2);
	$transact_date=date('F d, Y - h:i A', strtotime($row1['transact_date']));
	$order_status=$row1['order_status'];
	
	$result3=mysqli_query($connection, "SELECT COUNT(*) AS total_transact FROM transactions WHERE SNum='$SNum'");
	$row2=mysqli_fetch_assoc($result3);
	$total_transact=$row2['total_transact'];
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Rodillas Yema Cake | My Account</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" href="#" type="image/ico" size="16x16 32x32">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="smoothscroll.js"></script>
<script src="webscript.js"></script>
</head>
<body oncontextmenu="return false">
<div id="navbar">
	<div id="sub-menu"><a href='account'><span>My Account</span></a></div>
	<div id="menu">
	<ul>
		<li><a href='./'><span>Home</span></a></li>
		<li><a href='about'><span>About</span></a></li>
		<li><a href='cakes'><span>Cakes</span></a></li>
	</ul>
	</div>
</div>
<div id="container">
	<div id="head-content">
		<p class="content-title">Welcome, <?php echo $_SESSION['FirstName']; ?>!</p>
	</div>
	<div id="content">
	<div class="content-subtitle" id="acc-info">ACCOUNT INFORMATION<a href="edit-account" style="float:right;font-size:14px;font-weight:400;padding-top:3px;">Edit</a></div>
		<div class="toggleinfo" id="acc-info-cont">
			<table width="29%" id="acc-table">
			<tr>
				<td style="width:40%;"><b>Name</b></td>
				<td style="width:60%;"><?php echo $FirstName; echo " "; echo $LastName;echo " "; echo $MiddleName; ?></td>
			</tr>
			<tr>
				<td><b>Email address</b></td>
				<td><?php echo $Email; ?></td>
			</tr>
			<tr>
				<td><b>Address</b></td>
				<td><?php echo $Address; echo ", "; ?></td>
			</tr>
			<tr>
				<td><b>Phone number</b></td>
				<td><?php echo $ContactNum; ?></td>
			</tr>
			<tr>
				<td><b>Villa Name</b></td>
				<td><?php echo $VillaName; ?></td>
			</tr>
			<tr>
				<td><b>Room Type</b></td>
				<td><?php echo $RoomType; ?></td>
			</tr>
			<tr>
				<td>YearLevel</td>
				<td><?php if(empty($bus_mobnum)){ echo "N/A"; }else{ echo $bus_mobnum; } ?></td>
			</tr>
			<tr>
				<td><b>Business telephone number</b></td>
				<td><?php if(empty($bus_telnum)){ echo "N/A"; }else{ echo $bus_telnum; } ?></td>
			</tr>
			</table>
		</div>
		<div class="content-subtitle" id="tran-info">TRANSACTION DETAILS</div>
		<div class="toggleinfo" id="tran-info-cont">
			<table id="acc-table">
			<tr>
				<td style="width:40%;"><b>Last transaction history</b></td>
				<td style="width:60%;"><?php if(empty($row1['transact_date'])){ echo "N/A"; }else{ echo $transact_date; } ?></td>
			</tr>
			<tr>
				<td><b>Recent order status</b></td>
				<td><?php if(empty($row1['order_status'])){ echo "N/A"; }else{ echo $order_status; } ?></td>
			</tr>
			<tr>
				<td><b>Total number of transactions made</b></td>
				<td><?php echo $total_transact; ?></td>
			</tr>
			<!--<tr>
				<td><b>Order history</b></td>
				<td><a href="order-history">View it here</a></td>
			</tr>-->
			</table>
		</div>
		<div class="content-subtitle-a"><a href="order" style="color:#222222;">ORDER NOW</a></div>
		<p><a href="logout" style="float:right;"><b>Log out</b></a></p>
	</div>
</div>
<footer><span>&#169; 2016 Group II [BSIT-2A (FAITH)]. All rights reserved.</span></footer>
</body>
</html>