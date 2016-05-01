<html>
<head>
	<meta charset="UTF-8">
	<title>Wrong Password</title>
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
					<a href="../register.php">Register</a>
				</li>
				<li class>
					<a href="../login.html">Login</a>
				</li>
			</ul>
		</div>
	</div>

<?php

$host="localhost"; // Host name 
$user="anniest1106"; // Mysql username 
$password="Smpss8406"; // Mysql password 
$database = "carshare"; // Database name 
$tbl_name="member"; // Table name 

// Connect to server and select databse.
mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
mysql_select_db("$database")or die("cannot select DB");

// username and password sent from form 
$email=$_POST['email']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($email);
//$mypassword = stripslashes($mypassword);
//$myusername = mysql_real_escape_string($email);
//$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE Email='$email' and Password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

if($count==1){
	session_start();
	header("location: ../member_info.html");
	if ($rows=mysql_fetch_assoc($result)){
		extract($rows);
		$_SESSION['Email'] = $email;
		$_SESSION['Password'] = $mypassword;
		$_SESSION['MemberNO'] = $MemberNO;
		$_SESSION['Name'] = $Name;
		$_SESSION['Email'] = $Email;
		$_SESSION['Address'] = $Address;
		$_SESSION['License'] = $License;
		$_SESSION['Phone'] = $Phone;
		$_SESSION['RegAnniversary'] = $RegAnniversary;
			//echo "$MemberNO, $Name, $License, $Phone, $Email, $Address, $RegAnniversary";
	}
}
else {
	echo "<p style='padding-top: 160px'><center>Wrong Email or Password <br/><br/></center></p>";
}

// If result matched $myusername and $mypassword, table row must be 1 row

?>

    <center><form>
          <button TYPE="button" class="backToProfile" onClick="parent.location='../login.html'" style="float: center">Try Again</button>
    </form></center>
    <div id="footer">
	<div>
			<center><a href="../adminLogin.html">Admin Login</a></center>
	</div>
	<div class="clearfix"><center>
			© 2015 Renee Xu and Annie Lee</center>
	</div>
    </div>	
</body>
</html>