<?php
  $majors = selectMajors();
  $data = array();
  while ($major = $majors->fetch_assoc()) {
    $data[] = array($major['division'], $major['num_majors']);
  }
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Ensure the data is defined globally
      var chartData = <?php echo json_encode($data); ?>;
      
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        // Use the global variable for data
        var data = google.visualization.arrayToDataTable(chartData);

        var options = {
          title: 'Majors by Division Distribution'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
