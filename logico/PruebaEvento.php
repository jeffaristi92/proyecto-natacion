<?php

	class PruebaEvento {

    private $codigoTorneo, $codigoPrueba, $tipoPrueba, $ordenPrueba, $diaPrueba, $jornadaPrueba;

    public function getDiaPrueba() {
        return $this->diaPrueba;
    }

    public function getJornadaPrueba() {
        return $this->jornadaPrueba;
    }

    public function setDiaPrueba($diaPrueba) {
        $this->diaPrueba = $diaPrueba;
    }

    public function setJornadaPrueba($jornadaPrueba) {
        $this->jornadaPrueba = $jornadaPrueba;
    }

    public function setCodigoTorneo($codigoTorneo){
        $this->codigoTorneo = $codigoTorneo;
    }
    
    public function setCodigoPrueba($codigoPrueba) {
        $this->codigoPrueba = $codigoPrueba;
    }

    public function setTipoPrueba($tipoPrueba) {
        $this->tipoPrueba = $tipoPrueba;
    }

    public function setOrdenPrueba($ordenPrueba) {
        $this->ordenPrueba = $ordenPrueba;
    }

    public function getCodigoPrueba() {
        return $this->codigoPrueba;
    }

    public function getTipoPrueba() {
        return $this->tipoPrueba;
    }

    public function getOrdenPrueba() {
        return $this->ordenPrueba;
    }

    public function getCodigoTorneo() {
        return $this->codigoTorneo;
    }
}
?>
