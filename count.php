<?php
$db = new PDO('mysql:host=localhost;dbname=sosogu;charset=utf8mb4', 'root', 'H@chiouji1');

$stmt = $db->query('SELECT * FROM Player');
$row_count = $stmt->rowCount();

header('Access-Control-Allow-Origin: *');
echo json_encode($row_count);
