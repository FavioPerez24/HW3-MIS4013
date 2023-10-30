<?php
function selectStudents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Student_ID, Student_FirstName, Student_LastName, Graduation_Year FROM `Student`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
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

function insertEnrollment($mid, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Enrollment` (`program_code`, `Student_ID`) VALUES (?, ?)");
        $stmt->bind_param("ii", $mid, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateEnrollment($mid, $sid, $eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Enrollment` set `program_code` = ?, `Student_ID` = ? where Enrollment_ID = ?");
        $stmt->bind_param("iii", $mid, $sid, $eid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteEnrollment($eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Enrollment where Enrollment_ID= ?");
        $stmt->bind_param("i", $eid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
