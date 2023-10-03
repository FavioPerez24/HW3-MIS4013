<?php
function get_db_connection(){
    // Create connection
    // You can use Local Host
    $conn = new mysqli('159.89.47.44', 'fpgarcia_hw3user', 'Kamx4068', 'fpgarcia_HW3-MIS4013');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
