<h1>Enrollment</h1>

<td><?php
include "view-student-newform.php";
?></td>

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
      <li class="list-group-item"><td><?php include "view-student-editform.php"; ?></td></li>
      <li class="list-group-item"><td>  
      <form method="post" action="">
        <input type="hidden" name="eid" value="<?php echo $enrollment['Enrollment_ID']; ?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
          </svg>
        </button>
      </form>
    </td>
            
      </td></li>

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
