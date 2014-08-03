<?php

require_once("clever-php/lib/Clever.php");
//Clever::setApiKey("YOUR_API_KEY");

/* Variables */


/* Get all sections */
$ch = curl_init('https://api.getclever.com/v1.1/sections?count=true');
curl_setopt($ch, CURLOPT_USERPWD, 'DEMO_KEY' . ':');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$response = json_decode(curl_exec($ch), true);
//print_r ($response);

$sectionCount=$response["count"];

print_r($sectionCount);

//$json2 = json_decode($response, true);

$ch = curl_init('https://api.getclever.com/v1.1/students?count=true');
curl_setopt($ch, CURLOPT_USERPWD, 'DEMO_KEY' . ':');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$response = json_decode(curl_exec($ch), true);
//print_r ($response);

$studentCount=$response["count"];

$avgStudentsPerSection=$studentCount/$sectionCount;


/* Get all students 
$ch = curl_init('https://api.getclever.com/v1.1/students');
curl_setopt($ch, CURLOPT_USERPWD, 'DEMO_KEY' . ':');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$response = json_decode(curl_exec($ch), true);
print_r ($response); */

?>
