<?php
session_start();
require_once './db/index.php';
require_once './lib/dbops.php';
require_once './lib/constants.php';
require_once './lib/helper.php';
$con = Con::connect();
$logos=['cloqi_white', 'cloqi_black'];$ext='.png';$dir='./assets/logo/';
$logoWhite=$dir.$logos[0].$ext;
$logoBlack=$dir.$logos[1].$ext;

?>