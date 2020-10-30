<?php
 class Review {
    public $name = 'default';
    
    public static function getAll() {
        global $db;
        $sql = "SELECT * FROM `reviews`";
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute();
        return $pdo_statement->fetchAll();
    }
    
    public static function getByID($id) {
        global $db;
        
        $sql = "SELECT * 
        FROM `reviews` 
        WHERE `review_id` = :id";
        
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute([':id' => $id]);
        $result = $pdo_statement->fetchAll();
        return $result[0];
    } 
    
    public static function getByLocationID($id) {
        global $db;
        
        $sql = "SELECT * 
        FROM `reviews` 
        INNER JOIN `users` ON reviews.user_id = `users`.`user_id`
        WHERE `location_id` = :id";
        
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute([':id' => $id]);
        $result = $pdo_statement->fetchAll();
        return $result;
    }
}