<?php
$host="localhost"; // Host name 
$username="anniest1106"; // Mysql username 
$password="Smpss8406"; // Mysql password 
$db_name="carshare"; // Database name 
$tbl_name="Member"; // Table name 

// Connect to server and select database.
$conn = mysql_connect("$host", "$username", "$password"); 
if (!$conn){
    die('Could not connect:' . mysql_error());
}
mysql_select_db("$db_name", $conn);

$Name = mysql_real_escape_string($_POST['Name']);
$License = mysql_real_escape_string($_POST['License']);
$Address = mysql_real_escape_string($_POST['Address']);
$Phone = mysql_real_escape_string($_POST['Phone']);
$Email = mysql_real_escape_string($_POST['Email']);
$Password = mysql_real_escape_string($_POST['Password']);
$CreditCardNumber = mysql_real_escape_string($_POST['CreditCardNumber']);
$ExpireDate = mysql_real_escape_string($_POST['ExpireDate']);
    
$query=mysql_query("SELECT * FROM Member WHERE Email='$Email' OR License='$License'");
$rows=mysql_num_rows($query);
if($rows==0){
	$MemberNO = (string)mt_rand(1000000, 5555555);
    $sql="INSERT INTO Member ".
         "(Name, License, Address, Phone, Email, Password, CreditCardNumber, ExpireDate, RegAnniversary, MembershipFee,UsageFee, MemberNO) ".
         "VALUES ('$Name','$License','$Address','$Phone', '$Email', '$Password', '$CreditCardNumber', '$ExpireDate', NOW(), 50, 0, $MemberNO)";
    $result=mysql_query($sql) or die("died at inserting");
    if($result){
        echo "Account Successfully Created";
        Header ("Location:../login.html");
    }
} 
else {
	Header ("Location:../register.php");
}

?>