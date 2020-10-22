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
    <header class="header">
        <div class="header__wrapper container-fluid">
            <a href="#" class="header__brand">
                <img height="30px" src="static/images/logo/logo_taptoe_monogram.svg" alt="" />
            </a>
            <div class="header__search">
                <form method="POST" action="./">
                    <div class="input-wrapper">
                        <i data-feather="search"></i>
                        <input type="text" name="search">
                    </div>
                </form>
            </div>
            <div class="header__user-detail ml-auto" data-sesam-trigger="topNav">
                <button class="btn btn--variable">
                    <span class="btn__text">Haegepoorters Destelbergen</span>
                    <i data-feather="user"></i>
                </button>
            </div>
            <!-- <div class="header__ornament">
                <img src="../static/images/logo/logo_taptoe.svg" alt="" />
            </div> -->
        </div>
    </header>
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
                                    <h2 class="listing-card__name"><?= $listing['name'] ?></h2>
                                    <p class="listing-card__contact-detail"><a href="mailto:<?= $listing['email'] ?>"><?= $listing['email'] ?></a> | <a href="https://<?= $listing['website'] ?>" target="_blank" rel="noopener"><?= $listing['website'] ?></a></p>
                                </div>
                                <div class="col d-flex flex-column align-items-end justify-content-center">
                                    <a class="btn btn--main listing__reserve mb-3" href="#">Dit lokaal reserveren</a>
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
            <div class="listing__details mb-5">
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
                            
                            <h5>score</h5>
                            <ul class="listing__properties">
                                <li><span>Max. personen</span><span><?= $listing['prop_capacity'] ?></span></li>
                                <li><span>Kampvuur</span><span><?= $listing['prop_campfire'] ?></span></li>
                                <li><span>Leidingsactiviteiten</span><span><?= $listing['prop_leadersonly'] ?></span></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h5>overzicht</h5>
                            <ul class="listing__properties">
                                <li><span>Max. personen</span><span><?= $listing['prop_capacity'] ?></span></li>
                                <li><span>Kampvuur</span><span><?= boolPropConvert($listing['prop_campfire'], 'toegelaten', 'niet toegelaten') ?></span></li>
                                <li><span>Leidingsactiviteiten</span><span><?= boolPropConvert($listing['prop_leadersonly'], 'toegelaten', 'niet toegelaten')?></span></li>
                                <li><span>Keukengerei</span><span><?= boolPropConvert($listing['prop_cutlery'], 'beschikbaar', 'neen') ?></span></li>
                                <li><span>Douchekoppen</span><span><?= $listing['prop_douches'] ?></span></li>
                                <li><span>Wc's</span><span><?= $listing['prop_toilets'] ?></span></li>
                                <li><span>Internet</span><span><?= boolPropConvert($listing['prop_internet'], $listing['prop_internet_comment'] ?? 'ja', 'neen') ?></span></li>
                                <li><span>Leeflokalen</span><span><?= $listing['prop_livingspace'] ?></span></li>
                                <li><span>Slaapzalen</span><span><?= $listing['prop_sleepspace'] ?></span></li>
                                <li><span>Bedden</span><span><?= boolPropConvert($listing['prop_beds'], 'ja', 'neen') ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing__reviews">
                <h5 class="text-center">reviews</h5>
                <?php 
                    foreach ($locations as $key => $item) {
                        require '../views/listings/listing.php';
                    }
                ?>
                <div class="listing__review">
                    
                </div>
            </div>
        </div>
    </main>
    <?php require '../views/footer.php' ?>
    <div data-label="topNav" class="topnav" data-sesam-target="topNav">
        <div class="topnav__ornament"></div>
    </div>
    <script type="module" src="static/modules/core.js"></script>
</body>

</html>