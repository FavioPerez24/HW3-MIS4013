<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 100%; /* Updated width to ensure three cards per row */
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

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php while ($player = $players->fetch_assoc()) { ?>
            <div class="col mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?php echo $player['PName']; ?></h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-stat" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStats<?php echo $player['PID']; ?>" aria-expanded="false" aria-controls="collapseStats<?php echo $player['PID']; ?>">
                            View Stats
                        </button>
                    </div>
                    <!-- Collapsible section for match stats -->
                    <div class="collapse" id="collapseStats<?php echo $player['PID']; ?>">
                        <div class="card card-body">
                            <?php $matches = selectMatchByPlayer($player['PID']);
                            while ($match = $matches->fetch_assoc()) { ?>
                                <div class="mb-3">
                                    <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMatch<?php echo $match['MID']; ?>" aria-expanded="false" aria-controls="collapseMatch<?php echo $match['MID']; ?>">
                                        Match Info - ID: <?php echo $match['MID']; ?>
                                    </button>
                                    <div class="collapse" id="collapseMatch<?php echo $match['MID']; ?>">
                                        <div class="card card-body">
                                            <p>Details: <?php echo $match['MDetails']; ?></p>
                                            <p>Goals: <?php echo $match['Goals_Scored']; ?></p>
                                            <p>Shoots On Target: <?php echo $match['Shoots']; ?></p>
                                            <p>Passes Completed: <?php echo $match['Passes_Completed']; ?></p>
                                            <p>Chances Created: <?php echo $match['Chances_Created']; ?></p>
                                            <p>Miles Run: <?php echo $match['Miles_Run']; ?></p>
                                            <?php include "edit-form1.php"; ?>
                                            <form method="post" action="">
                                                <input type="hidden" name="Msid" value="<?php echo $match['MSID']; ?>">
                                                <input type="hidden" name="actionType" value="Delete">
                                                <button type="submit" class="btn btn-dark" onclick="return confirm('Are you sure?');">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
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
    </div>
</div>

<!-- Your Footer Here -->

</body>
</html>
