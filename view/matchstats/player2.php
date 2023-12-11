  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $player['Pname']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $matches = selectMatchByPlayer($player['PID']);
  while ($match = $matches->fetch_assoc()) {
    include "match2.php";
  }
?>
      </ul>
      </p>
    </div>
  </div>
