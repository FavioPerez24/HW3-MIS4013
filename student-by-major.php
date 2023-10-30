<?php
require_once("util-db.php");
require_once("model-student-by-major.php");

$pageTitle= "Student by Major";
Include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertChoice($_POST['mID'], $_POST['cid'], $_POST['sem'], $_POST['room'], $_POST['daytime'])) {
        echo '<div class="alert alert-success" role="alert">Section added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateChoice($_POST['iid'], $_POST['cid'], $_POST['sem'], $_POST['room'], $_POST['daytime'], $_POST['sid'])) {
        echo '<div class="alert alert-success" role="alert">Section edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteChoice($_POST['sid'])) {
        echo '<div class="alert alert-success" role="alert">Section deleted.</div>';
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
