<?php 
    // Initialize session
    if(!isset($_SESSION)){
        session_start();
    }

    // Retrieve data from database
    $data = [
        "name" => "John Doe",
        "age" => 20,
        "email" => "john@example.com"
    ];

    // Output the data to the user
    echo json_encode($data);
?>
