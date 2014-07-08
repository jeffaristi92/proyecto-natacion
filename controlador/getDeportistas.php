<?php
    require_once ('ControladorDeportista.php');
	session_start();
	$_SESSION['usuario'] = $_GET['club'];
	$controaldor = new ControladorDeportista();
	if($_GET['tipo']==1){
		echo '<select id="listaDeportistas" name="listaDeportistas[]" multiple="multiple" onChange="listarPruebas()">';
	}else{
		echo '<select id="listaDeportistas" name="listaDeportistas[]" multiple="multiple" onChange="listarPruebasInscritas()">';
	}
	$controaldor->listarDeportistasClub($_SESSION['usuario']);
	echo '</select>';
?>