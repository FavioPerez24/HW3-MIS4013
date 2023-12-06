<!doctype html>
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
    
<div class="row">
  <div class="col">
<h1>Match Statistics</h1>
  </div>
  <div class="col-auto">
    <div>
  </div>
<?php
include "new-form1.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Match ID</th>
      <th>Player Name</th>
      <th>Details</th>
      <th>Goals</th>
      <th>Shoots On Target</th>
      <th>Passes Completed</th>
      <th>Chances Created</th>
      <th>Miles Run</th>
      <th></th>
      <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while ($player = $players->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $player['PName']; ?></td>
<?php
  $matches = selectMatchByPlayer($player['PID']);
  while ($match = $matches->fetch_assoc()) {
?>
        <td><?php echo $match['MID']; ?></td>
        <td><?php echo $match['MDetails']; ?></td>
        <td><?php echo $match['Goals_Scored']; ?></td>
        <td><?php echo $match['Shoots']; ?></td>
        <td><?php echo $match['Passes_Completed']; ?></td>
        <td><?php echo $match['Chances_Created']; ?></td>
        <td><?php echo $match['Miles_Run']; ?></td>
        <td><?php include "edit-form1.php"; ?></td>
        <td>
<?php
    } 
    ?>    
      <form method="post" action="">
        <input type="hidden" name="Msid" value="<?php echo $stat['MSID']; ?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
          </svg>
        </button>
      </form>
    </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
  </body>
</html>
