<?php

	require_once ('../dataBase/DataBase.php');
	require_once ('../logico/Club.php');
	
	class DaoClub {
		private $conexionBd;

		public function __construct(){		
			$this->conexionBd = new DataBase();
		}
		
		public function listarClubes(){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("SELECT codigoclub,upper(nombreclub) FROM club order by nombreclub")){ 
				$resultado = $stmt->execute(); 
		        $stmt->store_result();
				$stmt->bind_result($codigoclub,$nombreclub);
				$items = array();
				       		
	       		while ($stmt->fetch()) {
				echo '<option value="'.$codigoclub.'">'.$nombreclub.'</option>';	
    			}
	        }else{
				echo "No funciono";//mensaje para mostrar al usuario
			}//Fin consulta

			$this->conexionBd->desconectar($conexion);
		}
		
	}
?>