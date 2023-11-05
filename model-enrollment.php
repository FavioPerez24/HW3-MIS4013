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

function insertEnrollment($mid, $sid, $GPA) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Enrollment` (`program_code`, `Student_ID`, `Minimum_GPA`) VALUES (?, ?, ?)");
        $stmt->bind_param("iid", $mid, $sid, $GPA);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateEnrollment($mid, $sid, $GPA, $eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Enrollment` set `program_code` = ?, `Student_ID` = ? , `Minimum_GPA` = ? where Enrollment_ID = ?");
        $stmt->bind_param("iidi", $mid, $sid, $GPA, $eid);
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
