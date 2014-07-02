<?php

	require_once ('../dataBase/DataBase.php');
	require_once ('../logico/Deportista.php');
	
	class DaoDeportista {

		private $conexionBd;

		public function __construct(){		
			$this->conexionBd = new DataBase();
		}
		
		public function insertarDeportista($deportista){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("INSERT INTO `deportista` (`nombresdeportista`,  `apellidosdeportista`, `fechanacimientodeportista`, `sexodeportista`,  `identificaciondeportista`, `tipoidentificaciondeportista`, `ciudaddeportista`, `clubafiliaciondeportista`, `nacionalidaddeportista`, `estadodeportista`, `edad`, `categoria`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)")){
	        
		        $stmt->bind_param('ssssssssssis',$deportista->getNombre(),$deportista->getApellidos(),$deportista->getFechaNacimiento(),$deportista->getSexo(),$deportista->getIdentificacion(),$deportista->getTipoIdentificacion(),$deportista->getCiudad(),$deportista->getClubAfiliado(),$deportista->getNacionalidad(),$deportista->getEstado(),$deportista->getEdad(),$deportista->getCategoria());  
		        $stmt->execute();   
		        $stmt->store_result();		        
		        //mensaje para mostrar al usuario
	        	//echo "*Deportista registrado con éxito";
	        	// ";
	        	
	        }//Fin consulta

	        echo ''.$deportista->getNombre().' '.$deportista->getApellidos().' '. $deportista->getFechaNacimiento().' '. $deportista->getSexo().' '. $deportista->getIdentificacion() .' '.$deportista->getTipoIdentificacion() .' '.$deportista->getCiudad().' '. $deportista->getClubAfiliado().' '. $deportista->getNacionalidad().' '. $deportista->getEstado().' '. $deportista->getEdad().' '. $deportista->getCategoria();

			$this->conexionBd->desconectar($conexion);			
		}		
	}
?>