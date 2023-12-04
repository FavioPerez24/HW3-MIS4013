<select class="form-select" id="Pid" name="Pid">
<?php
while ($playerItem = $playerList->fetch_assoc()) {
  $selText = "";
  if ($selectedPlayer == $playerItem['PID']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $playerItem['PID']; ?>"<?=$selText?>><?php echo $playerItem['PName']; ?></option>
<?php
}
?>
</select>
