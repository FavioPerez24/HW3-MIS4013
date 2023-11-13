<?php
require_once("model/connection.php");
require_once("model/students-db.php");

$pageTitle= "Students Chart";
Include "view/header.php";
$students = selectStudents();
Include "view/students-chart/page.php";
Include "view/footer.php";
?>
