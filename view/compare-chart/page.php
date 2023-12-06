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
      <?php
  $stats = selectStats();
$labels[] = "'" . $stat['Player_Name'] . "'";
  $labels = [];
  $data = [];

  while ($stat = $stats->fetch_assoc()) {
   $label[] = ['Goals', 'Shoots', 'Passes', 'Chances', 'Miles'];
    $data[] = [$stat['Total_goals'], $stat['Total_shoots'], $stat['Total_passes'], $stat['Total_chances'], $stat['Total_miles']];
  }
  ?>
      var chart = new Chart(ctx, {
         type: 'polarArea',
         data: {
            labels: [<?php echo implode("', '", $labels); ?>],
            datasets: [{
               label: [<?php echo implode("', '", $label); ?>],
               data: [<?php echo implode(', ', $data); ?>],
               backgroundColor: ['rgba(255, 99, 132, 0.5)']
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
