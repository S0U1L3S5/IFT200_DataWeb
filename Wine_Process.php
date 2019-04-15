
<?php

include("dbconnect.php");

$name=$_REQUEST['Wine_Name'];
$ABV=$_REQUEST['ABV'];
$Category=$_REQUEST['Category'];
$Year=$_POST['Year'];
$Manufacture=$_REQUEST['Manufacture'];


//inserting data into table

$query=mysqli_query($db_connect, "INSERT INTO Wine (Wine_Name, ABV, Category, Year, Manufacture) VALUES ('$name', '$ABV', '$Category', '$Year', '$Manufacture');") or die(mysqli_error($db_connect));

mysqli_close($db_connect);

//echo "Successfully Updated, Please return to forms";
header("Location: ../AddWine-form.php?note=success");

?>
