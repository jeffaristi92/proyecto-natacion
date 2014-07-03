<?php

	require_once ('../dataBase/DataBase.php');
	require_once ('../logico/Torneo.php');
	
	class DaoTorneo {
		private $conexionBd;

		public function __construct(){		
			$this->conexionBd = new DataBase();
		}
		
		public function getInformacionTorneo($torneo){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("SELECT `nombretorneo`, `fechainiciotorneo`, `ciudadtorneo`, `nombreorganizadortorneo` FROM `torneo` WHERE `codigotorneo` = ?")){
	        
		        $stmt->bind_param('s',$torneo);  
		        $stmt->execute();   
		        $stmt->store_result();
				$stmt->bind_result($nombre,$fecha,$ciudad,$organizador);
				$items = array();
				$stmt->fetch();

				echo '<tr><td>'.$nombre.'</td></tr>';
				echo '<tr><td>'.$organizador.'</td></tr>';
				echo '<tr><td>'.$fecha.', '.$ciudad.'</td></tr>';
    			
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}
		
	}
?>