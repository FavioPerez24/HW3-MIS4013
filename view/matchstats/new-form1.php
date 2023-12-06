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
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newMatchStatsModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newMatchStatsModal" tabindex="-1" aria-labelledby="newMatchStatsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newMatchStatsModalLabel">New match data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
         <div class="mb-3">
            <label for="Pname" class="form-label">Player Name</label>
<?php
$playerList = selectPlayerForInput();
$selectedPlayer = 0;
include "player-input-list.php";
?>
          </div>
          <div class="mb-3">
            <label for="Mdet" class="form-label">Match Details</label>
<?php
$matchList = selectMatchForInput();
$selectedMatch = 0;
include "match-input-list.php";
?>
          </div>
          <div class="mb-3">
            <label for="Goal" class="form-label">Goals Scored</label>
            <input type="number" class="form-control" id="Goal" name="Goal">
          </div>
          <div class="mb-3">
            <label for="Shoots" class="form-label">Goals Scored</label>
            <input type="number" class="form-control" id="Shoots" name="Shoots">
          </div>
          <div class="mb-3">
            <label for="Passes" class="form-label">Passes Completed</label>
            <input type="number" class="form-control" id="Passes" name="Passes">
          </div>
          <div class="mb-3">
            <label for="Chances" class="form-label">Chances Created</label>
            <input type="number" class="form-control" id="Chances" name="Chances">
          </div>
          <div class="mb-3">
            <label for="Miles" class="form-label">Miles Run</label>
            <input type="number" class="form-control" id="Miles" name="Miles">
          </div>
            <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
      </body>
        </html>
