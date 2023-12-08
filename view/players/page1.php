<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    .card-img-top {
      height: 200px; /* Set the desired height */
      object-fit: cover; /* Crop the image to cover the specified dimensions */
      margin: 10px 0; /* Set the desired top and bottom margins */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Our Players</h1>
      </div>
      <div class="col-auto">
        <?php include "new-form.php"; ?>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php while ($player = $players->fetch_assoc()) { ?>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <img src="<?php echo $player['PImage']; ?>" class="card-img-top" alt="<?php echo $player['PName']; ?> Image">
              <h5 class="card-title"><?php echo $player['PName']; ?></h5>
              <p class="card-text">Date of Birth: <?php echo $player['PDOB']; ?></p>
              <p class="card-text">Nationality: <?php echo $player['PNationality']; ?></p>
              <p class="card-text">Position: <?php echo $player['PPosition']; ?></p>
              <?php include "edit-form.php"; ?>
              <form method="post" action="">
                <input type="hidden" name="PID" value="<?php echo $player['PID']; ?>">
                <input type="hidden" name="actionType" value="Delete">
                <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                  </svg>
                </button>
              </form>
              <a href="player-by-team.php?id=<?php echo $player['PID']; ?>" class="btn btn-primary">Team</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
