<?php
include('conn.php');

if (isset($_POST['Guardar'])) {
	$imagen = $_FILES['imagen']['name'];
	$nom = $_POST['titulo'];
	
	if (isset($img) && $img != '') {
		$tipo = $_FILES['imagen']['type'];
		$temp = $_FILES['imagen']['tmp_name'];
		
		if (!((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp')))) {
			$_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
			$_SESSION['tipo'] = 'danger';
			header('location:../dactilares.php');
		}else{
			$query = "INSERT INTO huellas(imagen,nom) values('$imagen','$nom')";
			$resul = mysqli_query($conn,$query);
			
			if ($resul) {
				move_uploaded_file($temp,'imagen/'.$imagen);
				$_SESSION['mensaje'] = 'se ha subido correctamente';
				$_SESSION['tipo'] = 'success';
				header('location:../dactilares.php');
				
			}else{
				$_SESSION['mensaje'] = 'ocurrio un error en el servidor';
				$_SESSION['tipo'] = 'danger';
			}
		}
	}
	
}

?>