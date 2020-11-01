<!DOCTYPE html>
<html lang="en">

<?php 
    require_once '../../config.php';
    require '../../views/head.php';
    sessionRequired();
?>

<body data-theme="page" data-theme-sub="account-registration">
    <?php require '../../views/header.php' ?>
    <main>
        <?php require '../../views/account/menu.php' ?>
        <div class="container">
            <h4 class="mb-4">verzoeken</h4>
            <?php require '../../views/account/reservation-request-list.php' ?>
            <h4 class="my-4">contracten</h4>
            <?php require '../../views/account/reservations-list.php' ?>
        </div>
    </main>
    <?php require '../../views/footer.php' ?>
    <script type="module" src="static/modules/core.js"></script>
</body>

</html>