
<?php

include("dbconnect.php");

?>

<!DOCTYPE html>
<html>
	
<head>
	<title>Query Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>

<body>
<div id="page-wrap">
	<div id="contact-area">
		<h1>Welcome to the Query!!<a href="../Home.php" style="float:right">Homepage</a> </h1>
		
		<form action="QueryForm.php" method="post">
			
			<label>Beer</label>
			<input type="submit" name="Beer" value="Query Beer"> <br>
			
			<label>Spirits</label>
			<input type="submit" name="Spirits" value="Query Spirits"> <br>
			
			<label>Wine</label>
			<input type="submit" name="Wine" value="Query Wine"> <br>
			
			<label>Manufacture</label>
			<input type="submit" name="Manufacture" value="Query Manufacture"><br>
			
			<?php
				if (isset($_POST['Beer'])) {
					$sql = "SELECT Beer.*, Manufacture.Man_Name, Manufacture.State, Manufacture.Country FROM Beer INNER JOIN Manufacture ON Beer.Manufacture=Manufacture.Man_ID;";
					$result = mysqli_query($db_connect, $sql) or die("bad query");
	
					echo"<table>";
					echo"<tr><th>ID</th><th>Name</th><th>ABV</th><th>Category</th><th>Manufacture</th><th>State</th><th>Country</th></tr>";
	
					while($row=mysqli_fetch_assoc($result)) {
						echo"<tr><td>{$row['Beer_ID']}</td><td>{$row['Name']}</td><td>{$row['ABV']}</td><td>{$row['Category']}</td><td>{$row['Man_Name']}</td><td>{$row['State']}</td><td>{$row['Country']}</td></tr>";
					}
				}
				
				if (isset($_POST['Spirits'])) {
					$sql = "SELECT Spirits.*, Manufacture.Man_Name, Manufacture.State, Manufacture.Country FROM Spirits INNER JOIN Manufacture ON Spirits.Manufacture=Manufacture.Man_ID;";
					$result = mysqli_query($db_connect, $sql) or die("bad query");
	
					echo"<table>";
					echo"<tr><th>ID</th><th>Name</th><th>ABV</th><th>Type</th><th>Category</th><th>Age</th><th>Manufacture</th><th>State</th><th>Country</th></tr>";
	
					while($row=mysqli_fetch_assoc($result)) {
						echo"<tr><td>{$row['Spirit_ID']}</td><td>{$row['Spirit_Name']}</td><td>{$row['ABV']}</td><td>{$row['Type']}</td><td>{$row['Category']}</td><td>{$row['Age']}</td><td>{$row['Man_Name']}</td><td>{$row['State']}</td><td>{$row['Country']}</td></tr>";
					}
				}
				
				if (isset($_POST['Wine'])) {
					$sql = "SELECT Wine.*, Manufacture.Man_Name, Manufacture.State, Manufacture.Country FROM Wine INNER JOIN Manufacture ON Wine.Manufacture=Manufacture.Man_ID;";
					$result = mysqli_query($db_connect, $sql) or die("bad query");
	
					echo"<table>";
					echo"<tr><th>ID</th><th>Name</th><th>ABV</th><th>Category</th><th>Year</th><th>Manufacture</th><th>State</th><th>Country</th></tr>";
	
					while($row=mysqli_fetch_assoc($result)) {
						echo"<tr><td>{$row['Wine_ID']}</td><td>{$row['Wine_Name']}</td><td>{$row['ABV']}</td><td>{$row['Category']}</td><td>{$row['Year']}</td><td>{$row['Man_Name']}</td><td>{$row['State']}</td><td>{$row['Country']}</td></tr>";
					}
				}
				
				if (isset($_POST['Manufacture'])) {
					$sql = "SELECT * FROM Manufacture;";
					$result = mysqli_query($db_connect, $sql) or die("bad query");
	
					echo"<table>";
					echo"<tr><th>ID</th><th>Name</th><th>Street Address</th><th>City</th><th>State</th><th>Country</th><th>Zip Code</th><th>Phone Number</th><th>Website</th></tr>";
	
					while($row=mysqli_fetch_assoc($result)) {
						echo"<tr><td>{$row['Man_ID']}</td><td>{$row['Man_Name']}</td><td>{$row['Street_Address']}</td><td>{$row['City']}</td><td>{$row['State']}</td><td>{$row['Country']}</td><td>{$row['ZipCode']}</td><td>{$row['Phone_Num']}</td><td>{$row['Website']}</td></tr>";
					}
				}
			?>
		</form>
	
	</div>
</div>
</body>
</html>
