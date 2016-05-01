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

$Address=mysql_real_escape_string($_POST['Address']);
$NumSpace=mysql_real_escape_string($_POST['NumSpace']);
$sql=mysql_query("INSERT INTO Location (Address, NumSpace) VALUES ('$Address', '$NumSpace')")or die(mysql_error());
header("Location:locationList.php");

?>