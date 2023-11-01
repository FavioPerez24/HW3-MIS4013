<select class="form-select" id="mid" name="mid">
<?php
while ($majorItem = $majorList->fetch_assoc()) {
  $selText = "";
  if ($selectedMajor == $majorItem['program_code']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $majorItem['program_code']; ?>"<?=$selText?>><?php echo $majorItem['major_name']; ?></option>
<?php
}
?>
</select>
