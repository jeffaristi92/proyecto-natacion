<?php

	class Resultado {

	private $codigoTorneo, $codigoPrueba, $categoria, $sexo, $codigoDeportista, $serie, $carril, $tiempoInscripcion, $tiempoResultado, $observaciones, $formaCronometraje, $puntaje, $fechaPrueba;

    public function getPuntaje() {
        return $this->puntaje;
    }

    public function setPuntaje($puntaje) {
        $this->puntaje = $puntaje;
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

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setCodigoDeportista($codigoDeportista) {
        $this->codigoDeportista = $codigoDeportista;
    }

    public function setSerie($serie) {
        $this->serie = $serie;
    }

    public function setCarril($carril) {
        $this->carril = $carril;
    }

    public function setTiempoInscripcion($tiempoInscripcion) {
        $this->tiempoInscripcion = $tiempoInscripcion;
    }

    public function setTiempoResultado($tiempoResultado) {
        $this->tiempoResultado = $tiempoResultado;
    }

    public function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    public function setFormaCronometraje($formaCronometraje) {
        $this->formaCronometraje = $formaCronometraje;
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

    public function getCategoria() {
        return $this->categoria;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getCodigoDeportista() {
        return $this->codigoDeportista;
    }

    public function getSerie() {
        return $this->serie;
    }

    public function getCarril() {
        return $this->carril;
    }

    public function getTiempoInscripcion() {
        return $this->tiempoInscripcion;
    }

    public function getTiempoResultado() {
        return $this->tiempoResultado;
    }

    public function getObservaciones() {
        return $this->observaciones;
    }

    public function getFormaCronometraje() {
        return $this->formaCronometraje;
    }

    public function getFechaPrueba() {
        return $this->fechaPrueba;
    }
}
?>