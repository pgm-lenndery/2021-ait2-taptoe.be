<?php

// require './Location.php';

class Reservation {
    public $name = 'default';
    
    public static function getByLocation($id) {
        global $db;
        
        $sql = "SELECT * 
        FROM `reservations` 
        INNER JOIN `locations` ON reservations.location = `locations`.`location_id`
        INNER JOIN `users` ON reservations.user_id = `users`.`user_id`
        WHERE `location` = :id AND `reservations`.`status` != 1";
        
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute([':id' => $id]);
        $result = $pdo_statement->fetchAll();
        return $result;
    }
    
    public static function getById($id) {
        global $db;
        
        $sql = "SELECT * 
        FROM `reservations` 
        INNER JOIN `locations` ON reservations.location = `locations`.`location_id`
        INNER JOIN `users` ON reservations.user_id = `users`.`user_id`
        WHERE `reservation_id` = :id";
        
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute([':id' => $id]);
        $result = $pdo_statement->fetchAll();
        return $result[0];
    }
    
    public static function getByOwner($id) {
        global $db;
        
        $sql = "SELECT * 
        FROM `reservations` 
        INNER JOIN `locations` ON reservations.location = `locations`.`location_id`
        INNER JOIN `users` ON reservations.user_id = `users`.`user_id`
        WHERE `locations`.`owner` = :id AND `reservations`.`status` != 1";
        
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute([':id' => $id]);
        $result = $pdo_statement->fetchAll();
        return $result;
    }
    
    public static function requestsByOwner($id) {
        global $db;
        
        $sql = "SELECT * 
        FROM `reservations` 
        INNER JOIN `locations` ON reservations.location = `locations`.`location_id`
        INNER JOIN `users` ON reservations.user_id = `users`.`user_id`
        WHERE `locations`.`owner` = :id AND `reservations`.`status` = 1";
        
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute([':id' => $id]);
        $result = $pdo_statement->fetchAll();
        return $result;
    }
}