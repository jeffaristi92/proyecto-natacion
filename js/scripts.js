
function login() {

	var xmlhttp = new XMLHttpRequest();
  	xmlhttp.onreadystatechange=function() {
  		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        var respuesta = xmlhttp.responseText;
        redireccionar(respuesta);
    	}
  	}

  	var user = $("#usuario").val();
	  var pass = $("#password").val();	

  	xmlhttp.open("GET","controlador/controllerLogin.php?usuario="+user+"&password="+pass, true);
  	xmlhttp.send();
}

function redireccionar(respuesta) {

  if (respuesta == "ok") {

    setTimeout("location.href='view/inscripcionIndividual.php'", 0);

  }else{
    document.getElementById("respuesta").innerHTML=respuesta;
  }
  
}

function enter(){
    
    var enterKey = 13;
    if (event.keyCode == enterKey){
        login();
    }
}