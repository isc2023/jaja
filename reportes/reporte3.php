<?php
$con=new mysqli("localhost",'root','',"sis_venta");
$sql="select * from producto";
$res=$con->query($sql);
?>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Reportes</title>

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.arrayToDataTable([
          ['descripcion','Cantidad'],
          <?php
          while($fila=$res->fetch_assoc()){
            echo "['".$fila["descripcion"]."',".$fila["existencia"]."],";
          }
          ?>
          ]);
       
        // Set chart options
        var options = {'title':'Productos existentes',
                       'width':600,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        //LineChart   grafica de  lineas
        //PieChart  grafica de  pastel
        //BarChart   grafica de  barras horizontales
        //ColumnChart  grafica de  barras  verticales
        //AreaChart   graficas de  area
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
  <!--ENCABEZADO-->
    <header>
    <?php include_once("vistas/includes/encabezado.php");?>
  </header>
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

    <!--DIV  DONDE  SE  MUESTRA  LA  GRAFICA-->
    <div class="container" style="text-align: center;">
    <div style="padding-left: 300px" id="chart_div"></div>
    </div>
   <!--PIE DE  PAGINA-->
   <footer>
    <?php include_once("vistas/includes/pie.php");?>
  </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
  </body>
</html>