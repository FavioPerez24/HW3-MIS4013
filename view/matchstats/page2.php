<div class="row">
    <div class="col">
        <h1>Match Stats by Player</h1>
    </div>
    <div class="col-auto">
        <?php include "new-form1.php"; ?>
    </div>
</div>

<div class="card-group">
    <?php
    $count = 0;
    while ($player = $players->fetch_assoc()) {
        if ($count % 2 == 0) {
            echo '<div class="row">';
        }
        include "player1.php";
        if ($count % 2 !== 0 || $players->num_rows % 2 !== 0) {
            echo '</div>';
        }
        $count++;
    }
    ?>
</div>
