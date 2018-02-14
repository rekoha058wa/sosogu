<?php
/*
Created by Chok
*/
$name = $_GET['name'];
$id = $_GET['id'];

$db = new PDO('mysql:host=localhost;dbname=sosogu;charset=utf8mb4', 'root', 'H@chiouji1');

$number = 0;
foreach($db->query('SELECT * FROM play') as $row) {
	if($name == $row['name'])$number = $row['number'];
}

header('Access-Control-Allow-Origin: *');
echo json_encode($number);
