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
    </main>
    <?php require '../../views/footer.php' ?>
    <script type="module" src="static/modules/core.js"></script>
</body>

</html>