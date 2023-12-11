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
<script>
  const ctx = document.getElementById('myChart').getContext('2d');
  // Replace PHP data with your actual data
  const labels = ['Player1', 'Player2', 'Player3']; // Replace with your player names
  const data = [10, 15, 8]; // Replace with your goal data

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: 'Total Goals per Player',
        data: data,
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>