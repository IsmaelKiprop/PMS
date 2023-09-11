<?php
// Include your database connection code here
include("includes/db.php");

// SQL query to retrieve egg production data
$sql = "SELECT date, total_quantity FROM egg_production";

// Execute the query and fetch data
$result = $conn->query($sql);
$data = array('dates' => array(), 'quantities' => array());

while ($row = $result->fetch_assoc()) {
    $data['dates'][] = $row['date'];
    $data['quantities'][] = $row['total_quantity'];
}

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
