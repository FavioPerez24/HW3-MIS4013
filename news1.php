<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<section>
 <title>Top Stories</title>
</head>
<body>
 <div class="container">
    <article>
      <h2>Pedri: A Fall From Grace?</h2>
      <button class="btn btn-primary" onclick="toggleReadMore('article1')">
        Read More
      </button>
      <div id="article1" class="read-more">
        Potential flop in the market. Pedri's impressive performance in the 2020-2021 season for Barcelona did not continue in the 2021-2022 season. Although he started the season with great promise, Pedri struggled to find the consistency he showed during the previous campaign. Despite scoring only 2 goals and assisting in 4 more, his impact on the team was diminished. As the season progresses, Barcelona fans and pundits alike are eagerly awaiting Pedri's return to form.
        <br><br>
        In summary, while Pedri displayed exceptional skills and promise during the 2020-2021 season, his 2021-2022 season has been a letdown thus far. With increased scrutiny and expectations, it will be crucial for Pedri to regain his form and contribute significantly to Barcelona's success in the coming season.
      </div>
    </article>
    <article>
      <h2>Victor Osimhen: Back On Track?</h2>
      <button class="btn btn-primary" onclick="toggleReadMore('article2')">
        Read More
      </button>
      <div id="article2" class="read-more">
        Potential move in season 2024/2025. In his debut season with Napoli, Victor Osimhen made an immediate impact by scoring 24 goals and assisting in 6 more. Despite a promising start, Osimhen's performance took a downturn after suffering a foot injury. However, Osimhen has since recovered and made his return to the pitch, vowing to continue contributing to Napoli's success in the remaining games of the season.
      </div>
    </article>
    <article>
      <h2>Jude Bellingham: A Bitter Return</h2>
      <button class="btn btn-primary" onclick="toggleReadMore('article3')">
        Read More
      </button>
      <div id="article3" class="read-more">
        Next Ballon D' Or short-list. Jude Bellingham, the highly-touted 17-year-old winger at Real Madrid and Dortmund, continued to impress during his first professional season. He showed off his incredible technique and creativity, often dictating the pace of play for both clubs. However, his progression was halted after sustaining a muscle injury that sidelined him for several weeks. Upon returning to the field, Bellingham demonstrated his unwavering determination to overcome adversity, once again impressing coaches and teammates with his abilities.
      </div>
    </article>
 </div>

 <script>
    function toggleReadMore(articleID) {
      const article = document.getElementById(articleID);
      article.classList.toggle('show');
    }
 </script>
 </section>
  <section>
   <?php include "news-section.php"; ?>
  </section>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
