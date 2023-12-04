<select class="form-select" id="TID" name="TID">
<?php
while ($teamItem = $teamList->fetch_assoc()) {
  $selText = "";
  if ($selectedTeam == $teamItem['TID']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $teamItem['TID']; ?>"<?=$selText?>><?php echo $teamItem['TName']; ?></option>
<?php
}
?>
</select>
