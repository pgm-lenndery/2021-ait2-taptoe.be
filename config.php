<?php

$BASE_URI = '/AIT 2/2021-ait2-taptoe.be/';

CONST DB_DSN = 'mysql:dbname=taptoe;host=localhost;port=3306';
CONST DB_USER = 'root';
CONST DB_PWD = 'root';

//open DB
$db = new PDO(DB_DSN, DB_USER, DB_PWD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);