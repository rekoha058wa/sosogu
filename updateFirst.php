<?php
/*
Created by Chok
*/
$name = $_GET['name'];
$id = $_GET['id'];
$number = $_GET['number'];
$who = $_GET['who'];

header('Access-Control-Allow-Origin: *');
echo json_encode($number);

$db = new PDO('mysql:host=localhost;dbname=sosogu;charset=utf8mb4', 'root', 'H@chiouji1');

if($who==0){
$stmt = $db -> prepare("UPDATE play SET number = ? WHERE name = ? AND id = ?");
$stmt->execute(array($number,$name,$id));
}
else{
	$stmt = $db -> prepare("UPDATE play SET number = ? WHERE name != ?");
$stmt->execute(array($number,$name));
}

