<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="players.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">OUR GEMS</a>
    <a href="matches.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MATCHES</a>
    <a href="matchstats.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">STATS</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="goals-chart.php" class="w3-bar-item w3-button">DATA AND DEMOGRAPHICS</a>
        <a href="compare-chart.php" class="w3-bar-item w3-button">PERFORMANCE COMPARISON</a>
        <a href="news/page.php" class="w3-bar-item w3-button">NEWS</a>
      </div>
    </div>
    <div>
    <form class="d-flex">
                            <input class="form-control me-2" type="text" id="newsQuery" placeholder="Search news">
                            <button class="btn btn-outline-warning" type="button" id="searchBtn">Search</button>
                        </form>
    </div>
  </div>
  </div>
</div>
  
  <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="players.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">OUR GEMS</a>
  <a href="matches.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MATCHES</a>
  <a href="matchstats.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">STATS</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MORE</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:80px">
</body>
</html>
