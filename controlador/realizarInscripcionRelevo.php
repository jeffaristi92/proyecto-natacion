<?php
	require_once ('../dao/DaoInscripcion.php');
	require_once ('../logico/InscripcionRelevo.php');
	
	session_start();
	$dao3 = new DaoInscripcion();
	
	@$pruebas = $_GET['pruebas'];
	$listaPruebas = split(",",$pruebas);
	
	if($listaPruebas[0]!="null"){
		for ($i=0; $i<count($listaPruebas); $i++){
			$inscripcionR = new InscripcionRelevo($_SESSION['torneo'],$listaPruebas[$i],$_SESSION['usuario'],'',0,0,'','','');
			$dao3->registrarInscripcionRelevo($inscripcionR);
		}
	}else{
		echo '* Seleccione al menos una prueba<br>';
	}
?>