<?php 

session_start();
include '../ConnectDB.php';

$username	=	$_POST['username'];	
$pwd 		=	$_POST['password'];	

if (empty($username)) {
	header("Location: ../signup.php?error=empty");
	exit();
}
if (empty($pwd)) {
	header("Location: ../signup.php?error=empty");
	exit();
}
else {
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($connection, $sql);
	$usernameCheck = mysqli_num_rows($result);
	if( $usernameCheck > 0 ){
		header("Location: ../signup.php?error=username");
		exit();
	} else {
		$hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
		$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_pwd')";

		if (mysqli_query($connection, $sql)) {
		    echo "Tu registro se creó exitosamente";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
		}

	header("Location: ../index.php");
	}		
}