<!DOCTYPE html>
<html lang="en">
    <?php require_once '../config.php' ?>
    <?php require '../views/head.php' ?>
    <?php 
        require_once '../models/Location.php';
        $locations = Location::getAll();
    ?>

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
                    <?php 
                        foreach ($locations as $key => $item) {
                            require '../views/listings/listing.php';
                        }
                    ?>
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