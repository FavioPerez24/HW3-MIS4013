<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
    <h1>Performance Reports</h1>
<body>

<div class="w3-bar">
 <button class="w3-bar-item w3-button" onclick="myAccordion('Demo1')">Accordion 1</button>
 <button class="w3-bar-item w3-button" onclick="myAccordion('Demo2')">Accordion 2</button>
 <button class="w3-bar-item w3-button" onclick="myAccordion('Demo3')">Accordion 3</button>
 <button class="w3-bar-item w3-button" onclick="myAccordion('Demo4')">Accordion 4</button>
</div>

<div id="Demo1" class="w3-container w3-hide">
 <h2>Victor Osimhen</h2>
 <p><strong>Potential move in season 2024/2025. </strong>In his debut season with Napoli, Victor Osimhen made an immediate impact by scoring 24 goals and assisting in 6 more. Despite a promising start, Osimhen's performance took a downturn after suffering a foot injury. However, Osimhen has since recovered and made his return to the pitch, vowing to continue contributing to Napoli's success in the remaining games of the season.
</p>
</div>

<div id="Demo2" class="w3-container w3-hide">
 <h2>Jude Bellingham</h2>
 <p><strong></strong>Next Ballon D' Or short-list. </strong>Jude Bellingham, the highly-touted 17-year-old winger at Real Madrid and Dortmund, continued to impress during his first professional season. He showed off his incredible technique and creativity, often dictating the pace of play for both clubs. However, his progression was halted after sustaining a muscle injury that sidelined him for several weeks. Upon returning to the field, Bellingham demonstrated his unwavering determination to overcome adversity, once again impressing coaches and teammates with his talent and tenacity.</p>
</div>

 <div id="Demo3" class="w3-container w3-hide">
 <h2>Rico Lewis</h2>
 <p><strong>Potential rise in its market value. </strong>In the 2020-2021 season, Rico Lewis displayed an impressive performance for Manchester City, scoring 11 goals and contributing to 7 assists in the Premier League. However, the 2021-2022 season has been less successful for Lewis, with only 1 goal and 2 assists to his name so far. This downturn in form has led to increased scrutiny from fans and pundits, with some suggesting that the team's attacking structure may be impacting his effectiveness.
</p>
</div>

 <div id="Demo4" class="w3-container w3-hide">
 <h2>Pedri</h2>
 <p>
  <strong>Potential flop in the market. </strong> Pedri's impressive performance in the 2020-2021 season for Barcelona did not continue in the 2021-2022 season. Although he started the season with great promise, Pedri struggled to find the consistency he showed during the previous campaign. Despite scoring only 2 goals and assisting in 4 more, his impact on the team was diminished. As the season progresses, Barcelona fans and pundits alike are eagerly awaiting Pedri's return to form.
In summary, while Pedri displayed exceptional skills and promise during the 2020-2021 season, his 2021-2022 season has been a letdown thus far. With increased scrutiny and expectations, it will be crucial for Pedri to regain his form and contribute significantly to Barcelona's success in the coming season.
 </p>
</div>
       

<script>
 function myAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
 }
</script>

</body>
</html>
