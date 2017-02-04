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
	}

?>