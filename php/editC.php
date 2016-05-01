<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<title>View Car List</title>
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
    $tbl_name="Car"; // Table name 

    // Connect to server and select databse.
    mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
    mysql_select_db("$database")or die("cannot select DB");
    session_start();
    $VIN = $_POST['VIN'];
    $LastOdomterReading = $_POST['LastOdomterReading'];
    $LastGasTankReading = $_POST['LastGasTankReading'];
    $DateMaintain = $_POST['DateMaintain'];
    $MaintainOdomterReading = $_POST['MaintainOdomterReading'];

    $sql = "UPDATE Car SET LastOdomterReading='$LastOdomterReading', LastGasTankReading = '$LastGasTankReading', DateMaintain = '$DateMaintain', MaintainOdomterReading = '$MaintainOdomterReading' 
            WHERE VIN='$VIN'";
    $result = mysql_query($sql);

    if (!$result){
        die('There is some error with yours input: '.mysql_error());
    }
    else{
        echo "<p><center>You have successfully edit the car info.</center></p>";
    }

    ?>
    <center><form>
        <button type="button" class="backToProfile" onClick="parent.location='viewCarList.php'" style="float: center">Back to Car List</button></br></br>
        <button type="button" class="backToProfile" onClick="parent.location='../adminIndex.html'" style="float: center">Back To Admin Page</button>
    </form></center>
    <div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>
