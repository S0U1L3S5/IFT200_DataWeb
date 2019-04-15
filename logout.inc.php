<?php

include("dbconnect.php");

if (isset($_Post['logout-submit'])) {
	header("Location: ../index.html");
}
?>
