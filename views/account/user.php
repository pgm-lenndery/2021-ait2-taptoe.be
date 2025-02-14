<?php
    require_once '../config.php';
    require '../models/User.php';
                    
    $user = User::getByID($_SESSION['user_id']);
    
    // UPDATE `users` SET `account_type` = 'owner', `organisation` = 'prive' WHERE `users`.`user_id` = 10;
    if (isset($_POST['update'])) {
        $password = $_POST['password'] == '' ?  $user['password'] : password_hash($_POST['password'], PASSWORD_DEFAULT) ;
        $name = $_POST['name'] ?? '';
        $website = $_POST['website'] ?? '';
        $email = $_POST['email'] ?? '';
        $contact = $_POST['contact'] ?? '';
        
        $sql = "UPDATE `users`
                SET `password` = :password, `name` = :name, `website` = :website, `email` = :email, `contact` = :contact
                WHERE `users`.`user_id` = :id";
        $update_statement = $db->prepare($sql);
        $update_statement->execute([
            ':password' => $password,
            ':name' => $name,
            ':website' => $website,
            ':email' => $email,
            ':contact' => $contact,
            ':id' => $user['user_id']
        ]);
        header('location: .');
    }
?>

<div class="container">
    <div class="row row--wide">
        <div class="col-auto col-md-4">
            <form data-form method="POST">
                <input type="hidden" type="radio" name="accountType" value="owner">
                <label class="input__group">
                    <input type="text" name="name" placeholder="Haegepoorters Destelbergen" value="<?= $user['name'] ?>">
                    <span>Naam vereniging/lokaal/terrein*</span>
                </label>
                <label class="input__group">
                    <input type="text" name="contact" placeholder="Haegepoorters Destelbergen" value="<?= $user['contact'] ?>">
                    <span>Contactpersoon*</span>
                </label>
                <label class="input__group">
                    <input type="url" name="website" placeholder="haegepoorters.be" value="<?= $user['website'] ?>">
                    <span>Website</span>
                </label>
                <label class="input__group">
                    <input type="email" name="email" placeholder="verhuur@haegepoorters.be" value="<?= $user['email'] ?>">
                    <span>E-mail*</span>
                    <!-- <small class="input__help">Verhuurlocaties kan je later opgeven</small> -->
                </label>
                <label class="input__group">
                    <input type="password" name="password" placeholder=" ">
                    <span>Wachtwoord*</span>
                    <!-- <small class="input__help">adres van je vereniging<br> of persoonlijk adres van privé eigenaar</small> -->
                </label>
                <input class="btn" type="submit" name="update" value="opslaan">
            </form>
        </div>
        <div class="col">
            <div class="mb-5">
                <h4 class="mb-4">verzoeken</h4>
                <?php require '../views/account/reservation-request-list.php' ?>
            </div>
            <div class="mb-4 d-flex justify-content-between align-items-center">
                <h4 class="mb-0">je locaties</h4>
                <a href="account/locations/add" class="btn btn--grey"><i class="uil uil-map-marker-plus"></i> locatie toevoegen</a>
            </div>
            <?php require '../views/account/listings-list.php' ?>
        </div>
    </div>
</div>
