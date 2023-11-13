        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $student['Student_FirstName']; ?></h5>
                    <p class="card-text">
                        <ul class="list-group">
                            <?php
                            $majors = selectStudentByMajor($student['Student_ID']);
                            while ($major = $majors->fetch_assoc()) {
                              include "major.php";
                           } 
                          ?>
                        </ul>
                    </p>
                    <p class="card-text"><small class="text-body-secondary">Graduation Year: <?php echo $student['Graduation_Year']; ?></small></p>
                </div>
            </div>
        </div>
