<?php

$mysqli = require __DIR__ . "/dbconnection.php";

$sql = sprintf("SELECT * FROM newusers
                WHERE email = '%s'",
                $mysqli->real_escape_string($_GET["email_id"]));
                
$result = $mysqli->query($sql);

$is_available = $result->num_rows === 0;

header("Content-Type: application/json");

echo json_encode(["available" => $is_available]);