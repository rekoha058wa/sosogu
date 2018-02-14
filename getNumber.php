<?php
$number = 0;

$db = new PDO('mysql:host=localhost;dbname=sosogu;charset=utf8mb4', 'root', 'H@chiouji1');

foreach($db->query('SELECT * FROM number') as $row) {
	$number = $row['number'];
}

header('Access-Control-Allow-Origin: *');
echo json_encode($number);


