<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

<div class="row">
    <div class="col">
<h1>Players Performance</h1>
    </div>
    <div class="col-auto">
    </div>
</div>
<div class="card-group">

<div>
   <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
<?php
$stats = selectStats();
$playerData = [];
?>

<?php while ($stat = $stats->fetch_assoc()): ?>
    <?php
    $playerName = $stat['Player_Name'];
    $labels = ['Goals', 'Shoots', 'Passes', 'Chances', 'Miles'];
    $data = [
        isset($stat['Total_goals']) ? $stat['Total_goals'] : 0,
        isset($stat['Total_shoots']) ? $stat['Total_shoots'] : 0,
        isset($stat['Total_passes']) ? $stat['Total_passes'] : 0,
        isset($stat['Total_chances']) ? $stat['Total_chances'] : 0,
        isset($stat['Total_miles']) ? $stat['Total_miles'] : 0,
    ];

    $playerData[] = [
        'playerName' => $playerName,
        'labels' => json_encode($labels),
        'data' => json_encode($data),
        'backgroundColor' => 'rgba(255, 99, 132, 0.5)'
    ];
    ?>
<?php endwhile; ?>

<?php foreach ($playerData as $index => $data): ?>
    <div>
        <h2><?php echo $data['playerName']; ?></h2>
        <canvas id="myChart<?php echo $index; ?>"></canvas>
    </div>

    <script>
        var ctx<?php echo $index; ?> = document.getElementById('myChart<?php echo $index; ?>').getContext('2d');
        var chartData<?php echo $index; ?> = <?php echo json_encode($data); ?>;
        var chart<?php echo $index; ?> = new Chart(ctx<?php echo $index; ?>, {
            type: 'polarArea',
            data: {
                labels: chartData<?php echo $index; ?>.labels,
                datasets: [{
                    label: chartData<?php echo $index; ?>.playerName,
                    data: chartData<?php echo $index; ?>.data,
                    backgroundColor: chartData<?php echo $index; ?>.backgroundColor
                }]
            },
            options: {
                scale: {
                    ticks: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
<?php endforeach; ?>
</script>
</div>
  </body>
</html>

