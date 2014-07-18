<?php

	require_once ('../dataBase/DataBase.php');
	require_once ('../logico/Deportista.php');
	
	class DaoDeportista {

		private $conexionBd;

		public function __construct(){		
			$this->conexionBd = new DataBase();
		}
		
		public function actualizarDeportista($deportista){			
			
			$conexion = $this->conexionBd->conectar();
			if ($stmt = $conexion->prepare("UPDATE `deportista` SET `nombresdeportista` = ?,`apellidosdeportista` = ?,`fechanacimientodeportista` = ? ,`sexodeportista` = ?,`identificaciondeportista` = ?,`tipoidentificaciondeportista` = ?,`ciudaddeportista` = ?,`nacionalidaddeportista` = ? WHERE `identificadordeportista`= ?")){
		        $stmt->bind_param('ssssssssi',$deportista->getNombre(),$deportista->getApellidos(),$deportista->getFechaNacimiento(),$deportista->getSexo(),$deportista->getIdentificacion(),$deportista->getTipoIdentificacion(),$deportista->getCiudad(),$deportista->getNacionalidad(),$deportista->getId());  
		        $stmt->execute();   
		        $stmt->store_result();
				$resultado = mysqli_stmt_affected_rows($stmt);	        
	        	if($resultado != -1){
					echo '*Deportista actualizado exitosamente<br>';
					echo ''.$deportista->getNombre().' '.$deportista->getApellidos().' '. $deportista->getFechaNacimiento().' '. $deportista->getSexo().' '. $deportista->getIdentificacion() .' '.$deportista->getTipoIdentificacion() .' '.$deportista->getCiudad().' '. $deportista->getClubAfiliado().' '. $deportista->getNacionalidad().' '. $deportista->getEstado().'<br>';
				}else{
					echo '*No se pudo actualizado el deportista<br>';
				}
						        
		        //mensaje para mostrar al usuario
	        	//echo "*Deportista registrado con éxito";
	        	// ";
	        	
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
		public function insertarDeportista($deportista){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("INSERT INTO `deportista` (`nombresdeportista`,  `apellidosdeportista`, `fechanacimientodeportista`, `sexodeportista`,  `identificaciondeportista`, `tipoidentificaciondeportista`, `ciudaddeportista`, `clubafiliaciondeportista`, `nacionalidaddeportista`, `estadodeportista`, `edad`, `categoria`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)")){
	        
		        $stmt->bind_param('ssssssssssis',$deportista->getNombre(),$deportista->getApellidos(),$deportista->getFechaNacimiento(),$deportista->getSexo(),$deportista->getIdentificacion(),$deportista->getTipoIdentificacion(),$deportista->getCiudad(),$deportista->getClubAfiliado(),$deportista->getNacionalidad(),$deportista->getEstado(),$deportista->getEdad(),$deportista->getCategoria());  
		        $stmt->execute();   
		        $stmt->store_result();
				$resultado = mysqli_stmt_affected_rows($stmt);	        
	        	if($resultado != -1){
					echo '*Deportista registrado exitosamente<br>';
					echo ''.$deportista->getNombre().' '.$deportista->getApellidos().' '. $deportista->getFechaNacimiento().' '. $deportista->getSexo().' '. $deportista->getIdentificacion() .' '.$deportista->getTipoIdentificacion() .' '.$deportista->getCiudad().' '. $deportista->getClubAfiliado().' '. $deportista->getNacionalidad().' '. $deportista->getEstado().'<br>';
				}else{
					echo '*El deportista con Nro Identificacion: '.$deportista->getIdentificacion().' ya esxiste<br>';
					echo '*No se pudo registrar el deportista<br>';
				}
						        
		        //mensaje para mostrar al usuario
	        	//echo "*Deportista registrado con éxito";
	        	// ";
	        	
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
		

		public function actualizarEdad() {

        $conexion = $this->conexionBd->conectar();

			$stmt = $conexion->prepare("update deportista set edad = (select extract(year from current_date)) - (select extract(year from fechanacimientodeportista))");
			$stmt->execute();   
            $stmt = $conexion->prepare("update deportista set categoria =(select nombrecategoria from (select* from categoria where nombrecategoria <> 'abierta' and nombrecategoria <> 'D' and nombrecategoria <> 'E' and nombrecategoria <> 'F' and nombrecategoria <> 'Infantil' and nombrecategoria <> 'Junior' and nombrecategoria <> 'Mayor' and nombrecategoria <> 'Senior') as categoriasdeportista where deportista.edad between edadiniciocategoria and edadfincategoria)");
            $stmt->execute();   
			$this->conexionBd->desconectar($conexion);			
		}
		
		public function getDeportista($id){
			$conexion = $this->conexionBd->conectar();	
			if ($stmt = $conexion->prepare("SELECT `identificadordeportista`, `nombresdeportista`, `apellidosdeportista`, `fechanacimientodeportista`, `sexodeportista`, `identificaciondeportista`, `tipoidentificaciondeportista`, `ciudaddeportista`, `nacionalidaddeportista` FROM `deportista` WHERE `identificadordeportista` = ?")){
				$stmt->bind_param('i',$id);        		
				$stmt->execute();   
		        $stmt->store_result();			
	        	$stmt->bind_result($identificador, $nombre,$apellido,$fecha,$sexo,$identificacion,$tipoidentificacion,$ciudad,$nacionalidad);
	       		$items = array();
				$stmt->fetch();
				$deportista = new Deportista($nombre,$apellido,$fecha,$sexo,$identificacion,$tipoidentificacion,$ciudad,'',$nacionalidad,'',0,'');
				$deportista->setId($identificador);
				return $deportista;
	        }

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
				echo utf8_encode('<option value="'.$identificador."*".$sexo."*".$fecha.'">'.$nombre.'  '.$apellido.'</option>');
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
