<?php
  session_start();

    if(@$_SESSION['acceso'] == 1){

      echo "<script type='text/javascript' language='javascript'>
            location.href='view/inscripcionIndividual.php';          
          </script>"; 
    }
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">    
    
    <title>Club Tiburones App</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/signin.css" rel="stylesheet">    
    <link href="css/stylesInicio.css" rel="stylesheet"> 
    <script src="js/jquery.js" type="text/javascript"></script>   
    <script src="js/scripts.js" type="text/javascript"></script>      
  </head>

  <body> 	

    <div class="container">

        <h1>Bienvenido!</h1>
      
          <div class="background_login">      
            <form class="form-signin" role="form" method="GET">
              <label>*Usuario:</label>
              <input id="usuario" name="usuario" type="text" class="form-control" onkeydown="enter();" autofocus="">
              <label>*Contraseña:</label>
              <input id="password" name="password" type="password" class="form-control" onkeydown="enter();">        
              <a class="btn btn-lg btn-primary btn-block sesion">Iniciar Sesión</a>
            </form>
            <div id="respuesta"></div>
          </div>          
    </div> <!--FIN Container-->
    
    <script>
      $( ".sesion" ).click(function() {
        login();
      });
    </script>
    
  </body>
</html>
