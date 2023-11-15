<?php
function selectMajors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT major_name, count(E.Enrollment_ID) as num_enrollments FROM `Business_Major` M join `Enrollment` E on E.program_code=M.program_code group by major_name");
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
