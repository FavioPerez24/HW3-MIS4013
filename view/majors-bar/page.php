<h1>Majors Chart</h1>
<div>

  
const stackedBar = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        scales: {
            x: {
                stacked: true
            },
            y: {
                stacked: true
            }
        }
    }
});

<?php 
  while ($major = $majors->fetch_assoc()) {
  echo $major[ 'num_enrollments'] . ", ";
  }    
?>
