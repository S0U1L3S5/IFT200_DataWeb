<?php

include("dbconnect.php");

if (isset($_POST['search'])) {
	$searchValue = $_POST['valueToSearch'];
	$queryBeer = "SELECT Beer.*, Manufacture.Man_ID, Manufacture.Name, Manufacture.Website FROM Beer INNER JOIN Manufacture ON Beer.Manufacture=Manufacture.Man_ID WHERE CONCAT(Beer_ID, Name, ABV, Category, Manufacture) LIKE '%".$searchValue."%';";
	//$queryBeer = "SELECT Beer.*, Manufacture.Name, Manufacture.Website FROM Beer INNER JOIN Manufacture ON Beer.Manufacture=Manufacture.Man_ID"
	$search_result = filterTable($queryBeer);
}
else {
	$queryBeer = "SELECT Beer.*, Manufacture.Man_ID, Manufacture.Name, Manufacture.Website FROM Beer INNER JOIN Manucature ON Beer.Manufacture=Manufacture.Man_ID;";
	$search_result = filterTable($queryBeer);
}

function filterTable($queryBeer) {
	$filter_Result = mysqli_query($bd_connect, $queryBeer);
	return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
	
<head>
	<title>Query Beer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>

<body>
<div id="page-wrap">
	<div id="contact-area">
		<h1>Welcome to the Beer Query!!<a href="index.html" style="float:right"></a> </h1>
		
		<form action="queryBeer.php" method="post">
			
			<label>Search For</label>
			<input type="text" name="valueToSearch" placeholder="Value to Search" value=""> <br /> <br />
			
			<input type="submit" name="search" value="Filter" class="submit-button"> <br /><br />
			
			
			<table>
				<tr>
					<th>Beer_ID</th><th>Name</th><th>ABV</th><th>Category></th><th>Man_ID</th>
					<th>Man_ID</th><th>Manufacture</th><th>Website</th>
				</tr>
				
				<?php
				//	while($row=mysqli_fetch_row($search_result)){
				//		//printf ("%s (%s)\n",$row[0],$row[1]);
				//		echo"<tr> <td>{$row['Beer_ID']}</td> <td>{$row['Name']}</td> <td>{$row['ABV']}</td> <td>{$row['Category']}</td> <td>{$row['Manufacture']}</td> <td>{$row['Man_ID']}</td> <td>{$row['Name']}</td></tr>"
				//	}
				?>
			</table>
		</form>
	
	</div>
</div>
</body>
</html>
