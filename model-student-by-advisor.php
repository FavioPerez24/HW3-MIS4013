<?php
function selectStudentbyAdvisor($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Advisor_Name, Meeting_Times FROM `Advisor`A JOIN Student S ON A.Advisor_ID=S.Advisor_ID WHERE S.Student_ID=?;");
        $stmt->bind_param("i", $aid);
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
