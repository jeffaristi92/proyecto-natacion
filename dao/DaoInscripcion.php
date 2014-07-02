<?php

	require_once ('../DataBase/DataBase.php');
	require_once ('../Logico/Inscripcion.php');
	require_once ('../Logico/InscripcionRelevo.php');
	
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
	}
?>