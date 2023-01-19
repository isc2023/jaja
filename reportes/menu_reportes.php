<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Reportes</title>
  </head>
  <body>
    <header>
    <?php include_once("vistas/includes/encabezado.php");?>
  </header>
  <main>
  <div class="container" style="background-color: #C70039; color: #F7EAE7">
    <ul class="nav" style="padding-left: 500px">
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #F7EAE7">A CERCA DE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #F7EAE7">REGISTRARSE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #F7EAE7">INICIAR SESIÓN</a>
      </li>
  </ul>
     <div>
     <div class="container" style="background: #ffffff;text-align: center">
     <img src="vistas/img/imagen4.jpg" height="600px" width="700px">
     </div>

     <div class="container" style="background: #ffffff;text-align: center">
     <button class="btn btn-light"><a href="reporte1.php">REPORTES EN PDF</a></button>
     
     <button class="btn btn-light"><a href="reporte2.php">REPORTES EN EXCEL</a></button>
  
     <button class="btn btn-light"><a href="reporte3.php">GRÁFICAS</a></button>
     </div>
     <br>
  </main>
  <footer>
    <?php include_once("vistas/includes/pie.php");?>
  </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>