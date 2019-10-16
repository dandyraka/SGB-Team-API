<?php

require_once __DIR__.'/../vendor/autoload.php';

use SgbTeam\SgbApi;

$SGB = new SgbApi;
$SGB->key = "APIKEY";
$SGB->Code = "SGB-KODEKAMU";
echo $SGB->Connect();