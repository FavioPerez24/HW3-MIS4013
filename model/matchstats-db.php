<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PID, PName FROM `Player`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function selectMatchbyPlayer($id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.PID, P.PName, M.MID, M.MDetails, Goals_Scored, Shoots, Passes_Completed, Chances_Created, Miles_Run FROM Player P JOIN MatchStats MS ON P.PID = MS.PID JOIN MatchGame M ON MS.MID = M.MID GROUP BY P.PID, M.MID;");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectMatchForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT MID, MDetails FROM `MatchGame` order by MDate");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPlayerForInput() {
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
