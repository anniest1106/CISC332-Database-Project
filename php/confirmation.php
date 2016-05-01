<?php

$host="localhost"; // Host name 
$user="anniest1106"; // Mysql username 
$password="Smpss8406"; // Mysql password 
$database = "carshare"; // Database name 

// Connect to server and select databse.
mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
mysql_select_db("$database")or die("cannot select DB");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	//something posted
	if (isset($_POST['submit'])) {
		session_start();
		$pickupdate = $_SESSION['pickupdate']; 
		$pickuptime = $_SESSION['pickuptime']; 
		$returndate = $_SESSION['returndate']; 
		$returntime = $_SESSION['returntime']; 
		$VIN = $_POST['VIN'];
		$reservationStat = 'successful';
		$reservationID = (string)mt_rand(2000, 5555555);
		$location = $_SESSION['Location'];
		$MemberNO = $_SESSION['MemberNO'];
		
		$sql="SELECT * FROM `reservation` WHERE ReservationNum = '$reservationID'";
		$result=mysql_query($sql);
		
		while (mysql_num_rows($result) != 0){ // reservationID already in the database
			$reservationID = (string)mt_rand(1000000, 5555555);
			$sql="SELECT * FROM `reservation` WHERE ReservationNum = '$reservationID'";
			$result=mysql_query($sql);
		}
		
		// ReverservationNum, PickUPDate, PickUPTime, ReturnDate, ReturnTime, ReservationStatus
		$sql = "insert into Reservation values ('$reservationID', '$pickupdate', '$pickuptime', '$returndate', '$returntime', '$reservationStat')";
		$result=mysql_query($sql);
		
		//ReservationNum, VIN, MemberNO
		$sql = "insert into Makes values ('$reservationID', '$VIN', '$MemberNO')";
		$result=mysql_query($sql);
		
		// ReservationNum, PickUPOdoread, ReturnOdoread
		$sql = "insert into CarRentalHistory values ('$reservationID',0, 0)";
		$result=mysql_query($sql) or die("cannot insert car rental history");
		
		// ReservationNum, VIN
		$sql = "insert into Car_history values ('$reservationID','$VIN')";
		$result=mysql_query($sql) or die("cannot insert car history");
		
		// ReservationNum, MemberNO
		$sql = "insert into MemberRentalHistory values ('$reservationID','$MemberNO')";
		$result=mysql_query($sql);
		
		
		$_SESSION['reservationID'] = $reservationID;
		
		header("location: successful.php?vin=" .$VIN);
	}
	echo "<br/><br/>";
}
?>

    <center><form>
      <button type="button" class="backToProfile" onClick="parent.location='../member_info.html'" style="float: center">Back To Your Profile</button>
    </form></center>
    <div id="footer">
            <div class="clearfix"><center>
                    © 2015 Renee Xu and Annie Lee</center>
            </div>
    </div>
</body>
</html>