<?php
require_once("model/connection.php");
require_once("model/match-by-player-db.php");

$pageTitle= "Match by Player";
Include "view/header.php";
$matches = selectMatchbyPlayer($_GET['id']);
Include "view/match-by-player.php";
Include "view/footer.php";
?>
