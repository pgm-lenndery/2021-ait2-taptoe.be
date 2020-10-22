<!DOCTYPE html>
<html lang="en">

<?php require_once '../config.php' ?>
<?php require '../views/head.php' ?>

<body data-theme="page" data-theme-sub="account-registration">
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
        <div class="container">
            <div class="row row--wide">
                <div class="col-12 col-md-auto">
                    <form data-form="accountRegistration" data-sesam-group="accountRegistration" class="input">
                        <div class="input__choice">
                            <label><input type="radio" name="accountType" value="tenant" checked><span data-sesam-trigger="registerFormTenant">Huren</span></label>
                            <label><input type="radio" name="accountType" value="owner"><span data-sesam-trigger="registerFormOwner">Verhuren</span></label>
                            <label><input type="radio" name="accountType" value="both"><span data-sesam-trigger="registerFormBoth">Beide</span></label>
                        </div>
                        <div data-sesam-target="registerFormTenant" data-sesam-parent="accountRegistration" class="sesam sesam-show">
                            <label class="input__group">
                                <span>Organisatie*</span>
                                <select name="type">
                                    <option value="sgv" selected>Scouts & Gidsen Vlaanderen</option>
                                    <option value="lsc">Les Scout</option>
                                    <option value="ksa">Landelijke jeugd</option>
                                    <option value="chr">Chiro</option>
                                    <option value="fos">Fos</option>
                                    <option value="prv">privé</option>
                                </select>
                            </label>
                            <label class="input__group">
                                <input type="text" placeholder="Haegepoorters Destelbergen">
                                <span>Naam van je vereniging*</span>
                            </label>
                            <label class="input__group">
                                <input type="text" placeholder="Bijlokestraat 18, 9070 Destelbergen">
                                <span>Adres van je vereniging*</span>
                            </label>
                            <!-- <button class="btn" type="subit">Volgende</button> -->
                            <input class="btn" type="submit" name="register" value="Volgende">
                        </div>
                        <div data-sesam-target="registerFormOwner" data-sesam-parent="accountRegistration" class="sesam">
                            <label class="input__group">
                                <span>Type verhuurder*</span>
                                <select name="type">
                                    <option value="sgv" selected>Scouts & Gidsen Vlaanderen</option>
                                    <option value="lsc">Les Scout</option>
                                    <option value="ksa">Landelijke jeugd</option>
                                    <option value="chr">Chiro</option>
                                    <option value="fos">Fos</option>
                                    <option value="prv">privé</option>
                                </select>
                            </label>
                            <label class="input__group">
                                <span>Naam</span>
                                <input type="text" placeholder="Haegepoorters Destelbergen">
                                <small class="input__help">naam van je vereniging of naam van privé eigenaar</small>
                            </label>
                            <label class="input__group">
                                <span>Adres</span>
                                <input type="text" placeholder="Bijlokestraat 18, 9070 Destelbergen">
                                <small class="input__help">adres van je vereniging<br> of persoonlijk adres van privé eigenaar</small>
                            </label>
                            <input class="btn" type="submit" name="register" value="Volgende">
                        </div>
                        <div data-sesam-target="registerFormBoth" data-sesam-parent="accountRegistration" class="sesam">
                            <label class="input__group">
                                <span>Organisatie*</span>
                                <select name="type">
                                    <option value="sgv" selected>Scouts & Gidsen Vlaanderen</option>
                                    <option value="lsc">Les Scout</option>
                                    <option value="ksa">Landelijke jeugd</option>
                                    <option value="chr">Chiro</option>
                                    <option value="fos">Fos</option>
                                </select>
                            </label>
                            <label class="input__group">
                                <input type="text" placeholder="Haegepoorters Destelbergen">
                                <span>Naam van je vereniging*</span>
                            </label>
                            <label class="input__group">
                                <span>Adres van je vereniging*</span>
                                <input type="text" placeholder="Bijlokestraat 18, 9070 Destelbergen">
                                <small class="input__help">Verhuurlocaties kan je later opgeven</small>
                            </label>
                            <input class="btn" type="submit" name="register" value="Volgende">
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md d-flex justify-content-center flex-column">
                    <h2 class="display-3 color--main font-weight--600 mb-4">
                        maak een account<br> om te beginnen
                    </h2>
                    <p class="d-flex align-items-center">Heb je al een account? <a class="btn btn--grey ml-3" href="account/login">aanmelden</a></p>
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