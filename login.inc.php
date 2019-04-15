<?php

include("dbconnect.php");

if(isset($_POST['login-submit'])) {

//	$emailID=$_POST['userEmail'];
	$username=$_POST['userName'];
	$password=$_POST['userPassword'];
	
	if (empty($username) || empty($password)) {
		header("Location: ../login.php?error=emptyfields");
		echo("2");
		exit();
	}
	else {
		$sql = "SELECT * FROM user_accounts WHERE userName=?;";
		$stmt = mysqli_stmt_init($db_connect);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../login.php?error=sqlError");
			echo("3");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			$result=mysqli_stmt_get_result($stmt);
			if ($row=mysqli_fetch_assoc($result)) {
				$pwdCheck=password_verify($password, $row['userPassword']);
				if($pwdCheck == false) {
					header("Location: ../login.php?error=wrongPassword");
					exit();
				}
				else if ($pwdCheck == true) {
					//session_start();
					//$_SESSION['userID'] = $row['User_ID'];
					//$_SESSION['userUID'] = $row['userName'];
					
					header("Location: ../Home.php");
				}
			}
			else {
				header("Location: ../login.php?error=noUser");
				exit();
			}
		}
	}
}
else {
	header("Location: ../login.php?error=BadCode");
	exit();
}

?>
