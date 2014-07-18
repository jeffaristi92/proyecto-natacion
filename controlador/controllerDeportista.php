<?php
	
require 'ControladorDeportista.php';
	session_start();
	
    if($_GET['nombres'] && $_GET['apellidos'] && $_GET['fechaNacimiento'] && $_GET['sexo'] && $_GET['id']){

    	@$nombres = $_GET['nombres'];
    	@$apellidos = $_GET['apellidos'];
    	@$sexo = $_GET['sexo'];
        $fechaNacimiento = $_GET['fechaNacimiento'];
        @$tipoId = $_GET['tipoId'];
        @$id = $_GET['id'];
        @$pais = $_GET['pais'];
        @$ciudad = $_GET['ciudad'];
        @$club = $_SESSION['usuario'];
        @$estado = 'habilitado';
    	
      	$controlador = new ControladorDeportista();
      	$controlador->insertarDeportista($nombres, $apellidos, $fechaNacimiento, $sexo, $id, $tipoId, $ciudad, $club, $pais, $estado, 23, 'A');
        
    }else{
    	echo "Por favor ingrese todos los campos obligatorios (*)";
    }
?>
