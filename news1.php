<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Top Stories</title>
  <link rel="stylesheet" href="news-styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>
        .all-browsers {
            background-color: black;
            padding: 20px;
          border-radius: 10px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        margin: 10px; 
        color: white;
        font-family: 'Arial', sans-serif; 
        font-size: 1.2em; 
        text-align: center; 
        line-height: 1.5;
        }
  .browsers {
            background-color: black;
            padding: 20px; 
        margin: 10px; 
        color: white;
        font-family: 'Arial', sans-serif; 
        font-size: 3em; 
        text-align: center; 
        line-height: 1.5;
        }
    </style>
</head>
<body>
  <section>
    <div>
<h1 class="browsers">Weekly Highlights</h1>
    </div>
   <?php include "news-section.php"; ?>
  </section>
  <section>
  <article class="all-browsers">
    <h1>Performance Reports</h1>
      <div class="accordion text-bg-dark p-3" id="title">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Rico Lewis
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Potential rise in its market value. </strong>In the 2020-2021 season, Rico Lewis displayed an impressive performance for Manchester City, scoring 11 goals and contributing to 7 assists in the Premier League. However, the 2021-2022 season has been less successful for Lewis, with only 1 goal and 2 assists to his name so far. This downturn in form has led to increased scrutiny from fans and pundits, with some suggesting that the team's attacking structure may be impacting his effectiveness.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Pedri
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Potential flop in the market. </strong> Pedri's impressive performance in the 2020-2021 season for Barcelona did not continue in the 2021-2022 season. Although he started the season with great promise, Pedri struggled to find the consistency he showed during the previous campaign. Despite scoring only 2 goals and assisting in 4 more, his impact on the team was diminished. As the season progresses, Barcelona fans and pundits alike are eagerly awaiting Pedri's return to form.
In summary, while Pedri displayed exceptional skills and promise during the 2020-2021 season, his 2021-2022 season has been a letdown thus far. With increased scrutiny and expectations, it will be crucial for Pedri to regain his form and contribute significantly to Barcelona's success in the coming season.
      </div>
    </div>
  </div>
       
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Victor Osimhen
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Potential move in season 2024/2025. </strong>In his debut season with Napoli, Victor Osimhen made an immediate impact by scoring 24 goals and assisting in 6 more. Despite a promising start, Osimhen's performance took a downturn after suffering a foot injury. However, Osimhen has since recovered and made his return to the pitch, vowing to continue contributing to Napoli's success in the remaining games of the season.
      </div>
    </div>
  </div>
       
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
Jude Bellingham
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Next Ballon D' Or short-list. </strong>Jude Bellingham, the highly-touted 17-year-old winger at Real Madrid and Dortmund, continued to impress during his first professional season. He showed off his incredible technique and creativity, often dictating the pace of play for both clubs. However, his progression was halted after sustaining a muscle injury that sidelined him for several weeks. Upon returning to the field, Bellingham demonstrated his unwavering determination to overcome adversity, once again impressing coaches and teammates with his talent and tenacity.
      </div>
    </div>
  </div>  
</div>
  </div>
  </article>
 </section>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
