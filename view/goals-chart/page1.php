<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>DATA PERFORMANCE</title>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
  <script>
    // Initialize Chart.js
Chart.defaults.global.responsive = true;

// Create a new chart instance for each chart
var ctx1 = document.getElementById('chart1-canvas').getContext('2d');
var myChart1 = new Chart(ctx1, {
  type: 'line',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May'],
    datasets: [{
      label: 'Dataset 1',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1,
      data: [65, 59, 84, 70, 55]
    }]
  },
  options: {
    title: {
      display: true,
      text: 'Chart 1'
    }
  }
});

var ctx2 = document.getElementById('chart2-canvas').getContext('2d');
var myChart2 = new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May'],
    datasets: [{
      label: 'Dataset 2',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1,
      data: [40, 20, 30, 50, 60]
    }]
  },
  options: {
    title: {
      display: true,
      text: 'Chart 2'
    }
  }
});

var ctx3 = document.getElementById('chart3-canvas').getContext('2d');
var myChart3 = new Chart(ctx3, {
  type: 'radar',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May'],
    datasets: [{
      label: 'Dataset 3',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1,
      data: [80, 90, 70, 60, 50]
    }]
 },
 options: {
    title: {
      display: true,
      text: 'Chart 3'
    }
 }
});
  </script>
</body>
</html>
