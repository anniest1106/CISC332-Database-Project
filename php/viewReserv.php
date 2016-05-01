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
    <div id="cars" style="padding-top: 100px">
		<h2>Your Rental History</h2></br>
		<table class='bordered'>
        <thead>
            <tr>
				<th>Reservation Number</th>         
				<th>Pick Up Date</th>
				<th>Pick Up Time</th>
				<th>Return Date</th>
				<th>Return Time</th>
				<th>Reservation Status</th>
				<th>Action</th>
			</tr>
		</thead>
            <?php
            $host="localhost"; // Host name 
            $user="anniest1106"; // Mysql username 
            $password="Smpss8406"; // Mysql password 
            $database = "carshare"; // Database name 
            $tbl_name="member"; // Table name 

            // Connect to server and select databse.
            mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
            mysql_select_db("$database")or die("cannot select DB");

            $order = "SELECT * FROM Reservation";
            $result = mysql_query($order);
            while ($row=mysql_fetch_array($result)){
                extract($row);              
                echo "<tr><td>$ReservationNum &nbsp</td>
                                  <td>$PickUPDate &nbsp</td>
                                  <td>$PickUPTime &nbsp</td>
                                  <td>$ReturnDate &nbsp</td>
                                  <td>$ReturnTime &nbsp</td>
                                  <td>$ReservationStatus &nbsp</td>
                                  <td><a href=\"editForm.php?id=$ReservationNum\">Edit</a></td></tr>";
            }
            echo "</table><br /><br />";
            ?>
    <button type="button" class="backToProfile" onClick="parent.location='../adminIndex.html'" style="float: center">Back To Admin Page</button></div>
    <div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>
