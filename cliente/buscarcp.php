<!--función para buscar-->
<?php
	$mysqli=new mysqli("localhost","root","","registros");
	if($mysqli->connect_error){
		exit("No se  realizo  la conexión");
	}
	
	$sql="SELECT codigopostal, municipio, asentamiento FROM edo_puebla WHERE codigopostal=?";
	//preparamos la  consulta
	$stmt=$mysqli->prepare($sql);
	//obtenemos el  valor de la variable q que contiene  el  id y se manda en el ? de la consulta
	$stmt->bind_param("s",$_GET['q']);
	//se ejecuta la sentencia
	$stmt->execute();
	//se obtiene la  consulta
	$stmt->store_result();
	//y se guardan el resultado de la consulta en las  variables 
	$stmt->bind_result($codigopostal,$muni,$asentamiento);
	//se obtienen todos los resultados
	$stmt->fetch();
	//se cierra la consulta
	$stmt->close();
	//mostramos el resultado
	echo "<label>Municipio</label><br>";
	echo "<input type='text'  id='mun' name='mun' required maxlength='50' value='".$muni."'> <br> ";

	if($codigopostal >=2){
	echo "<label>Localidad</label><br>";
	echo "<select class='form-select' type='text'  id='loc' name='loc' required maxlength='50' >
	
			<option value='".$codigopostal."'>".$asentamiento."</option> 
			<option value='".$codigopostal."'>".$asentamiento."</option> 
			<option value='".$codigopostal."'>".$asentamiento."</option> 
		  </select> ";
		  
	}
?>