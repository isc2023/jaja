
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="../css/estilo2.css" rel="stylesheet"/>

	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
   
	<!-- hoja  de  estilo en la carpeta del proyecto  se  habilitan cuando  no haya  internet
	<link rel="stylesheet" href="css/bootstrap.min.css"/>-->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<style>
		div{
			text-align: center;
			align-content: center;
			background-color: #ffffff
}
		li a:hover{
			background-color: #ffffff;
}
		div .col{
			background-color: #a0d3e6;
		}
		

	</style>


	<title>SISTEMA WEB</title>
	</head>

	<body>
	<!--ENCABEZADO    -->

	<header>
		<div>
			<div class="row" >

				<div class="col" style="background-color: #ffffff">
					<p><img src="../img/escudo.jpg" height="100"> Secretaría General de Gobierno de Puebla</p>
				</div>

				<div class="col" style="background-color: #ffffff">
					<img src="../img/logo.png" height="100">
				</div>
			</div>

			<ul style="background-color:  #20add8; color:#000000">
				<li>
					<a href="../cliente/Personales.php" style="color: #000000">
						DATOS PERSONALES</a> </li>
				<li>
					<a href="../cliente/Antropometricos.php" style="color: #000000">
						DATOS ANTROPOMÉTRICOS</a> </li>
				<li>
					<a href="../cliente/Señales.php" style="color: #000000">
						SEÑALES PARTICULARES</a> </li>
				<li>
					<a href="../cliente/Enfermedad.php" style="color: #000000">
						ENFERMEDADES</a> </li>
				<li>
					<a href="../cliente/pAdministrador.php">
						REGRESAR</a> </li>

			</ul>
		</div>
	</header>
	<div class="container" style="text-align: center;padding: 40px; background-color:#a0d3e6">
		<h5 class="modal-title" id="exampleModalLabel">SEÑALES PARTICULARES</h5>
		<br>
		<br>
	<form class="form-horizontal" role="form" method="post" action="../servidor/Señas.php">

	<div class="row g-3" style="background-color: #a0d3e6">
				
	<div class="col">
			<label for="exampleInputEmail1">Tattos:</label>
			<input type="radio" name="tattos" value="Si"> Si</input>
			<input type="radio" name="tattos" value="No"> No</input>
			
			<div class="col">
				<label for="exampleInputEmail1">Cantidad:</label>
				<input type="text" class="form-control" id="canttatto" name="canttatto">
			</div>
			<br>
			
			<div class="col">
			     <label for="exampleInputEmail1">Cicatrices:</label>
			     <input type="radio" name="cicatriz" value="Si"> Si</input>
			     <input type="radio" name="cicatriz" value="No"> No</input>
			
			<div class="col">
				<label for="exampleInputEmail1">Cantidad:</label>
				<input type="text" class="form-control" id="canticica" name="canticica">
				
			</div>
			</div>
			</div>
			<div class="col">
			<label for="exampleInputEmail1">Lunares:</label>
			<input type="radio" name="lunar" value="Si">Si</input>
			<input type="radio" name="lunar" value="No">No</input>
			
			<div class="col">
				<label for="exampleInputEmail1">Cantidad:</label>
				<input type="text" class="form-control" id="cantlunar" name="cantlunar">
			</div>
			
			<br>
			
			<div class="col">
				<label for="exampleInputEmail1">Verrugas:</label>
			<input type="radio" name="verruga" value="Si"> Si</input>
			<input type="radio" name="verruga" value="No"> No</input>
			
			<div class="col">
				<label for="exampleInputEmail1">Cantidad:</label>
				<input type="text" class="form-control" id="cantver" name="cantver">
			</div>	
			
			</div>
			</div>
			<div class="col">
			<label for="exampleInputEmail1">Complexión:</label>
			<select class="form-select"  id="comp" name="comp">
                    <option selected>Seleccionar</option>
                    <option value="Delgada">DELGADA</option>
                    <option value="Mediana">MEDIANA</option>
                    <option value="Obesa">OBESA</option>
            </select>

			<br>
			<br>
			<div class="col">
					
			<label for="exampleInputEmail1">Color de ojos:</label>
			<select class="form-select"  id="colojo" name="colojo">
                    <option selected>Seleccionar</option>
                    <option value="Cafes">CAFES</option>
                    <option value="Verdes">VERDES</option>
                    <option value="Azules">AZULES</option>
                    <option value="Negros">NEGROS</option>
            </select>
			</div>
			</div>
			<div class="col">
			<label for="exampleInputEmail1">Color de piel:</label>
			<select class="form-select"  id="colpie" name="colpie">
                    <option selected>Seleccionar</option>
                    <option value="Blanca">BLANCA</option>
                    <option value="Negra">NEGRA</option>
                    <option value="Apiñonada">APIÑONADA</option>
                    <option value="Morena">MORENA</option>
            </select>
		
			<br>
			<br>
			<div class="col">
					
			<label for="exampleInputEmail1">Tipo de cabello:</label>
			<select class="form-select"  id="tcabel" name="tcabel">
                    <option selected>Seleccionar</option>
                    <option value="Cortochi">CORTO CHINO</option>
                     <option value="Cortori">CORTO RIZADO</option>
                    <option value="Cortola">CORTO LACIO</option>
                    <option value="Largola">LARGO LACIO</option>
                     <option value="Largori">LARGO RIZADO</option>
                    <option value="Largochi">LARGO CHINO</option>
            </select>
			</div>
			</div>
	<div class="col">
			<label for="exampleInputEmail1">Color de cabello:</label>
		<select class="form-select" id="colcabe" name="colcabe">
                    <option selected>Seleccionar</option>
                    <option value="Castaño">CASTAÑO</option>
                    <option value="Negro">NEGRO</option>
                    <option value="Rubio">RUBIO</option>
                    <option value="Cafe">CAFE</option>
                    <option value="Pelirojo">PELIROJO</option>      
            </select>

			<br>
			<br>
			
			<div class="col">
					
			<label for="exampleInputEmail1">Bigote/Barba:</label>
			<select class="form-select"  id="bigbar" name="bigbar">
                    <option selected>Seleccionar</option>
                    <option value="Ninguno">NINGUNO</option>
                    <option value="Bigote">BIGOTE</option>
                    <option value="Bigotebar">BIGOTE Y BARBA</option>
                    <option value="Barba">BARBA</option>
                       
            </select>
			</div>
			</div>
		
			
			</div>
			
			<br>
			<div class="row g-3" style="background-color: #a0d3e6">
				<div class="col">
					<button type="submit" class="btn btn-primary">GUARDAR INFORMACIÓN</button>
				</div>
				<div class="col">
					<input class="btn btn-danger" type="reset" size="20" name="" value="CANCELAR REGISTRO"/>
				</div>
			</div>
			
			
			
			
			
		</form>
	</div>	
			<br>
		<!--PIE DE  PÁGINA    -->
		<div class="container-fluid" style="background-color: #20add8; color: #000000" >
			<!-- DATOS DE CONTACTO-->
			<div class="row">


				<div class="col" style="background-color: #20add8; color: #000000">
					<h5>CONTACTO:</h5>
					<p>Directora:</p>
					<P>Dra. Elia Cristina Quiterio Montiel</P>
				</div>

				<div class="col" style="background-color: #20add8; color: #000000">
			        <h5>Autores</h5>
					<<>Berenice Varela Vazquez</P>
					<p>Oscar Macuilt Primero</p>
					<p>Abigail Ramirez Pastrana</p>


				</div>

				<div class="col" style="background-color: #20add8; color: #000000">
					<h5>REDES SOCIALES:</h5>
					<p align="lower-right">
						<button type="button" class="btn btn-link" style="color: #000000"><img src="../img/face.png" width="30" height="30">
							Facebook
						</button>
					</p>
					<p align="lower-right">
						<button type="button" class="btn btn-link" style="color: #000000"><img src="../img/twiter (1).png" width="30" height="30">
							Twitter
						</button>
					</p>

				</div>


			</div>
		</div>






		<!--  este hace referencia  al  archivo  js del proyecto y se utiliza cuando  haya internet
		<script src="js/bootstrap.min.js"></script>
		-->

		<!-- Option 2: jQuery, Popper.js, and Bootstrap JS    -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> </script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"> </script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"> </script>
	</body>
</html>