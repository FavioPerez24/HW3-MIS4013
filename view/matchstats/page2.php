<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <style>
    
.table-bordered th, .table-bordered td {
    border: 1px solid #dee2e6;
}

.table-hover tbody tr:hover {
    color: #212529;
    background-color: rgba(0,0,0,0.075);
}
        
        .btn-add {
            background-color: #28a745;
            color: #fff;
        }

        .btn-edit {
            background-color: #007bff;
            color: #fff;
        }

        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-stat {
            background-color: #6c757d;
            color: #fff;
        }
    </style>
</head>
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
        include "player.php";
        if ($count % 2 !== 0 || $players->num_rows % 2 !== 0) {
            echo '</div>';
        }
        $count++;
    }
    ?>
</div>
