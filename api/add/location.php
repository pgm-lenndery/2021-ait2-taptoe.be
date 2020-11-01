<?php

require_once '../../config.php';

print_r($_POST);

$owner = $_SESSION['user_id'];
$location_id = $_POST['location_id'] ?? '';
$location_name = $_POST['name'] ?? '';
$details = nl2br($_POST['details']) ?? '';
$address_no = $_POST['address_no'] ?? '';
$address_street = $_POST['address_street'] ?? '';
$address_zip = $_POST['address_zip'] ?? '';
$address_city = $_POST['address_city'] ?? '';
$address_lat = floatval($_POST['address_lat']) ?? 1; // choose on map, insert with JS
$address_long = floatval($_POST['address_long']) ?? 1; // choose on map, insert with JS
$prop_capacity = floatval($_POST['prop_capacity']) ?? 0;
$prop_campfire = floatval($_POST['prop_campfire']) ?? 0;
$prop_leadersonly = floatval($_POST['prop_leadersonly']) ?? 0;
$prop_cutlery = floatval($_POST['prop_cutlery']) ?? 0;
$prop_toilets = floatval($_POST['prop_toilets']) ?? 1;
$prop_douches = floatval($_POST['prop_douches']) ?? 1;
$prop_internet = $_POST['prop_internet'] ?? 0;
$prop_internet_comment = $_POST['prop_internet_comment'] ?? '';
$prop_rooms = floatval($_POST['prop_rooms']) ?? 1;
$prop_beds = floatval($_POST['prop_beds']) ?? 0;
$status = floatval($_POST['status']) ?? 0;
$thumb = $_POST['thumb'] ?? '';

if (isset($_POST['register'])) {
    $sql = "INSERT INTO `locations` (`owner`, `location_name`, `details`, `prop_capacity`, `prop_campfire`, `address_no`, `address_street`, `address_zip`, `address_city`, `address_lat`, `address_long`, `prop_leadersonly`, `prop_cutlery`, `prop_douches`, `prop_toilets`, `prop_internet`, `prop_internet_comment`, `prop_rooms`, `prop_beds`, `status`, `thumb`) 
            VALUES (:owner, :location_name, :details, :prop_capacity, :prop_campfire, :address_no, :address_street, :address_zip, :address_city, :address_lat, :address_long, :prop_leadersonly, :prop_cutlery, :prop_douches, :prop_toilets, :prop_internet, :prop_internet_comment, :prop_rooms, :prop_beds, :status, :thumb)";
    $update_statement = $db->prepare($sql);
    $update_statement->execute([
        ':owner' => $owner,
        ':location_name' => $location_name,
        ':details' => $details,
        ':prop_capacity' => $prop_capacity,
        ':prop_campfire' => $prop_campfire,
        ':address_no' => $address_no,
        ':address_street' => $address_street,
        ':address_zip' => $address_zip,
        ':address_city' => $address_city,
        ':address_lat' => $address_lat,
        ':address_long' => $address_long,
        ':prop_leadersonly' => $prop_leadersonly,
        ':prop_cutlery' => $prop_cutlery,
        ':prop_douches' => $prop_douches,
        ':prop_toilets' => $prop_toilets,
        ':prop_internet' => $prop_internet,
        ':prop_internet_comment' => $prop_internet_comment,
        ':prop_rooms' => $prop_rooms,
        ':prop_rooms' => $prop_rooms,
        ':prop_beds' => $prop_beds,
        ':status' => $status,
        ':thumb' => $thumb
    ]);
}

if (isset($_POST['save'])) {
    $sql = "UPDATE `locations` 
            SET `location_name` = :location_name, `details` = :details, `prop_capacity` = :prop_capacity, `prop_campfire` = :prop_campfire , `address_no` = :address_no, `address_street` = :address_street, `address_zip` = :address_zip, `address_city` = :address_city, `address_lat` = :address_lat, `address_long` = :address_long, `prop_leadersonly` = :prop_leadersonly, `prop_cutlery` = :prop_cutlery, `prop_douches` = :prop_douches, `prop_toilets` = :prop_toilets, `prop_internet` = :prop_internet, `prop_internet_comment` = :prop_internet_comment, `prop_rooms` = :prop_rooms, `prop_beds` = :prop_beds, `status` = :status
            WHERE `locations`.`location_id` = :location_id";
    $update_statement = $db->prepare($sql);
    $update_statement->execute([
        ':location_name' => $location_name,
        ':details' => $details,
        ':prop_capacity' => $prop_capacity,
        ':prop_campfire' => $prop_campfire,
        ':address_no' => $address_no,
        ':address_street' => $address_street,
        ':address_zip' => $address_zip,
        ':address_city' => $address_city,
        ':address_lat' => $address_lat,
        ':address_long' => $address_long,
        ':prop_leadersonly' => $prop_leadersonly,
        ':prop_cutlery' => $prop_cutlery,
        ':prop_douches' => $prop_douches,
        ':prop_toilets' => $prop_toilets,
        ':prop_internet' => $prop_internet,
        ':prop_internet_comment' => $prop_internet_comment,
        ':prop_rooms' => $prop_rooms,
        ':prop_beds' => $prop_beds,
        ':status' => $status,
        ':location_id' => $location_id,
    ]);
}

header('location: ' . $BASE_URI . 'account/locations');