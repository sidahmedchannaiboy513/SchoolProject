<?php
$db = new mysqli('localhost', 'root', '', 'school');
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
} else {
    echo "Connected successfully";
}

?>