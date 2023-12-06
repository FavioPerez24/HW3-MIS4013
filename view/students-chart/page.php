<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Player Polar Area Chart</title>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
   <div style="width:75%">
      <canvas id="polarChart"></canvas>
   </div>
   <script>
      var ctx = document.getElementById('polarChart').getContext('2d');
      var chart = new Chart(ctx, {
         type: 'polarArea',
         data: {
            labels: ['Goals', 'Passes', 'Chances', 'Miles', 'Shoots'],
            datasets: [{
               label: 'Player A',
               data: [20, 10, 5, 30, 25],
               backgroundColor: ['rgba(255, 99, 132, 0.5)']
            }, {
               label: 'Player B',
               data: [15, 8, 4, 25, 20],
               backgroundColor: ['rgba(75, 192, 192, 0.5)']
            }]
         },
         options: {
            scale: {
               ticks: {
                 beginAtZero: true
               }
            }
         }
      });
   </script>
</body>
</html>
