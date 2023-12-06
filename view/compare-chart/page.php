<h1>Players Performance</h1>
   <div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   <?php
   function getChartData($stat) {
      $labels = ['Goals', 'Shoots', 'Passes', 'Chances', 'Miles'];
      $data = [
         isset($stat['Total_goals']) ? $stat['Total_goals'] : 0,
        isset($stat['Total_shoots']) ? $stat['Total_shoots'] : 0,
        isset($stat['Total_passes']) ? $stat['Total_passes'] : 0,
        isset($stat['Total_chances']) ? $stat['Total_chances'] : 0,
        isset($stat['Total_miles']) ? $stat['Total_miles'] : 0,
      ];

      return [
         'labels' => json_encode($labels),
         'data' => json_encode($data),
         'backgroundColor' => 'rgba(255, 99, 132, 0.5)'
      ];
   }

   $stats = selectStats();
   $playerIndex = 1;

   while ($stat = $stats->fetch_assoc()) {
      $playerName = $stat['Player_Name'];
   ?>
   
   var ctx<?php echo $playerIndex; ?> = document.getElementById('polarChartPlayer<?php echo $playerIndex; ?>').getContext('2d');
   var chartData<?php echo $playerIndex; ?> = <?php echo json_encode(getChartData($stat)); ?>;
   
   var chart<?php echo $playerIndex; ?> = new Chart(ctx<?php echo $playerIndex; ?>, {
      type: 'polarArea',
      data: {
         labels: chartData<?php echo $playerIndex; ?>.labels,
         datasets: [{
            label: '<?php echo $playerName; ?>',
            data: chartData<?php echo $playerIndex; ?>.data,
            backgroundColor: chartData<?php echo $playerIndex; ?>.backgroundColor
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

   <?php
      $playerIndex++;
   } ?>
</script>


