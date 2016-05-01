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
    <center><h2>Add a New Car</h2></center>
        <table width="800" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
                <form method="post" action="newCar.php" onSubmit="return valdiation()">
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <p>
                    <tr>
                        <th><label for="VIN"><strong>VIN:</strong></label></th>
                        <td><input class="inp-text" name="VIN" id="VIN" type="text" size="30" /></td>
                    </tr>
                    </p>
                    <p>
                    <tr>
                        <th><label for="Make"><strong>Make:</strong></label></th>
                        <td><input class="inp-text" name="Make" id="Make" type="text" size="30" /></td>
                    </tr>
                    </p>
                    <p>
                    <tr>
                        <th><label for="Model"><strong>Model:</strong></label></th>
                        <td><input class="inp-text" name="Model" id="Model" type="text" size="30" /></td>
                    </tr>
                    </p>
                    <p>
                    <tr>
                        <th><label for="Year"><strong>Year:</strong></label></th>
                        <td><input class="inp-text" name="Year" id="Year" type="text" size="30" /></td>
                    </tr>
                    </p>
                    <p>
                    <tr>
                        <th><label for="CurrentStatus"><strong>Current Status:</strong></label></th>
                        <td><input class="inp-text" name="CurrentStatus" id="CurrentStatus" type="text" size="30" /></td>
                    </tr>
                    </p>
                    <p>
                    <tr>
                        <th><label for="LastOdomterReading"><strong>Last Odomter Reading:</strong></label></th>
                        <td><input class="inp-text" name="LastOdomterReading" id="LastOdomterReading" type="text" size="30" /></td>
                    </tr>
                    </p>
                    <p>
                    <tr>
                        <th><label for="LastGasTankReading"><strong>Last Gas Tank Reading:</strong></label></th>
                        <td><input class="inp-text" name="LastGasTankReading" id="LastGasTankReading" type="text" size="30" /></td>
                    </tr>
                    </p>
                    <p>
                    <tr>
                        <th><label for="DateMaintain"><strong>Date Maintain:</strong></label></th>
                        <td><input class="inp-text" name="DateMaintain" id="DateMaintain" type="text" size="30" /></td>
                    </tr>
                    </p>
                    <p>
                    <tr>
                        <th><label for="MaintainOdomterReading"><strong>Maintain Odomter Reading:</strong></label></th>
                        <td><input class="inp-text" name="MaintainOdomterReading" id="MaintainOdomterReading" type="text" size="30" /></td>
                    </tr>
                    </p>
                    <tr>
                    <td></td>
                        <td class="submit-button-right">
                        <input class="send_btn" type="submit" value="Submit" alt="Submit" title="Submit" />
                        
                        <input class="send_btn" type="reset" value="Reset" alt="Reset" title="Reset" /></td>
                        
                    </tr>
                </table>
                </form>
            </tr>
    </table>
    <div style="width: 800px; margin: 0 auto; padding-top: 20px"><button type="button" class="backToProfile" onclick="parent.location='../adminIndex.html'">Back To Your Profile</button></div>
    <div id="footer">
		<div class="clearfix"><center>
				© 2015 Renee Xu and Annie Lee</center>
		</div>
	</div>
</body>
<html>
