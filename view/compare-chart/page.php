<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interactive Chart Cards</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .card {
      width: 300px;
      height: 400px;
      perspective: 1000px;
      position: relative;
      cursor: pointer;
      margin: 20px;
    }

    .card div {
      width: 100%;
      height: 100%;
      position: absolute;
      backface-visibility: hidden;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-size: 18px;
      color: white;
    }

    .front {
      background-color: #3498db;
      transform: rotateY(0deg);
    }

    .back {
      background-color: #2ecc71;
      transform: rotateY(180deg);
      padding: 20px;
    }

    canvas {
      max-width: 100%;
      max-height: 100%;
    }
  </style>
</head>
<body>

<div class="card-group">

  <?php
  $players = selectPlayers();
  while ($player = $players->fetch_assoc()) {
      $stats = selectStats($player['PID']);
      $playerData = [];
      ?>
      <div class="card" onclick="flipCard(this)">
        <div class="front">
          <h2><?php echo $player['PName']; ?></h2>
        </div>
        <div class="back">
          <canvas id="myChart<?php echo $player['PID']; ?>"></canvas>
        </div>
      </div>

      <script>
        var ctx<?php echo $player['PID']; ?> = document.getElementById('myChart<?php echo $player['PID']; ?>').getContext('2d');
        var chartData<?php echo $player['PID']; ?> = {
          labels: ['Goals', 'Shoots', 'Passes', 'Chances', 'Miles'],
          datasets: [{
            label: '<?php echo $player['PName']; ?>',
            data: [<?php
              while ($stat = $stats->fetch_assoc()) {
                  echo $stat['Total_goals'] . ', ' . $stat['Total_shoots'] . ', ' . $stat['Total_passes'] . ', ' . $stat['Total_chances'] . ', ' . $stat['Total_miles'];
              }
              ?>],
            backgroundColor: 'rgba(255, 99, 132, 0.5)'
          }]
        };

        var chart<?php echo $player['PID']; ?> = new Chart(ctx<?php echo $player['PID']; ?>, {
          type: 'polarArea',
          data: {
            labels: chartData<?php echo $player['PID']; ?>.labels,
            datasets: [chartData<?php echo $player['PID']; ?>]
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

  <?php } ?>
</div>

<script>
  function flipCard(card) {
    card.classList.toggle('flipped');
  }
</script>

</body>
</html>
