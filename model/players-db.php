<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PID, PName, PDOB, PNationality, PPosition, TID FROM `Player`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectTeamsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT TID, TName FROM `Team` order by TName");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayer($PName, $PNat, $Tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Player` (`PName`, `PNationality`, `TID`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $PName, $PNat, $Tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePlayer($PName, $PNat, $Tid, $Pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Player` set `PName` = ?,  `PNationality` = ?, `TID` = ? where PID = ?");
        $stmt->bind_param("ssii", $PName, $PNat, $Tid, $Pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayer($Pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Player where PID= ?");
        $stmt->bind_param("i", $Pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>