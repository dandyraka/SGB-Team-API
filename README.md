# SGB Team API

## Install

    composer require dandyraka/sgb-team-api

## Examples
```php
<?php
require __DIR__.'/vendor/autoload.php';

use SgbTeam\SgbApi;

$SGB = new SgbApi;
$SGB->Key = "APIKEY";
$SGB->Code = "SGB-KODEKAMU";
echo $SGB->Connect();
```
See full examples [here](examples)

## Response
- Code Valid:
  
      { status: "ok" }

- Code Invalid

      { status: "fail" }

## Info
    Get API Key : contact admin!
    Get Secret Key : https://member.sgbteam.id/getsecret
