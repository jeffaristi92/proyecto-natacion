<?php
class Programacion {
    
    private $codigoDeportista, $codigoTorneo, $codigoPrueba, $tiempoInscripcion, $serie, $carril , $fechaJornada;

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
        return $tiempoInscripcion;
    }

    public function setTiempoInscripcion($tiempoInscripcion) {
        $this->tiempoInscripcion = $tiempoInscripcion;
    }

    public function getSerie() {
        return $this->serie;
    }

    public function setSerie($serie) {
        $this->serie = $serie;
    }

    public function getCarril() {
        return $this->carril;
    }

    public function setCarril($carril) {
        $this->carril = $carril;
    }

    public function getFechaJornada() {
        return $this->fechaJornada;
    }

    public function setFechaJornada($fechaJornada) {
        $this->fechaJornada = $fechaJornada;
    }
    
}
?>
