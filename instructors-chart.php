<?php
require_once("util-db.php");
require_once("model/students.php");

$pageTitle= "Students Chart";
Include "view/header.php";
$students = selectStudents();
Include "view/students-chart/page.php";
Include "view/footer.php";
?>
