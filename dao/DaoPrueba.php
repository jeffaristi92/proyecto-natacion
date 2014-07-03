<?php

	require_once ('../dataBase/DataBase.php');
	//require_once ('../logico/Prueba.php');
	
	class DaoPrueba {
		private $conexionBd;

		public function __construct(){		
			$this->conexionBd = new DataBase();
		}
		
		public function listarPruebasDeportista($deportista,$sexo){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("select pruebaevento.codigoprueba, prueba.distanciaprueba, jornadaprueba,ordenprueba, prueba.categoria FROM pruebaevento, prueba WHERE sexoprueba = ? and pruebaevento.codigoprueba = prueba.codigoprueba and categoria IN(SELECT categoriatorneo.nombrecategoria FROM categoriatorneo, categoria WHERE (select edad from deportista where identificadordeportista = ?) between edadiniciocategoria AND edadfincategoria and categoriatorneo.nombrecategoria = categoria.nombrecategoria) and prueba.tipoprueba = 'Individual' order by ordenprueba")){
	        
		        $stmt->bind_param('si',$sexo,$deportista);  
		        $stmt->execute();   
		        $stmt->store_result();
				$stmt->bind_result($codigo,$distancia,$jornada,$orden, $categoria);
				$items = array();
				       		
	       		while ($stmt->fetch()) {
				echo '<option value="'.$codigo.'">'.$orden.' J'.$jornada.' '.$distancia.' '.$categoria.'</option>';	
    			}			        
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
		public function listarPruebasRelevo(){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("SELECT codigotorneo, prueba.codigoprueba, jornadaprueba, diaprueba, ordenprueba, distanciaprueba, sexoprueba, categoria, pruebaevento.tipoprueba  FROM  pruebaevento, prueba WHERE pruebaevento.codigoPrueba = prueba.codigoprueba and prueba.tipoprueba = 'Relevo' order by ordenprueba")){
	        
		        //$stmt->bind_param('si',$sexo,$deportista);  
		        $stmt->execute();   
		        $stmt->store_result();
				$stmt->bind_result($codigotorneo,$codigoprueba,$jornadaprueba,$diaprueba,$ordenprueba,$distanciaprueba,$sexoprueba,$categoria,$tipoprueba);
				$items = array();
				       		
	       		while ($stmt->fetch()) {
				echo '<option value="'.$codigoprueba.'">'.$ordenprueba.' J'.$jornadaprueba.' '.$distanciaprueba.' '.$sexoprueba.' '.$categoria.' '.$tipoprueba.'</option>';	
    			}			        
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
		public function listarPruebasInscritasDeportista($deportista){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("SELECT prueba.codigoprueba, prueba.distanciaprueba, jornadaprueba,ordenprueba FROM   prueba, pruebaevento WHERE  pruebaevento.codigoprueba = prueba.codigoprueba and pruebaevento.codigoprueba in (select codigoprueba from inscripcion where codigodeportista = ?)")){
	        
		        $stmt->bind_param('i',$deportista);  
		        $stmt->execute();   
		        $stmt->store_result();
				$stmt->bind_result($codigoprueba,$distanciaprueba,$jornadaprueba,$ordenprueba);
				$items = array();
				       		
	       		while ($stmt->fetch()) {
				echo '<option value="'.$codigoprueba.'">'.$ordenprueba.' J'.$jornadaprueba.' '.$distanciaprueba.'</option>';	
    			}			        
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
		public function listarPruebasRelevoInscritasClub($club){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("SELECT codigotorneo, prueba.codigoprueba, jornadaprueba, diaprueba, ordenprueba, distanciaprueba, sexoprueba, categoria, pruebaevento.tipoprueba FROM  pruebaevento, prueba WHERE pruebaevento.codigoprueba = prueba.codigoprueba and prueba.tipoprueba = 'Relevo' and pruebaevento.codigoprueba in (select codigoprueba from inscripcionrelevos where codigoclub = ?) order by ordenprueba")){
	        
		        $stmt->bind_param('s',$club);  
		        $stmt->execute();   
		        $stmt->store_result();
				$stmt->bind_result($codigotorneo,$codigoprueba,$jornadaprueba,$diaprueba,$ordenprueba,$distanciaprueba,$sexoprueba,$categoria,$tipoprueba);
				$items = array();
				       		
	       		while ($stmt->fetch()) {
				echo '<option value="'.$codigoprueba.'">'.$ordenprueba.' J'.$jornadaprueba.' '.$distanciaprueba.' '.$sexoprueba.' '.$categoria.' '.$tipoprueba.'</option>';	
    			}			        
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
	}
?>