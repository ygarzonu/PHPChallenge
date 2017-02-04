<?php  

	include_once('../public/connection.php');

	class Product
	{
		$product = $_POST['nombre'];
		$description = $_POST['descripción'];
		$dateOut = $_POST['fecha_salida'];
		$price = $_POST['precio'];
		$current = $_POST['moneda'];

		public function setProducts()
		{
			$sql = "INSERT INTO products (nombre, descripción, fecha_salida, precio, moneda) VALUES ('$product', '$description', '$dateOut', '$price', '$current')";
			$result = mysqli_query($connection, $sql);
		}
	}

?>