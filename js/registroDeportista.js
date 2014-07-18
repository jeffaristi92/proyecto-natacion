$( document ).ready(function() {
    
    //$( "#fecha" ).datepicker();
    $( "#fecha" ).datepicker({
          changeMonth: true,
          changeYear: true,
          dateFormat: "yy-mm-dd",
          yearRange: "1980:2050",
          gotoCurrent: true
    });
});


function registrarDeportista() {
  	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("respuesta_deportista").innerHTML=xmlhttp.responseText;
      }
    }

  	var nombres = $("#nombres").val();
  	var apellidos = $("#apellidos").val();
    var sexo = $('#sexo option:selected').text();
  	var fechaNacimiento = $("#fecha").val();
  	var tipoId = $('#id option:selected').text();
  	var id = $("#nro_id").val();
  	var pais = $("#pais").val();
  	var ciudad = $("#ciudad").val();	
    var club = document.getElementById("club").innerHTML;

    xmlhttp.open("GET","../controlador/controllerDeportista.php?nombres="+nombres+"&apellidos="+apellidos+"&sexo="+sexo+
      "&fechaNacimiento="+fechaNacimiento+"&tipoId="+tipoId+"&id="+id+"&pais="+pais+"&ciudad="+ciudad+"&club="+club,true);
    xmlhttp.send();
}

function consultarDeportista() {
  	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("respuestaConsultaDeportista").innerHTML=xmlhttp.responseText;
      }
    }

    var deportista = $("#listaDeportistas").val();

    xmlhttp.open("GET","../controlador/consultarDeportista.php?deportista="+deportista,true);
    xmlhttp.send();
}

function prueba(){
	alert("hola mundo");
}

function actualizarDeportista() {
	alert("hola");
  	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("respuestaActualizacionDeportista").innerHTML=xmlhttp.responseText;
      }
    }
	var nombres = $("#nombres").val();
  	var apellidos = $("#apellidos").val();
    var sexo = $('#sexo option:selected').text();
  	var fechaNacimiento = $("#fecha").val();
  	var tipoId = $('#id option:selected').text();
  	var id = $("#nro_id").val();
  	var pais = $("#pais").val();
  	var ciudad = $("#ciudad").val();
    var deportista = $("#listaDeportistas").val();

    xmlhttp.open("GET","../controlador/actualizarDeportista.php?nombres="+nombres+"&apellidos="+apellidos+"&sexo="+sexo+
      "&fechaNacimiento="+fechaNacimiento+"&tipoId="+tipoId+"&id="+id+"&pais="+pais+"&ciudad="+ciudad+"&deportista="+deportista,true);
    xmlhttp.send();
}