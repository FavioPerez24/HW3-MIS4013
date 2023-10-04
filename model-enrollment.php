<?php
function selectEnrollment($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT major_name, division, M.program_code, minimum_credit_hours, Potential_Industry_ID FROM `Business_Major`M JOIN Enrollment E ON M.program_code=E.program_code WHERE E.program_code=?");
        $stmt->bind_param("i", $pid);
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
