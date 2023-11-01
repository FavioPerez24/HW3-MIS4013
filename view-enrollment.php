<div class="row">
  <div class="col">
<h1>Enrollment</h1>
  </div>
  <div class="col-auto">
<?php
include "view-enrollment-newform.php";
?>
  </div>
</div>
<div class="card-group">
<?php
while ($student = $students->fetch_assoc()) {
$majors= selectStudentbyMajor($student['Student_ID']);
  while ($major = $majors->fetch_assoc()) {
?>
    <div class="row">
      <div class="col">
        <li class="list-group-item"><?php echo $major['major_name']; ?> - <?php echo $major['division']; ?> - <?php echo $major['minimum_credit_hours']; ?></li>
      </div>
      <div class="col-auto">
<?php
include "view-enrollment-editform.php";
?>
      </div>
    </div>
<?php
  }
?>
