<!DOCTYPE html>
<html lang="en">

<?php 
    require_once '../../../config.php';
    require '../../../views/head.php';
    sessionRequired();
    
    require '../../../models/Location.php';
    
    $id = $_GET['id'];
    $location = Location::getByID($id);
    $is_owner = $location['owner'] == $_SESSION['user_id'];
?>

<body data-theme="page" data-theme-sub="account-registration">
    <?php require '../../../views/header.php' ?>
    <main>
        <?php require '../../../views/account/menu.php' ?>
        <div class="container">
            <?php if ($is_owner == 1) : ?>
                <form data-form="registerLocation" method="POST" action="api/add/location.php">
                    <h5 class="text-center mb-4">
                        <i class="uil uil-map-pin icon--large d-block mb-1 color--main"></i>
                        pin deze plaats<br>
                        <small class="font--sub opacity--7">klik de juiste locatie op de kaart aan</small>
                    </h5>
                    <div id="mapbox" class="mapbox mb-5" data-label="registerPinLocation"></div>
                    <div data-label="mapInfo"></div>
                    <div class="row">
                        <input type="hidden" name="location_id" placeholder=" " value="<?= $location['location_id']?>">
                        <input type="hidden" name="address_lat" placeholder=" " value="<?= $location['address_lat']?>">
                        <input type="hidden" name="address_long" placeholder=" " value="<?= $location['address_long']?>">
                        <div class="col-4">
                            <h5 class="mb-4">eigenschappen</h5>
                            <label class="input__group inline">
                                <span><i class="uil uil-fire"></i> Wordt momenteel verhuurd</span>
                                <select name="status" value="<?= $location['status']?>">
                                    <option value="1">Ja</option>
                                    <option value="0">Nee</option>
                                </select>
                            </label>
                            <label class="input__group inline">
                                <span><i class="uil uil-users-alt"></i> Capaciteit</span>
                                <input type="number" name="prop_capacity" placeholder="10" value="<?= $location['prop_capacity']?>">
                            </label>
                            <label class="input__group inline">
                                <span><i class="uil uil-toilet-paper"></i> Aantal toiletten</span>
                                <input type="number" name="prop_toilets" placeholder="1" value="<?= $location['prop_toilets']?>">
                            </label>
                            <label class="input__group inline">
                                <span><i class="uil uil-bath"></i> Aantal douches</span>
                                <input type="number" name="prop_douches" placeholder="1" value="<?= $location['prop_douches']?>">
                            </label>
                            <label class="input__group inline">
                                <span><i class="uil uil-house-user"></i> Aantal ruimtes</span>
                                <input type="number" name="prop_rooms" placeholder="1"  value="<?= $location['prop_rooms']?>">
                            </label>
                            <label class="input__group inline">
                                <span><i class="uil uil-fire"></i> Kampvuur toegestaan</span>
                                <select name="prop_campfire" value="<?= $location['prop_campfire']?>">
                                    <option value="1">Ja</option>
                                    <option value="0">Nee</option>
                                </select>
                            </label>
                            <label class="input__group inline">
                                <span><i class="uil uil-user-md"></i> Leidingsactiviteiten toegestaan</span>
                                <select name="prop_leadersonly"  value="<?= $location['prop_leadersonly']?>">
                                    <option value="1">Ja</option>
                                    <option value="0">Nee</option>
                                </select>
                            </label>
                            <label class="input__group inline">
                                <span><i class="uil uil-utensils"></i> Keukengerei beschikbaar</span>
                                <select name="prop_cutlery" value="<?= $location['prop_cutlery']?>">
                                    <option value="1">Ja</option>
                                    <option value="0">Nee</option>
                                </select>
                            </label>
                            <label class="input__group inline">
                                <span><i class="uil uil-wifi"></i> Internet aanwezig</span>
                                <select name="prop_internet" value="<?= $location['prop_internet']?>">
                                    <option value="1">Ja</option>
                                    <option value="0">Nee</option>
                                </select>
                            </label>
                            <label class="input__group inline">
                                <span><i class="uil uil-bed"></i> Bedden aanwezig</span>
                                <select name="prop_beds" value="<?= $location['prop_beds']?>">
                                    <option value="1">Ja</option>
                                    <option value="0">Nee</option>
                                </select>
                            </label>
                            <label class="input__group inline">
                                <span><i class="uil uil-coronavirus"></i> Verhuur tijdens pandemie</span>                    
                                <select name="prop_corona" value="1">
                                    <option value="1">Ja</option>
                                    <option value="0">Nee</option>
                                </select>
                            </label>
                        </div>
                        <div class="col">
                            <h5 class="mb-3">adres</h5>
                            <label class="input__group">
                                <input type="text" name="name" placeholder="Paveljoen 13" value="<?= $location['location_name']?>">
                                <span>Naam locatie*</span>
                            </label>
                            <div class="row">
                                <div class="col-10">
                                    <label class="input__group first--ignore">
                                        <input type="text" name="address_street" placeholder="Bijlokestraat" value="<?= $location['address_street']?>">
                                        <span>Straat*</span>
                                    </label>
                                </div>
                                <div class="col-2">
                                    <label class="input__group first--ignore">
                                        <input type="number" name="address_no" placeholder="Bijlokestraat"  value="<?= $location['address_no']?>">
                                        <span>Nr.*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-2">
                                    <label class="input__group first--ignore">
                                        <input type="number" name="address_zip" placeholder="Bijlokestraat" value="<?= $location['address_zip']?>">
                                        <span>Postcode*</span>
                                    </label>
                                </div>
                                <div class="col-10">
                                    <label class="input__group first--ignore">
                                        <input type="text" name="address_city" placeholder="Bijlokestraat" value="<?= $location['address_city']?>">
                                        <span>Gemeente*</span>
                                    </label>
                                </div>
                            </div>
                            <label class="input__group mt-3">
                                <textarea name="details" class="w-100" placeholder=" " rows="10"><?= $location['details']?></textarea>
                                <span>Over deze locatie*</span>
                            </label>
                            <input class="btn" type="submit" name="save" value="Wijzigingen opslaan">
                        </div>
                    </div>
                </form>
            <?php else : ?>
                <?php include('../../../views/account/listing-404.php'); ?>
            <?php endif ?>
        </div>
    </main>
    <?php require '../../../views/footer.php' ?>
    <script type="module" src="static/modules/core.js"></script>
</body>

</html>