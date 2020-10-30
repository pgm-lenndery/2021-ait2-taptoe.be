<?php

require_once '../../config.php';

print_r($_POST);

if (isset($_POST['register'])) {
    $owner = $_POST['owner'] ?? $_SESSION['user_id'];
    $location_name = $_POST['name'] ?? '';
    $details = $_POST['details'] ?? '';
    $address_no = $_POST['address_no'] ?? '';
    $address_street = $_POST['address_street'] ?? '';
    $address_zip = $_POST['address_zip'] ?? '';
    $address_city = $_POST['address_city'] ?? '';
    $address_lat = $_POST['address_lat'] ?? 1; // choose on map, insert with JS
    $address_long = $_POST['address_long'] ?? 1; // choose on map, insert with JS
    $prop_capacity = $_POST['prop_capacity'] ?? 0;
    $prop_campfire = $_POST['prop_campfire'] ?? 0;
    $prop_leadersonly = $_POST['prop_leadersonly'] ?? 0;
    $prop_cutlery = $_POST['prop_cutlery'] ?? 0;
    $prop_toilets = $_POST['prop_toilets'] ?? 1;
    $prop_douches = $_POST['prop_douches'] ?? 1;
    $prop_internet = $_POST['prop_internet'] ?? 0;
    $prop_internet_comment = $_POST['prop_internet_comment'] ?? '';
    $prop_rooms = $_POST['prop_rooms'] ?? 1;
    $prop_beds = $_POST['prop_beds'] ?? 0;
    $status = $_POST['status'] ?? 0;
    $thumb = $_POST['thumb'] ?? '';
    
    $sql = "INSERT INTO `locations` (`owner`, `location_name`, `details`, `prop_capacity`, `prop_campfire`, `address_no`, `address_street`, `address_zip`, `address_city`, `address_lat`, `address_long`, `prop_leadersonly`, `prop_cutlery`, `prop_douches`, `prop_toilets`, `prop_internet`, `prop_internet_comment`, `prop_rooms`, `prop_beds`, `status`, `thumb`) 
            VALUES (:owner, :location_name, :details, :prop_capacity, :prop_campfire, :address_no, :address_street, :address_zip, :address_city, :address_lat, :address_long, :prop_leadersonly, :prop_cutlery, :prop_douches, :prop_toilets, :prop_internet, :prop_internet_comment, :prop_rooms, :prop_beds, :status, :thumb)";
    $update_statement = $db->prepare($sql);
    $update_statement->execute([
        ':owner' => 2,
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