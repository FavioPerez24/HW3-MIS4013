<?php
function selectMatchbyPlayer($Mbp) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT M.MID, M.MDetails, Goals_Scored, Shoots, Passes_Completed, Chances_Created, Miles_Run FROM MatchGame M JOIN MatchStats MS ON M.MID = MS.MID WHERE MS.PID = ?");
        $stmt->bind_param("i", $Mbp);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
