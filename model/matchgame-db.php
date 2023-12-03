<?php
function selectMatchGames() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Home-TID, Away-TID, MDetails, MConditions, MDate FROM `MatchGame`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertMatchGame($HTid, $ATid, $MDet, $MCond, $MDate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `MatchGame` (`Home-TID`, `Away-TID`, `MDetails`, `MConditions`, `MDate`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss", $HTid, $ATid, $MDet, $MCond, $MDate);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateMatchGame($HTid, $ATid, $MDet, $MCond, $MDate, $Mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `MatchGame` set `Home-TID`= ?, `Away-TID`= ?, `MDetails`= ?, `MConditions`= ?, `MDate`= ? where MID = ?");
        $stmt->bind_param("iisssi", $HTid, $ATid, $MDet, $MCond, $MDate, $Mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteMatchGane($Mid) {
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
