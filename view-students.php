<h1>Students</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Graduation Year</th>
      <th>Major</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while ($student = $students->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $student['Student_ID']; ?></td>
        <td><?php echo $student['Student_FirstName']; ?></td>
        <td><?php echo $student['Student_LastName']; ?></td>
        <td><?php echo $student['Graduation_Year']; ?></td>
        <td><a href="student-by-major.php?id=<?php echo $student['Student_ID']; ?>">Major</a></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
