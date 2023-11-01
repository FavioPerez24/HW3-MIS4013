<select class="form-select" id="sid" name="sid">
<?php
while ($studentItem = $studentList->fetch_assoc()) {
  $selText = "";
  if ($selectedStudent == $studentItem['Student_ID']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $studentItem['Student_ID']; ?>"<?=$selText?>><?php echo $studentItem['Student_LastName ', 'Student_FirstName'"]; ?></option>
<?php
}
?>
</select>
