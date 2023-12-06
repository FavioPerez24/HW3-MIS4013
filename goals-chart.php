<?php
require_once("model/connection.php");
require_once("model/goals-chart-db.php");

$pageTitle= "Goals per Player";
Include "view/header.php";
$stats = selectStats();
Include "view/goals-chart/page.php";
Include "view/compare-chart/page.php";
Include "view/footer.php";
?>
