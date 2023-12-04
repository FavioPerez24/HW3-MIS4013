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
        if ($count % 2 !== 0 || $students->num_rows % 2 !== 0) {
            echo '</div>';
        }
        $count++;
    }
    ?>
</div>
