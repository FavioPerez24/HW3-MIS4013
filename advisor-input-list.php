<select class="form-select" id="zid" name="zid">
<?php
while ($advisorItem = $advisorList->fetch_assoc()) {
  $selText = "";
  if ($selectedAdvisor == $advisorItem['Advisor_ID']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $advisorItem['Advisor_ID']; ?>"<?=$selText?>><?php echo $advisorItem['Advisor_Name']; ?></option>
<?php
}
?>
</select>
