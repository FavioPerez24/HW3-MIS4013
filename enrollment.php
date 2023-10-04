<?php
require_once("util-db.php");
require_once("model-enrollment.php");

$pageTitle= "Enrollment";
Include "view-header.php";
$students = selectStudents();
Include "view-enrollment.php";
Include "view-footer.php";
?>
