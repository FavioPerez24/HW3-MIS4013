<?php
require_once("util-db.php");
require_once("model-student-by-major.php");

$pageTitle= "Student by Major";
Include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertMajor($_POST['mName'], $_POST['mDiv'], $_POST['mCred'])) {
        echo '<div class="alert alert-success" role="alert">Major added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateMajor($_POST['mName'], $_POST['mDiv'], $_POST['mCred'], $_POST['mID'])) {
        echo '<div class="alert alert-success" role="alert">Major edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteMajor($_POST['mID'])) {
        echo '<div class="alert alert-success" role="alert">Major deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$majors = selectStudentbyMajor($_GET['id']);
Include "view-student-by-major.php";
Include "view-footer.php";
?>
