<?php

	require_once ('../DataBase/DataBase.php');
	require_once ('../Logico/Usuario.php');
	
	class DaoUsuario {
		private $conexionBd;

		public function __construct(){		
			$this->conexionBd = new DataBase();
		}
		
		public function insertarUsuario($usuario){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("INSERT INTO `Usuario`(`usuario`, `contrasena`) VALUES (?,?)")){
	        
		        $stmt->bind_param('ss',$usuario->getUsuario(),$usuario->getContrasena());  
		        $stmt->execute();   
		        $stmt->store_result();		        
	        	echo "*Usuario registrado con éxito";//mensaje para mostrar al usuario
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
	}
?>