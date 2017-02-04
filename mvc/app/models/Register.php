<?php 


class Register
{
	private $name;
	private $lastname;
	private $username;
	private $password;
	
	private $conn;

	function __construct($info)
	{
		if(is_array($info)){
			$this->setData($info);
		}else{
			throw new Exception("Error: La información debe estar en un array");			
		}

		$this->connectToDB();
	}

	private function setData($info)
	{
		$this->name = $info['name'];
		$this->lastname = $info['lastname'];
		$this->username = $info['username'];
		$this->password = $info['password'];
	}

	private function connectToDB()
	{
		include '../models/Database.php';
		$vars = '../includes/vars.php';
		$this->conn = new Database($vars);
	}

	function registerUser()
	{
		$query = "INSERT INTO users ('id', 'name', 'lastname', 'username', 'password') VALUES ('', '$this->name', '$this->lastname', '$this->username', '$this->password')";
		$sql = mysql_query($query);
		
		if ($sql) {
			echo "Registro exitoso!";	
		}else{
			throw new Exception("Error: Registro no realizado");
			
		}
	}

	
	function close()
	{
		$this->conn->close();
	}
}

?>