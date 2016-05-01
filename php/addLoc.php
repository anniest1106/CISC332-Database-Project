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
	</div></br></br>
    <center><h1>Add New Location</h1></center>
        <table align = "center">
        <form action="addLocation.php" method="post" onSubmit="return valdiation()">
            <p>
                <tr>
                    <th><label for="Address"><strong>Address:</strong></label></th>
                    <td><input type="Address" name="Address" type="text" size="30"/></td>
                </tr>
                </br>
                <tr>
                    <th><label for="NumSpace"><strong>Number of Space at that Location:</strong></label></th>
                    <td><input name="NumSpace" id="NumSpace" type="text" size="30" /></td>
                </tr>
                </br>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </p>

        </form>
        </table>
    <div style="width: 800px; margin: 0 auto; padding-top: 20px"><button type="button" class="backToProfile" onclick="location.href='../adminIndex.html'">Back To Admin Page</button></div>

	<div id="footer">
			<div class="clearfix"><center>
					© 2013 Renee Xu and Annie Lee</center>
			</div>
	</div>
</body>
</html>