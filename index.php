<?php
	include 'header.php';
	
	session_start();
?>

<?php
	if( isset( $_SESSION['id'] ) ){
		echo $_SESSION['id'];
	} else {
		echo "No estás loguead@...";
	}
?>



</body>
</html>