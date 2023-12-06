<?php
function selectStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.PName, count(E.Enrollment_ID) as num_enrollments FROM `Student` S join `Enrollment` E on E.Student_ID=S.Student_ID group by Student_FirstName");
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
