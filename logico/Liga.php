<?php

	class Liga {
    
    private $codigoLiga, $nombreLiga, $representanteLegalLiga, $telefonoLiga, $municipioSede, $emailLiga, $paginaWeLiga;

    public function getCodigoLiga() {
        return $this->codigoLiga;
    }

    public function setCodigoLiga($codigoLiga) {
        $this->codigoLiga = $codigoLiga;
    }

    public function getNombreLiga() {
        return $this->nombreLiga;
    }

    public function setNombreLiga($nombreLiga) {
        $this->nombreLiga = $nombreLiga;
    }

    public function getRepresentanteLegalLiga() {
        return $this->representanteLegalLiga;
    }

    public function setRepresentanteLegalLiga($representanteLegalLiga) {
        $this->representanteLegalLiga = $representanteLegalLiga;
    }

    public function getTelefonoLiga() {
        return $this->telefonoLiga;
    }

    public function setTelefonoLiga($telefonoLiga) {
        $this->telefonoLiga = $telefonoLiga;
    }

    public function getMunicipioSede() {
        return $this->municipioSede;
    }

    public function setMunicipioSede($municipioSede) {
        $this->municipioSede = $municipioSede;
    }

    public function getEmailLiga() {
        return $this->emailLiga;
    }

    public function setEmailLiga($emailLiga) {
        $this->emailLiga = $emailLiga;
    }

    public function getPaginaWeLiga() {
        return $this->paginaWeLiga;
    }

    public function setPaginaWeLiga($paginaWeLiga) {
        $this->paginaWeLiga = $paginaWeLiga;
    }
}
?>