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
    <div id="cars" style="padding-top: 30px">
		<center><h2>All Comments</h2></center></br>
		<table class='bordered' align="center">
        <thead>
            <tr>
                <th>CommentID</th>
                <th>Topic</th>
                <th>Comment & Reply from Admin</th>
			</tr>
		</thead>
    <?php

    $host="localhost"; // Host name 
    $user="anniest1106"; // Mysql username 
    $password="Smpss8406"; // Mysql password 
    $database = "carshare"; // Database name
    $tbl_name = "Member";

    // Connect to server and select databse.
    mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
    mysql_select_db("$database")or die("cannot select DB");

    $query = mysql_query("SELECT * FROM Comment LEFT JOIN Reply ON Comment.CommentID = Reply.CommentID");
    //fetch the results / convert results into an array
    while($row = mysql_fetch_array( $query )) {
        // echo out the contents of each row into a table
        extract($row);
        echo "<tr><td>$CommentID</td> 
                  <td>$Topic</td>
                  <td>$Comment</br></br>
                   <strong>$ID:</strong> $Reply</td>";
        echo "</tr>"; 
        } 

        // close table>
    ?>
        </table><br>
        <center><button type="button" class="backToProfile" onClick="parent.location='reply.php'" style="float: center">Reply</button></center></br>
        <center><button type="button" class="backToProfile" onClick="parent.location='../adminIndex.html'" style="float: center">Back To Admin Page</button></center>

    </div>
    <div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>
