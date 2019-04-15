<?php

	include("dbconnect.php");
	$note=$_REQUEST['note'];

?>
<!DOCTYPE html>
<html>

<head>
	<title>Add Manufacture Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>

<body>
	
<div id="page-wrap">
	<?php if($note=='success')
	{
		echo "<div class=\"success\">Form successfully submitted!</div>";
	}
	?> 

<h1>Input a new Manufacture/Brewery <a href="../Home.php" style="float:right">Homepage</a> </h1>

	<div id="contact-area">

		<form action="Man_Process.php" method="post" name="Wine">

			<label for="Man_Name">Name:</label>
			<input type="text" name="Man_Name" placeholder="Name of the Manufacture/Brewery" value=""/>
			<br>
			
			<label for="Street_Address">Street Address:</label>
			<input type="text" name="Street_Address" placeholder="1234 No Where Lane" value=""/>
			<br>
			
			<label for="City">City:</label>
			<input type="text" name="City" placeholder="City" value=""/>
			<br>
			
			<label for="State">State:</label>
			<input type="text" name="State" placeholder="State (Az, Co, etc...)" value=""/>
			<br>
			
			<label for="Country">Country:</label>
			<input type="text" name="Country" placeholder="Country of Origin" value=""/>
		
			<label for="ZipCode">Zip Code:</label>
			<input type="text" name="ZipCode" placeholder="12345" value="" />
			<br>
			
			<label for="Phone_Num">Phone Number:</label>
			<input type="text" name="Phone_Num" placeholder="###-###-#### or +##-####-######" value="" />
			<br>
			
			<label for="Website">Website</label>
			<input type="text" name="Website" placeholder="URl - http://www...." value="" />
			<br>
			
			<input type="submit" name="submit" value="Submit" class="submit-button"/>

		</form>
		<br><br><br><br>
		
	</div>
	
	<div>
		<table>
			<h2>Manufacture ID</h2>
			<?php
			$sqlMan = "SELECT * FROM Manufacture;";
			$resultMan=mysqli_query($db_connect, $sqlMan) or die("bad query");
			
			echo "<tr><th>ID</th><th>Name</th><th>Street Address</th><th>City</th><th>State</th><th>Country</th><th>Zip Code</th><th>Phone Number</th><th>Website</th></tr>";
			while ($row = mysqli_fetch_assoc($resultMan)) {
				echo"<tr><td>{$row['Man_ID']}</td><td>{$row['Man_Name']}</td><td>{$row['Street_Address']}</td><td>{$row['City']}</td><td>{$row['State']}</td><td>{$row['Country']}</td><td>{$row['ZipCode']}</td><td>{$row['Phone_Num']}</td><td>{$row['Website']}</td></tr>";
				}	
			?>
		</table>

		<div sytle="clear: both;"></div>		
	</div>

</div>

</body>
</html>


