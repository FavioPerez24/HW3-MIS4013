<?php
function selectStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.PID, P.PName, SUM(Goals_Scored) AS Total_goals, COUNT(M.MID) AS Total_matches FROM Player P LEFT JOIN MatchStats MS ON P.PID = MS.PID LEFT JOIN MatchGame M ON MS.MID= M.MID GROUP BY P.PID, P.PName");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>