<header class="header">
    <div class="header__wrapper container-fluid">
        <a href="#" class="header__brand">
            <img height="30px" src="static/images/logo/logo_taptoe_monogram.svg" alt="" />
        </a>
        <div class="header__search">
            <div class="form search" data-search="listings">
                <div class="input-wrapper py-0">
                    <i data-feather="search"></i>
                    <input type="text" name="search" autocomplete="off">
                </div>
                <div class="search__results">
                </div>
            </div>
        </div>
        <div class="header__user-detail ml-auto">
            <a class="btn btn--variable" href="account">
                <span class="btn__text"><?= isset($current_user['name']) ? $current_user['name'] : 'aanmelden of registreren' ; ?></span>
                <i class="uil uil-user-circle mr-0"></i>
            </a>
        </div>
        <!-- <div class="header__ornament">
            <img src="../static/images/logo/logo_taptoe.svg" alt="" />
        </div> -->
    </div>
</header>
<!-- <div data-label="topNav" class="topnav" data-sesam-target="topNav">
    <div class="topnav__ornament"></div>
    <div class="topnav__nav">
        <nav>
            <ul class="unlistify">
                <li><a href="api/logoff.php">Afmelden</a></li>
            </ul>
        </nav>
    </div>
</div> -->