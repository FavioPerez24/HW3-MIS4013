<?php
require_once("util-db.php");
require_once("model-student-by-advisor.php");

$pageTitle= "Student's Advisor";
Include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertAdvisor($_POST['aName'], $_POST['aMT'])) {
        echo '<div class="alert alert-success" role="alert">New Advisor added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateAdvisor($_POST['aName'], $_POST['aMT'], $_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Advisor edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteAdvisor($_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Advisor deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$advisors = selectStudentbyAdvisor($_GET['id']);
Include "view-student-by-advisor.php";
Include "view-footer.php";
?>
