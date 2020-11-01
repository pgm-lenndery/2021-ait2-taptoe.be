<div class="container">
    <form data-form="registerLocation" method="POST" action="api/add/location.php">
        <h5 class="text-center mb-4">
            <i class="uil uil-map-pin icon--large d-block mb-1 color--main"></i>
            pin deze plaats<br>
            <small class="font--sub opacity--7">klik de juiste locatie op de kaart aan</small>
        </h5>
        <div id="mapbox" class="mapbox mb-5" data-label="registerPinLocation"></div>
        <div data-label="mapInfo"></div>
        <div class="row">
            <input type="hidden" name="address_lat" placeholder=" ">
            <input type="hidden" name="address_long" placeholder=" ">
            <div class="col-4">
                <h5 class="mb-4">eigenschappen</h5>
                <label class="input__group inline">
                    <span><i class="uil uil-fire"></i> Wordt momenteel verhuurd</span>
                    <select name="status">
                        <option value="1" selected>Ja</option>
                        <option value="0">Nee</option>
                    </select>
                </label>
                <label class="input__group inline">
                    <span><i class="uil uil-users-alt"></i> Capaciteit</span>
                    <input type="number" name="prop_capacity" placeholder="10">
                </label>
                <label class="input__group inline">
                    <span><i class="uil uil-toilet-paper"></i> Aantal toiletten</span>
                    <input type="number" name="prop_toilets" placeholder="1">
                </label>
                <label class="input__group inline">
                    <span><i class="uil uil-bath"></i> Aantal douches</span>
                    <input type="number" name="prop_douches" placeholder="1">
                </label>
                <label class="input__group inline">
                    <span><i class="uil uil-house-user"></i> Aantal ruimtes</span>
                    <input type="number" name="prop_rooms" placeholder="1">
                </label>
                <label class="input__group inline">
                    <span><i class="uil uil-fire"></i> Kampvuur toegestaan</span>
                    <select name="prop_campfire">
                        <option value="1" selected>Ja</option>
                        <option value="0">Nee</option>
                    </select>
                </label>
                <label class="input__group inline">
                    <span><i class="uil uil-user-md"></i> Leidingsactiviteiten toegestaan</span>
                    <select name="prop_leadersonly">
                        <option value="1" selected>Ja</option>
                        <option value="0">Nee</option>
                    </select>
                </label>
                <label class="input__group inline">
                    <span><i class="uil uil-utensils"></i> Keukengerei beschikbaar</span>
                    <select name="prop_cutlery">
                        <option value="1" selected>Ja</option>
                        <option value="0">Nee</option>
                    </select>
                </label>
                <label class="input__group inline">
                    <span><i class="uil uil-wifi"></i> Internet aanwezig</span>
                    <select name="prop_internet">
                        <option value="1">Ja</option>
                        <option value="0" selected>Nee</option>
                    </select>
                </label>
                <label class="input__group inline">
                    <span><i class="uil uil-bed"></i> Bedden aanwezig</span>
                    <select name="prop_beds">
                        <option value="1">Ja</option>
                        <option value="0" selected>Nee</option>
                    </select>
                </label>
                <label class="input__group inline">
                    <span><i class="uil uil-coronavirus"></i> Verhuur tijdens pandemie</span>                    
                    <select name="prop_corona">
                        <option value="1">Ja</option>
                        <option value="0" selected>Nee</option>
                    </select>
                </label>
            </div>
            <div class="col">
                <h5 class="mb-3">adres</h5>
                <label class="input__group">
                    <input type="text" name="name" placeholder="Paveljoen 13">
                    <span>Naam locatie*</span>
                </label>
                <div class="row">
                    <div class="col-10">
                        <label class="input__group first--ignore">
                            <input type="text" name="address_street" placeholder="Bijlokestraat">
                            <span>Straat*</span>
                        </label>
                    </div>
                    <div class="col-2">
                        <label class="input__group first--ignore">
                            <input type="number" name="address_no" placeholder="Bijlokestraat">
                            <span>Nr.*</span>
                        </label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <label class="input__group first--ignore">
                            <input type="number" name="address_zip" placeholder="Bijlokestraat">
                            <span>Postcode*</span>
                        </label>
                    </div>
                    <div class="col-10">
                        <label class="input__group first--ignore">
                            <input type="text" name="address_city" placeholder="Bijlokestraat">
                            <span>Gemeente*</span>
                        </label>
                    </div>
                </div>
                <label class="input__group mt-3">
                    <textarea name="details" class="w-100" placeholder=" " rows="10"></textarea>
                    <span>Over deze locatie*</span>
                </label>
                <input class="btn" type="submit" name="register" value="Lokaal registreren">
            </div>
        </div>
    </form>
</div>