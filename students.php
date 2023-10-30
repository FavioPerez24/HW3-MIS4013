<?php
require_once("util-db.php");
require_once("model-students.php");

$pageTitle= "Students";
Include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertStudent($_POST['sFName'], $_POST['sLName'], $_POST['sGrad'], $_POST['aID'])) {
        echo '<div class="alert alert-success" role="alert">Student added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateStudent($_POST['sFName'], $_POST['sLName'], $_POST['sGrad'], $_POST['aID'])) {
        echo '<div class="alert alert-success" role="alert">Student edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteStudent($_POST['sID'])) {
        echo '<div class="alert alert-success" role="alert">Student deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$students = selectStudents();
Include "view-students.php";
Include "view-footer.php";
?>
