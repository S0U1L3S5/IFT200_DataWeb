<?php
	include("dbconnect.php");
?>

<!DOCTYPE html>

<html>
	
<head>
	<title>Sign Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>

<body>
<div id="page-wrap">
	
	<h1>Thank You for choosing to join this Database!!!</h1>
	<img src="images/AlcoholSolution.png" alt="logo" class="center">
	
	<div id="contact-area">
		<br>
		<p style="text-align:center"> Welcome to the world of Brews!!! Please enter your informaiton below to sign up</p>
		<br>
		
		<div>
			<form action="signup.inc.php" method="post" name="user_accounts">
				
				<input type="text" name="userName" placeholder="Username" value=""/>
				<input type="text" name="userEmail" placeholder="E-Mail" value=""/>
				<input type="password" name="userPassword" placeholder="Password..." value=""/>
				<input type="password" name="Password-Repeat" placeholder="Repeat Password" value=""/>
				<br>
				<button type="submit" name="signup-submit">Register!!</button>
			</form>
		</div>
		<br />
		
		<p style="text-align:right"> <a href="index.html">Welcome Page</a> </p>
	</div>


	
</div>
</body>
</html>
