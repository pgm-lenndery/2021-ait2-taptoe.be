<?php
class User {
    public static function getByEmail($email) {
        global $db;
        
        $sql = "SELECT * 
        FROM `users` 
        WHERE `email` = :email";
        
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute([
            ':email' => $email
        ]);
        $result = $pdo_statement->fetchAll();
        return $result[0];
    }
    
    public static function getByID($id) {
        global $db;
        
        $sql = "SELECT * 
        FROM `users` 
        WHERE `user_id` = :id";
        
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute([
            ':id' => $id
        ]);
        $result = $pdo_statement->fetchAll();
        return $result[0];
    }
}