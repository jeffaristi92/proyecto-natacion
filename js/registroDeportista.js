$(document).ready(function(){
});

function registrarAdicional() {
 
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("respuesta_adicional").innerHTML=xmlhttp.responseText;
      }
    }

  var nombre = $("#nombre_a").val();
	var ingredientes = $("#ingredientes_a").val();
	var precio = $("#precio_a").val();
  var idEmpresa = document.getElementById("idEmpresa").innerHTML;

    xmlhttp.open("GET","../Controlador/ControllerAdicional.php?nombre="+nombre+"&ingredientes="+ingredientes+"&precio="+precio+"&idEmpresa="+idEmpresa,true);
    xmlhttp.send();
}