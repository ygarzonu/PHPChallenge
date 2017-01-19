<?php
	include 'header.php';
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