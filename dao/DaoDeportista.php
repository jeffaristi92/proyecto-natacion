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

		public function actualizarEdad() {

        $conexion = $this->conexionBd->conectar();

			$stmt = $conexion->prepare("update deportista set edad = (select extract(year from current_date) - (select extract(year from fechanacimientodeportista)))::int");
			$stmt->execute();   
            $stmt = $conexion->prepare("select* into categoriasDeportista from categoria where nombrecategoria <> 'abierta' and nombrecategoria <> 'D' and nombrecategoria <> 'E' and nombrecategoria <>'F' and nombrecategoria <>'Infantil' and nombrecategoria <>'Junior' and nombrecategoria <>'Mayor'");
            $stmt->execute();   
            $stmt = $conexion->prepare("update deportista set categoria =(select nombrecategoria 
            	from categoriasDeportista where deportista.edad between edadiniciocategoria and edadfincategoria)");
            $stmt->execute();   
            $stmt = $conexion->prepare("drop table categoriasDeportista");
            $stmt->execute();   

			$this->conexionBd->desconectar($conexion);			
		}
		
		public function getDeportistasClub($club){
			$conexion = $this->conexionBd->conectar();	
			if ($stmt = $conexion->prepare("SELECT fechanacimientodeportista, sexodeportista, identificadordeportista, nombresdeportista, apellidosdeportista FROM deportista WHERE deportista.clubafiliaciondeportista = ? order by nombresdeportista;")){
				$stmt->bind_param('s',$club);        		
				$stmt->execute();   
		        $stmt->store_result();			
	        	$stmt->bind_result($fecha,$sexo,$identificador,$nombre,$apellido);
	       		$items = array();
				       		
	       		while ($stmt->fetch()) {
				echo '<option value="'.$identificador."*".$sexo."*".$fecha.'">'.$nombre.'  '.$apellido.'</option>';	
    			}	        	
	        }

			$this->conexionBd->desconectar($conexion);
		}
		
		public function getTiempoInscripcion($deportista,$prueba){
			$conexion = $this->conexionBd->conectar();	
			if ($stmt = $conexion->prepare("select min(tiemporesultadohd) from (select distanciaprueba from prueba where codigoprueba = ?) as prueba, (select distanciaprueba, tiemporesultadohd from (select* from historialdeportivo where codigodeportista = ?) as hddeportista, (select* from prueba where codigoprueba in (select codigopruebahd from historialdeportivo where codigodeportista = ?)) as pruebashddeportista where hddeportista.codigopruebahd = pruebashddeportista.codigoprueba) as listapruebas where prueba.distanciaprueba = listapruebas.distanciaprueba")){
				$stmt->bind_param('iii',$prueba,$deportista,$deportista);        		
				$stmt->execute();   
		        $stmt->store_result();			
	        	$stmt->bind_result($tiempo);
	       		$items = array();
				       		
	       		$stmt->fetch();
				
				if($tiempo == null){
					return '99:99:99.99';
				}else{
					return $tiempo;	
				}
	        }

			$this->conexionBd->desconectar($conexion);
		}		
	}
?>