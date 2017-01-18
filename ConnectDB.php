<?php

	$server 	= 	"localhost";
	$username 	= 	"ygarzonu";
	$password	=	"pwdPrueba2*";
	$db 		= 	"challengeDB";

	/* Create connection */
	$connection = mysqli_connect($server, $username, $password, $db);
	
	/* Check connection */
	if (!$connection) {
	    die("Conexión fallida: " . mysqli_connect_error());
	}

	/* Create database */
	//$sql = "CREATE DATABASE IF NOT EXISTS " . $db;
	//if (mysqli_query($connection, $sql)) {
	//    echo "Base de Datos creada exitosamente. ";
	//} else {
	//    echo "Error creando base de datos: " . mysqli_error($connection);
	//}

	/* sql to create table */
	//$user = "CREATE TABLE IF NOT EXISTS Users (
	//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	//username VARCHAR(30) NOT NULL,
	//password VARCHAR(30) NOT NULL,
	//reg_date TIMESTAMP
	//)";

	//if (mysqli_query($connection, $user)) {
	//    echo "La tabla Users a sido creada exitosamente. ";
	//} else {
	//    echo "Error creando tabla: " . mysqli_error($connection);
	//}

	//$producto = "CREATE TABLE IF NOT EXISTS Products (
	//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	//nombre VARCHAR(30) NOT NULL,
	//descripción TEXT(150) NULL,
	//fecha_salida DATE NOT NULL,
	//precio DECIMAL(10, 2) NOT NULL,
	//moneda VARCHAR(15) NOT NULL,
	//reg_date TIMESTAMP
	//)";

	//if (mysqli_query($connection, $producto)) {
	//    echo "La tabla Products a sido creada exitosamente. ";
	//} else {
	//    echo "Error creando tabla: " . mysqli_error($connection);
	//}

	//mysqli_close($connection);