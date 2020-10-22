<!DOCTYPE html>
<html lang="en">

<?php require_once '../../config.php' ?>
<?php require '../../views/head.php' ?>

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
                <div class="col-12 col-md-4">
                    <form data-form="accountLogin" class="input">
                        <label class="input__group">
                            <input type="email" placeholder="verhuur@haegepoorters.be">
                            <span>Email</span>
                        </label>
                        <label class="input__group">
                            <input type="password" placeholder="verhuur@haegepoorters.be">
                            <span>Wachtwoord</span>
                        </label>
                        <input class="btn" type="submit" name="login" value="Aanmelden">
                    </form>
                </div>
                <div class="col-12 col-md d-flex justify-content-center flex-column">
                    <h2 class="display-3 color--main font-weight--600 mb-4">
                        meld je aan<br> om te beginnen
                    </h2>
                    <p class="d-flex align-items-center">Heb je nog geen account? <a class="btn btn--grey ml-3" href="account">registreren</a></p>
                </div>
            </div>     
        </div>
    </main>
    <?php require '../../views/footer.php' ?>
    <div data-label="topNav" class="topnav" data-sesam-target="topNav">
        <div class="topnav__ornament"></div>
    </div>
    <script type="module" src="static/modules/core.js"></script>
</body>

</html>