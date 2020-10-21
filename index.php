<?php require_once './config.php' ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Parcel Boilerplate</title>

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
        
        <base href="<?= $BASE_URI ?>">

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

    <body data-theme="default">
        <header class="header">
            <div class="header__wrapper container-fluid">
                <div class="header__brand">
                    <img height="30px" src="static/images/logo/logo_taptoe_monogram.svg" alt="" />
                </div>
                <div class="header__search">
                    <form data-label="locationSearch">
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
            <div class="mapbox-wrapper">
                <div id="mapbox" class="mapbox"></div>
                <div data-label="mapInfo"></div>
                <div data-label="lisitingSuggestions" class="container">
                    <ul>
                        <li>
                            <a class="listing-card" href="listings">
                                <small class="d-block listing__type">scouts</small>
                                <h5 class="listing__name">Haegepoorters Destelbergen</h5>
                                <p class="listing__location">Destelbergen</p>
                            </a>
                        </li>
                        <li>
                            <a class="listing-card" href="listings">
                                <small class="d-block listing__type">scouts</small>
                                <h5 class="listing__name">Sint-Bernadette</h5>
                                <p class="listing__location">Sint-Amandsberg</p>
                            </a>
                        </li>
                        <li>
                            <a class="listing-card" href="listings">
                                <small class="d-block listing__type">scouts</small>
                                <h5 class="listing__name">Sint-Lucia</h5>
                                <p class="listing__location">Oostakker</p>
                            </a>
                        </li>
                        <li>
                            <a href="listings/?view=list">
                                <h5 class="mb-0">meer locaties<br>bekijken</h5>
                                <i data-feather="arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container mt-6 mb-6">
                <h2 class="display-1 text-center font-weight--600 color--main">
                    Eenvoudig lokalen of</br>
                    terreinen, huren of</br>
                    verhuren
                </h2>
                <div data-label="accountIntroduction" class="d-flex align-items-center w-fit mt-6 mx-auto">
                    <span>begin hier</span>
                    <a href="/account?type=tenant" class="btn btn--main">als huurder</a>
                    <span>of</span>
                    <a href="/account?type=owner" class="btn btn--main">als verhuurder</a>
                </div>
            </div>
        </main>
        <?php require './views/footer.php' ?>
        <script type="module" src="static/modules/core.js"></script>
        
        <div data-label="topNav" class="topnav" data-sesam-target="topNav">
            <div class="topnav__ornament"></div>
        </div>
    </body>

</html>