<?php
function selectMatches() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT MID, MDetails, MDate, MConditions FROM `MatchGame`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertMatch($Mdet, $Mdate, $Mcond) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `MatchGame` (`MDetails`, `MDate`, `MConditions`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $Mdet, $Mdate, $Mcond);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateMatch($Mdet, $Mdate, $Mcond, $Mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `MatchGame` SET `MDetails` = ?, `MDate` = ?, `MConditions` = ? WHERE `MID` = ?");
        $stmt->bind_param("sssi", $Mdet, $Mdate, $Mcond, $Mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteMatch($Mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from MatchGame where MID= ?");
        $stmt->bind_param("i", $Mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
