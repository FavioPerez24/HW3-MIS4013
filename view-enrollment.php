
<h1>Enrollment</h1>
<div class="card-group">
      <?php 
      while ($student = $students->fetch_assoc()) {
      ?>

   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><td><?php echo $student['Student_FirstName']; ?></td><td> <?php echo $student['Student_LastName']; ?></td></h5>
      <p class="card-text"> 
      
      <ul class="list-group">
      <?php
        $majors= selectStudentbyMajor($student['Student_ID']);
        while ($major = $majors->fetch_assoc()) {
      ?>
      <li class="list-group-item">Code:</li> ><td><?php echo $major['program_code']; ?></td></li>
      <li class="list-group-item"></li>
      <li class="list-group-item"><td><?php echo $major['major_name']; ?></td></li>
      <li class="list-group-item"><td><?php echo $major['minimum_credit_hours']; ?></td></li>
      <?php
        }
      ?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary"><td><?php echo $student['Graduation_Year']; ?></td></small></p>
    </div>
  </div>
  
      <?php
      }
      ?>
</div>
