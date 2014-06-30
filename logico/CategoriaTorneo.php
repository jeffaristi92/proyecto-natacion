<?php

	class CategoriaTorneo {

    private $codigoTorneo, $nombreCategoria;

    public function getCodigoTorneo() {
        return $this->codigoTorneo;
    }

    public function setCodigoTorneo($codigoTorneo) {
        $this->codigoTorneo = $codigoTorneo;
    }

    public function getNombreCategoria() {
        return $this->nombreCategoria;
    }

    public function setNombreCategoria($nombreCategoria) {
        $this->nombreCategoria = $nombreCategoria;
    }
}

?>
