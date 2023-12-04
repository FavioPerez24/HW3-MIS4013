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
		ScrollReveal().reveal('.tagline', { delay: 500 })
		ScrollReveal().reveal('.punchline', { delay: 2000 })
	</script>
</body>
</html><?php
Include "view/footer.php";
?>
