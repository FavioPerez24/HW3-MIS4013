<?php
require_once("model/connection.php");
require_once("model/matchstats-db.php");

$pageTitle= "Enrollment";
Include "view/header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertMatchStats($_POST['Mid'], $_POST['Pid'], $_POST['Goal'], $_POST['Shoots'], $_POST['Passes'], $_POST['Chances'], $_POST['Miles'])) {
        echo '<div class="alert alert-success" role="alert">Statistics added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateMatchStats($_POST['Mid'], $_POST['Pid'], $_POST['Goal'], $_POST['Shoots'], $_POST['Passes'], $_POST['Chances'], $_POST['Miles'], $_POST['Msid'])) {
        echo '<div class="alert alert-success" role="alert">Statistics edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteMatchStats($_POST['Msid'])) {
        echo '<div class="alert alert-success" role="alert">Stats deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$players = selectPlayers();
Include "view/matchstats/page.php";
Include "view/footer.php";
?>
