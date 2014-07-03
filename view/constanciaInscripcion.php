<?php	
   session_start();
   $opcion = @$_GET['opcion'];

	if(@$_SESSION['acceso'] == 1){
	}else{
		echo "<script type='text/javascript' language='javascript'>
				location.href='../index.php';
			</script>";	
	}	
?>
<?php
	require_once ('../dao/DaoInscripcion.php');
	require_once ('../dao/DaoTorneo.php');
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
<a href="javascript:print()">Imprimir</a>
</div>
</body>
</html>