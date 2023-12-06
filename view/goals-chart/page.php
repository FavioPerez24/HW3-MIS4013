<h1>Goals' Stats by Player</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section>
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
  <h1>Home</h1>
</section>


