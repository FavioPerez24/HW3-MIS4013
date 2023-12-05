<?php
function selectPlayerbyMatch($Pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT M.MID, P.PID, P.PName, P.PNationality FROM MatchGame M JOIN MatchStats MS ON M.MID = MS.MID JOIN Player P ON P.PID = MS.PID WHERE M.MID = ?");
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
