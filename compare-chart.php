<?php
require_once("model/connection.php");
require_once("model/compare-chart-db.php");

$pageTitle= "Performance Comparison Chart";
Include "view/header.php";
$stats = selectStats();
Include "view/compare-chart/page1.php";
Include "view/footer.php";
?>
