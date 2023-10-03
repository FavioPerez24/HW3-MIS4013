<?php
require_once("util-db.php");
require_once("model-majors.php");

$pageTitle= "Majors";
Include "view-header.php";
$majors = selectMajors();
Include "view-majors.php";
Include "view-footer.php";
?>
