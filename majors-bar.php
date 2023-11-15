<?php
require_once("model/connection.php");
require_once("model/majors-bar-db.php");

$pageTitle= "Majors Chart";
Include "view/header.php";
$majors = selectMajors();
Include "view/majors-bar/page.php";
Include "view/footer.php";
?>
