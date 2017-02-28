<?php
	session_start();
	include_once 'db.php';
	
if(!isset($_SESSION['student_id'])){
		header('location: user_login.php');
	}
	
	$error=false;
	
	if(isset($_POST['pass'])){
		$snum=mysqli_real_escape_string($connection, $_POST['snum']);
        $villa_name=mysqli_real_escape_string($connection, $_POST['villa_name']);
		$date=mysqli_real_escape_string($connection, $_POST['date']);
		$incident=mysqli_real_escape_string($connection, $_POST['incident']);
		
		
		
		$snum=ucwords($snum);
		$villa_name=ucwords($villa_name);
		$date=ucwords($date);
		$incident=ucwords($incident);
		
		
		
		
		
	if(!$error){
			if(mysqli_query($connection, "INSERT INTO incident (snum, villa_name, date, incident) VALUES (
			'".$snum."', '".$villa_name."', '".$date."', '".$incident."')")){
				header('location: validation.php');
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


<div class="pic_headers"> <p>INCIDENT REPORT</p></div>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input style="text-align:left; padding-left:10px" class="input_textbox" name="snum" type="text" placeholder="Student Number" required><br>

<select class="input_textboxs" name="villa_name" type="text" placeholder="Villa Name" required><br>
                            <option><p style="color:white">Villa Name</option>
                            <option value="Tanauan A">Tanauan A</option>
                            <option value="Tanauan B">Tanauan B</option>
                            <option value="Tanauan C">Tanauan C</option>
                            <option value="Tanauan D">Tanauan D</option>
                            
                            <option value="Makassar A">Makassar A</option>
                            <option value="Makassar B">Makassar B</option>
                            <option value="Makassar C">Makassar C</option>
                            <option value="Makassar D">Makassar D</option>
                            
                            <option value="Phuket A">Phuket A</option>
                            <option value="Phuket B">Phuket B</option>
                            <option value="Phuket C">Phuket C</option>
                            <option value="Phuket D">Phuket D</option>
                            
                            <option value="Penang A">Penang A</option>
                            <option value="Penang B">Penang B</option>
                            <option value="Penang C">Penang C</option>
                            <option value="Penang D">Penang D</option>
                            
                            <option value="Singapore A">Singapore A</option>
                            <option value="Singapore B">Singapore B</option>
                            <option value="Singapore C">Singapore C</option>
                            <option value="Singapore D">Singapore D</option>
                            
                            <option value="Manila A">Manila A</option>
                            <option value="Manila B">Manila B</option>
                            <option value="Manila C">Manila C</option>
                            <option value="Manila D">Manila D</option>
                            
                            <option value="Vientiane A">Vientiane A</option>
                            <option value="Vientiane B">Vientiane  B</option>
                            <option value="Vientiane C">Vientiane C</option>
                            <option value="Vientiane D">Vientiane D</option>
                            
                            <option value="Kuala Lumpur A">Kuala Lumpur A</option>
                            <option value="Kuala Lumpur B">Kuala Lumpur B</option>
                            <option value="Kuala Lumpur C">Kuala Lumpur C</option>
                            <option value="Kuala Lumpur D">Kuala Lumpur D</option>
                            
                            <option value="Yangon A">Yangon A</option>
                            <option value="Yangon B">Yangon B</option>
                            <option value="Yangon C">Yangon C</option>
                            <option value="Yangon D">Yangon D</option>
                            
                            <option value="Jakarta A">Jakarta A</option>
                            <option value="Jakarta B">Jakarta B</option>
                            <option value="Jakarta C">Jakarta C</option>
                            <option value="Jakarta D">Jakarta D</option>
                            
							<option value="Phnom Penh A">Phnom Penh A</option>
                            <option value="Phnom Penh B">Phnom Penh B</option>
                            <option value="Phnom Penh C">Phnom Penh C</option>
                            <option value="Phnom Penh D">Phnom Penh D</option>
							
							<option value="Bangkok A">Bangkok A</option>
                            <option value="Bangkok B">Bangkok B</option>
                            <option value="Bangkok C">Bangkok C</option>
                            <option value="Bangkok D">Bangkok D</option>



                          </select><br>

<input style="text-align:left; padding-left:10px" class="input_textbox" name="date" type="date" placeholder="Date Hapened" required><br>
<select class="input_textboxs" name="incident" type="text" placeholder="Incident" required><br>
                            <option><p style="color:white">Incident</option>
                            
                            <optgroup label="MAIN ROOM">
                            <option value="Defective Main Room Door Handle">Defective Main Room Door Handle</option>
                            <option value="Defective Main Room Door Lock">Defective Main Room Door Lock</option>
							<option value="Defective Orbit Fan">Defective Orbit Fan</option>
							<option value="Main Room Busted Lightbulb">Main Room Busted Lightbulb</option>
							<option value="Electric Socket (No Cap)">Electric Socket (No Cap)</option>
							<option value="Defective Electric Socket">Defective Electric Socket</option>
							<option value="Defective Light Switch">Defective Light Switch</option>
                            </optgroup>
                            <optgroup label=""></optgroup>
                            
                            <optgroup label="SHOWER ROOM">
                            <option value="Defective Shower Room Door Handle">Defective Main Shower Door Handle</option>
                            <option value="Defective Shower Room Door Lock">Defective Shower Room Door Lock</option>
                            <option value="Defective Shower Room Door">Defective Shower Room Door</option>
							<option value="Shower Room Busted Lightbulb">Shower Room Busted Lightbulb</option>
							<option value="Defective Shower Room Faucet">Defective Shower Room Faucet</option>
							<option value="Defective Shower Head">Defective Shower Head</option>
							<option value="Shower Room Drainage">Shower Room Drainage</option>
                            </optgroup>
                            <optgroup label=""></optgroup>
                            
                            <optgroup label="COMFORT ROOM">
                            <option value="Defective Comfort Room Door Handle">Defective Comfort Room Door Handle</option>
                            <option value="Defective Comfort Room Door Lock">Defective Comfort Room Door Lock</option>
							<option value="Shower Room Busted Lightbulb">Comfort Room Busted Lightbulb</option>
							<option value="Defective Comfort Room Faucet">Defective Comfort Room Faucet</option>
							<option value="Defective Comfort Room Bowl">Defective Comfort Room Bowl</option                            ><option value="Defective Comfort Room Flush">Defective Comfort Room Flush</option>
							<option value="Comfort Room Drainage">Comfort Room Drainage</option>
                            </optgroup>
                            <optgroup label=""></optgroup>
                            
                            <optgroup label="CABINET">
                            <option value="Defective Cabinet Handle">Defective Cabinet Handle</option>
							<option value="Defective Cabinet Door">Defective Cabinet Door</option>
                            </optgroup>
                            <optgroup label=""></optgroup>
                            
                            <optgroup label="DOUBLE DECK">
                            <option value="Double Deck Loose Screw">Double Deck Loose Screw</option>
                            </optgroup>
                            <optgroup label=""></optgroup>
                            
                            <optgroup label="LAVATORY">
                            <option value="Defective Lavatory Faucet">Defective Lavatory Faucet</option>
                            <option value="Lavatory Drainage">Lavatory Drainage</option>
                            <option value="Lavatory Drainage w/ Leak">Lavatory Drainage w/ Leak</option>
                            </optgroup>
                            

                          </select><br>

                 


<input class="button" type="submit" name="pass" value="SUBMIT"></input>

<div class="blue_header_bottom" ></div> 

<div class="pic_footer"> 
	<p>© 2016 [BSIT-3A OPTICS]. All rights reserved.
    </p>
</div>

</form>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

</body>
</html>