<?php
	require_once ('../Dao/DaoUsuario.php');
	require_once ('../Logico/Usuario.php');
	
	class ControladorUsuario{
		private $daoUsuario;
		
		public function __construct(){
			$this->daoUsuario = new DaoUsuario();		
		}
		
		public function insertarUsuario($usuario,$contrasena){
			$Usuario = new Usuario($usuario,$contrasena);			
			$this->daoUsuario->insertarUsuario($Usuario);
		}
	}
?>