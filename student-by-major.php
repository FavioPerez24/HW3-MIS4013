<?php
require_once("util-db.php");
require_once("model-student-by-major.php");

$pageTitle= "Student by Major";
Include "view-header.php";
$majors = selectStudentbyMajor($_GET['id']);
Include "view-student-by-major.php";
Include "view-footer.php";
?>
