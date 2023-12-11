<div class="row">
  <div class="col">
<h1>Match Stats by Player</h1>
  </div>
  <div class="col-auto">
<?php
include "new-form1.php";
?>
  </div>
</div>
<div class="card-group">
<?php
while ($player = $players->fetch_assoc()) {
  include "player2.php";
}
?>
</div>
