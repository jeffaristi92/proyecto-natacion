<?php
	require_once ('DaoDeportista.php');
	
	$dao = new DaoDeportista();
	echo '<select id="platos">';
	$dao->getDeportistasClub('TIBV');
	echo '</select>';
?>