<?php
require_once("util-db.php");
require_once("model-students.php");

$pageTitle= "Students";
Include "view-header.php";
$students = selectStudents();
Include "view-students.php";
Include "view-footer.php";
?>
