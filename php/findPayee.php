<!DOCTYPE html>
<html>
<title>Choose Location</title>
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
	
	<div id="cars">
	<p style="padding-top: 60px"><strong><center>Members who need to pay membership fees</center></strong></p>
	<table class='bordered' align="center">
		<thead>
			<tr>
				<th>Member Number</th>         
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Registration Anniversary Date</th>
				<th>Membership Fee Due</th>
			</tr>
			</thead>
	
	<?php
	$host="localhost"; // Host name 
	$user="anniest1106"; // Mysql username 
	$password="Smpss8406"; // Mysql password 
	$database = "carshare"; // Database name 
	
	mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
	mysql_select_db("$database")or die("cannot select DB");
	
	date_default_timezone_set('America/Toronto');
	
	$today = date('Y-m-d');
			
	$sql = "SELECT * FROM `member` WHERE RegAnniversary='$today'";
	$result=mysql_query($sql) or die("cannot execute query");
	while($row = mysql_fetch_assoc($result))
      {
        extract($row);
        echo "<tr><td>$MemberNO</td><td>$Name</td><td>$Email</td><td>$Phone</td><td>$RegAnniversary</td><td>$MembershipFee</td></tr>";
      }
	?>
	</table>
	</p>
	<center><form>
        <button type="button" class="backToProfile" onClick="parent.location='../adminIndex.html'" style="float: center">Back To Admin Page</button>
    </form></center>
	<div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>




















