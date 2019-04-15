
<?php

include("dbconnect.php");

$name=$_REQUEST['Man_Name'];
$Addr=$_REQUEST['Street_Address'];
$City=$REQUEST['City'];
$State=$_REQUEST['State'];
$Country=$_POST['Country'];
$ZipCode=$_REQUEST['ZipCode'];
$Phone_Num=$_REQUEST['Phone_Num'];
$Website=$_REQUEST['Website'];


//inserting data into table

$query=mysqli_query($db_connect, "INSERT INTO Manufacture (Man_Name, Street_Address, City, State, Country, ZipCode, Phone_Num, Website) VALUES ('$name', '$Addr', '$City', '$State', '$Country', '$ZipCode', '$Phone_Num', '$Website');") or die(mysqli_error($db_connect));

mysqli_close($db_connect);

//echo "Successfully Updated, Please return to forms";
header("Location: ../AddMan-form.php?note=success");

?>
