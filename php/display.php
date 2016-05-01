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
    </br></br>
<?php

$host="localhost"; // Host name 
$username="anniest1106"; // Mysql username 
$password="Smpss8406"; // Mysql password 
$db_name="carshare"; // Database name 
$tbl_name="Comment"; // Table name
?>
    </br></br>
    <center><p>
    Thank you for your feedback!
    </p></center></br></br>

    <center><form>
        <button type="button" class="backToProfile" onClick="parent.location='../member_info.html'" style="float: center">Back To Your Profile</button>
    </form></center>
    <div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>
