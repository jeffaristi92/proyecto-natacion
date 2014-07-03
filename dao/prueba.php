<?php
	require_once('DaoDeportista.php');
	
	$dao = new DaoDeportista();
	
	echo 'Resultado: '.$dao->getTiempoInscripcion(1481,106);
?>