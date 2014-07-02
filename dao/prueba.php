<?php
	require_once ('DaoDeportista.php');
	require_once ('DaoPrueba.php');
	require_once ('DaoInscripcion.php');
	require_once ('../Logico/Inscripcion.php');
	require_once ('../Logico/InscripcionRelevo.php');
	
	$dao = new DaoDeportista();
	$dao2 = new DaoPrueba();
	$dao3 = new DaoInscripcion();
	
	echo '<select id="platos">';
	$dao->getDeportistasClub('TIBV');
	echo '</select>';
	
	
	echo '<select id="platos">';
	$dao2->listarPruebasDeportista(2413,'Dama');
	echo '</select>';
	
	echo '<select id="platos">';
	$dao2->listarPruebasRelevo();
	echo '</select>';
	
	echo '<select id="platos">';
	$dao2->listarPruebasInscritasDeportista(2413);
	echo '</select>';
	
	echo '<select id="platos">';
	$dao2->listarPruebasRelevoInscritasClub('TIBV');
	echo '</select>';
	
	echo '<select id="platos">';
	echo '<option value="">'.$dao->getTiempoInscripcion(2413,102).'</option>';	
	echo '</select>';
	echo '<br>';
	
	/* Prueba de registro de inscripciones*/
	$inscripcionI = new Inscripcion(2413,4,102,$dao->getTiempoInscripcion(2413,102));
	$dao3->registrarInscripcionIndividual($inscripcionI);
	$inscripcionR = new InscripcionRelevo(4,695,'TIBV','',0,0,'','','');
	$dao3->registrarInscripcionRelevo($inscripcionR);
	
	
?>