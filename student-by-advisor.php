<?php
require_once("util-db.php");
require_once("model-student-by-advisor.php");

$pageTitle= "Student's Advisor";
Include "view-header.php";
$advisors = selectStudentbyAdvisor($_POST['aID']);
Include "view-student-by-advisor.php";
Include "view-footer.php";
?>
