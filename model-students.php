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

function insertStudent($sFName, $sLName, $sGrad, $aID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Student` (`Student_FirstName`, `Student_LastName`, `Graduation_Year`, `Advisor_ID`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $sFName, $sLName, $sGrad, $aID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateStudent($sFName, $sLName, $sGrad, $aID, $sID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Student` set `Student_FirstName` = ?, `Student_LastName` = ?,  `Graduation_Year` = ?, `Advisor_ID` = ? where Student_ID = ?");
        $stmt->bind_param("ssiii", $sFName, $sLName, $sGrad, , $aID, $sID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteStudent($sID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Student where Student_ID= ?");
        $stmt->bind_param("i", $sID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
