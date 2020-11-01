<div class="listing listing-card listing-card--inlist">    
    <a class="listing__about" href="<?= $BASE_URI ?>detail?id=<?= $item['location_id'] ?>">
        <!-- <small class="listing-card__type">scouts</small> -->
        <h5 class="listing-card__name"><?= $item['location_name'] ?></h5>
        <p class="listing__capacity"><?= $item['address_city'] ?></p>
    </a>
    <div class="listing__actions">
       <a class="btn btn--grey300" href="<?= $BASE_URI ?>account/locations/edit?id=<?= $item['location_id'] ?>"><i class="uil uil-map-marker-edit"></i> bewerken</a>
    </div>
</div>