<?php

	class HistorialDeportivo {

    private $codigoHistorial, $codigoDeportista, $codigoTorneo, $codigoPrueba, $categoria, $tiempoResultado,	$representandoA, $observaciones, $formaCronometraje, $fechaPrueba;
    public function getCodigoHistorial() {
        return codigoHistorial;
    }

    public function setCodigoHistorial($codigoHistorial) {
        $this->codigoHistorial = $codigoHistorial;
    }
    

    public function getFechaPrueba() {
        return $this->fechaPrueba;
    }

    public function setFechaPrueba($fechaPrueba) {
        $this->fechaPrueba = $fechaPrueba;
    }

    public function setCodigoDeportista($codigoDeportista) {
        $this->codigoDeportista = $codigoDeportista;
    }

    public function setCodigoTorneo($codigoTorneo) {
        $this->codigoTorneo = $codigoTorneo;
    }

    public function setCodigoPrueba($codigoPrueba) {
        $this->codigoPrueba = $codigoPrueba;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setTiempoResultado($tiempoResultado) {
        $this->tiempoResultado = $tiempoResultado;
    }

    public function setRepresentandoA($representandoA) {
        $this->representandoA = $representandoA;
    }

    public function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    public function setFormaCronometraje($formaCronometraje) {
        $this->formaCronometraje = $formaCronometraje;
    }

    public function getCodigoDeportista() {
        return $this->codigoDeportista;
    }

    public function getCodigoTorneo() {
        return $this->codigoTorneo;
    }

    public function getCodigoPrueba() {
        return $this->codigoPrueba;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getTiempoResultado() {
        return $this->tiempoResultado;
    }

    public function getRepresentandoA() {
        return $this->representandoA;
    }

    public function getObservaciones() {
        return $this->observaciones;
    }

    public function getFormaCronometraje() {
        return $this->formaCronometraje;
    }
}
?>