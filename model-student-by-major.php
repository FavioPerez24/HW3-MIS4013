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

function insertChoice($mName, $mDiv, $mCred) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Business_Major` (`major_name`, `division`, `minimum_credit_hours`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $mName, $mDiv, $mCred);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateChoice($mName, $mDiv, $mCred, $mID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Business_Major` set `major_name` = ?, `division` = ?,  `minimum_credit_hours` = ? where program_code = ?");
        $stmt->bind_param("ssii", $mName, $mDiv, $mCred, $mID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteChoice($mID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Business_Major where program_code= ?");
        $stmt->bind_param("i", $mID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
