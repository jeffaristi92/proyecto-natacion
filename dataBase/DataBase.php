<?php
	
	class DataBase{
	
		private $servidor = 'localhost';		
		//private $dbName = 'clubtibu_app';
		private $dbName = 'natacion';
		//private $user = 'clubtibu_user';		
		private $user = 'root';		
		//private $password = 'clubtibu3juh4yg4';
		private $password = 'john123';
		private $mysqli;
		
	    public function conectar() {

	    	$mysqli = new mysqli($this->servidor, $this->user, $this->password, $this->dbName);
			
			if (mysqli_connect_errno($mysqli)) {
			    echo "Failed to connect to MySQL: " . mysqli_connect_error();
			    exit();
			}

			return $mysqli;	       
	    }

	    public function desconectar($conexion) {

	        mysqli_close($conexion);
	    }

	}//FIN Clase DataBase
?>
