<?php
	require_once('../dao/DaoDeportista.php');
	require_once('../logico/Deportista.php');
	
	$dao = new DaoDeportista();
	
	$deportista = $dao->getDeportista($_GET['deportista']);
	
	
	echo '<div class="col-md-6">
     <input id="nombres"   type="text"   class="form-control" placeholder="Nombres *" autofocus value="'. utf8_encode($deportista->getNombre()).'"/>
     <input id="apellidos" type="text"   class="form-control" placeholder="Apellidos *" value="'. utf8_encode($deportista->getApellidos()).'"/>
     <select id="sexo" class="form-control">';
	 
	 if($deportista->getSexo()=="Varon"){
		echo '<option value="si" selected="selected">Varon</option>
     	<option value="no">Dama</option>'; 
	 }else{
	 	echo '<option value="si">Varon</option>
     	<option value="no" selected="selected">Dama</option>';
	 }

	 echo '</select>
     <input id="fecha" type="text"   class="form-control" placeholder="Fecha Nacimiento *" value="'.$deportista->getFechaNacimiento().'" />
     </div>						
     <div class="col-md-6">
     <select id="id" class="form-control">';
     
	 if($deportista->getTipoIdentificacion()=="T.I"){
	 	echo '<option value="si" selected="selected">T.I</option>
     <option value="no" >C.C</option>';

	 }else{
	 	echo '<option value="si">T.I</option>
     <option value="no" selected="selected">C.C</option>';

	 }
	      
	 echo '</select>
                                    
     <input id="nro_id"   type="text"  class="form-control" placeholder="Nro Identificación *" value="'.$deportista->getIdentificacion().'" />
     <input id="pais"     type="text"  class="form-control" placeholder="País" value="'.$deportista->getNacionalidad().'" />
     <input id="ciudad"   type="text"  class="form-control" placeholder="Ciudad" value="'.$deportista->getCiudad().'" />
     <div id="club" style="display: none;"><?php echo $_SESSION[\'usuario\']?></div>   
    
     
     <div id="respuestaActualizacionDeportista"></div>
     </div>';
?>