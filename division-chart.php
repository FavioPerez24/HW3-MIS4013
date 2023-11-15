<?php
require_once("model/connection.php");
require_once("model/division-chart-db.php");

$pageTitle= "Division Chart";
Include "view/header.php";
$majors = selectMajors();
Include "view/division-chart/page.php";
Include "view/footer.php";
?>
