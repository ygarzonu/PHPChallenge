<?php 
	session_start(); 
	
	include '../connection.php';

	$username	=	$_POST['username'];	
	$pwd 		=	$_POST['password'];	
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc();
	$hashed_pwd = $row['password'];
	$hash = password_verify($pwd, $hashed_pwd);
	if ($hash == 0) {
		header("Location: ../index.php?error=empty");
		exit();
	} else{
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hashed_pwd'";
		$result = mysqli_query($connection, $sql);
		if ( !$row = mysqli_fetch_assoc() ) {
		    echo "Tu usuario o contraseña es incorrecta";
		} else {
		    $_SESSION['id'] = $row['id'];
		}
		header("Location: ../single.php");
}