<?php
function selectStudentbyMajor($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT M.program_code, major_name, division, minimum_credit_hours FROM `Business_Major`M JOIN Enrollment E ON E.program_code=M.program_code WHERE E.Student_ID=?");
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
        $stmt = $conn->prepare("INSERT INTO `Enrollment` (`major_name`, `division`, `minimum_credit_hours`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $mName, $mDiv, $mCred);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateChoice($mName, $mDiv, $mCred, $mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Enrollment` set `major_name` = ?, `division` = ?,  `minimum_credit_hours` = ? where program_code = ?");
        $stmt->bind_param("ssii", $mName, $mDiv, $mCred, $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteChoice($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Enrollment where program_code= ?");
        $stmt->bind_param("i", $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
