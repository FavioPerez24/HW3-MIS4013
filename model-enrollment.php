<?php
function selectStudents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Student_ID, Student_FirstName, Graduation_Year FROM `Student`");
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
        $stmt = $conn->prepare("SELECT M.program_code, major_name, division, minimum_credit_hours, Enrollment_ID, E.Student_ID FROM `Business_Major`M JOIN Enrollment E ON E.program_code=M.program_code WHERE E.Student_ID=?");
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

function selectMajorsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT program_code, major_name FROM `Business_Major` order by major_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectStudentsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Student_ID, Student_FirstName FROM `Student` order by Student_FirstName");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertEnrollment($sid, $mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Enrollment` (`Student_ID`, `program_code`) VALUES (?, ?)");
        $stmt->bind_param("ii", $sid, $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateEnrollment($sid, $mid, $eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Enrollment` set `Student_ID` = ?, `program_code` = ? where Enrollment_ID = ?");
        $stmt->bind_param("iii", $sid, $mid, $eid);
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
