<?php 


class Login
{
	private $username;
	private $pwd;
	private $conn;

	function __construct()
	{
		$this->setData($username, $pwd);

		$this->connectToDB();

		$this->getData();
	}

	private function setData($username, $pwd)
	{
		$this->username = $username;
		$this->pwd = $pwd;
	}

	private function connectToDB()
	{
		include '../models/Database.php';
		$vars = '../includes/vars.php';
		$this->conn = new Database($vars);
	}

	function getData()
	{
		$query = "SELECT * FROM users WHERE username=" . $username . "AND password=" . $pwd ;
		$sql= mysql_query($query);

		if(mysql_num_rows($sql)>0){
			return TRUE;
		}else{
			throw new Exception("Nombre de Usuario o Contraseña es inválido, por favor intente de nuevo");		
		}
	}

	function close()
	{
		$this->conn->close();
	}
}

?>