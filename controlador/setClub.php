<?php
	require_once ('../dao/DaoInscripcion.php');
	session_start();
	$dao = new DaoInscripcion();
	
	$_SESSION['usuario'] = $_GET['club'];
	echo '<h3>Club: '.$dao->getNombreClub($_SESSION['usuario']).'</h3>';
?>