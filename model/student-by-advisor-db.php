<?php
function selectStudentbyAdvisor($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT A.Advisor_ID, Advisor_Name, Meeting_Times FROM `Advisor`A JOIN `Student` S ON A.Advisor_ID=S.Advisor_ID WHERE S.Student_ID=?;");
        $stmt->bind_param("i", $aid);
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

function insertAdvisor($aName, $aMT) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Advisor` (`Advisor_Name`, `Meeting_Times`) VALUES (?, ?)");
        $stmt->bind_param("ss", $aName, $aMT);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAdvisor($aName, $aMT, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Advisor` set `Advisor_Name` = ?, `Meeting_Times` = ? where Advisor_ID = ?");
        $stmt->bind_param("ssi", $aName, $aMT, $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteAdvisor($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Advisor where Advisor_ID= ?");
        $stmt->bind_param("i", $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
