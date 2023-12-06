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
   // Sample data for two players
   $players = [
      [
         'Player_Name' => 'Player1',
         'Total_goals' => 10,
         'Total_shoots' => 20,
         'Total_passes' => 30,
         'Total_chances' => 5,
         'Total_miles' => 50,
      ],
      [
         'Player_Name' => 'Player2',
         'Total_goals' => 8,
         'Total_shoots' => 15,
         'Total_passes' => 25,
         'Total_chances' => 8,
         'Total_miles' => 45,
      ]
   ];

   foreach ($players as $player) {
      $playerName = $player['Player_Name'];
      $labels = ['Goals', 'Shoots', 'Passes', 'Chances', 'Miles'];
      $data = [
         $player['Total_goals'],
         $player['Total_shoots'],
         $player['Total_passes'],
         $player['Total_chances'],
         $player['Total_miles']
      ];
   ?>
   
   var ctx<?php echo $playerName; ?> = document.getElementById('polarChart<?php echo $playerName; ?>').getContext('2d');
   var chart<?php echo $playerName; ?> = new Chart(ctx<?php echo $playerName; ?>, {
      type: 'polarArea',
      data: {
         labels: <?php echo json_encode($labels); ?>,
         datasets: [{
            label: '<?php echo $playerName; ?>',
            data: <?php echo json_encode($data); ?>,
            backgroundColor: 'rgba(255, 99, 132, 0.5)'
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

   <?php } ?>
</script>

