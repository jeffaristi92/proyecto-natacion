<?php
    require_once ('ControladorDeportista.php');
	session_start();
	$_SESSION['usuario'] = $_GET['club'];
	$controaldor = new ControladorDeportista();
	if($_GET['tipo']==1){
		echo '<select id="listaDeportistas" name="listaDeportistas[]" multiple="multiple" onChange="listarPruebas()">';
	}else if($_GET['tipo']==2){
		echo '<select id="listaDeportistas" name="listaDeportistas[]" multiple="multiple" onChange="listarPruebasInscritas()">';
	}else if($_GET['tipo']==3){
		echo '<select id="listaDeportistas" name="listaDeportistas[]" multiple="multiple" onChange="consultarDeportista()">';
	}
	$controaldor->listarDeportistasClub($_SESSION['usuario']);
	echo '</select>';
?>