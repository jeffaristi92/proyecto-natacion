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
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="js/html5shiv.js"></script>
	      <script src="js/respond.min.js"></script>
	    <![endif]-->
	    <script type="text/javascript" src="../js/jquery.js"></script>
	    <script type="text/javascript" src="../js/registroDeportista.js"></script>
		<script type="text/javascript" src="../js/prefixfree.min.js"></script> 
   		<script type="text/javascript" src="../js/bootstrap.min.js"></script>   
   		<script type="text/javascript" src="../js/jquery-ui.js"></script>
   		<script type="text/javascript" src="../js/jquery.placeholder.js"></script>
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
					echo '<select id="listaClubes" onChange="listarDeportistas(1)">';
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
				<h4>Editar Deportista</h4>		
				
         		<div class="col-md-12">

                    <div id="listaDeportistasR">
                    <h5>Deportistas</h5>
              				
                    <?php
						if($_SESSION['admin']==1){
						}else{
                         	require_once ('../controlador/ControladorDeportista.php');
							$controaldor = new ControladorDeportista();
							echo '<select id="listaDeportistas" name="listaDeportistas[]" multiple="multiple" onChange="listarPruebas()">';
							$controaldor->listarDeportistasClub($_SESSION['usuario']);
							echo '</select>';
						}
					?>
                    </div>
	
              		<form class="form-signin" role="form" method="GET">              			

              			<div class="col-md-6">
              				<input id="nombres"   type="text"   class="form-control" placeholder="Nombres *" autofocus/>
                			<input id="apellidos" type="text"   class="form-control" placeholder="Apellidos *"/>
							<select id="sexo" class="form-control">
                    			<option value="si">Varon</option>
                    			<option value="no">Dama</option>
                			</select>
							<input id="fecha" type="text"   class="form-control" placeholder="Fecha Nacimiento *"/>
              			</div>						
						<div class="col-md-6">
              				<select id="id" class="form-control">
                    			<option value="si">T.I</option>
                    			<option value="no">C.C</option>
                			</select>
								
							<input id="nro_id"   type="text"  class="form-control" placeholder="Nro Identificación *"/>
							<input id="pais"     type="text"  class="form-control" placeholder="País"/>
							<input id="ciudad"   type="text"  class="form-control" placeholder="Ciudad"/>
							<div id="club" style="display: none;"><?php echo $_SESSION['usuario']?></div>   

							<a class="btn enviar registrar_deportista">Registrar</a>
                			<div id="respuesta_deportista"></div>
						</div>	
			        </form>
			    </div>
          		
        	</div>
		</div><!--FIN del row-->	
	</div><!--FIN container-->	
	<?php
		if($_SESSION['admin']==1){
			echo '<script>';
			echo 'listarDeportistas(1);';
			echo '</script>';
		}
	?>
	<script>
	  $('input').placeholder();
	  
      $( ".registrar_deportista" ).click(function() {
        registrarDeportista();
      });
    </script>

	</body>
</html>