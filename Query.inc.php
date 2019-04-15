<?php

include("dbconnect.php");

if (isset($_POST['Beer'])) {
	$sql = "SELECT Beer.*, Manufacture.Man_Name, Manufacture.Website FROM Beer INNER JOIN Manufacture ON Beer.Manufacture=Manufacture.Man_ID;";
	$result = mysqli_query($db_connect, $sql) or die("bad query");
	
	echo"<table>";
	echo"<tr><td>ID</td><td>Name</td><td>ABV</td><td>Category</td><td>Manufacture</td><td>Website</td></tr>";
	
	while($row=mysqli_fetch_assoc($result)) {
		echo"<tr><td>{$row['Beer_ID']}</td><td>{$row['Name']}</td><td>{$row['ABV']}</td><td>{$row['Category']}</td><td>{$row['Man_Name']}</td><td>{$row['Website']}</td></tr>";
	}
}
