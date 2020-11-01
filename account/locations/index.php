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
            <div class="mb-4 d-flex justify-content-between align-items-center">
                <h4 class="mb-0">je locaties</h4>
                <a href="account/locations/add" class="btn btn--grey"><i class="uil uil-map-marker-plus"></i> locatie toevoegen</a>
            </div>
            <?php require '../../views/account/listings-list.php' ?>
        </div>
    </main>
    <?php require '../../views/footer.php' ?>
    <script type="module" src="static/modules/core.js"></script>
</body>

</html>