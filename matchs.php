<?php
require_once("model/connection.php");
require_once("model/matchs-db.php");

$pageTitle= "Tournament Match";
Include "view/header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertMatch($_POST['Home-TID'], $_POST['Away-TID'], $_POST['MDate'], $_POST['MDetails'], $_POST['MConditions'])) {
        echo '<div class="alert alert-success" role="alert">Major added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateMatch($_POST['Home-TID'], $_POST['Away-TID'], $_POST['MDate'], $_POST['MDetails'], $_POST['MConditions'], $_POST['Mid'])) {
        echo '<div class="alert alert-success" role="alert">Major edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteMatch($_POST['Mid'])) {
        echo '<div class="alert alert-success" role="alert">Major deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$matchgames = selectMatchGames();
Include "view/matchgames/page.php";
Include "view/footer.php";
?>
