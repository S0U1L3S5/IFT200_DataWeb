
<?php

include("dbconnect.php");

$name=$_REQUEST['Spirit_Name'];
$ABV=$_REQUEST['ABV'];
$Type=$REQUEST['Type'];
$Category=$_REQUEST['Category'];
$Age=$_POST['Age'];
$Manufacture=$_REQUEST['Manufacture'];


//inserting data into table

$query=mysqli_query($db_connect, "INSERT INTO Spirits (Spirit_Name, ABV, Type, Category, Age, Manufacture) VALUES ('$name', '$ABV', '$Type', '$Category', '$Age', '$Manufacture');") or die(mysqli_error($db_connect));

mysqli_close($db_connect);

//echo "Successfully Updated, Please return to forms";
header("Location: ../AddSpirit-form.php?note=success");

?>
