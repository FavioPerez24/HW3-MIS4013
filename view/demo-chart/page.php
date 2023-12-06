<h1>Player's Nationalities</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
    datasets: [{
      label: 'Countries',  
      data: [
          <?php 
  while ($player = $players->fetch_assoc()) {
  echo $player[ 'PlayersbyNat'] . ", ";
  }    
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
   <?php 
$players = selectPlayers();
  while ($player = $players->fetch_assoc()) {
  echo "'" . $player[ 'PNationality'] . "', ";
  }    
?>
    ]
},
  });
</script>
     
