<?php

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
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7],
          ['WATCH SERIES',25]
        ]);

        var options = {
          title: 'ACTIVIDADES  EN PANDEMIA',
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
