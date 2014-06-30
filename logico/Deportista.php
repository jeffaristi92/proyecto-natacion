<?php

	class Deportista {
 	
	private $indentificador, $nombre, $apellidos, $fechaNacimiento, $sexo, $identificacion, $tipoIdentificacion, $ciudad, $clubAfiliado, $nacionalidad, $estado, $edad, $categoria;
    
	public function getTipoIdentificacion() {
        return $this->tipoIdentificacion;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setIndentificador($indentificador) {
        $this->indentificador = $indentificador;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    
    public function setTipoIdentificacion($tipoIdentificacion){
        $this->tipoIdentificacion = $tipoIdentificacion;
    }
    
    public function setIdentificacion($identificacion) {
        $this->identificacion = $identificacion;
    }

    public function setTiempoIdentificacion($tipoIdentificacion) {
        $this->tipoIdentificacion = $tipoIdentificacion;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function setClubAfiliado($clubAfiliado) {
        $this->clubAfiliado = $clubAfiliado;
    }

    public function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getIndentificador() {
        return $this->indentificador;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getIdentificacion() {
        return $this->identificacion;
    }

    public function getTiempoIdentificacion() {
        return $this->tipoIdentificacion;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getClubAfiliado() {
        return $this->clubAfiliado;
    }

    public function getNacionalidad() {
        return $this->nacionalidad;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getCategoria() {
        return $this->categoria;
    }
}
?>