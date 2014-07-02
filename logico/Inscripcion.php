<?php

	class Inscripcion {
    
    private $codigoDeportista, $codigoTorneo, $codigoPrueba, $tiempoInscripcion;
	
	public function __construct($codigoDeportista, $codigoTorneo, $codigoPrueba, $tiempoInscripcion){
		$this->codigoDeportista = $codigoDeportista;
		$this->codigoTorneo = $codigoTorneo;
		$this->codigoPrueba = $codigoPrueba;
		$this->tiempoInscripcion = $tiempoInscripcion;
	}

    public function getCodigoDeportista() {
        return $this->codigoDeportista;
    }

    public function setCodigoDeportista($codigoDeportista) {
        $this->codigoDeportista = $codigoDeportista;
    }

    public function getCodigoTorneo() {
        return $this->codigoTorneo;
    }

    public function setCodigoTorneo($codigoTorneo) {
        $this->codigoTorneo = $codigoTorneo;
    }

    public function getCodigoPrueba() {
        return $this->codigoPrueba;
    }

    public function setCodigoPrueba($codigoPrueba) {
        $this->codigoPrueba = $codigoPrueba;
    }

    public function getTiempoInscripcion() {
        return $this->tiempoInscripcion;
    }

    public function setTiempoInscripcion($tiempoInscripcion) {
        $this->tiempoInscripcion = $tiempoInscripcion;
    }
}
?>