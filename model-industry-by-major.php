<?php
function selectIndustrybyMajor($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT major_name, division, M.program_code, minimum_credit_hours, Industry_Name FROM `Business_Major`M JOIN Industry I ON M.Potential_Industry_ID=I.Potential_Industry_ID WHERE I.Potential_Industry_ID=?;");
        $stmt->bind_param("i", $mid);
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
