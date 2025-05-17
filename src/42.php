<?php
// This script is used to check if the current directory is part of an image hosting service.
$rootPath = "http://192.168.1.5:8080";
if (file_exists($rootPath)) {
    echo "The root path has been set.";
} else {
    echo "The root path does not exist.";
}
?>
