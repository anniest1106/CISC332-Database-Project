<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<title>Member Profile</title>
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
<title>Member Profile</title>
<?php

$host="localhost"; // Host name 
$user="anniest1106"; // Mysql username 
$password="Smpss8406"; // Mysql password 
$database = "carshare"; // Database name 
$tbl_name="member"; // Table name 

// Connect to server and select databse.
mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
mysql_select_db("$database")or die("cannot select DB");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted
	session_start();
	$MemberNO = $_SESSION['MemberNO'];
	$Name = $_SESSION['Name'];
	$Email = $_SESSION['Email'];
	$Phone = $_SESSION['Phone'];
	$Address = $_SESSION['Address'];
	$License = $_SESSION['License'];
	$RegAnniversary = $_SESSION['RegAnniversary'];

    if (isset($_POST['memb_info'])) {
		
		echo "<p style='padding-top: 100px'>";
		echo "<center>Hi, <strong>$Name</strong><br /><br /></center>";
		echo "<center>Membership number: $MemberNO<br />Email: $Email<br />Phone number: $Phone<br />
			Address: $Address<br />License number: $License<br />Registration anniversary: $RegAnniversary<br /><br /><br /></center>";
		echo "</p>";
		} 
	else if (isset($_POST['reserve'])) {
        header("location:make_reservation.php");
    }
	
	else if (isset($_POST['rental_history'])){
		header("location:display_member_rent.php");
	}
    
    else if (isset($_POST['payFee'])){
        header("location:payMembershipFee.php");
    }
	
	else if (isset($_POST['view_comments'])){
		header("location:viewComment.php");
	}
	
	else if (isset($_POST['post_comments'])){
		header("location:submitComment.php");
	}
	
	else if (isset($_POST['logout'])){
		session_destroy();
		header("location:../index.html");
	}
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
<html>


