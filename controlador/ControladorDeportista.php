<?php
	require_once ('../dao/DaoDeportista.php');
	require_once ('../logico/Deportista.php');
	
	class ControladorDeportista{

		private $daoDeportista;
		
		public function __construct(){
			$this->daoDeportista = new DaoDeportista();		
		}
		
		public function insertarDeportista($indentificador, $nombre, $apellidos, $fechaNacimiento, $sexo, $identificacion, 
			                               $tipoIdentificacion, $ciudad, $clubAfiliado, $nacionalidad, $estado, $edad, $categoria){
			
			$deportista = new Deportista($indentificador, $nombre, $apellidos, $fechaNacimiento, $sexo, $identificacion, 
				                         $tipoIdentificacion, $ciudad, $clubAfiliado, $nacionalidad, $estado, $edad, $categoria);
				                         			
			$this->daoDeportista->insertarDeportista($deportista);
		}
	}
?>