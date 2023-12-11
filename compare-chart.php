<?php
require_once("model/connection.php");
require_once("model/compare-chart-db.php");

$pageTitle= "Performance Comparison Chart";
Include "view/header.php";
$players = selectPlayers();
Include "view/compare-chart/page.php";
Include "view/footer.php";
?>
