<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<body>

<!-- Navigation -->
<nav class="w3-bar w3-black">
  <a href="page.php" class="w3-button w3-bar-item">Home</a>
  <a href="players.php" class="w3-button w3-bar-item">Gems</a>
  <a href="matchgame.php" class="w3-button w3-bar-item">Matchs</a>
  <a href="matchstats.php" class="w3-button w3-bar-item">Match Stats</a>
</nav>

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
        <img src="https://pbs.twimg.com/media/F6fqek3XoAAMlKC?format=jpg&name=4096x4096" alt="The Gems" style="width:100%">
        <p>Get your Data scouted.</p>
    </article>
    <article class="w3-third">
        <p>Our Teams</p>
        <img src="https://editorial.uefa.com/resources/025f-1004f11c742c-1af8521465a3-1000/paris_saint_germain_v_real_madrid_-_uefa_champions_league.jpeg" alt="Supporters" style="width:100%">
        <p>Improve your team performance through individual analysis.</p>
    </article>
    <article class="w3-third">
        <p>Join Us</p>
        <img src="https://cdn4.iconfinder.com/data/icons/user-interface-line-1/32/UI3-15-512.png" alt="Join Now" style="width:100%">
        <p>Be part of this community.</p>
    </article>
</section>

<script>
// Automatic Slideshow - change image every 3 seconds
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

</body>
</html>
