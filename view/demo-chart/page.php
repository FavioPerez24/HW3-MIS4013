<h1>Player's Nationalities</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  <?php
  $players = selectPlayers();
  $labels = [];
  $data = [];

  while ($player = $player->fetch_assoc()) {
    $labels[] = "'" . $player['PNationalities'] . "'";
    $data[] = $player['PlayersbyNat'];
  }
  ?>

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: [<?php echo implode(', ', $labels); ?>],
      datasets: [{
        label: 'Countries',
        data: [<?php echo implode(', ', $data); ?>],
      }],
    },
  });
</script>
     
