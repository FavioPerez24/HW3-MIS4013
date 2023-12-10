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
        .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 100%; 
        border-radius: 5px;
        margin: 10px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
        padding: 2px 16px;
    }
    </style>
    <style>
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
<body>
    
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1>Statistics by Player</h1>
        </div>
        <div class="col-auto">
            <?php include "new-form1.php"; ?>
        </div>
    </div>
</div>

<?php
$players = selectAllPlayers();
while ($player = $players->fetch_assoc()) {
    $matchstats = selectMatchStatsByPlayer($player['PID']);
?>
    <div class="card">
        <div class="card-header">
            Player Name: <?php echo $player['Pname']; ?>
        </div>
        <div class="card-body">
            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStats<?php echo $player['PID']; ?>" aria-expanded="false" aria-controls="collapseStats<?php echo $player['PID']; ?>">
                View Stats
            </button>
            <div class="collapse" id="collapseStats<?php echo $player['PID']; ?>">
                <div class="card card-body">
                    <?php
                    while ($matchstat = $matchstats->fetch_assoc()) { ?>
                        <div class="mb-3">
                            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMatchstat<?php echo $matchstat['MSID']; ?>" aria-expanded="false" aria-controls="collapseMatchstat<?php echo $matchstat['MSID']; ?>">
                                Match Number: <?php echo $matchstat['MSID']; ?>
                            </button>
                            <div class="collapse" id="collapseMatchstat<?php echo $matchstat['MSID']; ?>">
                                <div class="card card-body">
                                    <!-- Display match details here -->
                                   
                                    <form method="post" action="">
                                        <input type="hidden" name="Msid" value="<?php echo $matchstat['MSID']; ?>">
                                        <input type="hidden" name="actionType" value="Edit">
                                        <button type="submit" class="btn btn-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <!-- Pencil SVG here -->
                                            </svg>
                                        </button>
                                    </form>
                                    
                                    <form method="post" action="">
                                        <input type="hidden" name="Msid" value="<?php echo $matchstat['MSID']; ?>">
                                        <input type="hidden" name="actionType" value="Delete">
                                        <button type="submit" class="btn btn-dark" onclick="return confirm('Are you sure?');">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <!-- Trash SVG here -->
                                            </svg>
                                        </button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

</body>
</html>
