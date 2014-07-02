<?php
	require_once ('../dao/DaoPrueba.php');
	
	class ControladorPrueba{

		private $daoPrueba;
		
		public function __construct(){
			$this->daoPrueba = new DaoPrueba();		
		}
		
		public function listarPruebasRelevo(){
			$this->daoPrueba->listarPruebasRelevo();
		}
		
		public function listarPruebasRelevoInscritas($club){
			$this->daoPrueba->listarPruebasRelevoInscritasClub($club);
		}
	}
?>