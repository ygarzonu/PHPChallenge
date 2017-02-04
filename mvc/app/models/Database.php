<?php 

class Database
{
	private $server;
	private $username;
	private $password;
	private $db;
	
	function __construct($filename)
	{
		if (is_file($filename)) {
				include $filename;
		}else{
			throw new Exception("Error al procesar el requerimiento");
		}

		$this->server = $server;
		$this->username = $username;
		$this->password = $password;
		$this->db = $db;

		$this->connect();
	}

	private function connect()
	{
		if(!mysql_connect($this->server, $this->username, $this->password)){
			throw new Exception("Error: No se conectó al servidor");
		}
		if (!mysql_select_db($this->db)) {
			throw new Exception("Error: Ninguna Base de Datos seleccionada");			
		}
	}

	function close()
	{
		mysql_close();
	}
}

?>