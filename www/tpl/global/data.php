<?php
// Read the JSON file
$json_nav = file_get_contents('../.data/contacts.json');
// Decode the JSON file
$detail = json_decode($json_nav, true);
// Display data

?>
