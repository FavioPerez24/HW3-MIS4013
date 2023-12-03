<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PID, PName, PDOB, PNationality, PPostion, TID FROM `Player`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectPlayerbyTeam($Pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT T.TID, TName, TCountry FROM `Team` M JOIN Player P ON T.TID = P.TID WHERE P.PID=?");
        $stmt->bind_param("i", $Pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectMatchGamesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT MID, Home-TID, Away-TID, MDetails FROM `MatchGame` order by MDate");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPlayersForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PID, PName FROM `Player` order by PName");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertMatchStat($Mid, $Pid, $Goal, $Shoots, $Passes, $Chances, $Miles) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `MatchStats` (`MID`, `PID`, `Goals_Scored`, `Shoots`, `Passes_Completed`, `Chances_Created`, `Miles_Run`) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiiiii", $Mid, $Pid, $Goal, $Shoots, $Passes, $Chances, $Miles);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateMatchStat($Mid, $Pid, $Goal, $Shoots, $Passes, $Chances, $Miles, $Msid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `MatchStats` set `MID`= ?, `PID`= ?, `Goals_Scored`= ?, `Shoots`= ?, `Passes_Completed`= ?, `Chances_Created`= ?, `Miles_Run`= ? where MSID = ?");
        $stmt->bind_param("iiiiiiii", $Mid, $Pid, $Goal, $Shoots, $Passes, $Chances, $Miles, $Msid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteMatchStat($Msid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from MatchStats where MSID= ?");
        $stmt->bind_param("i", $Msid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
