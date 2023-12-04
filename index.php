<?php
$pageTitle= "Home";
Include "view/header.html";
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://unpkg.com/scrollreveal@4"></script>
<script>
	ScrollReveal({ duration: 1000 })
</script>
<style>
	h1.headline {text-align: center; animation: repeatText 3s linear infinite;}
	p.tagline {text-align: center; animation: repeatText 3s linear infinite;}
	.punchline {display: inline-block; animation: repeatText 3s linear infinite;}
	body {font-family: "Lato", sans-serif}
	@keyframes repeatText {
			0% { opacity: 1; }
			50% { opacity: 0; }
			100% { opacity: 1; }
		}
</style>
</style>
</head>
<body>
	<h1 class="headline">
		The UEFA Collection.
	</h1>
	<p class="tagline">
		Where data meets talents
		<span class="punchline"> ...Get in touch...</span>
	</p>
	<script>
		ScrollReveal().reveal('.headline')
		ScrollReveal().reveal('.tagline', { delay: 250 })
		ScrollReveal().reveal('.punchline', { delay: 500 })
	</script>
</body>
</html><?php
Include "view/footer.php";
?>
