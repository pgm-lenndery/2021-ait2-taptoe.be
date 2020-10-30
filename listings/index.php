<!DOCTYPE html>
<html lang="en">
    <?php require_once '../config.php' ?>
    <?php require '../views/head.php' ?>
    <?php 
        require_once '../models/Location.php';
        $locations = Location::getAll();
    ?>

    <body data-theme="default" data-theme-sub="listingsOverview">
        <?php require '../views/header.php' ?>
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