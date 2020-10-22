<?php
 class Location {
    public $name = 'default';
    
    public static function getAll() {
        global $db;
        $sql = "SELECT * FROM `locations`";
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute();
        return $pdo_statement->fetchAll();
    }
    
    public static function getByID($id) {
        global $db;
        
        $sql = "SELECT * 
        FROM `locations` 
        INNER JOIN `users` ON locations.owner = `users`.`user_id`
        WHERE `location_id` = :id ";
        
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute([':id' => $id]);
        $result = $pdo_statement->fetchAll();
        return $result[0];
    }
}