<?php

	class Categoria {

    private $nombrecategoria, $edadiniciocategoria, $edadfincategoria;

    public function setNombrecategoria($nombrecategoria) {
        $this->nombrecategoria = $nombrecategoria;
    }

    public function setEdadiniciocategoria($edadiniciocategoria) {
        $this->edadiniciocategoria = $edadiniciocategoria;
    }

    public function setEdadfincategoria($edadfincategoria) {
        $this->edadfincategoria = $edadfincategoria;
    }

    public function getNombrecategoria() {
        return $this->nombrecategoria;
    }

    public function getEdadiniciocategoria() {
        return $this->edadiniciocategoria;
    }

    public function getEdadfincategoria() {
        return $this->edadfincategoria;
    }
}
?>
