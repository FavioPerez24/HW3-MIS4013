<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Goals' Stats by Player</title>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
 <section>
    <h1>Goals' Stats by Player</h1>
    <div>
      <div>
        <canvas id="myChart1"></canvas>
      </div>
    </div>
 </section>

 <script>
    const ctx = document.getElementById('myChart1');

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
</body>
</html>
