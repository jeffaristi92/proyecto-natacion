<?php
	class Torneo {

    private $codigoTorneo, $nombreTorneo, $fechaInicioTorneo, $ciudadTorneo, $nombreOrganizadorTorneo, $tipoTorneo,$largoPiscinaTorneo, $cantidadCarrilesTorneo, $numeroPruebasPorJornada, $numeroPruebasPorTorneo, $fechaInicioInscripciones, $fechaFinInscripciones;

    public function getNumeroPruebasPorJornada() {
        return $this->numeroPruebasPorJornada;
    }

    public function setNumeroPruebasPorJornada($numeroPruebasPorJornada) {
        $this->numeroPruebasPorJornada = $numeroPruebasPorJornada;
    }

    public function getNumeroPruebasPorTorneo() {
        return $this->numeroPruebasPorTorneo;
    }

    public function setNumeroPruebasPorTorneo($numeroPruebasPorTorneo) {
        $this->numeroPruebasPorTorneo = $numeroPruebasPorTorneo;
    }

    public function setCodigoTorneo($codigoTorneo) {
        $this->codigoTorneo = $codigoTorneo;
    }

    public function setNombreTorneo($nombreTorneo) {
        $this->nombreTorneo = $nombreTorneo;
    }

    public function setFechaInicioTorneo($fechaInicioTorneo) {
        $this->fechaInicioTorneo = $fechaInicioTorneo;
    }

    public function setCiudadTorneo($ciudadTorneo) {
        $this->ciudadTorneo = $ciudadTorneo;
    }

    public function setNombreOrganizadorTorneo($nombreOrganizadorTorneo) {
        $this->nombreOrganizadorTorneo = $nombreOrganizadorTorneo;
    }

    public function setTipoTorneo($tipoTorneo) {
        $this->tipoTorneo = $tipoTorneo;
    }

    public function setLargoPiscinaTorneo($largoPiscinaTorneo) {
        $this->largoPiscinaTorneo = $largoPiscinaTorneo;
    }

    public function setCantidadCarrilesTorneo($cantidadCarrilesTorneo) {
        $this->cantidadCarrilesTorneo = $cantidadCarrilesTorneo;
    }

    public function setFechaInicioInscripciones($fechaInicioInscripciones) {
        $this->fechaInicioInscripciones = $fechaInicioInscripciones;
    }

    public function setFechaFinInscripciones($fechaFinInscripciones) {
        $this->fechaFinInscripciones = $fechaFinInscripciones;
    }

    public function getCodigoTorneo() {
        return $this->codigoTorneo;
    }

    public function getNombreTorneo() {
        return $this->nombreTorneo;
    }

    public function getFechaInicioTorneo() {
        return $this->fechaInicioTorneo;
    }

    public function getCiudadTorneo() {
        return $this->ciudadTorneo;
    }

    public function getNombreOrganizadorTorneo() {
        return $this->nombreOrganizadorTorneo;
    }

    public function getTipoTorneo() {
        return $this->tipoTorneo;
    }

    public function getLargoPiscinaTorneo() {
        return $this->largoPiscinaTorneo;
    }

    public function getCantidadCarrilesTorneo() {
        return $this->cantidadCarrilesTorneo;
    }

    public function getFechaInicioInscripciones() {
        return $this->fechaInicioInscripciones;
    }

    public function getFechaFinInscripciones() {
        return $this->fechaFinInscripciones;
    }
}
?>
