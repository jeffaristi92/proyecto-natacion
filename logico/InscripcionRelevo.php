<?php

    class InscripcionRelevo {
    
    private $codigoTorneo, $codigoPrueba, $codigoClub, $deportistas, $serie, $carril, $tiempoResultado, $observacion, $fechaPrueba;
	
	public function __construct($codigoTorneo, $codigoPrueba, $codigoClub, $deportistas, $serie, $carril, $tiempoResultado, $observacion, $fechaPrueba){
		$this->codigoTorneo = $codigoTorneo;
		$this->codigoPrueba = $codigoPrueba;
		$this->codigoClub = $codigoClub;
		$this->deportistas = $deportistas;
		$this->serie = $serie;
		$this->carril = $carril;
		$this->tiempoResultado = $tiempoResultado;
		$this->observacion = $observacion;
		$this->fechaPrueba = $fechaPrueba;
	}

    public function setCodigoTorneo($codigoTorneo) {
        $this->codigoTorneo = $codigoTorneo;
    }

    public function setCodigoPrueba($codigoPrueba) {
        $this->codigoPrueba = $codigoPrueba;
    }

    public function setCodigoClub($codigoClub) {
        $this->codigoClub = $codigoClub;
    }

    public function setDeportistas($deportistas) {
        $this->deportistas = $deportistas;
    }

    public function setSerie($serie) {
        $this->serie = $serie;
    }

    public function setCarril($carril) {
        $this->carril = $carril;
    }

    public function setTiempoResultado($tiempoResultado) {
        $this->tiempoResultado = $tiempoResultado;
    }

    public function setObservacion($observacion) {
        $this->observacion = $observacion;
    }

    public function setFechaPrueba($fechaPrueba) {
        $this->fechaPrueba = $fechaPrueba;
    }

    public function getCodigoTorneo() {
        return $this->codigoTorneo;
    }

    public function getCodigoPrueba() {
        return $this->codigoPrueba;
    }

    public function getCodigoClub() {
        return $this->codigoClub;
    }

    public function getDeportistas() {
        return $this->deportistas;
    }

    public function getSerie() {
        return $this->serie;
    }

    public function getCarril() {
        return $this->carril;
    }

    public function getTiempoResultado() {
        return $this->tiempoResultado;
    }

    public function getObservacion() {
        return $this->observacion;
    }

    public function getFechaPrueba() {
        return $this->fechaPrueba;
	}
}
?>