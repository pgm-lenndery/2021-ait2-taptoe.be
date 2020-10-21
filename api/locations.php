<?php 
$name = $_GET['name'] ?? '';
$zip = $_GET['zip'] ?? '';
require '../config.php';

// $sql = "SELECT * FROM `locations` WHERE `name` LIKE :name";
$sql = "SELECT * FROM `locations` WHERE `name` LIKE :name AND `address_zip` LIKE :zip";
// $sql = "SELECT * FROM `locations`";


$pdo_statement = $db->prepare($sql);
$pdo_statement->execute([
    ':name'=>'%'.$name.'%',
    ':zip'=>'%'.$zip.'%'
]);
$result = $pdo_statement->fetchAll();

print_r(json_encode($result));
header('Content-Type: application/json');