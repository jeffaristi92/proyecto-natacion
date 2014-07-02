<?php
	
require 'ControladorDeportista.php';
	
    if($_GET['nombres'] && $_GET['apellidos'] && $_GET['fechaNacimiento'] && $_GET['sexo'] && $_GET['club']){

    	@$nombres = $_GET['nombre'];
    	@$apellidos = $_GET['apellidos'];
    	@$sexo = $_GET['sexo'];
        @$fechaNacimiento = $_GET['fecha'];
        @$tipoId = $_GET['tipoId'];
        @$id = $_GET['id'];
        @$pais = $_GET['pais'];
        @$ciudad = $_GET['ciudad'];
        @$club = $_GET['club'];
        @$estado = 'habilitado';
    	
      	$controlador = new ControladorDeportista();
      	$controlador->insertarDeportista($nombres, $apellidos, $sexo, $fechaNacimiento, $tipoId, $id, $pais, $ciudad, $club, $estado, 23, 'A');

    }else{
    	echo "Por favor ingrese todos los campos obligatorios (*)";
    }
?>
