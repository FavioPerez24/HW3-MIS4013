<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

        <?php
        $players = selectPlayers();
        while ($player = $players->fetch_assoc()) {
            $stats = selectStats($player['PID']);
            $playerData = [];
            ?>
            <div>
                <h2><?php echo $player['PName']; ?></h2>
                <canvas id="myChart<?php echo $player['PID']; ?>"></canvas>
            </div>

            <script>
                var ctx<?php echo $player['PID']; ?> = document.getElementById('myChart<?php echo $player['PID']; ?>').getContext('2d');
                var chartData<?php echo $player['PID']; ?> = {
                    labels: ['Goals', 'Shoots', 'Passes', 'Chances', 'Miles'],
                    data: [<?php
                            while ($stat = $stats->fetch_assoc()) {
                                echo $stat['Total_goals'] . ', ' . $stat['Total_shoots'] . ', ' . $stat['Total_passes'] . ', ' . $stat['Total_chances'] . ', ' . $stat['Total_miles'];
                            }
                            ?>],
                    backgroundColor: 'rgba(255, 99, 132, 0.5)'
                };

                var chart<?php echo $player['PID']; ?> = new Chart(ctx<?php echo $player['PID']; ?>, {
                    type: 'polarArea',
                    data: {
                        labels: chartData<?php echo $player['PID']; ?>.labels,
                        datasets: [{
                            label: '<?php echo $player['PName']; ?>',
                            data: chartData<?php echo $player['PID']; ?>.data,
                            backgroundColor: chartData<?php echo $player['PID']; ?>.backgroundColor
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

        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>
