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
            width: 80%;
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
                        <button class="btn btn-stat" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePlayer<?php echo $player['PID']; ?>" aria-expanded="false" aria-controls="collapsePlayer<?php echo $player['PID']; ?>">
                            View performance
                        </button>
                        <a><?php include "edit-form1.php"; ?></a>
                        <form method="post" action="">
                            <input type="hidden" name="Msid" value="<?php echo $match['MSID']; ?>">
                            <input type="hidden" name="actionType" value="Delete">
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?');">
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

<!-- Your Footer Here -->

</body>
</html>

