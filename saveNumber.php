<?php
/*
Created by Chok
*/
$number = $_GET['number'];

header('Access-Control-Allow-Origin: *');
echo json_encode($number);

$db = new PDO('mysql:host=localhost;dbname=sosogu;charset=utf8mb4', 'root', 'H@chiouji1');

$stmt = $db -> prepare("UPDATE number SET number = ?");
$stmt->execute(array($number));
