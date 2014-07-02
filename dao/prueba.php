<?php
	require_once ('DaoDeportista.php');
	require_once ('DaoPrueba.php');
	
	$dao = new DaoDeportista();
	echo '<select id="platos">';
	$dao->getDeportistasClub('TIBV');
	echo '</select>';
	
	$dao2 = new DaoPrueba();
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
?>