<h1>Player's Nationalities</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
  $players = selectPlayers();
  $labels = [];
  $data = [];
 $colors = [];


  while ($player = $players->fetch_assoc()) {
    $labels[] = "'" . $player['PNationality'] . "'";
    $data[] = $player['PlayersbyNat'];
        $colors[] = "'rgba(" . rand(0, 255) . ", " . rand(0, 255) . ", " . rand(0, 255) . ", 1)'";

  }
  ?>

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: [<?php echo implode(', ', $labels); ?>],
      datasets: [{
        label: 'Countries',
        data: [<?php echo implode(', ', $data); ?>],
        borderColor: [<?php echo implode(', ', $colors); ?>],
        backgroundColor: [<?php echo implode(', ', $colors); ?>],
      }],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      width: 100, // set the width
      height: 100, // set the height
    }
  });
</script>
     
