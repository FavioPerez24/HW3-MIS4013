<h1>Student's Advisor</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Advisor ID</th>
      <th>Advisor Name</th>
      <th>Meeting Times</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while ($advisor = $advisors->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $advisor['Advisor_ID']; ?></td>
        <td><?php echo $advisor['Advisor_Name']; ?></td>
        <td><?php echo $advisor['Meeting_Times']; ?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
