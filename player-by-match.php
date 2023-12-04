<?php
require_once("model/connection.php");
require_once("model/player-by-match-db.php");

$pageTitle= "Player by Match";
Include "view/header.html";
$matchs = selectPlayerbyMatch($_GET['id']);
Include "view/players-by-match.php";
Include "view/footer.php";
?>
