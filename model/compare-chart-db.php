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

function selectStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.PID, P.PName AS Player_Name, SUM(Goals_Scored) AS Total_goals, SUM(Shoots) AS Total_shoots, SUM(Passes_Completed) AS Total_passes, SUM(Chances_Created) AS Total_chances, SUM(Miles_Run) AS Total_miles FROM Player P LEFT JOIN MatchStats MS ON P.PID = MS.PID LEFT JOIN MatchGame M ON MS.MID= M.MID GROUP BY P.PID, P.PName");
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
