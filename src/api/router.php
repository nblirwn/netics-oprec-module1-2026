<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_URI'] === '/health') {
    $rawUptime = shell_exec('uptime -p');
    $uptime = $rawUptime ? trim($rawUptime) : "Unknown";
    
    $response = [
        "nama" => "Nabil Irawan",
        "nrp" => "5025241231",
        "status" => "UP",
        "timestamp" => date("c"),
        "uptime" => $uptime
    ];
    
    echo json_encode($response);
} else {
    http_response_code(404);
    echo json_encode(["error" => "Endpoint Not Found"]);
}
?>
