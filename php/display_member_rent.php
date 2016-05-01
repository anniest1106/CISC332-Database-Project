<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Member Rental History</title>
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
					<a href="../index.html">Home</a>
				</li>
				<li class="active">
					<a href="../member_info.html">Profile</a>
				</li>
				<li>
					<a href="../userGuide.html">User Guide</a>
				</li>
			</ul>
		</div>
	</div>
    <div id="cars" style="padding-top: 100px">
		<h2>Your Rental History</h2></br>
		<table class='bordered'>
		
			<thead>

				<tr>
					<th>Reservation Number</th>         
					<th>Pick Up Date</th>
					<th>Pick Up Time</th>
					<th>Return Date</th>
					<th>Return Time</th>
					<th>Reservation Status</th>
					<th>Action</th>
				</tr>
				</thead>
                <?php
				$host="localhost"; // Host name 
				$user="anniest1106"; // Mysql username 
				$password="Smpss8406"; // Mysql password 
				$database = "carshare"; // Database name 

				// Connect to server and select databse.
				mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
				mysql_select_db("$database")or die("cannot select DB");

					session_start();
					$MemberNO = $_SESSION["MemberNO"];	
					$query = "SELECT * FROM `reservation` natural join `memberrentalhistory` WHERE MemberNO = '$MemberNO'";
					$result = mysql_query($query);
					while($row = mysql_fetch_assoc($result))
					{
						// ReverservationNum, PickUPDate, PickUPTime, ReturnDate, ReturnTime, ReservationStatus
						$ReservationNO = $row['ReservationNum'];
						$PickUpDate = $row['PickUPDate'];
						$PickUpTime = $row['PickUPTime'];
						$ReturnDate = $row['ReturnDate'];
						$ReturnTime = $row['ReturnTime'];
						$ReservationStat = $row['ReservationStatus'];
						
						echo "<tr><td>" .$ReservationNO. "</td><td>" .$PickUpDate. "</td><td>" .$PickUpTime. "</td><td>"
							.$ReturnDate. "</td><td>" .$ReturnTime. "</td><td>" .$ReservationStat. "</td>";
						if ($ReservationStat == "successful"){
							$url = "cancel_reservation.php?ReservationNO=$ReservationNO";
							echo "<td><a href= $url>Cancel</a></td>";
						}
						echo "</tr>";
					}
					echo "</table></center><br /><br /><br />";
				?>
        <center><form>
		<button type="button" class="backToProfile" onClick="parent.location='../member_info.html'" style="float: center">Back To Your Profile</button></div>
        </center></form>
        
		<div id="footer">
			<div class="clearfix"><center>
					© 2013 Renee Xu and Annie Lee</center>
		</div>
</body>
</html>