
<?php

include("dbconnect.php");


if (isset($_POST['signup-submit'])) {
	$username = $_POST['userName'];
	$email = $_POST['userEmail'];
	$password = $_POST['userPassword'];
	$passwordRepeat = $_POST['Password-Repeat'];
	
	if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
		header("Location: ../signup.php?error=emptyfields&");
		exit();
	} 
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invalid_information");
		exit();
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invalidEmail");
		exit();
	}
	elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invalid_Username");
		exit();
	}
	elseif ($password != $passwordRepeat) {
		header("Location: ../signup.php?error=passwordcheck");
		exit();
	}
	else {
		$sql = "SELECT userName FROM user_accounts WHERE userName=?";
		$stmt = mysqli_stmt_init($db_connect);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Locatoin: ../signup.php?error=Username_Taken");
				exit();
			}
			else {
				$sql = "INSERT INTO user_accounts (userName, userEmail, userPassword) VALUES (?,?,?)";
				$stmt = mysqli_stmt_init($db_connect);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../signup.php?error=sqlerror");
					exit();
				}
				else {
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../login.php?signup=success");
					exit();
				}			
			}
		}
		
	}
	mysqli_stmt_close($stmt);
	mysqli_close($db_connect);
}
else {
	header("Location: ../signup.php");
	exit();
}

header("Location: ../signup.php?note=success");

?>

