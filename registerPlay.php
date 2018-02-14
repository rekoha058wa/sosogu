<?php

/*
Created by Chok
*/
$name = $_GET['name'];
$id = $_GET['id'];
$number = $_GET['number'];

$db = new PDO('mysql:host=localhost;dbname=sosogu;charset=utf8mb4', 'root', 'H@chiouji1');

$first = 0;

foreach($db->query('SELECT * FROM register') as $row) {
	if($number == $row['number'])continue;
	else if($number > $row['number']) $first = 1;
	else $first = 2;
}

$amount = 0;

$stmt = $db -> prepare("INSERT INTO play (name,id,number,amount) VALUES (:name,:id,:number,:amount)");
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->bindParam(':number', $first, PDO::PARAM_INT);
$stmt->bindParam(':amount', $amount, PDO::PARAM_INT);
$stmt->execute();

$data = [];
array_push($data, ["id"=> $row_count , "number"=> $number]);
header('Access-Control-Allow-Origin: *');
echo json_encode($first);
