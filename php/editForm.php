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
    </br>
    <center><h2>Form for Editing Reservation Status</h2></center>
    <table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
        <tr>
            <form method="post" action="editReserv.php"> 
                <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <?php
                    $host="localhost"; // Host name 
                    $user="anniest1106"; // Mysql username 
                    $password="Smpss8406"; // Mysql password 
                    $database = "carshare"; // Database name 
                    $tbl_name="member"; // Table name 

                    // Connect to server and select databse.
                    mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
                    mysql_select_db("$database")or die("cannot select DB");
                    
                    $sql = "SELECT * FROM Reservation";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
                    $ReservationNum = $_GET["id"];
                    ?>
                    <p>Reservation status can be Successful, Cancelled, Picked-up, Returned</p>
                    <p>a.	Successful: no system failure and the reservation is made</p>
                    <p>b.	Returned: member has returned the vehicle</p>
                    <input type="hidden" name="ReservationNum" value="<?php echo "$ReservationNum"?>">
                    <tr>
                        <td colspan="2" style="text-align: right">Reservation Status:</td>
                        <td colspan="3"><input name="ReservationStatus" id="ReservationStatus" type="text" size="30" /></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="edit" value="Edit"></td>
                    </tr>

                </table>
                </td>
            </form>
        </tr>
    </table>
     <div style="width: 800px; margin: 0 auto; padding-top: 20px"><button type="button" class="backToProfile" onclick="parent.location='../adminIndex.html'">Back To Admin Page</button></div>
    <div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>
