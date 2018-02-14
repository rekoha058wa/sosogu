<?php
$name = $_GET['name'];
$id = $_GET['id'];

header('Access-Control-Allow-Origin: *');
echo json_encode($name);

$db = new PDO('mysql:host=localhost;dbname=sosogu;charset=utf8mb4', 'root', 'H@chiouji1');

$stmt = $db -> prepare("DELETE FROM play WHERE name = ? AND id = ?");
$stmt->execute(array($name,$id));
