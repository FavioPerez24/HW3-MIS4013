<?php
function selectStudents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Student_ID, Student_FirstName, Graduation_Year, Advisor_ID FROM `Student`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectAdvisorsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Advisor_ID, Advisor_Name FROM `Advisor` order by Advisor_Name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertStudent($sFName, $sGrad, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Student` (`Student_FirstName`, `Graduation_Year`, `Advisor_ID`) VALUES (?, ?, ?)");
        $stmt->bind_param("sii", $sFName, $sGrad, $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateStudent($sFName, $sGrad, $aid, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Student` set `Student_FirstName` = ?,  `Graduation_Year` = ?, `Advisor_ID` = ? where Student_ID = ?");
        $stmt->bind_param("siii", $sFName, $sGrad, $aid, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteStudent($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Student where Student_ID= ?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>