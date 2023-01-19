<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../css/estilo2.css" rel="stylesheet"/>
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
		
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">



    <script type="text/javascript">
        
        function informacion_cp(){

          $.ajax({
            url : 'https://api.copomex.com/query/info_cp/' + $("#codigo_postal").val(), //aqui va el endpoint de la api de copomex, con el método de info_cp, se deberá concatenar el CP ya que se recibe como parametro en la url, no como variable GET
            data : { 
              token : "339e10d4-4523-480c-8987-5e510d69bc40", //aqui va tu token. Crea una cuenta gratuita para obtener tu token en https://api.copomex.com/panel
              type : 'simplified'
            },
            type : 'GET', //el método http que se usará, COPOMEX solo ocupa método get
            dataType : 'json', // el tipo de información que se espera de respuesta
            success : function(copomex) { // código a ejecutar si la petición es satisfactoria, dentro irá el código personalizado

              if(!copomex.error){ //si NO hubo un error

                $("#cp_response").val(copomex.response.cp); //ingresamos la respuesta del cp, en el input destino
                $("#tipo_asentamiento").val(copomex.response.tipo_asentamiento); //ingresamos la respuesta del tipo de asentamiento, en el input destino
                $("#municipio").val(copomex.response.municipio); //ingresamos la respuesta del municipio, en el input destino
                $("#estado").val(copomex.response.estado); //ingresamos la respuesta del estado, en el input destino
                $("#ciudad").val(copomex.response.ciudad); //ingresamos la respuesta de la ciudad, en el input destino
                $("#pais").val(copomex.response.pais); //ingresamos la respuesta del pais, en el input destino

                $("#list_colonias").html(''); //reseteamos el input select para que no se concatene a los nuevos resultados
                for(var i = 0; i<copomex.response.asentamiento.length; i++){ //iteramos el resultado en un for
                  $("#list_colonias").append('<option>'+copomex.response.asentamiento[i]+'</option>'); //agregamos el item al listado de colonias
                }

              }else{ //si hubo error
                console.log('error: ' + copomex.error_message);
              }

            },
            error : function(jqXHR, status, error) { //si ocurrió un error en el request al endpoint de COPOMEX

                if(jqXHR.status==400){ //el código http 400 significa que algo se mandó mal (Bad Request)
                  copomex = jqXHR.responseJSON;
                  alert(copomex.error_message); //mostramos en un alerta, el error recibido
                }

            },
            complete : function(jqXHR, status) { // código a ejecutar sin importar si la petición falló o no
                console.log('Petición a COPOMEX terminada');
            }
          });

        }

    </script>

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
	
	<!--CUERPO INTERFAZ   -->
	<div>
		<H3>NUEVO REGISTRO</H3>
	</div>
	<!-- CUERPO DEL Modal 1 -->
	<div class="container" style="text-align: center;padding: 40px; background-color:#a0d3e6">
		<h5 class="modal-title" id="exampleModalLabel">DATOS PERSONALES</h5>
		<form  class="form-horizontal" role="form" method="post" action="../servidor/DatosGenerales.php">

			<div class="row g-3">
				
				<div class="col">
					<label for="exampleInputPassword1">Apellido Paterno:</label>
					<input type="text" class="form-control" id="apaterno" name="apaterno">
				</div>

				<div class="col">
					<label for="exampleInputPassword1">Apellido Materno:</label>
					<input type="text" class="form-control" id="amaterno" name="amaterno">
				</div>
			</div>
			<br>
			<div class="row g-3">
				<div class="col">
					<label for="exampleInputPassword1">Nombre(s):</label>
					<input type="text" class="form-control" id="nombres" name="nombres">
				</div>
				<div class="col">
					<label for="exampleInputPassword1">Dirección:</label>
					<input type="text" class="form-control" id="dir" name="dir">
				</div>
				<br>
				<br>
                <br>
				<br>
				
      <div class="input-group input-group-sm mb-2" style="background-color: #a0d3e6">
        <div class="col">
          <span class="col" id="inputGroup-sizing-sm">Código Postal:</span>
        </div>
        <input type="text" class="form-control" name="codigo_postal" id="codigo_postal">
      </div>
      <br>
				<div class="col" style="background-color: #a0d3e6">
      <a href="javascript:void(0)" onclick="informacion_cp()" class="btn btn-primary">Obtener información Código Postal</a>
      </div>
      </div>
      <br/>
      
      <div class="row g-3">
		<div class="col">
          <label for="cp_response">Código Postal Respuesta:</label>
          <input type="text" name="cp_response" id="cp_response" class="form-control">
          <br>
        </div>
      
        <div class="col">
          <label for="list_colonias">Colonias:</label>
          <select name="list_colonias" id="list_colonias" class="form-control">
          <option>Seleccione</option>
          </select>
         <br>
       </div>

        <div class="col">
          <label for="tipo_asentamiento">Tipo Asentamiento:</label>
          <input type="text" name="tipo_asentamiento" id="tipo_asentamiento" class="form-control">
          <br>
        </div> 

        <div class="col">
          <label for="municipio">Municipio:</label>
          <input type="text" name="municipio" id="municipio" class="form-control">
          <br>
        </div>
      </div>
      <div class="row g-3">
		<div class="col">
           <label for="estado">Estado:</label>
           <input type="text" name="estado" id="estado" class="form-control">
           <br>
         </div>  

        <div class="col">
          <label for="ciudad">Ciudad:</label>
          <input type="text" name="ciudad" id="ciudad" class="form-control">
          <br>
        </div>  

        <div class="col">
          <label for="pais">País:</label>
          <input type="text" name="pais" id="pais" class="form-control">
          <br>
        </div>
        </div> 
        
        
 

    <div class="row g-3">
    
    <div class="col">
					<label for="exampleInputPassword1">Tel.Madre:</label>
					<input type="text" class="form-control" id="telm" name="telm">
				</div>
			
			<br>
			
				<div class="col">
					<label for="exampleInputPassword1">Tel.Padre:</label>
					<input type="text" class="form-control" id="telp" name="telp">
				</div>
				<div class="col">
					<label for="exampleInputPassword1">Fecha de Nacimiento:</label>
					<input type="date" class="form-control" id="naci" name="naci">
				</div>
				<div class="col">
					<label for="exampleInputPassword1">Sexo:</label>
					<input type="radio" name="genero" value="hombre"> Hombre</input>
					<input type="radio" name="genero" value="mujer"> Mujer</input>
				</div>
			</div>
			<br>
			</form>
			</div>


			<div class="row g-3" style="background-color: #ffffff">
				<div class="col">
					<button type="submit" class="btn btn-primary" >GUARDAR INFORMACIÓN</button>
				</div>
				<!--<div class="col">
					<button type="button" class="btn btn-danger">CANCELAR REGISTRO</button>
				</div>-->
			</div>
		
	<br>
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
				<P>Berenice Varela Vazquez</P>
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

	

  </body>
</html>