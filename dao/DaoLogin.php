<?php

require_once ('../dataBase/DataBase.php');

	class DaoLogin{

		private $conexionBd;

		public function __construct(){		

			$this->conexionBd = new DataBase();
		}

		public function consultarDatos($usuario, $password){			
			
			$conexion = $this->conexionBd->conectar();
			
			if ($stmt = $conexion->prepare("SELECT usuario, contrasena FROM usuarioclub WHERE usuario = ? LIMIT 1")){
	        
		        $stmt->bind_param('s', $usuario);  
		        $stmt->execute();   
		        $stmt->store_result();
			
	        	$stmt->bind_result($u_user, $u_password);
	       		$stmt->fetch();			

	       		if ($stmt->num_rows == 1){
           
	                if ($u_password == $password){
	                    
	                    session_start();
	                    $_SESSION['acceso'] = 1;
						$_SESSION['torneo'] = 5;
						
						if($u_user == 'admin'){
							$_SESSION['usuario'] = '';
							$_SESSION['admin'] = 1;
						}else{
							$_SESSION['admin'] = 0;
							$_SESSION['usuario'] = $usuario;	
						}
						
	                    return true;

	                } else {
	                    return false;
	                }

	            }else {            
	            	return false;//no hay ningún usuario con ese nick
	        	}	
	        	
	        }//Fin consulta

			$this->conexionBd->desconectar($conexion);			
		}

	}//Fin clase DaoLogin
?>