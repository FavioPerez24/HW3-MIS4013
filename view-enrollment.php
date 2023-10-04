
<h1>Enrollment</h1>
<div class="card-group">
      <?php 
      while ($student = $students->fetch_assoc()) {
      ?>

   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><td><?php echo $student['Student_FirstName'],['Student_LastName']; ?></td></h5>
      <p class="card-text"> 
      <?php
        $majors= selectStudentbyMajor($student['Student_ID']);
        while ($major = $majors->fetch_assoc()) {
      ?>
//list courses  
      <?php
        }
      ?>
      </p>
      <p class="card-text"><small class="text-body-secondary"><td><?php echo $student['Graduation_Year']; ?></td></small></p>
    </div>
  </div>
  
      <?php
      }
      ?>
</div>
