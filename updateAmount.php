<?php
/*
Created by Chok
*/
$name = $_GET['name'];
$id = $_GET['id'];
$amount = $_GET['amount'];
$who = $_GET['who'];

header('Access-Control-Allow-Origin: *');
echo json_encode($amount);

$db = new PDO('mysql:host=localhost;dbname=sosogu;charset=utf8mb4', 'root', 'H@chiouji1');

if($who==0){
	$stmt = $db -> prepare("UPDATE play SET amount = ? WHERE name = ? AND id = ?");
	$stmt->execute(array($amount,$name,$id));
}
else{
	$stmt = $db -> prepare("UPDATE play SET amount = ? WHERE name != ?");
	$stmt->execute(array($amount,$name));
}


