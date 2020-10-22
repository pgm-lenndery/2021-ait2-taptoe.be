<?php

require_once '../../config.php';

if (isset($_POST['user_register'])) {
    $password = $_POST['firstname'] ?? '';
    $account_type = $_POST['lastname'] ?? '';
    $name = $_POST['email'] ?? '';
    $website = $_POST['password'] ?? '';
    $email = $_POST['password'] ?? '';
    $contact = $_POST['password'] ?? '';
    $organisation = $_POST['password'] ?? '';
    $created = $_POST['password'] ?? '';
    
    $sql = "INSERT INTO `users` (`password`, `account_type`, `name`, `home`, `website`, `email`, `contact`, `organisation`, `created`)
            VALUES (:password, :account_type, :name, 0, :website, :email, :contact, :organisation, :created)";
            $update_statement = $db->prepare($sql);
            $update_statement->execute([
                ':password' => password_hash($password, PASSWORD_DEFAULT),
                ':account_type' => $account_type,
                ':name' => $name,
                ':website' => $website,
                ':email' => $email,
                ':contact' => $contact,
                ':organisation' => $organisation,
                ':created' => $created,
            ]);
}


// INSERT INTO `users` (`user_id`, `account_type`, `name`, `home`, `website`, `email`, `contact`, `organisation`, `created`) VALUES ('3', 'owner', 'Sint-Bernadette', '0', 'sintbernadette.be', 'verhuur@sintbernadette.be', 'Onbekend', 'sgv', 'today'); -->