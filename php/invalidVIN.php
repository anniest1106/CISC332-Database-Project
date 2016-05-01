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
				<li class="active">
					<a href="../member_info.html">Profile</a>
				</li>
				<li>
					<a href="../userGuide.html">User Guide</a>
				</li>
			</ul>
		</div>
	</div>
    <body>

<?php
	session_start();
	$location = $_SESSION['Location'];
?>
	<div style="padding-top: 120px">
		<center><h2>Invalid VIN entered, please try again</h2></center>
		<center><form name="form4" method="post" action="choosecar.php">
					<input name="location" type="submit" value="Choose Another Car">
					<p></p>
					<input name="location" type="hidden" value="<?=$location?>">
		</form></center>
		<center><FORM>
		  <button type="button" class="backToProfile" onClick="parent.location='../member_info.html'" style="float: center">Back To Your Profile</button>
		</FORM></center>
	</div>
	
	<div id="footer">
			<div>
					<center><a href="../adminLogin.html">Admin Login</a></center>
			</div>
			<div class="clearfix"><center>
					© 2013 Renee Xu and Annie Lee</center>
			</div>
	</div>	

</body>
</html>