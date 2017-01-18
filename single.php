<?php
	include 'header.php';
	include 'functions.php';
	include 'ConnectDB.php';
?>

<?php 
   echo "<form method='POST' action='" .setProducts($connection). "'>
			Producto: <input type='text' name='nombre' placeholder='nombre del producto'><br>
		  	Descripción: <textarea name='descripción' id='descripcion' cols='50' rows='5'></textarea><br>
			Fecha de Salida al Aire: <input type='date' name='fecha_salida' min='2000-01-02'><br>
			Precio: <input type='text' name='precio'><br>
			Moneda: <select name='moneda'>
					  <option value='COP'>Pesos </option>
					  <option value='USD'>Dólares </option>
					</select><br>
			<button type='submit' name='productSubmit'>Almacenar información </button>	
		</form>";

	getProducts($connection);
?>