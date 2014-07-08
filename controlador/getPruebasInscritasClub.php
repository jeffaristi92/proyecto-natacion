<?php
	session_start();
	echo '<select id="listaPruebasRelevos" name="listaPruebas[]" multiple="multiple">';
    require_once ('../dao/DaoPrueba.php');
	$dao = new DaoPrueba();
	$_SESSION['usuario'] = $_GET['club'];
	$dao->listarPruebasRelevoInscritasClub($_SESSION['usuario']);
	echo '</select>';
?>
                    		