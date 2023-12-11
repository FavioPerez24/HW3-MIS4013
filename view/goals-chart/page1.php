<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>DATA PERFORMANCE</title>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <?php include "main.js"; ?>
</head>
<body>
<div class="container">
  <button class="btn btn-primary" data-toggle="collapse" data-target="#chart1">
    Goals by Player
  </button>
  <button class="btn btn-primary" data-toggle="collapse" data-target="#chart2">
    Chances created by Player
  </button>
  <button class="btn btn-primary" data-toggle="collapse" data-target="#chart3">
    Players by Nationality
  </button>
  <button class="btn btn-primary" data-toggle="collapse" data-target=".chart-container">
    Show all Charts
  </button>
  <div class="collapse" id="chart1">
    <canvas id="chart1-canvas"></canvas>
  </div>
  <div class="collapse" id="chart2">
    <canvas id="chart2-canvas"></canvas>
  </div>
  <div class="collapse" id="chart3">
    <canvas id="chart3-canvas"></canvas>
  </div>
  <div class="collapse" id="all-charts">
    <div class="chart-container">
      <canvas id="chart1-canvas"></canvas>
      <canvas id="chart2-canvas"></canvas>
      <canvas id="chart3-canvas"></canvas>
    </div>
  </div>
</div>
  
</body>
</html>
