<select class="form-select" id="Tid" name="Tid">
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
