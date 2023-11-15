<h1>Majors Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  <?php
  $majors = selectMajors();
  $labels = [];
  $data = [];

  while ($major = $majors->fetch_assoc()) {
    $labels[] = "'" . $major['major_name'] . "'";
    $data[] = $major['num_enrollees'];
  }
  ?>

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [<?php echo implode(', ', $labels); ?>],
      datasets: [{
        label: '# of Enrollments per Major',
        data: [<?php echo implode(', ', $data); ?>],
      }],
    },
  });
</script>


