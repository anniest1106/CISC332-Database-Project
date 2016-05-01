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
				<li class="active">
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
    $tbl_name="member"; // Table name 

    // Connect to server and select databse.
    mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
    mysql_select_db("$database")or die("cannot select DB");
    session_start();
    $ReservationStatus = $_POST['ReservationStatus'];
    $ReservationNum = $_POST['ReservationNum'];

    $sql = "UPDATE Reservation SET ReservationStatus='$ReservationStatus' WHERE ReservationNum='$ReservationNum'";
    $result = mysql_query($sql);

    if (!$result){
        die('There is some error with yours input: '.mysql_error());
    }
    else{
        echo "<br><br><center><p>You have successfully edit the reservation status.</center></p>";
    }

    ?>
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
