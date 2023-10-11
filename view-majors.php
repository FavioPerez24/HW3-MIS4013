<div class="row">
  <div class="col">
<h1>Majors</h1>
  </div>
  <div class="col auto">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
      </svg>
  </div>
</div>
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
          <form method="post" action="industry-by-major.php">
          <input type="hidden" name="mid" value="<?php echo $major['program_code']; ?>"> 
          <button type="submit" class="btn btn-primary">Industries</button>
          </form>
        </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
