<div class="row">
    <div class="col">
        <h1>Enrollment</h1>
    </div>
    <div class="col-auto">
        <?php include "view-enrollment-newform.php"; ?>
    </div>
</div>

<div class="card-group">
    <?php
    $count = 0;
    while ($student = $students->fetch_assoc()) {
        if ($count % 2 == 0) {
            // Start a new row for every two cards
            echo '<div class="row">';
        }
    ?>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $student['Student_FirstName']; ?></h5>
                    <p class="card-text">
                        <ul class="list-group">
                            <?php
                            $majors = selectStudentByMajor($student['Student_ID']);
                            while ($major = $majors->fetch_assoc()) {
                            ?>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            <?php echo $major['major_name']; ?> - <?php echo $major['division']; ?> - <?php echo $major['minimum_credit_hours']; ?>
                                        </div>
                                        <div class="col-auto">
                                            <?php include "view-enrollment-editform.php"; ?>
                                        </div>
                                        <div class="col-auto">
                                            <form method="post" action="">
                                                <input type="hidden" name="eid" value="<?php echo $major['Enrollment_ID']; ?>">
                                                <input type="hidden" name="actionType" value="Delete">
                                                <button type="submit" class="btn" onclick="return confirm('Are you sure?');">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0

