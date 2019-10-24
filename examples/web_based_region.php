<?php

require_once __DIR__.'/../vendor/autoload.php';

use SgbTeam\SgbApi;

$SGB = new SgbApi;
$SGB->Key = "APIKEY";
$SGB->Code = "SGB-KODEKAMU";
$SGB->Region = "Surabaya";
echo $SGB->Region();
