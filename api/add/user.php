<?php

require_once '../../config.php';

if (isset($_POST['register'])) {
    $password = $_POST['password'] ?? '';
    $account_type = $_POST['accountType'] ?? '';
    $name = $_POST['name'] ?? '';
    $website = $_POST['website'] ?? '';
    $email = $_POST['email'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $organisation = $_POST['organisation'] ?? '';
    $address = $_POST['address'] ?? '';
    $created = time();
    
    $sql = "INSERT INTO `users` (`password`, `account_type`, `name`, `website`, `email`, `contact`, `organisation`)
            VALUES (:password, :account_type, :name, :website, :email, :contact, :organisation)";
    $update_statement = $db->prepare($sql);
    $update_statement->execute([
        ':password' => password_hash($password, PASSWORD_DEFAULT),
        ':account_type' => $account_type,
        ':name' => $name,
        ':website' => $website,
        ':email' => $email,
        ':contact' => $contact,
        ':organisation' => $organisation,
    ]);
    
    header('location: ' . $BASE_URI . 'account/login');
}

// hpoleole123

// INSERT INTO `users` (`user_id`, `account_type`, `name`, `home`, `website`, `email`, `contact`, `organisation`, `created`) VALUES ('3', 'owner', 'Sint-Bernadette', '0', 'sintbernadette.be', 'verhuur@sintbernadette.be', 'Onbekend', 'sgv', 'today'); -->