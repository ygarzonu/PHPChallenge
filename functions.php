<?php 

	function setProducts($connection){
		if (isset($_POST['productSubmit'])) {
			$product = $_POST['nombre'];
			$description = $_POST['descripción'];
			$dateOut = $_POST['fecha_salida'];
			$price = $_POST['precio'];
			$current = $_POST['moneda'];

			$sql = "INSERT INTO products (nombre, descripción, fecha_salida, precio, moneda) VALUES ('$product', '$description', '$dateOut', '$price', '$current')";
			$result = mysqli_query($connection, $sql);
		}
	}

	function getProducts($connection){
		$sql = "SELECT * FROM products";
		$result = mysqli_query($connection, $sql);
		while( $row = mysqli_fetch_assoc() ){
			echo "<div class='product_box'<p>";
				echo $row['nombre']. "<br>";
				echo nl2br($row['descripción']). "<br>";
				echo $row['fecha_salida']. "<br>";
				echo $row['precio']. "<br>";
				//echo "<option value='" . $row['moneda'] . "'>" . $row['name'] . "</option>";
				echo "</p>";
		}
	}
?>