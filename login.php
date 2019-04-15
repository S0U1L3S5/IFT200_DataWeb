<?php 
	include("dbconnect.php");
?>

<!DOCTYPE html>

<html>
	
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>

<body>
<div id="page-wrap">
	<h1>Please Login to the Adult Beverages Database</h1>
	<img src="images/AlcoholSolution.png" alt="logo" class="center">
	
	<div id="contact-area">
		<br>
		<p> This database allows you to input Beer, Spirits, Wine, and thier respective manufacture.
			Please login below to use this database</p>
		<br>
		
		<div>
			<form action="login.inc.php" method="post" name="user_accounts">
				<input type="text" name="userName" placeholder="Username" value="">
				<input type="password" name="userPassword" placeholder="Password..." value="">
				<br />
				<button type="submit" name="login-submit">Login</button>
			</form>
		</div>
		<br /> <br />
		
		<p style="text-align:right"> <a href="index.html">Welcome Page</a> </p>
	</div>


	
</div>
</body>
</html>

