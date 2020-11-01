<!DOCTYPE html>
<html lang="en">

<?php 
    require_once '../config.php' ;
    require '../views/head.php';
    require '../models/Location.php';
    
    $location_id = $_GET['id'];
    $location = Location::getByID($location_id);
    
    if (isset($_POST['register'])) {
        $period_start = $_POST['period_start'] ?? '';
        $period_end = $_POST['period_end'] ?? '';
        $amount = $_POST['amount'] ?? 1;
        $comment = $_POST['comment'] ?? '';
        
        $sql = "INSERT INTO `reservations` 
                (`location`, `user_id`, `period_start`, `period_end`, `amount`, `comment`) 
                VALUES 
                (:location, :user_id, :period_start, :period_end, :amount, :comment)";
        $update_statement = $db->prepare($sql);
        $update_statement->execute([
            ':location' => $location_id,
            ':user_id' => $_SESSION['user_id'],
            ':period_start' => $period_start,
            ':period_end' => $period_end,
            ':amount' => $amount,
            ':comment' => $comment
        ]);
        header("location: ../account");
    }
?>
<?php  ?>

<body data-theme="page" data-theme-sub="account-registration">
    <?php require '../views/header.php' ?>
    <main>
        <!-- <?php require '../views/account/menu.php'; ?> -->
        <?php if ( isset($_SESSION['user_id']) ) : ?>
                <div class="container">
                    <div class="form">
                        <div class="mb-5">
                            <h5 class="text-center">
                                <i class="uil uil-house-user icon--large d-block mb-1 color--main"></i>
                                verblijf inplannen<br>
                            </h5>
                            <h5 class="text--user-input text-center"><?= $location['location_name'] ?> – <?= $location['address_city'] ?></h5>
                        </div>
                        <form data-form method="POST">
                            <input type="hidden" type="radio" name="accountType" value="owner">
                            <label class="input__group">
                                <input type="number" name="name" placeholder="Haegepoorters Destelbergen">
                                <span>Aantal personen (incl. begeleiding)*</span>
                            </label>
                            <div class="row my-3">
                                <div class="col">
                                    <label class="input__group inline">
                                        <span>Aankomst*</span>
                                        <input type="date" name="period_start" placeholder=" ">
                                    </label>
                                </div>
                                <div class="col">         
                                    <label class="input__group inline">
                                        <span>Vertrek</span>
                                        <input type="date" name="period_end" placeholder="haegepoorters.be">
                                    </label>
                                </div>
                            </div>
                            <label class="input__group">
                                <textarea name="comment" id="" cols="30" rows="10" placeholder=" "></textarea>
                                <span>Opmerkingen*</span>
                            </label>
                            <input class="btn" type="submit" name="register" value="verzoek indienen">
                        </form>
                    </div>
                </div>
            <?php else : ?>
                <?php require '../views/account/register.php'; ?>
            <?php endif ?>
    </main>
    <?php require '../views/footer.php' ?>
    <script type="module" src="static/modules/core.js"></script>
</body>

</html>