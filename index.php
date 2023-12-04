<?php
$pageTitle= "Home";
Include "view/header.php";
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://unpkg.com/scrollreveal@4"></script>
<style>
    h1.headline {
        text-align: center;
        font-size: 4rem;
        animation: pulsate 10s ease-in-out infinite;
	font-family: "Verdana", sans-serif;
    }
    p.tagline {
        text-align: center;
        animation: repeatText 15s linear infinite;
    }
    .punchline {
        display: inline-block;
        animation: repeatText 15s linear infinite;
    }
    @keyframes pulsate {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
    @keyframes repeatText {
        0% { opacity: 1; }
        50% { opacity: 0; }
        100% { opacity: 1; }
    }
</style>
</script>  

	<h1 class="headline">
		The UEFA Collection.
	</h1>
	<p class="tagline">
		Where data meets talents
		<span class="punchline"> ... Get in touch ...</span>
	</p>
</head>
</html>
<?php
Include "home.html";
?>
<?php
Include "view/footer.php";
?>
