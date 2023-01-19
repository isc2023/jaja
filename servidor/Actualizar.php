
<?php
include ("../servidor/conectar.php");
$id = $_POST['id'];
$domi = $_POST['dom'];
$telpadre = $_POST['telp'];
$telmadre = $_POST['telm'];

mysql_select_db($basededatos, $conexion) or die("error");
mysql_query("UPDATE datosgen SET dom = '$domi', telpadre='$telpadre',telm = '$telmadre' WHERE id = '$id' ");
echo "bien"

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>modificar</title>
</head>
<body>
	<form class="" action="../servidor/Actualizar.php" method="post">
		<input type="text" name="id" placeholder="id">
		<input type="text" name="equipo_local" placeholder="equipo_local">
		<input type="text" name="escudo_local" placeholder="escudo_local">
		<input type="text" name="equipo_visitante" placeholder="equipo_visitante">
		<input type="text" name="escudo_visitante" placeholder="escudo_visitante">
		<input type="submit" name="name" value="modificar">
	</form>
</body>
</html>