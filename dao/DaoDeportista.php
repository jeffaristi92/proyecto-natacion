<?php

	require_once ('../DataBase/DataBase.php');
	require_once ('../Logico/Deportista.php');
	
	class DaoDeportista {
		private $conexionBd;

		public function __construct(){		
			$this->conexionBd = new DataBase();
		}
		
		public function insertarDeportista($deportista){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("INSERT INTO deportista (nombresdeportista,  apellidosdeportista, fechanacimientodeportista, sexodeportista,  identificaciondeportista,  tipoidentificaciondeportista,  ciudaddeportista,  clubafiliaciondeportista,  nacionalidaddeportista,  estadodeportista,  edad, categoria) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)")){
	        
		        $stmt->bind_param('ssssssssssis',$deportista->getNombre(),$deportista->getApellidos(),$deportista->getFechaNacimiento(),$deportista->getSexo(),$deportista->getIdentificacion(),$deportista->getTipoIdentificacion(),$deportista->getCiudad(),$deportista->getClubAfiliado(),$deportista->getNacionalidad(),$deportista->getEstado(),$deportista->getEdad(),$deportista->getCategoria());  
		        $stmt->execute();   
		        $stmt->store_result();		        
	        	echo "*Deportista registrado con éxito";//mensaje para mostrar al usuario
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
	}
?>