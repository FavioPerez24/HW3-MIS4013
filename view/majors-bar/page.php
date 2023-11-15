<h1>Majors Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const stackedBar = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        scales: {
            x: { 
              <?php 
  while ($major = $majors->fetch_assoc()) {
  echo $major[ 'num_enrollments'] . ", ";
  }    
?>
            },
            y: {1,2,3,4,5,6,7,8,9,10
                stacked: true
            }
        }
    }
});

</script>
