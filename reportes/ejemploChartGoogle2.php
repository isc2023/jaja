<?php
$con=new mysqli("localhost","root","","jugueteria");
$sql="select nmarca,cantidad from marca";
$res=$con->query($sql);
?>
<html>
  <head>
  <!-- libreria-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--script javascript -->
    <script type="text/javascript">
    
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['MARCA','CANTIDAD DISPONIBLE'],
          <?php
          	while($fila=$res->fetch_assoc()){
          		echo "['".$fila["nmarca"]."',".$fila["cantidad"]."],";
          	}
          ?>
        ]);

        var options = {
           title: 'INFORMACIÓN DE MARCAS',
           is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          //PieChart -CIRCULAR
          //lineChart-Lineal
          //BarChart- Barra Horizontales
          //ColumnChart-Barra Verticales
          //AreaChart-  Area
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
