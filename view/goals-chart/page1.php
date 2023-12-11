<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Scouting Analysis</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-3">
  <h1 class="text-center">Our Scouting Analysis</h1>

  <section>
    <h1>OUR CHARTS</h1>
    <div>
      <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body">
          <h1>Goals' Stats by Player</h1>
          <div>
            <div>
              <!-- Create a valid canvas element with an ID -->
              <canvas id="myChart"></canvas>
            </div>
          </div>
          <div class="container mt-5">
            <div class="row">
              <div class="col-md-8 offset-md-2">
                <!-- Additional content or charts can be added here -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <p class="d-inline-flex gap-1">
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
    <!-- Add more buttons if needed -->
  </p>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
  // Ensure the DOM is fully loaded before executing Chart.js script
  document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('myChart').getContext('2d');

    <?php
    $stats = selectStats();
    $labels = [];
    $data = [];

    while ($stat = $stats->fetch_assoc()) {
      $labels[] = "'" . $stat['PName'] . "'";
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
  });
</script>

</body>
</html>
