<?php
	class Usuario {
		private $usuario;
		private $contrasena;
		
		public function __construct($usuario, $contrasena){
 	 		$this->usuario = $usuario;
 	 		$this->contrasena = $contrasena;
		}
		
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}
		
		public function getContrasena(){
			return $this->contrasena;
		}
	}
?>