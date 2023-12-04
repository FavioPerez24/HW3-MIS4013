<?php
function selectPlayerbyMatch($Pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT M.MID, Home-TID, Away-TID, MConditions, MDate FROM `MatchGame`M JOIN MatchStats MS ON M.MID=MS.MID WHERE MS.PID=?");
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
