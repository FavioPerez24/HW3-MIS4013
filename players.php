<?php
require_once("model/connection.php");
require_once("model/players-db.php");

$pageTitle= "Our Players";
Include "view/header.html";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertPlayer($_POST['$PName'],['$PDob'], ['$PNat'],['$PPos'], ['$Tid'])) {
        echo '<div class="alert alert-success" role="alert">Player added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updatePlayer($_POST['$PName'],['$PDob'],['$PNat'],['$PPos'],['$Tid'], $_POST['Pid'])) {
        echo '<div class="alert alert-success" role="alert">Player edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deletePlayer($_POST['Pid'])) {
        echo '<div class="alert alert-success" role="alert">Player deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$players = selectPlayers();
Include "view/players/page.php";
Include "view/footer.php";
?>
