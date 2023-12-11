<select class="form-select" id="Mid" name="Mid">
<?php
while ($matchItem = $matchList->fetch_assoc()) {
  $selText = "";
  if ($selectedMatch == $matchItem['MID']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $matchItem['MID']; ?>"<?=$selText?>><?php echo $matchItem['MID']; ?></option>
<?php
}
?>
</select>
