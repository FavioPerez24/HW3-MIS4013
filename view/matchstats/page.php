<?php
function getPlayers() {
    // Fetch players from the database and return them as an array
}

function generatePlayerHtml($player) {
    // Generate the HTML for a single player
}

$players = getPlayers();
?>

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
    foreach ($players as $player) {
        if ($count % 2 == 0) {
            echo '<div class="row">';
        }
        
        echo generatePlayerHtml($player);
        
        if ($count % 2 !== 0) {
            echo '</div>';
        }
        $count++;
    }
    ?>
</div>
 </body>
</html>
