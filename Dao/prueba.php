<?php
	require_once ('DaoClub.php');
	
	$daoClub = new DaoClub();
	$daoClub->consultarClub(2413, 4, 106, '99:99:99.99');
?>