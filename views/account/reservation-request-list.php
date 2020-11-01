<?php 
    include_once(dirname(__DIR__)."/../models/Reservation.php");
    $reservations = Reservation::requestsByOwner($_SESSION['user_id']);
?>

<?php if (count($reservations) == 0) :?>
    <div class="card">
        je hebt geen verzoeken
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
                <div class="reservation__actions">
                    <a href="api/reserve/setstatus.php?id=<?= $item['reservation_id'] ?>&status=2" class="btn btn--main mr-3"><i class="uil uil-check-circle"></i> accepteren</a>
                    <a href="api/reserve/setstatus.php?id=<?= $item['reservation_id'] ?>&status=0" class="btn btn--grey300"><i class="uil uil-minus-circle"></i> afwijzen</a>
                </div>
            </div>
            
        <?php endforeach ?>
    </div>
<?php endif ?>