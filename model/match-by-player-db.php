<?php
function selectMatchbyPlayer($id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT M.MID, P.PName, M.MDetails, Goals_Scored, Shoots, Passes_Completed, Chances_Created, Miles_Run FROM MatchGame M JOIN MatchStats MS ON M.MID = MS.MID JOIN Player P ON P.PID=MS.PID WHERE MS.PID = ?");
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
