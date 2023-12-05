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
        <h1>Statistics</h1>
    </div>
    <div class="col-auto">
        <?php include "new-form.php"; ?>
    </div>
</div>
<div class="card-group">
    <?php
    $count = 0;
    while ($player = $players->fetch_assoc()) {
        if ($count % 2 == 0) {
            echo '<div class="row">';
        }        
                include "player.php";
        if ($count % 2 !== 0 || $players->num_rows % 2 !== 0) {
            echo '</div>';
        }
        $count++;
    }
    ?>
</div>
  </body>
</html>
