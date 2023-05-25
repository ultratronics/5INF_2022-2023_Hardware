<?php

// Retrieve variables from the request
$name = $_GET['name'];
$age = $_GET['age'];

// Create an associative array with the response data
$response = [
    'name' => $name,
    'age' => $age,
];

// Convert the response data to JSON format
$jsonResponse = json_encode($response);

// Set the response headers
header('Content-Type: application/json');

// Send the JSON response
echo $jsonResponse;

?>
