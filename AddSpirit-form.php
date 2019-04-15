<?php

	include("dbconnect.php");
	$note=$_REQUEST['note'];

?>
<!DOCTYPE html>
<html>

<head>
	<title>Add Spirit Form</title>
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

<h1>Input a new Spirit <a href="../Home.php" style="float:right">Homepage</a> </h1>

	<div id="contact-area">

		<form action="Spirit_Process.php" method="post" name="Wine">

			<label for="Spirit_Name">Name:</label>
			<input type="text" name="Spirit_Name" placeholder="Name of the Spirit" value=""/>
			<br>
			
			<label for="ABV">ABV:</label>
			<input type="text" name="ABV" placeholder="Alcohol content" value=""/>
			<br>
			
			<label for="Type">Type:</label>
			<input type="text" name="Type" placeholder="Single Malt, Rye, Liqueur, etc..." value=""/>
			<br>
			
			<label for="Category">Category:</label>
			<input type="text" name="Category" placeholder="Whiskey, Vodka, etc..." value=""/>
			<br>
			
			<label for="Age">Age:</label>
			<input type="text" name="Age" placeholder="YYYY" value=""/>
		
			<label for="Manufacture">Manufacture:</label>
			<input type="text" name="Manufacture" placeholder="Manufacture ID, see below" value="" />
			<br>
			
			<input type="submit" name="submit" value="Submit" class="submit-button"/>

		</form>
		<br><br><br><br>
		
	</div>
	
	<div>
		<table>
			<h2>Manufacture ID</h2>
			<caption>
				*If manufacture is not listed, please add information to database
				<a href="../AddMan-form.php" style="float:right">Add Manufacture</a>
			</caption>
			<?php
			$sqlMan = "SELECT DISTINCT Man_ID, Man_Name FROM Manufacture JOIN Spirits ON Manufacture.Man_ID=Spirits.Manufacture WHERE Man_ID=Spirits.Manufacture";
			$resultMan=mysqli_query($db_connect, $sqlMan) or die("bad query");
			
			echo "<tr><th>ID</th><th>Name</th></tr>";
			while ($row = mysqli_fetch_assoc($resultMan)) {
				echo"<tr><td>{$row['Man_ID']}</td><td>{$row['Man_Name']}</td></tr>";
				}	
			?>
		</table>

		<div sytle="clear: both;"></div>		
	</div>

</div>

</body>
</html>

