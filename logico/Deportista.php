<?php

	class Deportista {
 	
    	private $nombre = '', $apellidos = '', $fechaNacimiento = '', $sexo = '', $identificacion = '', $tipoIdentificacion = '', $ciudad = '', $clubAfiliado = '', $nacionalidad = '', $estado = '', $edad = '', $categoria = '', $id=0;
        
        public function __construct($nombre, $apellidos, $fechaNacimiento, $sexo, $identificacion, $tipoIdentificacion, $ciudad, $clubAfiliado, $nacionalidad, $estado, $edad, $categoria){
            
			$this->nombre = $nombre;
			$this->apellidos = $apellidos;
			$this->fechaNacimiento = $fechaNacimiento;
			$this->sexo = $sexo;
			$this->identificacion = $identificacion;
			$this->tipoIdentificacion = $tipoIdentificacion;
			$this->ciudad = $ciudad;
			$this->clubAfiliado = $clubAfiliado;
			$this->nacionalidad = $nacionalidad;
			$this->estado = $estado;
			$this->edad = $edad;
			$this->categoria = $categoria;
        }

        public function setId($id) {
            $this->id = $id;
        }
		
		public function getId() {
            return $this->id;
        }

		public function setEdad($edad) {
            $this->edad = $edad;
        }

        public function setCategoria($categoria) {
            $this->categoria = $categoria;
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
		
		public function getTipoIdentificacion() {
            return $this->tipoIdentificacion;
        }

        public function getEdad() {
            return $this->edad;
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
    }//Fin clase
?>