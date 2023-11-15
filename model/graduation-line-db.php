<?php
function selectStudents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Graduation_Year, count(E.Enrollment_ID) as num_grad FROM `Student` S join `Enrollment` E on E.Student_ID=S.Student_ID group by Graduation_Year");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
