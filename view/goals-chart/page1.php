<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OUR SCOUTING ANALYSIS</title>
  <!-- Include Bootstrap for styling -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include Chart.js library -->
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
      font-size: 20px;
      font-weight: bold;
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
      box-sizing: border-box;
    }

    canvas {
      max-width: 100%;
      max-height: 80%;
    }
  </style>
</head>
<body>

<div class="card" onclick="flipCard(this)">
  <div class="front">
    <h1>OUR CHARTS</h1>
  </div>
  <div class="back">
    <section>
      <h1>Goals' Stats by Player</h1>
      <div>
        <div>
          <canvas id="myChart"></canvas>
        </div>
      </div>
    </section>
  </div>
</div>

<script>
  function flipCard(card) {
    card.classList.toggle('flipped');
  }

  // Chart.js configuration
  const ctx = document.getElementById('myChart');

  <?php
  // Replace the following with your actual data retrieval logic
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
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<!-- Bootstrap JS for toggling the card -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
