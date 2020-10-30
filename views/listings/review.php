<div class="review salvatore-grid-item">
    <div class="review__content">
        <?= $item['content'] ?>           
    </div>
    <div class="review__sender d-flex">
        <div>
            <img class="review__sender-img" src="<?= $CLOUDINARY_BASE_URI ?>users/<?= $item['thumb'] ?>" alt="">
        </div>
        <div>
            <small class="review__sender-org">
                <?= orgConvert($item['organisation']) ?>      
            </small>
            <small class="review__sender-name">
                <?= $item['name'] ?>
            </small>
        </div>
    </div>
</div>