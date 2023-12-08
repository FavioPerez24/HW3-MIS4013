<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#editMatchStatsModal<?php echo $match['MSID']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editMatchStatsModal<?php echo $match['MSID']; ?>" tabindex="-1" aria-labelledby="editMatchStatsModalLabel<?php echo $match['MSID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editMatchStatsModalLabel<?php echo $match['MSID']; ?>">Edit match</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="Pname<?php echo $player['PID']; ?>" class="form-label">Player Name</label>
<?php
$playerList = selectPlayerForInput();
$selectedPlayer = 0;
include "player-input-list.php";
?>
          </div>
            <label for="Mdet<?php echo $match['MSID']; ?>" class="form-label">Match Details</label>
         <?php
$matchList = selectMatchForInput();
$selectedMatch = 0;
include "match-input-list.php";
?>
          </div>   
          <div class="mb-3">
            <label for="Goal<?php echo $match['MSID']; ?>" class="form-label">Goals Scored</label>
            <input type="number" class="form-control" id="Goal<?php echo $match['MSID']; ?>" name="Goal" value="<?php echo $match['Goals_Scored']; ?>">
          </div>
          <div class="mb-3">
            <label for="Shoots<?php echo $match['MSID']; ?>" class="form-label">Shoots On Target</label>
            <input type="number" class="form-control" id="Shoots<?php echo $match['MSID']; ?>" name="Shoots" value="<?php echo $match['Shoots']; ?>">
          </div>
          <div class="mb-3">
            <label for="Passes<?php echo $match['MSID']; ?>" class="form-label">Passes Completed</label>
            <input type="number" class="form-control" id="Passes<?php echo $match['MSID']; ?>" name="Passes" value="<?php echo $match['Passes_Completed']; ?>">
          </div>
          <div class="mb-3">
            <label for="Chances<?php echo $match['MSID']; ?>" class="form-label">Chances Created</label>
            <input type="number" class="form-control" id="Chances<?php echo $match['MSID']; ?>" name="Chances" value="<?php echo $match['Chances_Created']; ?>">
          </div>
          <div class="mb-3">
            <label for="Miles<?php echo $match['MSID']; ?>" class="form-label">Miles Run</label>
            <input type="number" class="form-control" id="Miles<?php echo $match['MSID']; ?>" name="Miles" value="<?php echo $match['Miles_Run']; ?>">
          </div>
            <input type="hidden" name="Mid" value="<?php echo $match['MSID']; ?>">
            <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-secondary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
