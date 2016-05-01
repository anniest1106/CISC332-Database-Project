<?php

$host="localhost"; // Host name 
$username="anniest1106"; // Mysql username 
$password="Smpss8406"; // Mysql password 
$db_name="carshare"; // Database name 
$tbl_name="Comment"; // Table name 

// Connect to server and select databse.
// Connect to server and select database.
$conn = mysql_connect("$host", "$username", "$password"); 
if (!$conn){
    die('Could not connect:' . mysql_error());
}
mysql_select_db("$db_name", $conn);
$CommentID = (string)mt_rand(1000, 9999);
$Topic=mysql_real_escape_string($_POST['Topic']);
$Comment=mysql_real_escape_string($_POST['Comment']);
$sql=mysql_query("INSERT INTO Comment (CommentID, Topic, Comment) VALUES ('$CommentID', '$Topic', '$Comment')")or die(mysql_error());
header("Location:display.php");

?>