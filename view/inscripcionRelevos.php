<?php	
   session_start();

  	if(@$_SESSION['acceso'] == 1){
  		
  	}else{
  		echo "<script type='text/javascript' language='javascript'>
  				location.href='../index.php';
  			</script>";	
  	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Club Tiburones App</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../css/styles.css" type="text/css" rel="stylesheet"/>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="js/html5shiv.js"></script>
	      <script src="js/respond.min.js"></script>
	    <![endif]-->
	    <script type="text/javascript" src="../js/jquery.js"></script>
	    <script type="text/javascript" src="../js/scripts.js"></script>
		<script type="text/javascript" src="../js/prefixfree.min.js"></script> 
   		<script type="text/javascript" src="../js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="../js/registroInscripcion.js"></script>     
   		
	</head>
	<body>

	<!--Incluimos el menu-->	
	<?php include 'menu.php' ?>
    
    <div class="container deportista">
		<div class="row">
			<div class="wrapper">
            	<?php
				if($_SESSION['admin']==1){
					require_once('../dao/DaoClub.php');
					$dao = new DaoClub();
					echo '<h5>Club</h5>';
					echo '<select id="listaClubes" onChange="setClub()">';
					$dao->listarClubes();
					echo '</select>';
				}else{
					require_once ('../dao/DaoInscripcion.php');
					$dao = new DaoInscripcion();
					echo '<h3>Club: '.$dao->getNombreClub($_SESSION['usuario']).'</h3>';
				}
				?>
                <div id="nombreClubR">
                </div>
				<h4>Registro Inscripciones Relevos</h4>		
				
         		<div class="col-md-12">
	
              		<form class="form-signin" role="form" method="GET">              			

              			<div class="col-md-6">
                        <h5>Pruebas</h5>
              				<select id="listaPruebasRelevos" name="listaPruebasRelevos[]" multiple="multiple">
                            <?php
                            	require_once ('../controlador/ControladorPrueba.php');
								$controaldor = new ControladorPrueba();
								$controaldor->listarPruebasRelevo();
							?>
                    		</select>
							<a class="btn enviar registrar_inscripcion_relevo">Registrar</a>
                			<div id="respuesta_inscripcion"></div>
						</div>							
			        </form>
			    </div>
          		
        	</div>
		</div><!--FIN del row-->	
	</div><!--FIN container-->	
	
	<script>
		setClub();
      $( ".registrar_inscripcion_relevo" ).click(function() {
        registrarInscripcionRelevo();
      });
    </script>
		
	</body>
</html>