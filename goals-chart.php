<?php
require_once("model/connection.php");
require_once("model/goals-chart-db.php");

$pageTitle= "OUR CHARTS";
Include "view/header.php";
$stats = selectStats(); 
Include "view/goals-chart/page2.css";
Include "view/footer.php";
?>
