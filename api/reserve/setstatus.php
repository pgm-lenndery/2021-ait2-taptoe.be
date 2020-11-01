<?php
require_once '../../config.php' ;
require_once '../../models/Location.php';
require_once '../../models/Reservation.php';

$_SESSION['user_id'];

if (isset($_GET)) {
    
    $reservation = Reservation::getByID($_GET['id']);
    
    if ($reservation['owner'] == $_SESSION['user_id']) {
        $sql = "UPDATE `reservations` 
                SET `status` = :status
                WHERE `reservations`.`reservation_id` = :id";
        $update_statement = $db->prepare($sql);
        $update_statement->execute([
            ':status' => $_GET['status'],
            ':id' => $_GET['id']
        ]);
        header('location: ' . $BASE_URI . 'account/contracts');
    } else {
        header('location: 404.php');
    }
}
