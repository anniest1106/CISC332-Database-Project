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
			<form name="form3" method="post" action="show_reservations.php">
					<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1">
						<tr>
							<td colspan="2" style="text-align: right">Choose Location:</td>
							<td colspan="3"><input name="location" type="text" id="location"></td>
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
	<div style="width: 800px; margin: 0 auto; padding-top: 20px"><button type="button" class="backToProfile" onclick="parent.location='../adminIndex.html'">Back To Admin Page</button></div>
	<div id="footer">
			<div class="clearfix"><center>
					© 2013 Renee Xu and Annie Lee</center>
			</div>
	</div>	
</body>
</html>
