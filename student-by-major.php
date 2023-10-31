<?php
require_once("util-db.php");
require_once("model-student-by-major.php");

$pageTitle= "Student by Major";
Include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertChoice($_POST['mName2'], $_POST['mDiv2'], $_POST['mCred2'])) {
        echo '<div class="alert alert-success" role="alert"> New Major added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateChoice($_POST['mName2'], $_POST['mDiv2'], $_POST['mCred2'], $_POST['mid2'])) {
        echo '<div class="alert alert-success" role="alert">Major edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteChoice($_POST['mid2'])) {
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
