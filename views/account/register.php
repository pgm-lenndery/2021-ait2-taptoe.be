<div class="container">
    <div class="row row--wide">
        <div class="col-12 col-md-4">
            <div data-form="accountRegistration" data-sesam-group="accountRegistration" class="input">
                <div class="input__choice">
                    <label><input type="radio" name="accountType" value="tenant" checked><span data-sesam-trigger="registerFormTenant">Huren</span></label>
                    <label><input type="radio" name="accountType" value="owner"><span data-sesam-trigger="registerFormOwner">Verhuren</span></label>
                    <label><input type="radio" name="accountType" value="both"><span data-sesam-trigger="registerFormBoth">Beide</span></label>
                </div>
                <div data-sesam-target="registerFormTenant" data-sesam-parent="accountRegistration" class="sesam sesam-show">
                    <form action="api/add/user.php" method="POST">
                        <input type="hidden" type="radio" name="accountType" value="both">
                        <label class="input__group">
                            <span>Organisatie*</span>
                            <select name="organisation">
                                <option value="sgv" selected>Scouts & Gidsen Vlaanderen</option>
                                <option value="lsc">Les Scout</option>
                                <option value="ksa">Landelijke jeugd</option>
                                <option value="chr">Chiro</option>
                                <option value="fos">Fos</option>
                                <option value="prv">privé</option>
                            </select>
                        </label>
                        <label class="input__group">
                            <input type="text" name="name" placeholder="Haegepoorters Destelbergen">
                            <span>Naam van je vereniging*</span>
                        </label>
                        <label class="input__group">
                            <input type="text" name="contact" placeholder="Haegepoorters Destelbergen">
                            <span>Contactpersoon*</span>
                        </label>
                        <label class="input__group">
                            <input type="url" name="website" placeholder="haegepoorters.be">
                            <span>Website</span>
                        </label>
                        <label class="input__group">
                            <input type="email" name="email" placeholder="Bijlokestraat 18, 9070 Destelbergen">
                            <span>E-mail*</span>
                        </label>
                        <label class="input__group">
                            <input type="password" name="password" placeholder=" ">
                            <span>Wachtwoord*</span>
                            <!-- <small class="input__help">adres van je vereniging<br> of persoonlijk adres van privé eigenaar</small> -->
                        </label>
                        <!-- <button class="btn" type="subit">Volgende</button> -->
                        <input class="btn" type="submit" name="register" value="Volgende">
                    </form>
                </div>
                <div data-sesam-target="registerFormOwner" data-sesam-parent="accountRegistration" class="sesam">
                    <form action="api/add/user.php" method="POST">
                        <input type="hidden" type="radio" name="accountType" value="owner">
                        <label class="input__group">
                            <span>Type verhuurder*</span>
                            <select name="organisation">
                                <option value="sgv" selected>Scouts & Gidsen Vlaanderen</option>
                                <option value="lsc">Les Scout</option>
                                <option value="ksa">Landelijke jeugd</option>
                                <option value="chr">Chiro</option>
                                <option value="fos">Fos</option>
                                <option value="prv">privé</option>
                            </select>
                        </label>
                        <label class="input__group">
                            <input type="text" name="name" placeholder="Haegepoorters Destelbergen">
                            <span>Naam lokaal/terrein*</span>
                            <!-- <small class="input__help">naam van je vereniging of naam van privé eigenaar</small> -->
                        </label>
                        <label class="input__group">
                            <input type="text" name="contact" placeholder="Haegepoorters Destelbergen">
                            <span>Contactpersoon*</span>
                        </label>
                        <label class="input__group">
                            <input type="url" name="website" placeholder="haegepoorters.be">
                            <span>Website</span>
                        </label>
                        <label class="input__group">
                            <input type="email" name="address" placeholder=" ">
                            <span>E-mail*</span>
                            <!-- <small class="input__help">adres van je vereniging<br> of persoonlijk adres van privé eigenaar</small> -->
                        </label>
                        <label class="input__group">
                            <input type="password" name="password" placeholder=" ">
                            <span>Wachtwoord*</span>
                            <!-- <small class="input__help">adres van je vereniging<br> of persoonlijk adres van privé eigenaar</small> -->
                        </label>
                        <input class="btn" type="submit" name="register" value="Volgende">
                    </form>
                </div>
                <div data-sesam-target="registerFormBoth" data-sesam-parent="accountRegistration" class="sesam">
                    <form action="api/add/user.php" method="POST">
                        <input type="hidden" type="radio" name="accountType" value="owner">
                        <label class="input__group">
                            <span>Organisatie*</span>
                            <select name="organisation">
                                <option value="sgv" selected>Scouts & Gidsen Vlaanderen</option>
                                <option value="lsc">Les Scout</option>
                                <option value="ksa">Landelijke jeugd</option>
                                <option value="chr">Chiro</option>
                                <option value="fos">Fos</option>
                            </select>
                        </label>
                        <label class="input__group">
                            <input type="text" name="name" placeholder="Haegepoorters Destelbergen">
                            <span>Naam vereniging/lokaal/terrein*</span>
                        </label>
                        <label class="input__group">
                            <input type="text" name="contact" placeholder="Haegepoorters Destelbergen">
                            <span>Contactpersoon*</span>
                        </label>
                        <label class="input__group">
                            <input type="url" name="website" placeholder="haegepoorters.be">
                            <span>Website</span>
                        </label>
                        <label class="input__group">
                            <input type="email" name="email" placeholder="verhuur@haegepoorters.be">
                            <span>E-mail*</span>
                            <!-- <small class="input__help">Verhuurlocaties kan je later opgeven</small> -->
                        </label>
                        <label class="input__group">
                            <input type="password" name="password" placeholder=" ">
                            <span>Wachtwoord*</span>
                            <!-- <small class="input__help">adres van je vereniging<br> of persoonlijk adres van privé eigenaar</small> -->
                        </label>
                        <input class="btn" type="submit" name="register" value="Volgende">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-md d-flex justify-content-center flex-column">
            <h2 class="display-3 color--main font-weight--600 mb-4">
                maak een account<br> om te beginnen
            </h2>
            <p class="d-flex align-items-center">Heb je al een account? <a class="btn btn--grey ml-3" href="account/login">aanmelden</a></p>
        </div>
    </div>     
</div>