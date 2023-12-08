<?php
require_once("model/connection.php");
require_once("model/matches-db.php");

$pageTitle= "Tournament Match";
Include "view/header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertMatch($_POST['Mdet'],$_POST['Mdate'], $_POST['Mcond'])) {
        echo '<div class="alert alert-success" role="alert">Match added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateMatch($_POST['Mdet'], $_POST['Mdate'], $_POST['Mcond'], $_POST['Mid'])) {
        echo '<div class="alert alert-success" role="alert">Match edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteMatch($_POST['Mid'])) {
        echo '<div class="alert alert-success" role="alert">Match deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$matches = selectMatches();
Include "view/matches/page.php";
Include "view/footer.php";
?>
