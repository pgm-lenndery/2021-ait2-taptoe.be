<?php

require_once '../config.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql = "SELECT * FROM `users` WHERE `email` = :email AND `password` = :password";
    $pdo_stat = $db->prepare($sql);
    $pdo_stat->execute([
        ':email' => $email,
        ':password' => $password,
    ]);
    $result = $pdo_stat->fetchAll();
    
    print_r($result);
}