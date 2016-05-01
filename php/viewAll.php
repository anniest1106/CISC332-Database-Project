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
    $tbl_name="member"; // Table name 

    // Connect to server and select databse.
    mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
    mysql_select_db("$database")or die("cannot select DB");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['viewMem'])) {
            $sql = 'SELECT * FROM Member';
            $result=mysql_query($sql) or die("cannot execute query");
            echo "</br></br><center><h2>All Member Information</h2></center></br>";
            echo "<center><table border='0' cellpadding='3' cellspacing='3'>";
            echo "<tr><td>Name</td>
                      <td>Membership Number</td>
                      <td>Email</td>
                      <td>Phone Number</td>
                      <td>Address</td>
                      <td>License</td>
                      <td>Registration anniversary</td>
                      <td>Membership Fee</td>
                      <td>Usage Fee</td></tr>";
            while($row = mysql_fetch_assoc($result)){
                extract($row);
                echo "
                      <tr><td>$Name</td>
                      <td>$MemberNO</td>
                      <td>$Email</td>
                      <td>$Phone</td>
                      <td>$Address</td>
                      <td>$License</td>
                      <td>$RegAnniversary</td>
                      <td>$MembershipFee</td>
                      <td>$UsageFee</td></tr>";
            }
            echo "</table></center><br /><br /><br />";
            echo "<center><form>
                    <button type='button' class='backToProfile'style='float: center'><a href='findPayee.php'>Today Payee</a></button>
                  </form></center></br>";
        }
        else if (isset($_POST['viewRental'])){
            header("location:allRental.php");
        }
        else if (isset($_POST['viewRever'])) {
            header("location:viewReserv.php");
        }
        else if (isset($_POST['viewComment'])){
            header("location:allreply.php");
        }
        else if (isset($_POST['carList'])){
            header("location: viewCarList.php");
        }
        
        else if (isset($_POST['locationList'])){
            header("location: locationList.php");
        }
        else if (isset($_POST['today'])){
            header("location: ../reservations_today.html");
        }
        else if (isset($_POST['showLoc'])){
            header("location:show_locations_reservations.php"); 
        }
        else if (isset($_POST['numRental'])){
            header("location:numRental.php"); 
        }
        else if (isset($_POST['logout'])){
            session_destroy();
            header("location:../index.html");
        }
    }
    ?>
    <center><form>
        <button type="button" class="backToProfile" onClick="parent.location='../adminIndex.html'" style="float: center">Back To Admin Page</button>
    </form></center>
    <div id="footer">
		<div class="clearfix"><center>
				© 2013 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>
