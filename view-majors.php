<h1>Majors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Program Code</th>
      <th>Major</th>
      <th>Division</th>
      <th>Minimum Credit Hours</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while ($major = $majors->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $major['program_code']; ?></td>
        <td><?php echo $major['major_name']; ?></td>
        <td><?php echo $major['division']; ?></td>
        <td><?php echo $major['minimum_credit_hours']; ?></td>
        <td>
          <form method="post" action="student-by-major.php">
          <input type="hidden" name="sid" value="<?php echo $student['program_code']; ?>"> 
          <button type="submit" class="btn btn-primary">Students</button>
          </form>
        </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
