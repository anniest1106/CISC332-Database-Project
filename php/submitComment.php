<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<title>K-Town Car Share</title>
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
					<a href="../member_info.html">Profile</a>
				</li>
				<li>
					<a href="../userGuide.html">User Guide</a>
				</li>
			</ul>
		</div>
	</div>
    </br></br>
<?php

$host="localhost"; // Host name 
$username="anniest1106"; // Mysql username 
$password="Smpss8406"; // Mysql password 
$db_name="carshare"; // Database name 
$tbl_name="Comment"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


?>
    <center><h1>Make a comment</h1></center>
    
    <table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
    <form action="saveComment.php" method="post">
        <td>
        <table width="100%" border="0" cellpadding="3" cellspacing="1">
        <tr>
            <td colspan="2"><strong>Topic:</strong></td>
			<td colspan="3"><input type="Topic" name="Topic" style="width: 437px"/></td>
		</tr>
		<tr>
			<td colspan="2"><strong>Comment:</strong></td>
			<td colspan="3"><textarea name="Comment" rows="10" cols="60"></textarea></td>
		</tr>
        </br>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><br><input type="submit" name="Submit" value="Submit"></td>
        </tr>
        </table>
        </td>
    </form>
    </tr>
    </table>
    <center><form>
        <button type="button" class="backToProfile" onClick="parent.location='../member_info.html'" style="float: center">Back To Your Profile</button>
    </form></center>
    <div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>