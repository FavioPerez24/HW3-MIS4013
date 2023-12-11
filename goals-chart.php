<?php
require_once("model/connection.php");
require_once("model/goals-chart-db.php");

$pageTitle= "OUR CHARTS";
Include "view/header.php";
$stats = selectStats(); 
$players = selectPlayers();
Include "view/goals-chart/page1.php";
Include "view/footer.php";
?>
