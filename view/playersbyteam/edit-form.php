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
<button type="button" class="btn btn-edit" data-bs-toggle="modal" data-bs-target="#editTeamModal<?php echo $team['TID']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editTeamModal<?php echo $team['TID']; ?>" tabindex="-1" aria-labelledby="editTeamModalLabel<?php echo $team['TID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editTeamModalLabel<?php echo $team['TID']; ?>">Edit Team</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
            <label for="Tid<?php echo $player['TID']; ?>"" class="form-label">Team Name</label>
<?php
$teamList = selectTeamsForInput();
$selectedTeam = $team['TID'];
include "team-input-list.php";
?>
          </div>
          <div class="mb-3">
            <label for="Tcountry<?php echo $team['TID']; ?>" class="form-label">Country</label>
            <input type="text" class="form-control" id="Tcounntry<?php echo $team['TID']; ?>" name="Tcountry" value="<?php echo $team['TCountry']; ?>">
          </div>
         <div class="mb-3">
            <label for="Tcoach<?php echo $team['TID']; ?>" class="form-label">Coach</label>
            <input type="text" class="form-control" id="Tcoach<?php echo $team['TID']; ?>" name="Tcoach" value="<?php echo $team['TCoach']; ?>">
          </div>
            <input type="hidden" name="Tid" value="<?php echo $team['TID']; ?>">
            <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-secondary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
