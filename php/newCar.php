<?php 
 
$host="localhost"; // Host name 
$username="anniest1106"; // Mysql username 
$password="Smpss8406"; // Mysql password 
$db_name="carshare"; // Database name 
$tbl_name="Location"; // Table name 

// Connect to server and select databse.
// Connect to server and select database.
$conn = mysql_connect("$host", "$username", "$password"); 
if (!$conn){
    die('Could not connect:' . mysql_error());
}
mysql_select_db("$db_name", $conn);
 
$VIN = mysql_real_escape_string($_POST['VIN']);
$Make = mysql_real_escape_string($_POST['Make']);
$Model = mysql_real_escape_string($_POST['Model']);
$Year = mysql_real_escape_string($_POST['Year']);
$CurrentStatus = mysql_real_escape_string($_POST['CurrentStatus']);
$LastOdomterReading = mysql_real_escape_string($_POST['LastOdomterReading']);
$LastGasTankReading = mysql_real_escape_string($_POST['LastGasTankReading']);
$DateMaintain = mysql_real_escape_string($_POST['DateMaintain']);
$MaintainOdomterReading = mysql_real_escape_string($_POST['MaintainOdomterReading']);

$sql=mysql_query("INSERT INTO Car (VIN, Make, Model, Year, CurrentStatus, LastOdomterReading, LastGasTankReading, DateMaintain, MaintainOdomterReading)
                  VALUES ('$VIN', '$Make', '$Model', '$Year', '$CurrentStatus', '$LastOdomterReading', '$LastGasTankReading', '$DateMaintain', '$MaintainOdomterReading')")
     or die (mysql_error());

header("location:viewCarList.php");

?>