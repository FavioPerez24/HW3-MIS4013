<?php
function selectPlayerbyTeam($Tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT T.TID, TName, TCountry, TCoach FROM `Team` T JOIN `Player` P ON T.TID=P.TID WHERE P.PID=?;");
        $stmt->bind_param("i", $Tid);
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

function insertTeam($Tname, $Tcountry, $Tcoach) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Team` (`TName`, `TCountry`, `TCoach`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $Tname, $Tcountry, $Tcoach);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTeam($Tname, $Tcountry, $Tcoach, $Tid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Team` set `TName` = ?, `TCountry` = ?, `TCoach` = ?, where TID = ?");
        $stmt->bind_param("sssi", $Tname, $Tcountry, $Tcoach, $Tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteTeam($Tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Team where TID= ?");
        $stmt->bind_param("i", $Tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
