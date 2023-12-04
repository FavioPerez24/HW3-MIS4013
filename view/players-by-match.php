<div class="row">
  <div class="col">
<h1>Player's Match</h1>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Home Team</th>
      <th>Away Team</th>
      <th>Details</th>
      <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while ($match = $matchs->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $match['MID']; ?></td>
        <td><?php echo $match['Home-TID']; ?></td>
        <td><?php echo $match['Away-TID']; ?></td>
        <td><?php echo $match['MDetails']; ?></td>
        <td><?php echo $match['MDate']; ?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
