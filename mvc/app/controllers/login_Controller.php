<?php

	if ($_POST) {
		if (isset($_POST['loginSubmit']) AND $_POST['loginSubmit'] == "Login") {
			$username = $_POST['username'];
			$password = $_POST['password'];

			try {
				include '../models/Login.php';
				$login = new Login($username, $password);

				if ($login == TRUE) {
					session_start();
					$_SESSION['username'] = $username;
					header('Location:index.php');
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		if (isset($_POST['signupSubmit']) AND $_POST['signupSubmit'] == "Register") {
			$info['name']		= $_POST['name'];
			$info['lastname']	= $_POST['lastname'];
			$info['username']	= $_POST['username'];
			$info['password']	= $_POST['password'];

			print_r($info);
		}
	}

?>