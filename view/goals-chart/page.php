<section>
<h1>Goals' Stats by Player</h1>
<div>
  <div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</div>
  <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
<script>
  const ctx = document.getElementById('myChart');

  <?php
  $stats = selectStats();
  $labels = [];
  $data = [];
$colors = [];

  while ($stat = $stats->fetch_assoc()) {
    $labels[] = "'" . $stat['Player_Name'] . "'";
    $data[] = $stat['Total_goals'];
        $colors[] = "'rgba(" . rand(0, 255) . ", " . rand(0, 255) . ", " . rand(0, 255) . ", 0.6)'";
  }
  ?>

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [<?php echo implode(', ', $labels); ?>],
      datasets: [{
        label: 'Total Goals per Player',
        data: [<?php echo implode(', ', $data); ?>],
                backgroundColor: [<?php echo implode(', ', $colors); ?>],
      }],
    },
  });
</script>
</section>

