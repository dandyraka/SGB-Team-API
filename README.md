# SGB Team API
[![Latest Stable Version](https://poser.pugx.org/dandyraka/sgb-team-api/v/stable)](https://packagist.org/packages/dandyraka/sgb-team-api)
[![Total Downloads](https://poser.pugx.org/dandyraka/sgb-team-api/downloads)](https://packagist.org/packages/dandyraka/sgb-team-api)

SGB Team Official API to check SGB Code validation

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
