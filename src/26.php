<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr><th>Student ID</th><th>Name</th><th>Email</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["student_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>
