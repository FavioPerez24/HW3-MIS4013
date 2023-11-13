<?php
require_once("model/connection.php");
require_once("model/students-by-major-db.php");

$pageTitle= "Student by Major";
Include "view/header.php";
$majors = selectStudentbyMajor($_GET['id']);
Include "view/students-by-major.php";
Include "view/footer.php";
?>
