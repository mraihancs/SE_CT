<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $response = array();

    $sql = "SELECT * FROM items";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $response[] = $row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    http_response_code(405); 
}
?>
