<?php
	require_once('DaoDeportista.php');
	require_once('../logico/Deportista.php');
	
	$dao = new DaoDeportista();
	$deportista = new Deportista("jeffer2","guarin","1992-10-31","Varon","1144163369","C.C","Cali","","Colombia","",0,"");
	$deportista->setId(2665);
	
	//$dao->actualizarDeportista($deportista);
	
	$deportista = $dao->getDeportista(1);
	
	echo 'Id:'.$deportista->getId().'<br>';
	echo 'Nombre:'.$deportista->getNombre().'<br>';
	echo 'Apellidos:'.$deportista->getApellidos().'<br>';
	echo 'FechaNacimiento:'.$deportista->getFechaNacimiento().'<br>';
	echo 'Sexo:'.$deportista->getSexo().'<br>';
	echo 'Identificacion:'.$deportista->getIdentificacion().'<br>';
	echo 'TipoIdentificacion:'.$deportista->getTipoIdentificacion().'<br>';
	echo 'Ciudad:'.$deportista->getCiudad().'<br>';
	echo 'Nacionalidad:'.$deportista->getNacionalidad().'<br>';
?>