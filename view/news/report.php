<!DOCTYPE html>
<html>
<head>
<title>Footballers Profile</title>
<style>
body {
    font-family: Arial, sans-serif;
}

.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 200px;
    padding: 0px 10px;
}

.card {
    background-color: #f7f7f7;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    margin-top: 20px;
}

.card h2 {
    margin-bottom: 10px;
}

.card p {
    font-size: 18px;
}

.card button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
}

.card button:hover {
    background-color: #45a049;
}
</style>
</head>
<body>

<div class="sidenav">
 <a href="#" onclick="myAccordion('id01')">Rico Lewis</a>
 <a href="#" onclick="myAccordion('id02')">Jeremy Doku</a>
</div>

<div class="main">
 <h2>Rico Lewis</h2>
 <p>Manchester City's 18-year-old full-back Rico Lewis has been making waves in the Premier League this season...</p>

 <h2>Jeremy Doku</h2>
 <p>Jeremy Doku has made a strong start to his Manchester City career, showcasing his skills and potential in a series of impressive performances...</p>
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
