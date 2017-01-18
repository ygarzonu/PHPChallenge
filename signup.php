<?php
	include 'header.php';
?>

<?php
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if (strpos($url, 'error=empty') !== false){
		echo "llena todos los campos para poderte registrar";
	}
	elseif (strpos($url, 'error=username') !== false){
		echo "Nombre de usuario ya existe.";
	}
	
	if(isset($_SESSION['id'])){
		echo "<p class='msg'>Bienvenid@...</p>";
	} else {
		echo "<p class='msg'>No estás loguead@...</p>";
	}
?>

<br><br>
<?php 
	if(isset($_SESSION['id'])){
		echo "Ya estás loguead@!";
	} else {
		echo "<form action='includes/signup.inc.php' method='POST'>
			<input type='text' name='username' placeholder='Username'>
			<input type='password' name='password' placeholder='password'>
			<button type='submit'>Registrar </button>
			</form>";
	}
?>


</body>
</html>