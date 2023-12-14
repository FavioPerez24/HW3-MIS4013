<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Players Stats</title>
 </head>
 <body>
    <div class="container">
      <h1 class="my-5">Player Stats</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Player Name</th>
            <th scope="col">Match ID</th>
            <th scope="col">Goals</th>
            <th scope="col">Shoots On Target</th>
            <th scope="col">Passes Completed</th>
            <th scope="col">Chances Created</th>
            <th scope="col">Miles Run</th>
          </tr>
        </thead>
        <tbody>
<?php
$statsList = selectAllStats();

if ($statsList->rowCount() > 0) {
 $i = 1;
 while ($row = $statsList->fetch()) {
    $player = selectPlayerById($row['Pid']);
    $match = selectMatchById($row['Mid']);
?>
          <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo $player['Pname']; ?></td>
            <td><?php echo $match['MatchId']; ?></td>
            <td><?php echo $row['Goal']; ?></td>
            <td><?php echo $row['Shoots']; ?></td>
            <td><?php echo $row['Passes']; ?></td>
            <td><?php echo $row['Chances']; ?></td>
            <td><?php echo $row['Miles']; ?></td>
          </tr>
<?php
    $i++;
 }
} else {
?>
          <tr>
            <td colspan="8" class="text-center">No match data available</td>
          </tr>
<?php
}
?>
        </tbody>
      </table>
    </div>
 </body>
</html>
