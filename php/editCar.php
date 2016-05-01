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
    <center><h2>Form for Editing Car</h2></center>
    <table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
        <tr>
            <form method="post" action="editC.php"> 
                <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                <?php
                $host="localhost"; // Host name 
                $user="anniest1106"; // Mysql username 
                $password="Smpss8406"; // Mysql password 
                $database = "carshare"; // Database name 
                $tbl_name="Location"; // Table name 

                // Connect to server and select databse.
                mysql_connect("$host","$user","$password", "$database")or die("cannot connect"); 
                mysql_select_db("$database")or die("cannot select DB");
                
                $VIN = $_GET["id"];
                
                $sql = "SELECT * FROM Car";
                $result = mysql_query($sql);
                $row=mysql_fetch_array($result);
                ?>
                </br>
                </br>
                <tr>
                    <td>VIN: </td><td><?php echo "$VIN"?></td>
                    <input type="hidden" name="VIN" value="<?=$VIN?>">
                </tr>
                <tr>
                    <td>Make: </td><td><?php echo "$row[Make]"?></td>
                </tr>
                <tr>
                    <td>Model: </td><td><?php echo "$row[Model]"?></td>
                <tr>
                    <td>Year: </td><td><?php echo "$row[Year]"?></td>
                <tr>
                    <td>Current Status: </td><td><?php echo "$row[CurrentStatus]"?></td>

                <tr>
                    <td>LastOdomterReading:</td>
                    <td><input name="LastOdomterReading" id="LastOdomterReading" type="text" size="30" /></td>
                </tr>
                <tr>
                    <td>LastGasTankReading:</td>
                    <td><input name="LastGasTankReading" id="LastGasTankReading" type="text" size="30" /></td>
                </tr>
                <tr>
                    <td>DateMaintain:</td>
                    <td><input name="DateMaintain" id="DateMaintain" type="text" size="30" /></td>
                </tr>
                <tr>
                    <td>MaintainOdomterReading:</td>
                    <td><input name="MaintainOdomterReading" id="MaintainOdomterReading" type="text" size="30" /></td>
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
