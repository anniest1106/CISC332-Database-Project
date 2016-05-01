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
    </br>
    <div id="cars" style="padding-top: 30px">
    <center><h2>Number of Rental</h2></center>
    <table class='bordered' align="center">
        <thead>
            <tr>
                <th>VIN</th>
                <th>Number of rentals</th>
			</tr>
		</thead>
    <?php
    // Display all data from 'Car' table

    $host="localhost"; // Host name 
    $user="anniest1106"; // Mysql username 
    $password="Smpss8406"; // Mysql password 
    $database = "carshare"; // Database name 
    $tbl_name="member"; // Table name 

    // Connect to server and select databse.
    mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
    mysql_select_db("$database")or die("cannot select DB");

    // get results from database
    $result = mysql_query("SELECT VIN, count(VIN) as count
        FROM Makes
        GROUP BY VIN
        order by count;") 
         or die ("Couldn't execute query.");
                                           
    // loop through results of database query, displaying them in the table
    while($row = mysql_fetch_array( $result )) {
        // echo out the contents of each row into a table
        extract($row);
        echo "<tr><td>$VIN</td> 
                  <td>$count</td>";
        echo "</tr>"; 
    } 
    ?>
    </table>
    </br>
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