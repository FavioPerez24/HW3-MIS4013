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
</style>
</head>
<body>

<!-- Slide Show -->
<section>
 <img class="mySlides" src="https://wwwimage-us.pplusstatic.com/base/files/seo/ucl_social_1200x627.jpg"
 style="width:100%">
 <img class="mySlides" src="https://cdn.mos.cms.futurecdn.net/FCgDYSPyp4GTsvmhVMaUP6.jpg""
 style="width:100%">
 <img class="mySlides" src="https://www.aroged.com/wp-content/uploads/2023/04/Champions-League-202223-find-out-where-to-watch-the-games.jpeg"
 style="width:100%">
</section>

<!-- Company Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">THE UEFA COLLECTION</h2>
  <p class="w3-opacity"><i>Where data meets talent</i></p>
  <p class="w3-justify">"The UEFA Collection" stands as a pioneering recruiting agency dedicated to unveiling the untapped potential of young soccer talents. We meticulously collect, curate, and present comprehensive data on emerging players, providing in-depth reports that serve as invaluable resources for prospective teams. Our dynamic platform not only showcases the prowess of these budding athletes but also offers an engaging and visually compelling experience. With a commitment to revolutionizing the scouting landscape, "The UEFA Collection" is the go-to destination for teams seeking the next generation of soccer stars, blending data-driven insights with a touch of flair.</p>
</section>

<section class="w3-row-padding w3-center w3-light-grey">
    <article class="w3-third">
        <p>Our Players</p>
        <img src="https://pbs.twimg.com/media/F6fqek3XoAAMlKC?format=jpg&name=4096x4096" alt="The Gems" style="width:26%">
        <p>Get your Data scouted.</p>
    </article>
    <article class="w3-third">
        <p>Our Teams</p>
        <img src="https://editorial.uefa.com/resources/025f-1004f11c742c-1af8521465a3-1000/paris_saint_germain_v_real_madrid_-_uefa_champions_league.jpeg" alt="Supporters" style="width:100%">
        <p>Improve your team performance through individual analysis.</p>
    </article>
    <article class="w3-third">
        <p>Join Us</p>
        <img src="https://img.freepik.com/premium-vector/statistics-minimal-vector-line-icon-3d-button-isolated-black-background-premium-vector_570929-754.jpg" alt="Join Now" style="width:57%">
        <p>Be part of this community.</p>
    </article>
</section>

<!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Any suggestions or questions? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Oklahoma, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +405 9569422<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: theuefacollection@hotmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>  

	<h1 class="headline">
		The UEFA Collection.
	</h1>
	<p class="tagline">
		Where data meets talents
		<span class="punchline"> ... Get in touch ...</span>
	</p>
	<script>
		ScrollReveal().reveal('.headline')
		ScrollReveal().reveal('.tagline', { delay: 400 })
		ScrollReveal().reveal('.punchline', { delay: 750 })
	</script>
</body>
</html><?php
Include "view/footer.php";
?>
