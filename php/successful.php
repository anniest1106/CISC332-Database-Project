<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>K-Town Car Share</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="../index.html"><center>K-Town Car Share</center></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="member_info.html">Member Profile</a>
				</li>
				<li>
					<a href="userGuide.html">User Guide</a>
				</li>
				<li>
					<a href="../login.html" type="submit" name="logout" value="Logout">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	
	<?php
		session_start();
		$pickupdate = $_SESSION['pickupdate']; 
		$pickuptime = $_SESSION['pickuptime']; 
		$returndate = $_SESSION['returndate']; 
		$returntime = $_SESSION['returntime']; 
		$reservationID = $_SESSION['reservationID'];
		$location = $_SESSION['Location'];
		$VIN = $_GET["vin"];
		
		echo "<p style='padding-top: 100px'>";
		echo "<center><strong>Reservation for $VIN</strong></center>";
		echo "<center>Your reservation is made, reservation number: <strong>$reservationID</strong><br /></center>";
		echo "<center>Pick up on <strong>$pickupdate</strong> at <strong>$pickuptime</strong> at <strong>$location</strong><br /></center>";
		echo "<center>Return on <strong> $returndate</strong> at <strong>$returntime</strong> at <strong>$location</strong><br /></center>";
		echo "</p>";
	?>
	
		<center><form>
            <button type="button" class="backToProfile" onClick="parent.location='../member_info.html'" style="float: center">Back To Your Profile</button>
        </form></center>
	
	<div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
	</div>