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
    <center><h2>Form for Editing Location</h2></center>
    <table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
        <tr>
        <td>
        <table>
        <?php
        $host="localhost"; // Host name 
        $user="anniest1106"; // Mysql username 
        $password="Smpss8406"; // Mysql password 
        $database = "carshare"; // Database name 
        $tbl_name="Location"; // Table name 

        // Connect to server and select databse.
        mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
        mysql_select_db("$database")or die("cannot select DB");
        
        $Address = $_GET["id"];
        
        $sql = "SELECT * FROM Location";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        ?>
        <form method="post" action="editLocation.php"> 
        
        </br>
        </br>
        <input type="hidden" name="Address" value="<?php echo "$Address"?>">
        <p>Address: <?php echo "$Address"?></p>
        
        <tr>
            <td>Number of Space at the Location:</td>
            <td><input name="NumSpace" id="NumSpace" type="text" size="30" /></td>
        </tr>
            
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="edit" value="Edit"></td>
        </tr>
        </form>
        </table>
    </table>
    <div style="width: 800px; margin: 0 auto; padding-top: 20px"><button type="button" class="backToProfile" onclick="parent.location='../adminIndex.html'">Back To Admin Page</button></div>
    <div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>
