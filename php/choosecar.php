<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Available Car</title>
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
					<a href="../member_info.html">Profile</a>
				</li>
				<li>
					<a href="../userGuide.html">User Guide</a>
				</li>
			</ul>
		</div>
	</div>
    <body>

<?php
	$host="localhost"; // Host name 
	$user="anniest1106"; // Mysql username 
	$password="Smpss8406"; // Mysql password 
	$database = "carshare"; // Database name 
	
	$location=$_POST['location']; 
	$pickupdate = $_POST['pickupdate']; 
	$pickuptime = $_POST['pickuptime']; 
	$returndate = $_POST['returndate']; 
	$returntime = $_POST['returntime']; 
	
	session_start();
	$_SESSION['Location'] = $location;
	$MemberNO = $_SESSION["MemberNO"];
	
	mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
	mysql_select_db("$database")or die("cannot select DB");
	
	echo"<p style='padding-top: 40px'>";
	echo "<center>Available cars: <br /><br /></center>";
	
	$sql="SELECT * FROM `car` NATURAL JOIN `located_at` WHERE Address='$location' AND CurrentStatus!='out-for-maintenance'";
	$result=mysql_query($sql);
	
	$current_date = date("Y-m-d");	
	$availability = true;	
	
	if($pickupdate < $current_date OR $returndate < $current_date OR mysql_num_rows($result) == 0 OR $returndate < $pickupdate){
		echo "<center>No available cars at this location during the requested period</center>";
		$availability = false;
	}
?>
		<div id="cars">
			<table class='bordered'>
				<thead>
					<tr>
						<th>VIN</th>         
						<th>Make</th>
						<th>Model</th>
						<th>Year</th>
						<th>Last Odometer Reading</th>
						<th>Last Gas Tank Reading</th>
						<th>Last Maintenance Date</th>
					</tr>
					</thead>
				
		<?php
		if ($availability == true){
			while($row = mysql_fetch_assoc($result))
			{	
			$availability = true;
			extract($row);
			$sql2="SELECT * FROM `reservation` NATURAL JOIN `car_history` WHERE VIN='$VIN'";
			$result2=mysql_query($sql2) or die("cannot execute query2");
			
			
				if (mysql_num_rows($result2) != 0){
					while($row2 = mysql_fetch_assoc($result2)){
						if ($pickupdate >= $row2["PickUPDate"]){
							if ($pickupdate <= $row2["ReturnDate"] OR $returndate <= $row2["ReturnDate"]){
								$availability = false;
							}
						}
						elseif ($pickupdate < $row2["PickUPDate"]){
							if ($returndate >= $row2["PickUPDate"] OR $returndate >= $row2["ReturnDate"]){
								$availability = false;
							}
						}
					}
					if ($availability == true){
						echo "<tr><td><strong>$VIN</strong></td>	<td>$Make</td><td>$Model</td><td>$Year</td> 
						<td>$LastOdomterReading</td><td>$LastGasTankReading</td><td>$DateMaintain</td></tr>";
					}
				}
				else{
					echo "<tr><td><strong>$VIN</strong></td>	<td>$Make</td><td>$Model</td><td>$Year</td> 
					<td>$LastOdomterReading</td><td>$LastGasTankReading</td><td>$DateMaintain</td></tr>";
				}
			}
		}
		?>
		</table>
	</div>
	
	<?php
	
	if ($availability == true){
		$_SESSION['pickupdate'] = $pickupdate;
		$_SESSION['pickuptime'] = $pickuptime;
		$_SESSION['returndate'] = $returndate;
		$_SESSION['returntime'] = $returntime;

		echo "
		<table width='800' border='0' align='center' cellpadding='0' cellspacing='1' style='padding-top: 20px'>
			<tr>
				<form name='form3' method='post' action='confirmation.php'>
					<td>
						<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#eee' style='border-radius: 10px'>
							<tr>
								<td colspan='2'>Choose Car (enter VIN):</td>
								<td colspan='3'><input name='VIN' type='text' id='VIN'></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><input type='submit' name='submit' value='Submit'></td>
							</tr>
						</table>
					</td>
				</form>

			</tr>
		</table>";
	}
	?>
    <div style="width: 800px; margin: 0 auto; padding-top: 20px">
		<button type="button" class="backToProfile" onclick="parent.location='make_reservation.php'">Back To Choosing Location</button>
		</br>
		</br>
		<button type="button" class="backToProfile" onclick="parent.location='../member_info.html'">Back To Your Profile</button>
	</div>
		<div id="footer">
			<div class="clearfix"><center>
					© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>	
</body>
</html>