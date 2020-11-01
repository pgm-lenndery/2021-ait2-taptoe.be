<?php
$origin = $_SERVER['HTTP_REFERER'];
// header("location: {$origin}");
// session_destroy();

session_start();
session_destroy();
header("location: {$origin}");

