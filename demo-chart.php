<?php
require_once("model/connection.php");
require_once("model/demo-chart-db.php");

$pageTitle= "Player's Demographics";
Include "view/header.php";
$players = selectPlayers();
Include "view/demo-chart/page.php";
Include "view/footer.php";
?>
