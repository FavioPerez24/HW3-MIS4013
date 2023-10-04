<h1>Industry by Major</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Program Code</th>
      <th>Major</th>
      <th>Division</th>
      <th>Minimum Credit Hours</th>
      <th>Potential Industry</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while ($industry = $courses->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $industry['program_code']; ?></td>
        <td><?php echo $industry['major_name']; ?></td>
        <td><?php echo $industry['division']; ?></td>
        <td><?php echo $industry['minimum_credit_hours']; ?></td>
        <td><?php echo $industry['Industry_Name']; ?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
