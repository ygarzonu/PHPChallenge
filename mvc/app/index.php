<?php
	session_start();
?>

<html>
	<head>PHP MVC CHALLENGE</head>
	<body>
	<header>
		<h3>
			Bienvenid@ <?php 
							if (!isset($_SESSION['Susername'])) {
								echo $_SESSION['username']
							} 
						?>
		</h3>
	</header>
	</body>
</html>