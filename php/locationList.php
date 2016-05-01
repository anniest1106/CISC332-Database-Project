<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<title>Location List</title>
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
    <div id="cars" style="padding-top: 30px">
        <table class='bordered'align="center">
        <thead>
            <tr>
                <th>Address</th>
                <th>Number of Spaces</th>
                <th>Action</th>
			</tr>
		</thead>
            <?php
            $host="localhost"; // Host name 
            $user="anniest1106"; // Mysql username 
            $password="Smpss8406"; // Mysql password 
            $database = "carshare"; // Database name 
            $tbl_name="Location"; // Table name 

            // Connect to server and select databse.
            mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
            mysql_select_db("$database")or die("cannot select DB");

            $order = "SELECT * FROM Location";
            $result = mysql_query($order);
            echo "<h1><center>All Location</center></h1>";
            while ($row=mysql_fetch_array($result)){
                extract($row);
                echo "<tr><td>$Address	&nbsp</td> 
                          <td>$NumSpace &nbsp</td>";
                echo "<td><a href=\"editLoc.php?id=$Address\">Edit</a></td>";
            }
            ?>
            <tr><td><a href="addLoc.php">Add a new Location</a></tr></td>
            </table>
            </br>
    <center><form>
        <button type="button" class="backToProfile" onClick="parent.location='../adminIndex.html'" style="float: center">Back To Your Profile</button>
    </form></center>
    <div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>
