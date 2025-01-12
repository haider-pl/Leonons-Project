<?php
$dataFile = 'data.json';

// Read existing data
$data = json_decode(file_get_contents($dataFile), true);

// Add new entry
$newEntry = [
    'id' => count($data) + 1,
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'message' => $_POST['message']
];
$data[] = $newEntry;

// Save updated data back to the JSON file
file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));

echo "Thank you for your message!";
?>
