function listarPruebas(){
	var deportista = document.getElementById("listaDeportistas").value;
	var datos = deportista.split("*");
	var codigo = datos[0];
	var sexo = datos[1]; 
	
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("listaPruebasR").innerHTML=xmlhttp.responseText;
      }
    }
	
	xmlhttp.open("GET","../controlador/getPruebasDeportista.php?codigo="+codigo+"&sexo="+sexo,true);
    xmlhttp.send();
}

function listarPruebasInscritas(){
	var deportista = document.getElementById("listaDeportistas").value;
	var datos = deportista.split("*");
	var codigo = datos[0]; 
	
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("listaPruebasR").innerHTML=xmlhttp.responseText;
      }
    }
	
	xmlhttp.open("GET","../controlador/getPruebasInscritasDeportista.php?codigo="+codigo,true);
    xmlhttp.send();
}

function registrarInscripcion(){
	var deportista = document.getElementById("listaDeportistas").value;
	var datos = deportista.split("*");
	var codigo = datos[0]; 
	
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("respuesta_inscripcion").innerHTML=xmlhttp.responseText;
      }
    }
	
	var pruebas = $("#listaPruebas").val();
	
	xmlhttp.open("GET","../controlador/realizarInscripcion.php?codigo="+codigo+"&pruebas="+pruebas,true);
    xmlhttp.send();
}

function eliminarInscripcion(){
	var deportista = document.getElementById("listaDeportistas").value;
	var datos = deportista.split("*");
	var codigo = datos[0]; 
	
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("respuesta_inscripcion").innerHTML=xmlhttp.responseText;
		listarPruebasInscritas();
      }
    }
	
	var pruebas = $("#listaPruebas").val();
	
	xmlhttp.open("GET","../controlador/eliminarInscripcion.php?codigo="+codigo+"&pruebas="+pruebas,true);
    xmlhttp.send();
	
}

function registrarInscripcionRelevo(){
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("respuesta_inscripcion").innerHTML=xmlhttp.responseText;
      }
    }
	
	var pruebas = $("#listaPruebas").val();
	
	xmlhttp.open("GET","../controlador/realizarInscripcionRelevo.php?pruebas="+pruebas,true);
    xmlhttp.send();
}

function eliminarInscripcionRelevo(){
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("respuesta_inscripcion").innerHTML=xmlhttp.responseText;
      }
    }
	
	var pruebas = $("#listaPruebas").val();
	
	xmlhttp.open("GET","../controlador/eliminarInscripcionRelevo.php?pruebas="+pruebas,true);
    xmlhttp.send();
}