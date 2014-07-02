$( document ).ready(function() {
    
    $( "#fecha" ).datepicker();
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
