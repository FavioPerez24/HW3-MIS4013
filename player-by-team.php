<?php
require_once("model/connection.php");
require_once("model/player-by-team-db.php");

$pageTitle= "Player's Team";
Include "view/header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertTeam($_POST['Tname'], $_POST['Tcountry'], $_POST['Tcoach'])) {
        echo '<div class="alert alert-success" role="alert">New Team added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateTeam($_POST['Tname'], $_POST['Tcountry'], $_POST['Tcoach'], $_POST['Tid'])) {
        echo '<div class="alert alert-success" role="alert">Team edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteTeam($_POST['Tid'])) {
        echo '<div class="alert alert-success" role="alert">Team deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$teams = selectPlayerbyTeam($_GET['Tid']);
Include "view/players/byteams/page.php";
Include "view/footer.php";
?>
