<?php
require_once("util-db.php");
require_once("model-majors.php");

$pageTitle= "Majors";
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
      if (updateMajor($_POST['mName'], $_POST['mDiv'], $_POST['mCred'], $_POST['mid'])) {
        echo '<div class="alert alert-success" role="alert">Major edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteMajor($_POST['mid'])) {
        echo '<div class="alert alert-success" role="alert">Major deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$majors = selectMajors();
Include "view-majors.php";
Include "view-footer.php";
?>
