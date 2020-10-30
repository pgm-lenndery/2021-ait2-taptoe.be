<?php 
header('Content-Type: application/json');
$name = $_GET['name'] ?? '';
$zip = $_GET['zip'] ?? '';
require_once '../config.php';

// $sql = "SELECT * FROM `locations` WHERE `name` LIKE :name";
// $sql = "SELECT * 
//         FROM `locations` 
//         WHERE `name` 
//         LIKE :name AND `address_zip` LIKE :zip";
        
$sql = "SELECT * 
        FROM `locations` 
        INNER JOIN `users` ON locations.owner = `users`.`user_id`
        WHERE `locations`.`location_name` 
        LIKE :name 
        AND `address_zip` LIKE :zip";
        
// $sql = "SELECT * 
//         FROM `locations` 
//         INNER JOIN `users` ON locations.owner = `users`.`user_id`
//         ";

$pdo_statement = $db->prepare($sql);
$pdo_statement->execute([
    ':name'=>'%'.$name.'%',
    ':zip'=>'%'.$zip.'%'
]);
$result = $pdo_statement->fetchAll();

print_r(json_encode($result));