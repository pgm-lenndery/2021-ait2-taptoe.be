<a href="<?= $BASE_URI ?>detail?id=<?= $item['location_id'] ?>" class="listing listing-card listing-card--inlist mb-3">
    <div class="listing__org-img">
        <div class="listing-card__org-img">
            <img width="100%" src="<?= $CLOUDINARY_BASE_URI.$item['thumb'] ?>" alt="">
        </div>
    </div>
    
    <div class="listing__about">
        <small class="listing-card__type">scouts</small>
        <h5 class="listing-card__name"><?= $item['name'] ?></h5>
        <p class="listing__capacity"><?= $item['prop_capacity'] ?> personen</p>
    </div>
    <div class="listings__details">
        <div class="listing-card__address mb-0">
            <div class="icon">
                <i data-feather="map"></i>
            </div>
            <div class="wrapper">
                <strong>Adres</strong><br>
                <span><?= $item['address_street'] ?> <?= $item['address_no'] ?>, <?= $item['address_zip'] ?> <?= $item['address_city'] ?></span>
            </div>
        </div>
        <!-- <div class="listing-card__score">34 reviews</div> -->
    </div>
</a>