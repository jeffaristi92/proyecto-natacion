<?php
	require_once ('DaoDeportista.php');
	require_once ('DaoPrueba.php');
	require_once ('DaoInscripcion.php');
	require_once ('DaoTorneo.php');
	
	session_start(); 
	$dao3 = new DaoInscripcion();
	$dao4 = new DaoTorneo();
?>
<html>
<head>
<title>Reporte Inscripcion</title>
<link href="../css/reporteinscripcion.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="header">
<?php   
	echo '<table>';
	$dao4->getInformacionTorneo($_SESSION['torneo']);
	echo '</table>';
	echo 'Inscripciones Club: '.$dao3->getNombreClub($_SESSION['usuario']);
?>
</div>
<div id="cuerpo">
<?php
	echo '<table>';
	echo '<tr>';
	echo '<td><b>No</b></td>';
	echo '<td><b>Nombre</b></td>';
	echo '<td><b>Cat.</b></td>';
	echo '<td><b>Prueba</b></td>';
	echo '</tr>';
	$dao3->getDeportistasInscritosClub($_SESSION['usuario']);
	echo '</table>';
?>
</div>
</body>
</html>