<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login or Register</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php

$host="localhost"; // Host name 
$username="anniest1106"; // Mysql username 
$password="Smpss8406"; // Mysql password 
$db_name="carshare"; // Database name 
$tbl_name="Member"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
?>
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.html"><center>K-Town Car Share</center></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li  class="active">
					<a href="register.php">Register</a>
				</li>
				<li>
					<a href="login.html">Login</a>
				</li>
			</ul>
		</div>
	</div>
	       <form method="post" action="php/check_register.php" class="register">
            <h1>Registration</h1>
            <fieldset class="row1">
                <legend>Account Details
                </legend>
                <p>
                    <label for="Name">Name (First and Last)
                    </label>
                    <input type="text" name="Name" id="Name" size="30"/>
                </p>
                <p>
                    <label for="Email">Email (someone@xxx.xxx)
                    </label>
                    <input type="text" name="Email" id="Email" size="30"/>
					
                    <label for="Password">Password
                    </label>
                    <input type="Password" name="Password" id="Password" size="30"/>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                <p>
                    <label for="Phone">Phone (numbers only)
                    </label>
                    <input type="text" name="Phone" id="Phone" maxlength="10"/>
                
                    <label for="Address">Address (unit number, street, city, country)
                    </label>
                    <input type="text" name="Address" id="Address" class="long"/>
                </p>
				<p>
				<label for="License">Driver's License
                    </label>
                    <input type="text" name="License" id="License" maxlength="20"/>
				</p>
            </fieldset>
            <fieldset class="row3">
                <legend>Credit Card Information
                </legend>
                <p>
                    <label for "CreditCardNumber">Credit Card Number</label>
                    <input type="text" name="CreditCardNumber" id="CreditCardNumber" size="30"/>
					
                    <label for "ExpireDate">Expiry Date
                    </label>
                    <input type="text" name="ExpireDate" id="ExpireDate" size="30"/>e.g 2018-01-00
                </p>
            </fieldset>
            <div><button class="button">Register &raquo;</button></div>
        </form>
		
	<div id="footer">
		<div>
				<center><a href="adminLogin.html">Admin Login</a></center>
		</div>
		<div class="clearfix"><center>
				© 2013 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
</html>