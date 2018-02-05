<?php
$name = $_GET['name'];

header('Access-Control-Allow-Origin: *');
echo json_encode($name);

$db = new PDO('mysql:host=localhost;dbname=sosogu;charset=utf8mb4', 'root', 'H@chiouji1');

$stmt = $db -> prepare("DELETE FROM Player where name = :delete_name");
$stmt->bindParam(':delete_name"', $name, PDO::PARAM_STR);
$stmt->execute();
