<!DOCTYPE html>
<html lang="en">
    <?php require_once './config.php' ?>
    <?php require './views/head.php' ?>

    <body data-theme="default">
        <?php require './views/header.php' ?>
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
                    <a href="account?type=tenant" class="btn btn--main">als huurder</a>
                    <span>of</span>
                    <a href="account?type=owner" class="btn btn--main">als verhuurder</a>
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