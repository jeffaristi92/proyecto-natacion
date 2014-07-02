<?php
	require_once ('../dao/DaoPrueba.php');
	$dao2 = new DaoPrueba();
	echo '<select id="listaPruebas" name="listaPruebas[]" multiple="multiple">';
	$dao2->listarPruebasDeportista($_GET['codigo'],$_GET['sexo']);
	echo '</select>';
	
?>