<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>DATA PERFORMANCE</title>
</head>
<body>
<div class="container mt-3">
  <h1 class="text-center">OUR SCOUTING ANALYSIS</h1>
</div>
<div class="container mt-5">
  <p class="d-inline-flex gap-1">
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">Goals by Player</a>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Toggle Card 2</button>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Toggle Card 3</button>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="collapse1 collapse2 collapse3">Toggle All Cards</button>
  </p>

  <div class="row mt-3">
    <div class="col">
      <div class="collapse multi-collapse" id="collapse1">
        <div class="card card-body">
            <script src="chart1.php"></script>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="collapse multi-collapse" id="collapse2">
        <div class="card card-body">
          Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
        </div>
      </div>
    </div>
    <div class="col">
      <div class="collapse multi-collapse" id="collapse3">
        <div class="card card-body">
          Some placeholder content for the third collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
        </div>
      </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-rEMycxFTAiUJwLliw8ftQAtTTJeRd1NrFIVz1FCv6ZBBdTKBhq6UohqUHEU8tOrCi" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
