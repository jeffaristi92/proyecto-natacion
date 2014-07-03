<?php

	require_once ('../dataBase/DataBase.php');
	require_once ('../logico/Club.php');
	
	class DaoClub {
		private $conexionBd;

		public function __construct(){		
			$this->conexionBd = new DataBase();
		}
		
		public function consultarClub($p1,$p2,$p3,$p4){			
			
			$conexion = $this->conexionBd->conectar();

			if ($stmt = $conexion->prepare("INSERT INTO inscripcion VALUES (?,?,?,?)")){ 
		        $stmt->bind_param('iiis',$p1,$p2,$p3,$p4);
				
				$resultado = $stmt->execute(); 
				echo 'Mensaje '.$resultado;  
		        $stmt->store_result();
	        	echo "funciono";//mensaje para mostrar al usuario
	        }else{
				echo "No funciono";//mensaje para mostrar al usuario
			}//Fin consulta

			$this->conexionBd->desconectar($conexion);
		}
		
	}
?>