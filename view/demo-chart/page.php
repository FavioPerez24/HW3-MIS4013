<h1>Player's Nationalities</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  <?php
  $stats = selectStats();
  $labels = [];
  $data = [];

  while ($stat = $stats->fetch_assoc()) {
    $labels[] = "'" . $stat['PNationalities'] . "'";
    $data[] = $stat['PlayersbyNat'];
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
     
