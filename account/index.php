<!DOCTYPE html>
<html lang="en">

<?php require_once '../config.php' ?>
<?php require '../views/head.php' ?>

<body data-theme="page" data-theme-sub="account-registration">
    <?php require '../views/header.php' ?>
    <main>
        <?php
            if ( isset($_SESSION['user_id']) ) {
                require '../views/account/menu.php';
                require '../views/account/user.php';
            } else {
                require '../views/account/register.php';
            }
        ?>
    </main>
    <?php require '../views/footer.php' ?>
    <script type="module" src="static/modules/core.js"></script>
</body>

</html>