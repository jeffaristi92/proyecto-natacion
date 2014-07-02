<?php
	require_once ('../dao/DaoPrueba.php');
	$dao2 = new DaoPrueba();
	echo '<select id="listaPruebas" name="listaPruebas[]" multiple="multiple">';
	$dao2->listarPruebasInscritasDeportista($_GET['codigo']);
	echo '</select>';
?>