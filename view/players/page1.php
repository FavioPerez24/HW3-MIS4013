<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 40%;
            border-radius: 5px;
            margin: 10px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
            padding: 2px 16px;
        }
    </style>
  </head>
  <body>
    
<div class="row">
  <div class="col">
<h1>Our Players</h1>
 </div>
  <div class="col-auto">
    <div>
  </div>
<?php
include "new-form.php";
?>
  </div>
</div>
    <body>
<div>
<?php
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='card'>
                    <div class='container'>
                        <h4><b>ID: " . $row["PID"]. "</b></h4>
                        <p>Name: " . $row["PName"]. "</p>
                        <p>Date of Birth: " . $row["PDOB"]. "</p>
                        <p>Nationality: " . $row["PNationality"]. "</p>
                        <p>Position: " . $row["PPosition"]. "</p>
    }
} else {
    echo "No results";
}
?>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
