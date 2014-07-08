<?php
	require_once('DaoClub.php');
	
	$dao = new DaoClub();
	
	echo '<select>';
	$dao->listarClubes();
	echo '</select>';
?>