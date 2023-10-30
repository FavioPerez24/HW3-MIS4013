
<h1>Enrollment</h1>
<div class="row row-cols-1 row-cols-md-2 g-7">
      <?php 
      while ($student = $students->fetch_assoc()) {
      ?>
      <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><td><?php echo $student['Student_FirstName']; ?></td><td> <?php echo $student['Student_LastName']; ?></td></h5>
        <p class="card-text">
         
      <ul class="list-group">
      <?php
        $majors= selectStudentbyMajor($student['Student_ID']);
        while ($major = $majors->fetch_assoc()) {
      ?>
      <li class="list-group-item">Code: <td><?php echo $major['program_code']; ?></td></li>
      <li class="list-group-item">Major: <td><?php echo $major['major_name']; ?></td></li>
      <li class="list-group-item">Minimum credits: <td><?php echo $major['minimum_credit_hours']; ?></td></li>
      <li class="list-group-item"><td><?php include $major['minimum_credit_hours']; ?></td></li>
      <li class="list-group-item"><td><?php include $major['minimum_credit_hours']; ?></td></li>

      <?php
        }
      ?>
      </ul>
      </p>
      </div>
    </div>
  </div>
      <?php
      }
      ?>
</div>
