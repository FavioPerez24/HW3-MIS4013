<h1>Players Performance</h1>
<div>
   <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   <?php
   $stats = selectStats();
   $playerData = [];

   while ($stat = $stats->fetch_assoc()) {
      $playerName = $stat['Player_Name'];
      $labels = ['Goals', 'Shoots', 'Passes', 'Chances', 'Miles'];
      $data = [
         isset($stat['Total_goals']) ? $stat['Total_goals'] : 0,
         isset($stat['Total_shoots']) ? $stat['Total_shoots'] : 0,
         isset($stat['Total_passes']) ? $stat['Total_passes'] : 0,
         isset($stat['Total_chances']) ? $stat['Total_chances'] : 0,
         isset($stat['Total_miles']) ? $stat['Total_miles'] : 0,
      ];

      $playerData[] = [
         'playerName' => $playerName,
         'labels' => json_encode($labels),
         'data' => json_encode($data),
         'backgroundColor' => 'rgba(255, 99, 132, 0.5)'
      ];
   }
   ?>

   var ctx = document.getElementById('myChart').getContext('2d');

   <?php foreach ($playerData as $index => $data): ?>
      var chartData<?php echo $index; ?> = <?php echo json_encode($data); ?>;
      var chart<?php echo $index; ?> = new Chart(ctx, {
         type: 'polarArea',
         data: {
            labels: chartData<?php echo $index; ?>.labels,
            datasets: [{
               label: chartData<?php echo $index; ?>.playerName,
               data: chartData<?php echo $index; ?>.data,
               backgroundColor: chartData<?php echo $index; ?>.backgroundColor
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
   <?php endforeach; ?>
</script>
