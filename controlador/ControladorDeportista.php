<?php
	require_once ('../dao/DaoDeportista.php');
	require_once ('../logico/Deportista.php');
	
	class ControladorDeportista{

		private $daoDeportista;
		
		public function __construct(){
			$this->daoDeportista = new DaoDeportista();		
		}
		
		public function insertarDeportista($nombre, $apellidos, $fechaNacimiento, $sexo, $identificacion, 
			                               $tipoIdentificacion, $ciudad, $clubAfiliado, $nacionalidad, $estado, $edad, $categoria){
			
			$deportista = new Deportista($nombre, $apellidos, $fechaNacimiento, $sexo, $identificacion, 
				                         $tipoIdentificacion, $ciudad, $clubAfiliado, $nacionalidad, $estado, $edad, $categoria);
				                         			
			$this->daoDeportista->insertarDeportista($deportista);
			$this->daoDeportista->actualizarEdad();
		}
		
		public function listarDeportistasClub($club){
			$this->daoDeportista->getDeportistasClub($club);
		}
	}
?>