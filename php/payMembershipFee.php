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
$user="anniest1106"; // Mysql username 
$password="Smpss8406"; // Mysql password 
$database = "carshare"; // Database name 
$tbl_name = "Member";

// Connect to server and select database.
mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
mysql_select_db("$database")or die("cannot select DB");
$sql = 'SELECT * FROM Member';
?>

    <center><h2>Pay Membership Fee</h2></center>
    <table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
        <tr>
            <form name="form4" method="post" action="pay.php">
                <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                <center><p>You may now pay your membership fee</p></center>
        
                <tr>
                    <td colspan="2" style="text-align: right">MemberNO:</td>
                    <td colspan="3"><input name="MemberNO" type="text" id="MemberNO"type="text" size="30" /></td>
                </tr>
        
                <tr>
                    <td colspan="2" style="text-align: right">Credit Card Number:</td>
                    <td colspan="3"><input name="CreditCardNumber" id="CreditCardNumber" type="text" size="30" /></td>
                </tr>
                        
                <tr>
                    <td colspan="2" style="text-align: right">Expire Date:</td>
                    <td colspan="3"><input name="ExpireDate" id="ExpireDate" type="text" size="30" /></td>
                </tr>
                    
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="pay" value="Pay Fee"></td>
                </tr>
                </table>
                </td>
            </form>
        </tr>
    </table>
   <div style="width: 800px; margin: 0 auto; padding-top: 20px"><button type="button" class="backToProfile" onclick="parent.location='../member_info.html'">Back To Your Profile</button></div>
   <div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>


