<?php

include("dbconnect.php");
	
$sql = "SELECT Beer.Beer_ID, Beer.Name, Manufacture.Man_Name FROM Beer INNER JOIN Manufacture ON Beer.Manufacture=Manufacture.Man_ID;";
$result=mysqli_query($db_connect, $sql) or die("bad query");

echo "<table border='1'>";
echo "<tr><td>ID</td><td>Name</td></tr>";
while ($row = mysqli_fetch_assoc($result)) {
	echo"<tr><td>{$row['Beer_ID']}</td><td>{$row['Name']}</td><td>{$row['Man_Name']}</td></tr>";
}

//while($row=mysqli_fetch_row($result))
//{
//	printf ("[%s (%s)\n]",$row[0],$row[1]);
//	//echo"<tr> <td>{$row['Beer_ID']}</td> <td>{$row['Name']}</td> <td>{$row['ABV']}</td> <td>{$row['Category']}</td> <td>{$row['Manufacture']}</td> <td>{$row['Man_ID']}</td> <td>{$row['Name']}</td></tr>"
//}


echo"</table>";

?>

