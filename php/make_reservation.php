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
<?php
	$host="localhost"; // Host name 
	$user="anniest1106"; // Mysql username 
	$password="Smpss8406"; // Mysql password 
	$database = "carshare"; // Database name 
	
	mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
	mysql_select_db("$database")or die("cannot select DB");
	echo"<p style='padding-top: 50px'>";
	echo "<center>Available locations: <br /></center>";
	
	$sql = 'SELECT * FROM `location`';
	$result=mysql_query($sql) or die("cannot execute query");
	while($row = mysql_fetch_assoc($result))
      {
        extract($row);
        echo "<center>$Address<br /></center>";
      }
	  echo "<br />";
	  echo "</p>";
?>
    <table width="800" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#eee" style="border-radius: 10px">
		<tr>
			<form name="form3" method="post" action="choosecar.php">
					<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1">
						<tr>
							<td colspan="2" style="text-align: right">Choose Location:</td>
							<td colspan="3"><input name="location" type="text" id="location"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right">Pick up date (yyyy-mm-dd): </td>
							<td colspan="2"><input name="pickupdate" type="text" id="pickupdate"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right">Pick up time (hh-mm-00): </td>
							<td colspan="2"><input name="pickuptime" type="text" id="pickuptime"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right">Return date: </td>
							<td colspan="2"><input name="returndate" type="text" id="returndate"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right">Return time: </td>
							<td colspan="2"><input name="returntime" type="text" id="returntime"></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><input type="submit" name="Submit" value="Submit"></td>
						</tr>
					</table>
				</td>
			</form>
		</tr>
	</table>
	<div style="width: 800px; margin: 0 auto; padding-top: 20px"><button type="button" class="backToProfile" onclick="parent.location='../member_info.html'">Back To Your Profile</button></div>
	<div id="footer">
			<div class="clearfix"><center>
					© 2015 Renee Xu and Annie Lee</center>
			</div>
	</div>	
</body>
</html>
