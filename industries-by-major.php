<?php
require_once("util-db.php");
require_once("model-industries-by-major.php");

$pageTitle= "Industry by Major";
Include "view-header.php";
$majors = selectIndustrybyMajor($_POST['mid']);
Include "view-industry-by-major.php";
Include "view-footer.php";
?>
