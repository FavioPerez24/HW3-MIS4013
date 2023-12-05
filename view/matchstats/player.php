<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<div class="col">
           <div class="card" style="width: 18rem;">
        <a href="https://www.tsn.ca/content/dam/tsn/en/home/images/2023/11/4/jeremy-doku--l--1-2031006-1699122086615.jpeg">
            <img src="https://www.tsn.ca/content/dam/tsn/en/home/images/2023/11/4/jeremy-doku--l--1-2031006-1699122086615.jpeg" class="card-img-top" alt="Player Image">
        </a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $player['PName']; ?></h5>
                    <p class="card-text">
                        <ul class="list-group">
                            <?php
                            $matches = selectMatchbyPlayer($player['PID']);
                            while ($match = $matches->fetch_assoc()) {
                              include "match.php";
                           } 
                          ?>
                        </ul>
                    </p>
                    <p class="card-text"><small class="text-body-secondary">Date of Birth: <?php echo $player['PDOB']; ?></small></p>
                </div>
            </div>
        </div>
  </body>
</html>
