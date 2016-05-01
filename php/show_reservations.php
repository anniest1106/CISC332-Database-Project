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
	
	$location = $_POST['location'];
	echo "<p style='padding-top: 100px'><center><strong>Cars at $location<strong></center></p>";
?>

	<div id="cars">
	<table class='bordered' style="margin: 0 auto">
		<thead>
			<tr>
				<th>VIN</th>         
				<th>Reservations</th>
			</tr>
			</thead>
			
	<?php
		$sql = "SELECT * FROM `located_at` WHERE Address = '$location'";
		$result=mysql_query($sql) or die("cannot execute query 1");
		while($row = mysql_fetch_assoc($result))
		{
			$VIN = $row["VIN"];
			echo "<tr><td>$VIN</td>";
			$sql2 = "SELECT * FROM `car_history` WHERE VIN = '$VIN'";
			$result2=mysql_query($sql2) or die("cannot execute query 2");
			
			if (mysql_num_rows($result2) != 0){
				while($row2 = mysql_fetch_assoc($result2)){
					$reservationNO = $row2["ReservationNum"];
					echo "<td>$reservationNO</td>";
				}

		  }
		}
		 echo "</tr>";
	?>
	</table>
	</div>

    <div style="width: 800px; margin: 0 auto; padding-top: 20px"><button type="button" class="backToProfile" onclick="parent.location='../adminIndex.html'">Back To Admin Page</button></div>

	<div id="footer">
			<div class="clearfix"><center>
					© 2013 Renee Xu and Annie Lee</center>
			</div>
	</div>
</body>
</html>