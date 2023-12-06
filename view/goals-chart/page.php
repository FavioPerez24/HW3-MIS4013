<section>
  <h1>OUR CHARTS</h1>
</section>
    <div>
    </div>
<section>
<h1>Goals' Stats by Player</h1>
<div>
  div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</div>
<script>
  const ctx = document.getElementById('myChart');

  <?php
  $stats = selectStats();
  $labels = [];
  $data = [];

  while ($stat = $stats->fetch_assoc()) {
    $labels[] = "'" . $stat['Player_Name'] . "'";
    $data[] = $stat['Total_goals'];
  }
  ?>

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [<?php echo implode(', ', $labels); ?>],
      datasets: [{
        label: 'Total Goals per Player',
        data: [<?php echo implode(', ', $data); ?>],
      }],
    },
  });
</script>
</section>
<section>
  <h1>Player's Nationalities</h1>
<div>
  div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</div>

<script>
  const ctx = document.getElementById('myChart');

  <?php
  $players = selectPlayers();
  $labels = [];
  $data = [];

  while ($player = $players->fetch_assoc()) {
    $labels[] = "'" . $player['PNationality'] . "'";
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
</section>

