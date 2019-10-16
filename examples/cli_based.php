<?php

require_once __DIR__.'/../vendor/autoload.php';

use SgbTeam\SgbApi;

$SGB = new SgbApi;
$SGB->Code = "SGB-KODEKAMU";
$SGB->SecretKey = "SECRETKEY";
echo $SGB->CLI();