<?php
    include(dirname(__DIR__)."/../models/Location.php");
    $locations = Location::getByOwner($_SESSION['user_id']);
?>

<?php if ($locations == 0): ?>
    <div class="card">
        geen locaties toegevoegd
    </div>
<?= count($locations) ?>
<?php else: ?>
    <div class="listings listings--manage">
        <?php foreach ($locations as $key => $item) {
            include(dirname(__DIR__)."../../views/account/listing-card.php");
        } ?>
    </div>
<?php endif; ?>