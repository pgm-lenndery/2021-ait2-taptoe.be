<?php
session_start();
$_SESSION["firstname"] = 'Dieter';

$BASE_URI = '/AIT 2/2021-ait2-taptoe.be/';
$CLOUDINARY_BASE_URI = 'https://res.cloudinary.com/dd8fxudsh/image/upload/v1603294496/taptoe.be/';

CONST DB_DSN = 'mysql:dbname=taptoe;host=localhost;port=3306';
CONST DB_USER = 'root';
CONST DB_PWD = 'root';

//open DB
$db = new PDO(DB_DSN, DB_USER, DB_PWD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

function orgConvert($name) {
    return array(
        'sgv' => 'scouts',
        'lsc' => 'scouts',
        'ksa' => 'ksa',
        'chr' => 'chiro',
        'fos' => 'scouts',
        'prv' => 'privé',
    )[$name];
}

function boolPropConvert($value) {
    // if ($value == '1' ?? $value == 1) return true;
    if ($value == '0' ?? $value == 0) return 'listing__prop--na';
}

function sessionRequired($path = 'account/login') {
    if (isset($_SESSION['user_id']) == false) {
        global $BASE_URI;
        header("location: {$BASE_URI}{$path}");
    }
}

