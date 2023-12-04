<?php
function selectMatchs() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT MID, Home-TID, Away-TID, MDetails, MConditions, MDate FROM `MatchGame`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertMatch($HTid, $ATid, $Mdet, $Mcond, $Mdate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `MatchGame` (`Home-TID`, `Away-TID`, `MDetails`, `MConditions`, `MDate`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss", $HTid, $ATid, $Mdet, $Mcond, $Mdate);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateMatch($HTid, $ATid, $Mdet, $Mcond, $Mdate, $Mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `MatchGame` set `Home-TID`= ?, `Away-TID`= ?, `MDetails`= ?, `MConditions`= ?, `MDate`= ? where MID = ?");
        $stmt->bind_param("iisssi", $HTid, $ATid, $Mdet, $Mcond, $Mdate, $Mid);
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
