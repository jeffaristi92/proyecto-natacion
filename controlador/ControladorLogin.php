<?php

require_once ('../dao/DaoLogin.php');
require_once ('../dao/DaoDeportista.php');

	class ControladorLogin{

		private $usuario;
		private $contrasenia;
		private $daoLogin;
		private $daoDeportista;
		
		public function __construct($usuario, $contrasenia){
			
			$this->usuario = $usuario;
			$this->contrasenia = $contrasenia;
			$this->daoLogin = new DaoLogin();
			$this->daoDeportista = new DaoDeportista();	
		}

		public function verificarLogin(){
			
			$resultado = $this->daoLogin->consultarDatos($this->usuario,$this->contrasenia);

			if($resultado){
				
				if($_SESSION['acceso'] == 1){//entramos
					$this->daoDeportista->actualizarEdad();
					return "ok";
				}

			}else{
				echo "<h5 class='mensaje'>Por favor revise su usuario y contraseña</h5>";
			}
		}

	}//Fin clase ControladorLogin
?>
