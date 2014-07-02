<?php
	
	require_once ('ControladorUsuario.php');
	
	
	if($_GET['usuario'] && $_GET['contrasenia']){
		
 		$usuario = $_GET['usuario'];
		$contrasena = $_GET['contrasenia'];
		
	  	$controlador = new ControladorUsuario();
	  	$controlador->insertarUsuario($usuario,$contrasena);		
	}  	
?>