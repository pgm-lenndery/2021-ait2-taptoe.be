<?php 
    include_once(dirname(__DIR__)."/../models/Reservation.php");
    $reservations = Reservation::getByOwner($_SESSION['user_id']);
?>

<?php if (count($reservations) == 0) :?>
    <div class="card">
        je hebt geen contracten
    </div>
<?php else : ?>
    <div class="reservations__list">
        <?php foreach ($reservations as $key => $item) :?>
            
            <div class="reservation card mb-3">
                <div class="reservation__about">
                    <h5 class="text--user-input mb-2"><?= $item['location_name'] ?></h5>
                    <p class="text--user-input mb-0">
                        <span>
                            <?= $item['amount'] ?> personen – 
                        </span>
                        <span>
                            <?= strftime("%e %b %Y",strtotime($item['period_start'])) ?> tot <?= strftime("%e %b %Y",strtotime($item['period_end'])) ?>
                        </span>
                    </p>
                </div>
            </div>
            
        <?php endforeach ?>
    </div>
<?php endif ?>