
<div class="table-responsive">
  <table class="table">
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Office</th>
    </thead>
    <tbody>
      <?php 
      while ($instructor = $instructors->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $instructor['instructor_id']; ?></td>
        <td><?php echo $instructor['instructor_name']; ?></td>
        <td><?php echo $instructor['instructor_office_name']; ?></td>
      </tr>
      }
      ?>
    </tbody>
  </table>
</div>
