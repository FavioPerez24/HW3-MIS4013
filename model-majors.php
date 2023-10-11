<?php
function selectMajors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT major_name, division, program_code, minimum_credit_hours FROM `Business_Major`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function inserttMajors($mName, $mDivision) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Business_Major` (`major_name`, `division`) VALUES (?,?)");
        $stmt->bind_param("ss", $mName, $mDivsion);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatetMajors($mName, $mDivision, $mProgramCode) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Business_Major` set `major_name`= ?, `division`= ? where program_code = ?");
        $stmt->bind_param("ssi", $mName, $mDivsion, $mProgramCode);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletetMajors($mProgramCode) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Business_Major where program_code = ?");
        $stmt->bind_param("i", $mProgramCode);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
