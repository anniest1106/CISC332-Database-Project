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
$user="anniest1106"; // Mysql username 
$password="Smpss8406"; // Mysql password 
$database = "carshare"; // Database name
$tbl_name = "Member";

// Connect to server and select databse.
mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
mysql_select_db("$database")or die("cannot select DB");

session_start();
$MemberNO = $_POST['MemberNO'];
$CreditCardNumber = $_POST['CreditCardNumber'];
$ExpireDate = $_POST['ExpireDate'];

$sql = "UPDATE Member SET MembershipFee = 0 WHERE MemberNO = '$MemberNO'";
$result = mysql_query($sql);

if (!$result){
    die('There is some error with yours input: '.mysql_error());
}
else{
    echo "<center><p>You have successfully pay your Membership Fee. Please click the button below to return back to Home Page.</p></center>";
}

?>
   <div style="width: 800px; margin: 0 auto; padding-top: 20px"><button type="button" class="backToProfile" onclick="parent.location='../member_info.html'">Back To Your Profile</button></div>
   <div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>


