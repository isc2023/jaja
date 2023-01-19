<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script
    	src="https://code.jquery.com/jquery-3.3.1.js"
    	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    	crossorigin="anonymous">
	</script>
	
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="js/registro-controlador.js"></script>
    
	<link href="../SistemaPruebaWeb/Cliente/css/estilo2.css" rel="stylesheet"/>

    <!-- hoja  de  estilo en la carpeta del proyecto  se  habilitan cuando  no haya  internet
     <link rel="stylesheet" href="css/bootstrap.min.css"/>-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style>
    div{
         text-align: center;
         
       }
      body{
		  
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		  background-size: cover;
      	
      }
	  li a:hover{
	  	background-color: #ffffff;
	  	
	  }
</style>

 <title>SISTEMA WEB</title>
</head>
  
<body>
    
    
		<!--ENCABEZADO    -->
			
			<header>
				<div >
					<div class="row">

						<div class="col">
							<p><img src="img/escudo.jpg" height="100"> Secretaría General de Gobierno de Puebla</p>
						</div>

						<div class="col">
							<img src="img/logo.png" height="100">
						</div>
					</div>

                    <ul style="background-color:  #20add8; color:#000000">
						<li>
							<a href="" data-toggle="modal" data-target="#exampleModal1" style="color: #000000">INICIAR SESIÓN</a> </li>
						<li>
							<a href=""  data-toggle="modal" data-target="#exampleModal2" style="color: #000000">REGISTRARSE</a> </li>
							
						<li>	
							
							<a href="../ja/indexRegistros.php" style="color: #000000;">BUSCAR</a> </li>
							
					</ul>
				</div>
			</header>
			<!--MENU DE OPCIONES-->

			<!-- Button trigger modal -->
			<!--<p align="right">Usted no se ha identificado.

			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
				INICIAR SESIÓN
			</button>
            <!--</p>-->
			<!-- Button trigger modal 
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
				REGISTRAR
			</button>-->




<!--CUERPO INTERFAZ   -->
<main>
<div class="container-fluid">
	
  <img src="img/datos-biometricos.jpeg" style="height: 750px" width="1300px">
</div>
<br>

</main>

<!-- CUERPO DEL Modal 1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> INICIAR SESIÓN  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
       	 <form  method="post" action="../ja/servidor/Autentificacion.php" onsubmit="validar2();">
  			<div class="form-group">
    			<label for="exampleInputEmail1">Correo electrónico:</label>
                 <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend2">@</span>
   				<input type="email" class="form-control" id="correo" placeholder="Por ejemplo: vimoza@hotmail.com" name="correo">
  			</div>
  			</div>
  			
  			<div class="form-group">
    			<label for="exampleInputPassword1">Contraseña:</label>
    			<input type="password" class="form-control" id="pass" name="pass">
  		   </div>
  		   
         <button type="submit" class="btn btn-primary">VERIFICAR</button>
		</form>	
     
      </div>
      <!--<script>
      
			function validar2(){
				var n=document.getElementById("pass1").value;
				var d=document.getElementById("correo1").value;
				if((n=="")||(d=="")){
					swal.fire({
					icon: 'error',
                    title: 'Oops...',
                    text: 'Campos Vacios!'});
					return true;
				}
				else{
					swal.fire({
					icon: 'success',
                    text: 'Datos Correctos'});
				}
			}
		</script>-->
       
    </div>
  </div>
</div>



