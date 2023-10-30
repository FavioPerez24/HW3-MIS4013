<select class="form-select" id="aid" name="aid">
<?php
while ($advisorItem = $advisorList->fetch_assoc()) {
  $selText = "";
  if ($selectedAdvisor == $AdvisorItem['Advisor_ID']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $advisorItem['Advisor_ID']; ?>"<?=$selText?>><?php echo $advisorItem['Advisor_Name']; ?></option>
<?php
}
?>
</select>
