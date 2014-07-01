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
	    <script type="text/javascript" src="../js/scripts.js"></script>
		<script type="text/javascript" src="../js/prefixfree.min.js"></script> 
   		<script type="text/javascript" src="../js/bootstrap.min.js"></script>   
   		<script type="text/javascript" src="../js/jquery-ui.js"></script>
   		 
	</head>
	<body>
	
	<!--Incluimos el menu-->	
	<?php include 'menu.php' ?>
	
	<div class="container deportista">
		<div class="row">
			<div class="wrapper">
				<h4>Registro Deportistas</h4>		
				
         		<div class="col-md-12">
	
              		<form class="form-signin" role="form" method="GET">              			
                		<input id="nombre"       type="text"   class="form-control" placeholder="Nombre" autofocus/>
                		<input id="ingredientes" type="text"   class="form-control" placeholder="Ingredientes"/>
                		<input id="fecha"   type="text"      class="form-control" placeholder="Fecha"/>
                	
                		<select id="activo" class="form-control">
                    		<option value="si">Activo</option>
                    		<option value="no">No Activo</option>
                		</select>
                		<a class="btn enviar registrar_plato">Registrar</a>
                		<div id="respuesta_plato"></div>
			        </form>
			    </div>
          		
        	</div>
		</div><!--FIN del row-->	
	</div><!--FIN container-->	

	</body>
</html>