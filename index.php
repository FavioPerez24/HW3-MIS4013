<?php
$pageTitle= "Home";
Include "view/header.php";
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://unpkg.com/scrollreveal@4"></script>
<style>
	h1.headline {text-align: center;}
	p.tagline {text-align: center; animation: repeatText 5s linear infinite;}
	.punchline {display: inline-block; animation: repeatText 5s linear infinite;}
	body {font-family: "Lato", sans-serif}
	@keyframes repeatText {
			0% { opacity: 1; }
			50% { opacity: 0; }
			100% { opacity: 1; }
		}
</style>


<?php
Include "home.html";
?>
<?php
Include "view/footer.php";
?>
