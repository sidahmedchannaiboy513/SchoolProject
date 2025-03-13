<?php
// Get the current date and time
$date = new DateTime('now', new DateTimeZone('America/New_York'));

// Display the current date and time
echo $date->format('m-d-Y H:i:s');
?>