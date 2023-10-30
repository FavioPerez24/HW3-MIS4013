<?php
require_once("util-db.php");
require_once("model-enrollment.php");

$pageTitle= "Enrollment";
Include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertEnrollment($_POST['mID'], $_POST['sID'])) {
        echo '<div class="alert alert-success" role="alert">Enrollment added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateEnrollment($_POST['mID'], $_POST['sID'], $_POST['eID'])) {
        echo '<div class="alert alert-success" role="alert">Enrollment edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteEnrollment($_POST['eid'])) {
        echo '<div class="alert alert-success" role="alert">Enrollment deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$students = selectStudents();
Include "view-enrollment.php";
Include "view-footer.php";
?>
