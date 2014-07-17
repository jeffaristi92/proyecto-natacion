<?php

	require_once ('../dataBase/DataBase.php');
	require_once ('../logico/Inscripcion.php');
	require_once ('../logico/InscripcionRelevo.php');
	
	class DaoInscripcion {
		private $conexionBd;

		public function __construct(){		
			$this->conexionBd = new DataBase();
		}
		
		public function registrarInscripcionIndividual($inscripcion){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("INSERT INTO `inscripcion`(`codigodeportista`, `codigotorneo`, `codigoprueba`, `tiempoinscripcion`) VALUES (?,?,?,?)")){
	        
		        $stmt->bind_param('iiis',$inscripcion->getCodigoDeportista(),$inscripcion->getCodigoTorneo(),$inscripcion->getCodigoPrueba(),$inscripcion->getTiempoInscripcion());  
		        $stmt->execute();   
		        $stmt->store_result();		        
	        	$resultado = mysqli_stmt_affected_rows($stmt);	        
	        	if($resultado != -1){
					echo '*Inscripcion exitosa<br>';
				}else{
					$codigo = mysqli_stmt_errno($stmt);
					if($codigo ==1062){
						echo '*El deportista ya esa inscrito a la prueba<br>';
					}else{
						echo '*El deportista no se puede inscribir a mas pruebas<br>';
					}
					echo '*Inscripcion no se pudo hacer<br>';
				}
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
		public function eliminarInscripcionIndividual($inscripcion){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("DELETE FROM `inscripcion` WHERE `codigodeportista` = ? and `codigoprueba` = ?")){
	        
		        $stmt->bind_param('ii',$inscripcion->getCodigoDeportista(),$inscripcion->getCodigoPrueba());  
		        $stmt->execute();   
		        $stmt->store_result();		        
	        	$resultado = mysqli_stmt_affected_rows($stmt);	        
	        	if($resultado != -1){
					echo '*Inscripcion borrada exitosamente<br>';
				}else{
					echo '*Inscripcion no se pudo borrar<br>';
				}
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
		public function registrarInscripcionRelevo($inscripcionR){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("INSERT INTO `inscripcionrelevos`(`codigotorneo`, `codigoprueba`, `codigoclub`) VALUES (?,?,?)")){
		        $stmt->bind_param('iis',$inscripcionR->getCodigoTorneo(),$inscripcionR->getCodigoPrueba(),$inscripcionR->getCodigoClub());  
		        $stmt->execute();   
		        $stmt->store_result();	
				$resultado = mysqli_stmt_affected_rows($stmt);	        
	        	if($resultado != -1){
					echo '*Inscripcion exitosa<br>';
				}else{
					echo '*El club ya esa inscrito a la prueba<br>';
					echo '*Inscripcion no se pudo hacer<br>';
				}
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
		public function eliminarInscripcionRelevo($inscripcionR){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("DELETE FROM `inscripcionrelevos` WHERE `codigotorneo` = ? and `codigoprueba` = ? and `codigoclub` = ?")){
	        
		        $stmt->bind_param('iis',$inscripcionR->getCodigoTorneo(),$inscripcionR->getCodigoPrueba(),$inscripcionR->getCodigoClub());  
		        $stmt->execute();   
		        $stmt->store_result();	
				$resultado = mysqli_stmt_affected_rows($stmt);	        
	        	if($resultado != -1){
					echo '*Inscripcion borrada exitosamente<br>';
				}else{
					echo '*Inscripcion no se pudo borrar<br>';
				}
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
		public function listarPruebasInscritasDeportista($deportista){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("SELECT prueba.distanciaprueba, jornadaprueba,ordenprueba, iscripciondeportista.tiempoinscripcion FROM prueba, pruebaevento, (select codigoprueba, tiempoinscripcion from inscripcion where codigodeportista = ?) as iscripciondeportista WHERE pruebaevento.codigoprueba = prueba.codigoprueba and pruebaevento.codigoprueba = iscripciondeportista.codigoprueba order by ordenprueba")){
	        
		        $stmt->bind_param('i',$deportista);  
		        $stmt->execute();   
		        $stmt->store_result();
				$stmt->bind_result($distanciaprueba,$jornada,$orden,$tiempoinscripcion);
				$items = array();
				while($stmt->fetch()){
					echo '('.$orden.') '.$distanciaprueba.' J'.$jornada.' '.$tiempoinscripcion.' - ';
				}
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
		public function listarPruebasRelevoInscritasClub($club){			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("SELECT distanciaprueba,sexoprueba,categoria FROM prueba, (select* from inscripcionrelevos where codigoclub = ?) as pruebasclub WHERE prueba.codigoprueba = pruebasclub.codigoprueba ")){
	        
		        $stmt->bind_param('s',$club);  
		        $stmt->execute();   
		        $stmt->store_result();
				$stmt->bind_result($distanciaprueba,$sexoprueba,$categoria);
				$items = array();
				while($stmt->fetch()){
					echo '<tr>';
					echo '<td>'.$distanciaprueba.' '.$sexoprueba.'</td>';
					echo '<td>'.$categoria.'</td>';
					echo '</tr>';
				}
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
		public function getDeportistasInscritosClub($club){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("SELECT distinct codigodeportista, nombresdeportista, apellidosdeportista, categoria
FROM inscripcion, (select* from deportista where clubafiliaciondeportista = ?) as deportistaclub
WHERE inscripcion.`codigodeportista` = deportistaclub.identificadordeportista order by nombresdeportista")){
	        
		        $stmt->bind_param('s',$club);  
		        $stmt->execute();   
		        $stmt->store_result();	
				$stmt->bind_result($codigodeportista,$nombresdeportista,$apellidosdeportista,$categoria);
				$items = array();
				$indice = 1;
				while($stmt->fetch()){
					echo '<tr>';
					echo '<td>'.$indice.'</td>';
					echo utf8_encode('<td>'.$nombresdeportista.' '.$apellidosdeportista.'</td>');
					echo '<td>'.$categoria.'</td>';
					echo '<td>';
					$this->listarPruebasInscritasDeportista($codigodeportista);
					echo '</td>';
					echo '</tr>';
					$indice++;
				}
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
		public function getNombreClub($club){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("SELECT `nombreclub`FROM `club` WHERE `codigoclub` = ?")){
	        
		        $stmt->bind_param('s',$club);  
		        $stmt->execute();   
		        $stmt->store_result();	
				$stmt->bind_result($nombre);
				$items = array();
				$stmt->fetch();
				return $nombre;	
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
	}
?>
