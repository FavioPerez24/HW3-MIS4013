<h1>Majors Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [ 
        <?php 
$majors = selectMajors();
  while ($major = $majors->fetch_assoc()) {
  echo "'" . $major[ 'major_name'] . "', ";
  }    
?>
],
      datasets: [{
        label: 'Majors',
        data: [ 
          <?php 
  while ($major = $majors->fetch_assoc()) {
  echo $major[ 'num_enrollees'] . ", ";
  }    
?>
],
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
