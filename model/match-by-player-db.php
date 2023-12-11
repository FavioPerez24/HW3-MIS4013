<?php
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
