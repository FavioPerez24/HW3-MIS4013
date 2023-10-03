<?php
function selectEnrollment() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT major_name, division, program_code, minimum_credit_hours FROM `Business_Major`");
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
