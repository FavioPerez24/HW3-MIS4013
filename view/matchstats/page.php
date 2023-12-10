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
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Players Performance</h1>
        </div>
        <div class="col-auto">
            <?php include "new-form1.php"; ?>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php while ($player = $players->fetch_assoc()) { ?>
            <div class="col mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?php echo $player['PName']; ?></h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-stat" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePlayer<?php echo $player['PID']; ?>" aria-expanded="false" aria-controls="collapsePlayer<?php echo $player['PID']; ?>">
                            View performance
                        </button>
                        <a href="#" class="btn btn-dark">Edit</a>
                        <form method="post" action="">
                            <input type="hidden" name="Msid" value="<?php echo $match['MSID']; ?>">
                            <input type="hidden" name="actionType" value="Delete">
                            <button type="submit" class="btn btn-dark" onclick="return confirm('Are you sure?');">
                                Delete
                            </button>
                        </form>
                    </div>
                    <!-- Collapsible section for match stats -->
                    <div class="collapse" id="collapsePlayer<?php echo $player['PID']; ?>">
                        <div class="card card-body">
                            <?php $matches = selectMatchByPlayer($player['PID']);
                            while ($match = $matches->fetch_assoc()) { ?>
                                <p>Match ID: <?php echo $match['MID']; ?></p>
                                <p>Details: <?php echo $match['MDetails']; ?></p>
                                <p>Goals: <?php echo $match['Goals_Scored']; ?></p>
                                <p>Shoots On Target: <?php echo $match['Shoots']; ?></p>
                                <p>Passes Completed: <?php echo $match['Passes_Completed']; ?></p>
                                <p>Chances Created: <?php echo $match['Chances_Created']; ?></p>
                                <p>Miles Run: <?php echo $match['Miles_Run']; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>

