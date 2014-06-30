<?php

	class Club {

		private $codigoLiga, $codigoClub, $nombreClub, $telefonoClub, $ciudadClub, $emailClub, $paginaWebClub, $estado;
	
		public function __construct(){
		}
		
		public function getCodigoLiga() {
			return $this->codigoLiga;
		}
	
		public function setCodigoLiga($codigoLiga) {
			$this->codigoLiga = $codigoLiga;
		}
	
		public function getCodigoClub() {
			return $this->codigoClub;
		}
	
		public function setCodigoClub($codigoClub) {
			$this->codigoClub = $codigoClub;
		}
	
		public function getNombreClub() {
			return $this->nombreClub;
		}
	
		public function setNombreClub($nombreClub) {
			$this->nombreClub = $nombreClub;
		}
	
		public function getTelefonoClub() {
			return $this->telefonoClub;
		}
	
		public function setTelefonoClub($telefonoClub) {
			$this->telefonoClub = $telefonoClub;
		}
	
		public function getCiudadClub() {
			return $this->ciudadClub;
		}
	
		public function setCiudadClub($ciudadClub) {
			$this->ciudadClub = $ciudadClub;
		}
	
		public function getEmailClub() {
			return $this->emailClub;
		}
	
		public function setEmailClub($emailClub) {
			$this->emailClub = $emailClub;
		}
	
		public function getPaginaWebClub() {
			return $this->paginaWebClub;
		}
	
		public function setPaginaWebClub($paginaWebClub) {
			$this->paginaWebClub = $paginaWebClub;
		}
	
		public function getEstado() {
			return $this->estado;
		}
	
		public function setEstado($estado) {
			$this->estado = $estado;
		}
}
?>