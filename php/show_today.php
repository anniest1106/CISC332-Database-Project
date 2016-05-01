<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Guide</title>
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
                <li>
					<a href="../adminIndex.html">Admin Page</a>
				</li>
				<li>
					<a href="../adminGuide.html">Admin Guide</a>
				</li>
			</ul>
		</div>
	</div>
	
<?php
	$host="localhost"; // Host name 
	$user="anniest1106"; // Mysql username 
	$password="Smpss8406"; // Mysql password 
	$database = "carshare"; // Database name 
	
	mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
	mysql_select_db("$database")or die("cannot select DB");
	
	$pickupdate = $_POST['pickupdate'];
	echo "<p style='padding-top: 100px'><center><strong>All Reservations on $pickupdate<strong></center></p>";
?>

	<div id="cars">
	<table class='bordered' style="margin: 0 auto">
		<thead>
			<tr>      
				<th>Reservation Number</th>
			</tr>
			</thead>
			
	<?php
		$sql = "SELECT * FROM `reservation` WHERE PickUPDate = '$pickupdate'";
		$result=mysql_query($sql) or die("cannot execute query 1");
		while($row = mysql_fetch_assoc($result))
		{
			$reservationNO = $row["ReservationNum"];
			echo "<tr><td>$reservationNO</td></tr>";
		}
	?>
	</table>
	</div>

	<div style="width: 800px; margin: 0 auto; padding-top: 20px"><button type="button" class="backToProfile" onclick="location.href='../adminIndex.html'">Back To Admin Page</button></div>

	<div id="footer">
			<div class="clearfix"><center>
					© 2013 Renee Xu and Annie Lee</center>
			</div>
	</div>
</body>
</html>