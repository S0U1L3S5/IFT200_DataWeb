<?php

$db_host="localhost";
$db_username="root";
$db_password="password";
$db_name="AdultBeverage";

$db_connect=mysqli_connect($db_host, $db_username, $db_password, $db_name) or die();

if(mysqli_connect_error())
{
	echo "Failed to connnect to MySQL:".mysqli_connect_error();
}

//echo "connection successful";

//mysqli_close($db_connect);

?>
