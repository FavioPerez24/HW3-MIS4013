<h1>Goals' Stats by Player</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'pie',
    data: {
    datasets: [{
        data: [
          <?php 
  while ($stat = $stats->fetch_assoc()) {
  echo $stat[ 'Total_goals'] . ", ";
  }    
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
   <?php 
$stats = selectStats();
  while ($stat = $stats->fetch_assoc()) {
  echo "'" . $stat[ 'Pname'] . "', ";
  }    
?>
    ]
},
  });
</script>
     
