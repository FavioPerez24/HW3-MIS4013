<?php
function selectStudentbyMajor($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT major_name, division, M.program_code, minimum_credit_hours FROM `Business_Major`M JOIN Enrollment E ON M.program_code=E.program_code WHERE E.Student_ID=?");
        $stmt->bind_param("i", $sid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertChoice($mName2, $mDiv2, $mCred2) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Business_Major` (`major_name`, `division`, `minimum_credit_hours`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $mName2, $mDiv2, $mCred2);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateChoice($mName2, $mDiv2, $mCred2, $mid2) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Business_Major` set `major_name` = ?, `division` = ?,  `minimum_credit_hours` = ? where program_code = ?");
        $stmt->bind_param("ssii", $mName2, $mDiv2, $mCred2, $mid2);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteChoice($mid2) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Business_Major where program_code= ?");
        $stmt->bind_param("i", $mid2);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
