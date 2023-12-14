<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-bar">
 <button class="w3-bar-item w3-button" onclick="myAccordion('Demo1')">Accordion 1</button>
 <button class="w3-bar-item w3-button" onclick="myAccordion('Demo2')">Accordion 2</button>
</div>

<div id="Demo1" class="w3-container w3-hide">
 <h2>Collapsible 1</h2>
 <p>This is the content inside the first accordion.</p>
</div>

<div id="Demo2" class="w3-container w3-hide">
 <h2>Collapsible 2</h2>
 <p>This is the content inside the second accordion.</p>
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
