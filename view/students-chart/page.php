<h1>Students Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
          <?php 
  while ($student = $students->fetch_assoc()) {
  echo $student[ 'num_enrollments'] . ", ";
  }    
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
   <?php 
$students = selectStudents();
  while ($student = $students->fetch_assoc()) {
  echo "'" . $student[ 'Student_FirstName'] . "', ";
  }    
?>
    ]
},
  });
</script>
     
