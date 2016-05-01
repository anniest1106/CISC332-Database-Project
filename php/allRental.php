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
					<a href="adminIndex.html">Admin Page</a>
				</li>
				<li>
					<a href="../adminGuide.html">Admin Guide</a>
				</li>
			</ul>
		</div>
	</div>
    </br></br><center><h2>Member Rental History</h2></center></br>
    <?php
    $host="localhost"; // Host name 
    $user="anniest1106"; // Mysql username 
    $password="Smpss8406"; // Mysql password 
    $database = "carshare"; // Database name 
    $tbl_name="member"; // Table name 

    // Connect to server and select databse.
    mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
    mysql_select_db("$database")or die("cannot select DB");

    $order = "SELECT * FROM Reservation natural join MemberRentalHistory";
    $result = mysql_query($order);
    echo "<center><table border='0' cellpadding='3' cellspacing='3'>";
    echo "<tr><td>Member NO</td><td>Reservation Number</td><td>Pick Up Date</td><td>Pick Up Time</td>
              <td>Return Date</td><td>Return Time</td><td>Reservation Status</td></tr>";
              
    while ($row=mysql_fetch_array($result)){
        echo ("<tr><td>$row[MemberNO]</td>");
        echo ("<td>$row[ReservationNum]</td>");
        echo ("<td>$row[PickUPDate]</td>");
        echo ("<td>$row[PickUPTime]</td>");
        echo ("<td>$row[ReturnDate]</td>");
        echo ("<td>$row[ReturnTime]</td>");
        echo ("<td>$row[ReservationStatus]</td>");
        echo ("</tr>");
    }
    echo "</table></center><br /><br /><br />";
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
