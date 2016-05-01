	<?php
	$host="localhost"; // Host name 
	$user="anniest1106"; // Mysql username 
	$password="Smpss8406"; // Mysql password 
	$database = "carshare"; // Database name 

	// Connect to server and select databse.
	mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
	mysql_select_db("$database")or die("cannot select DB");

		$ReservationNO = $_GET["ReservationNO"];	
		
		$query = "DELETE FROM `MemberRentalHistory` WHERE ReservationNum = '$ReservationNO'";
		$result = mysql_query($query) or die("cannot delete from memberrental");
		
		$query = "DELETE FROM `Car_history` WHERE ReservationNum = '$ReservationNO'";
		$result = mysql_query($query) or die("cannot delete from Car_history");
		
		$query = "DELETE FROM `CarRentalHistory` WHERE ReservationNum = '$ReservationNO'";
		$result = mysql_query($query) or die("cannot delete from car rental history");
		
		$query = "DELETE FROM `Makes` WHERE ReservationNum = '$ReservationNO'";
		$result = mysql_query($query) or die("cannot delete from car rental makes");
		
		$query = "DELETE FROM `Reservation` WHERE ReservationNum = '$ReservationNO'";
		$result = mysql_query($query) or die("cannot delete from reservation");
		
		header('Location: ../cancelled.html');
	?>	