<?php
	require_once('../dao/DaoDeportista.php');
	require_once('../logico/Deportista.php');
	
	$dao = new DaoDeportista();
	
	echo 'llegue a controlador';
	
	if($_GET['nombres'] && $_GET['apellidos'] && $_GET['fechaNacimiento'] && $_GET['sexo'] && $_GET['id']){

    	@$nombres = $_GET['nombres'];
    	@$apellidos = $_GET['apellidos'];
    	@$sexo = $_GET['sexo'];
        @$fechaNacimiento = $_GET['fechaNacimiento'];
        $arreglo =  split("/" , $fechaNacimiento);
        $fechaNacimiento = $arreglo[2].'-'.$arreglo[0].'-'.$arreglo[1];
        @$tipoId = $_GET['tipoId'];
        @$id = $_GET['id'];
        @$pais = $_GET['pais'];
        @$ciudad = $_GET['ciudad'];
      	
	$deportista = new Deportista($nombres,$apellidos,$fechaNacimiento,$sexo,$id,$tipoId,$ciudad,"",$pais,"",0,"");
	$deportista->setId($_GET['deportista']);
	$dao->actualizarDeportista($deportista);
        
    }else{
    	echo "Por favor ingrese todos los campos obligatorios (*)";
    }
?>