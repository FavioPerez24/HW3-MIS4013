<h1>Major's Distribution by Division</h1>
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
  while ($major = $majors->fetch_assoc()) {
  echo $major[ 'num_majors'] . ", ";
  }    
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
   <?php 
$majors = selectMajors();
  while ($major = $majors->fetch_assoc()) {
  echo "'" . $major[ 'division'] . "', ";
  }    
?>
    ]
},
  });
</script>
     
