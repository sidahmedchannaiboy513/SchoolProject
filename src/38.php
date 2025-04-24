<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Example query to select all records from a table called 'students'
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
?>
