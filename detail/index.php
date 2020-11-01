<!DOCTYPE html>
<html lang="en">
<?php require_once '../config.php' ?>
<?php require '../views/head.php' ?>
<?php 
    $id = $_GET['id'] ?? '1';
    require_once '../models/Location.php';
    require_once '../models/Review.php';
    $listing = Location::getByID($id);
    $reviews = Review::getByLocationID($listing['location_id']);
    $listings['reviews'] = $reviews;
?>

<body data-theme="default" data-theme-sub="listing-detail">
    <?php require '../views/header.php' ?>
    <main>
        <div class="listing">
            <div class="listing__header mb-5">
                <div id="mapbox" class="mapbox mapbox--detail-view"></div>
                <div class="listing-card">
                    <div class="container">
                        <div class="wrapper">
                            <div class="row">
                                <div class="col-8">
                                    <h4 class="listing-card__type"><?= orgConvert($listing['organisation']) ?></h4>
                                    <h2 class="listing-card__name"><?= $listing['location_name'] ?></h2>
                                    <p class="listing-card__contact-detail"><a href="mailto:<?= $listing['email'] ?>"><?= $listing['email'] ?></a> | <a href="https://<?= $listing['website'] ?>" target="_blank" rel="noopener"><?= $listing['website'] ?></a></p>
                                </div>
                                <div class="col d-flex flex-column align-items-end justify-content-center">
                                    <a class="btn btn--main-big listing__reserve mb-3" href="#">Dit lokaal reserveren</a>
                                    <a href="#" class="text--user-input">Brochure lezen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="listing__score-summ">
                    <ul>
                        <li>
                            <span class="score__label">toegankelijk</span>
                            <span class="score__star">4,5 <img src="static/images/star.svg" alt=""></span>
                        </li>
                        <li>
                            <span class="score__label">hygiëne</span>
                            <span class="score__star">4,3 <img src="static/images/star.svg" alt=""></span>
                        </li>
                        <li>
                            <span class="score__label">ruim</span>
                            <span class="score__star">5 <img src="static/images/star.svg" alt=""></span>
                        </li>
                        <li>
                            <span class="score__label">prijs/kwaliteit</span>
                            <span class="score__star">4,2 <img src="static/images/star.svg" alt=""></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="listing__details mb-6">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="mb-4">
                                <h5>contact</h5>                
                                <div class="row">
                                    <div class="col text--user-input">
                                        <strong>Verantwoordelijke</strong><br>
                                        <span><?= $listing['contact'] ?></span>
                                    </div>
                                    <div class="col text--user-input">
                                        <strong>Adres</strong><br>
                                        <span><?= $listing['address_street'] ?> <?= $listing['address_no'] ?>,<br> <?= $listing['address_zip'] ?> <?= $listing['address_city'] ?></span>
                                    </div>
                                </div>
                            </div>
                            
                            <h5>details</h5>
                            <div class="listing__detail text--user-input">
                                <?= $listing['details'] ?>
                                <!-- <p>Wij beschikken over één groot terrein en één kleiner terreinen waartussen een bosje met gracht en onze lokalen liggen.</p>
                                <p>Onze lokalen zijn van alles voorzien en zijn ruim genoeg voor om en bij de 50 man.</p>
                                <p>Daarbij is onze scouts goed gelegen. Op nog geen 10 minuten ligt het (subtropisch) zwembad + park De Rozebroeken, enkele bakkers, een Aldi, Lidl, Colruyt en een grote Carrefour.</p> -->
                            </div>
                        </div>
                        <div class="col">
                            <h5>overzicht</h5>
                            <div class="flex-grid flex-grid--md-2i">
                                <ul class="listing__properties flex-grid__wrapper">
                                    <li class="flex-grid__item">
                                        <i class="uil uil-users-alt"></i>
                                        <span><?= $listing['prop_capacity'] ?> personen</span>
                                    </li>
                                    <li class="flex-grid__item <?= boolPropConvert($listing['prop_campfire'])?>">
                                        <i class="uil uil-fire"></i>
                                        <span>Kampvuur</span>
                                    </li>
                                    <li class="flex-grid__item <?= boolPropConvert($listing['prop_leadersonly'])?>">
                                        <i class="uil uil-user-md"></i>
                                        <span>Leidingsactiviteiten</span>
                                        <!-- <span></span> -->
                                    </li>
                                    <li class="flex-grid__item <?= boolPropConvert($listing['prop_cutlery']) ?>">
                                        <i class="uil uil-utensils"></i>
                                        <span>Keukengerei</span>
                                    </li>
                                    <li class="flex-grid__item <?= boolPropConvert($listing['prop_douches']) ?>">
                                        <i class="uil uil-bath"></i>
                                        <span><?= $listing['prop_douches'] ?> douches</span>
                                    </li>
                                    <li class="flex-grid__item">
                                        <i class="uil uil-toilet-paper"></i>
                                        <span><?= $listing['prop_toilets'] ?> wc's</span>
                                    </li>
                                    <li class="flex-grid__item <?= boolPropConvert($listing['prop_internet']) ?>">
                                        <i class="uil uil-wifi"></i>
                                        <span>Internet</span>
                                    </li>
                                    <li class="flex-grid__item">
                                        <i class="uil uil-house-user"></i>
                                        <span><?= $listing['prop_rooms'] ?> lokalen</span>
                                    </li>
                                    <li class="flex-grid__item <?= boolPropConvert($listing['prop_beds']) ?>">
                                       <i class="uil uil-bed"></i>
                                       <span>bedden</span>
                                        <!-- <?= boolPropConvert($listing['prop_beds']) ?></span> -->
                                    </li>
                                    <li class="flex-grid__item">
                                       <i class="uil uil-coronavirus"></i>
                                       <span>Verhuur tijdens pandemie</span>
                                        <!-- <?= boolPropConvert($listing['prop_corona']) ?></span> -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-6">
                <div class="listing__pics">
                    <div class="listing__pic listing__pic--main"><img src="https://source.unsplash.com/800x600/?cabin" alt=""></div>
                    <div class="listing__pic"><img src="https://source.unsplash.com/800x600/?nature" alt=""></div>
                    <div class="listing__pic"><img src="https://source.unsplash.com/800x600/?wood" alt=""></div>
                    <div class="listing__pic"><img src="https://source.unsplash.com/800x600/?water" alt=""></div>
                    <div class="listing__pic"><img src="https://source.unsplash.com/800x600/?forest" alt=""></div>
                </div>
            </div>
            <div class="listing__reviews">
                <div class="container">
                    <h5 class="text-center mb-5">laatste reviews</h5>
                    <?php 
                        $amt = count($listings['reviews']);
                        if ($amt == 0) {
                            echo 'be the first to write a review';
                        }
                    ?>
                    <div class="salvattore salvattore__grid salvattore__grid--1c salvattore__grid--lg-2c salvattore__grid--xl-3c" data-columns> 
                        <?php 
                            foreach ($listings['reviews'] as $key => $item) {
                                require '../views/listings/review.php';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require '../views/footer.php' ?>
    <script type="module" src="static/modules/core.js"></script>
    <script src='https://unpkg.com/salvattore@1.0.9/dist/salvattore.js'></script>
</body>

</html>