<?php
function selectMajors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT division, count(program_code) as num_majors FROM `Business_Major` group by division");
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