<!-- CUERPO DEL Modal 2-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTRARSE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form  class="form-horizontal" role="form" method="post" action="../ja/servidor/RegistraUsu.php" onsubmit="validar();">
      
         <div class="form-group">
    			<label for="exampleInputEmail1">Nombre Completo:</label>
   				<input type="text" class="form-control" id="nombre" placeholder="Por ejemplo: Vianney Morales Zamora" name="nombre"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]*" onkeypress="return (event.charCode == 209 || event.charCode == 241 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" title="Solo Letras">
  			</div>
       
       <div class="form-group">
    			<label for="exampleInputEmail1">Dirección:</label>
   				<input type="address" class="form-control" id="dir" placeholder="Por ejemplo: Privada Niños Heroes # 16 Belen " name="dir">
  			</div>
      
       <div class="form-group">
    			<label for="exampleInputEmail1">Telefono:</label>
   				<input type="tel" class="form-control" id="tel" placeholder="Por ejemplo: 2461782234" name="tel" pattern="[0-9]{10}" title="Solo Numeros. Tamaño:10">
  			</div>
         
       <!--<div class="group-material">
                <select class="material-control-login">
                    <option value="" disabled="" selected="">Tipo de usuario</option>
                    <option value="Student">Cliente</option>
                    <option value="Admin">Administrador</option>
                </select>
            </div>-->
      
           <!-- <div class="form-group">
    			<label for="exampleInputEmail1">Tipo Usuario:</label>
   				<input type="text" class="form-control" id="tusu" placeholder="Por ejemplo: Cliente o Administrador" name="tusu">
  			</div>-->
  			
			  <div class="form-group">
			  	<select class="form-select" id="tusu" name="tusu">
			  		<option selected>Tipo de Usuario:</option>
			  		<option value=Administrador>Administrador</option>
			  		<option value=Encargado>Encargado</option>
			  		<option value=Empleado>Empleado</option>
			  	</select>
			  </div>
      
  			<div class="form-group">
    			<label for="exampleInputEmail1">Correo electrónico:</label>
    			<div class="input-group">
                   <span class="input-group-text" id="inputGroupPrepend2">@</span>
   				   <input type="email" class="form-control" id="correo1" placeholder="Por ejemplo: vimoza@hotmail.com" name="correo1">
  			</div>
  			</div>
  			
  			<div class="form-group">
    			<label for="exampleInputPassword1">Contraseña:</label>
    			<input type="password" class="form-control" id="pass1" name="pass1" pattern="[A-Za-z0-9!?-]{8,15}" title="Letras y Numeros. Tamaño minimo:8. Tamaño maximo:15">
  		   </div>
  		   
          <button type="submit" class="btn btn-primary">GUARDAR INFORMACIÓN</button>
		</form>	
      
      </div>
      
      <script>
      
			function validar(){
				var n=document.getElementById("nombre").value;
				var d=document.getElementById("dir").value;
				var t=document.getElementById("tel").value;
				var u=document.getElementById("tusu").value;
				var c=document.getElementById("pass1").value;
				var p=document.getElementById("correo1").value;
				if((n=="")||(d=="")||(t=="")||(u=="")(c=="")||(p=="")){
					swal.fire({
					icon: 'error',
                    title: 'Oops...',
                    text: 'Campos Vacios!'});
					return true;
				}
				else{
					swal.fire({
					icon: 'success',
                    text: 'Datos insertados!'});
				}
			}
		</script>
		
		
    </div>
  </div>
</div>




<!--PIE DE  PÁGINA    -->
<div class="container-fluid" style="background-color: #20add8; color: #000000" >
			<!-- DATOS DE CONTACTO-->
			<div class="row">


				<div class="col">
					<h5>CONTACTO:</h5>
					<p>Directora:</p>
					<P>Dra. Elia Cristina Quiterio Montiel</P>
					
				</div>

				<div class="col">
					<h5>Autores</h5>
					<P>Berenice Varela Vazquez</P>
					<p>Oscar Macuilt Primero</p>
					<p>Abigail Ramirez Pastrana</p>
					

				</div>

				<div class="col">
					<h5>REDES SOCIALES:</h5>
					<p align="lower-right">
						<button type="button" class="btn btn-link" style="color: #000000"><img src="img/face.png" width="30" height="30">
				    Facebook
			        </button>
                    </p>
					<p align="lower-right">
						<button type="button" class="btn btn-link" style="color: #000000"><img src="img/twiter (1).png" width="30" height="30">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
   <!-- Option 2: jQuery, Popper.js, and Bootstrap JS    -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> </script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"> </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"> </script>
   
</body>
</html>
