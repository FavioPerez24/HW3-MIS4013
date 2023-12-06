<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Players Polar Area Chart</title>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div style="width:75%">
   <canvas id="polarChartPlayer1"></canvas>
</div>

<div style="width:75%">
   <canvas id="polarChartPlayer2"></canvas>
</div>

<script>
   <?php
   function getChartData($player) {
      $labels = ['Goals', 'Shoots', 'Passes', 'Chances', 'Miles'];
      $data = [
         $player['Total_goals'],
         $player['Total_shoots'],
         $player['Total_passes'],
         $player['Total_chances'],
         $player['Total_miles']
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


