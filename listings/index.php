<?php require_once '../config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Parcel Boilerplate</title>
    <base href="<?= $BASE_URI ?>">
    
    <!-- meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- <link rel="shortcut icon" type='image/x-icon' href="https://lennertderyck.be/assets/images/LOGO_LDR_ZWART.ico"/> -->
    <!-- <link rel="icon" type="image/png" href="https://lennertderyck.be/assets/images/LOGO_LDR_ZWART.png" /> -->
    <!-- <meta name="theme-color" content="#662B32">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#662B32">
    -->

    <!-- seo -->
    <meta name="description" content="Some information about this project for SEO purposes" />
    <meta name="keywords" content="add, some, tags, for, SEO, purposes" />

    <!-- open graph -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="git.lennertderyck.be" />
    <meta property="og:title" content="a new project" />
    <!-- <meta property="og:image" content=""/> -->

    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://use.typekit.net/jjp1abo.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="static/css/main.css" />
</head>

<body data-theme="default" data-theme-sub="listingsOverview">
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
            <div class="header__user-detail ml-auto">
                <button class="btn btn--variable" data-sesam-trigger="topNav">
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
        <div class="mapbox-wrapper">
            <div data-label="listingsView" class="input-wrapper">
                <i data-feather="eye"></i>
                <select name="view">
                    <option value="map">kaartweergave</option>
                    <option value="list">lijstweergave</option>
                </select>
            </div>
            <div id="mapbox" class="mapbox sesam sesam-show" data-sesam-target="listingsMapView"></div>
        </div>
        <div class="container container--smaller">
            <div data-label="listingsList" data-sesam-target="listingsListView" class="mt-6 mb-6">
                <a href="/detail" class="listing listing-card listing-card--inlist">
                    <div class="listing__org-img">
                        <div class="listing-card__org-img">
                            <img width="100%" src="https://scoutsheirbrug.be/sites/scoutsheirbrug.scoutsgroep.be/files/styles/logo/public/scouts_nieuw_logo.png?itok=sYsYuoic" alt="">
                        </div>
                    </div>
                    
                    <div class="listing__about">
                        <small class="listing-card__type">scouts</small>
                        <h5 class="listing-card__name">Haegepoorters Destelbergen</h5>
                        <p class="listing__capacity">50 personen</p>
                    </div>
                    <div class="listings__details">
                        <div class="listing-card__address mb-0">
                            <div class="icon">
                                <i data-feather="map"></i>
                            </div>
                            <div class="wrapper">
                                <strong>Adres</strong><br>
                                <span>Bijlokestraat 18, 9070 Destelbergen</span>
                            </div>
                        </div>
                        <!-- <div class="listing-card__score">34 reviews</div> -->
                    </div>
                </a>
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