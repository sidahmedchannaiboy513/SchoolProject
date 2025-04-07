<?php
// Define your variables here
$student_name = "Alice";
$email_address = "alice@example.com";

// Generate some fake data and store it in an array
$data = [
    ["name" => $student_name],
    ["email" => $email_address]
];

// Output the generated fake data as JSON
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>
