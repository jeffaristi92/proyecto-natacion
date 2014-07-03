<?php
	require_once ('../dao/DaoDeportista.php');
	require_once ('../dao/DaoInscripcion.php');
	require_once ('../logico/Inscripcion.php');
	
	session_start();
	$dao = new DaoDeportista();
	$dao3 = new DaoInscripcion();
		
	@$codigo = $_GET['codigo'];
	@$pruebas = $_GET['pruebas'];
	$listaPruebas = split(",",$pruebas);
	
	if($listaPruebas[0]!="null"){
		for ($i=0; $i<count($listaPruebas); $i++){
			$tiempo = $dao->getTiempoInscripcion($codigo,$listaPruebas[$i]);
			$inscripcionI = new Inscripcion($codigo,$_SESSION['torneo'],$listaPruebas[$i],$tiempo);
			$dao3->registrarInscripcionIndividual($inscripcionI);
		}
	}else{
		echo '* Seleccione al menos una prueba<br>';
	}
?>