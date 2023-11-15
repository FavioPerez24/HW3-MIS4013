<?php
require_once("model/connection.php");
require_once("model/graduation-line-db.php");

$pageTitle= "Graduation Statistics";
Include "view/header.php";
$students = selectStudents();
Include "view/graduation-line/page.php";
Include "view/footer.php";
?>
