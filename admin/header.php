<?php
session_start();
error_reporting(1);
require_once '../db/index.php';
require_once '../lib/dbops.php';
require_once '../lib/fileops.php';
require_once '../lib/constants.php';
require_once '../lib/helper.php';

$con=Con::connect();
?>
