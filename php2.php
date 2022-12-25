<?php
// Read the contents of the CSV file
$csv = file_get_contents('C:\Users\Sassan\OneDrive\Documents\NewGFM121922');

// Parse the CSV data into an array
$data = array_map('str_getcsv', explode("\n",$csv));

// Output the data as an array of objects
$output = [];
foreach ($data as $row) {
    $obj = new stdClass();
    $obj->farms = htmlspecialchars($row[0] ?? '');
    $obj->location = htmlspecialchars($row[1] ?? '');
    $obj->groundBeef = htmlspecialchars($row[2] ?? '');
    $obj->liver = htmlspecialchars($row[3] ?? '');
    $obj->heart = htmlspecialchars($row[4] ?? '');
    $obj->marrowBones = htmlspecialchars($row[5] ?? '');
    $obj->delivery = htmlspecialchars($row[6] ?? '');
    $obj->pickup = htmlspecialchars($row[7] ?? '');
    $obj->freeShipping = htmlspecialchars($row[8] ?? '');
    $obj->freeShippingMinimum = htmlspecialchars($row[9] ?? '');
    $obj->websiteLink = htmlspecialchars($row[10] ?? '');
    $output[] = $obj;
}

// Output the data as a JSON string
echo json_encode($output);

