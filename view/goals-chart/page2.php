<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/5v4e/nF9jA9B+vT/nDpQJmTxoUdDmMJn+eTzUkqEgMvgfZQy" crossorigin="anonymous">
</head>
<body>
 <div class="container">
    <div class="row">
      <div class="col-6">
        <h4>Collapsible 1</h4>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
          Toggle Collapsible 1
        </button>
        <div class="collapse" id="collapse1">
          <div class="card card-body">
            <canvas id="collapse1-canvas"></canvas>
          </div>
        </div>
      </div>
      <div class="col-6">
        <h4>Collapsible 2</h4>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
          Toggle Collapsible 2
        </button>
        <div class="collapse" id="collapse2">
          <div class="card card-body">
            <canvas id="collapse2-canvas"></canvas>
          </div>
        </div>
      </div>
    </div>
 </div>

 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-RfFvkMxTktE4vQGKZZxJFK8dE9Za5+v/vC+Vgmf+CbMxMkRtQfZnZvxKFgPmV9ZjVjxCmC+3YkN" crossorigin="anonymous"></script>

 <!-- Chart.js -->
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

 <script>
   // Initialize Chart.js
   Chart.defaults.global.responsive = true;

   // Function to initialize chart
   function initChart(chartId, chartType, label, backgroundColor, borderColor, borderWidth, data) {
      var ctx = document.getElementById(chartId).getContext('2d');
      var myChart = new Chart(ctx, {
        type: chartType,
        data: {
          labels: ['January', 'February', 'March', 'April', 'May'],
          datasets: [{
            label: label,
            backgroundColor: backgroundColor,
            borderColor: borderColor,
            borderWidth: borderWidth,
            data: data
          }]
        },
        options: {
          title: {
            display: true,
            text: label
          }
        }
      });
   }

   // Function to handle chart initialization when a collapse element is shown
   function handleChartShow(event) {
      var chartId = event.target.id.replace('-canvas', '');
      initChart(chartId + '-canvas', 'line', 'Dataset 1', 'rgba(255, 99, 132, 0.2)', 'rgba(255, 99, 132, 1)', 1, [65, 59, 84, 70, 55]);
   }

   // Attach event listener for when a collapse element is shown
   document.querySelectorAll('.collapse').forEach(function(item) {
      item.addEventListener('shown.bs.collapse', handleChartShow);
   });

   // Manually trigger event for first chart to be initialized
   document.getElementById('collapse1').dispatchEvent(new Event('shown.bs.collapse'));
 </script>
</body>
</html>
