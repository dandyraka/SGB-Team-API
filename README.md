# SGB Team API
[![Latest Stable Version](https://poser.pugx.org/dandyraka/sgb-team-api/v/stable)](https://packagist.org/packages/dandyraka/sgb-team-api)
[![Total Downloads](https://poser.pugx.org/dandyraka/sgb-team-api/downloads)](https://packagist.org/packages/dandyraka/sgb-team-api)

SGB Team Official API to check SGB Code validation

## Docs API
### Web Based

|||
| --- | --- |
| HTTP Method | POST |
| Response Format | JSON |
| API URL | https://api.sgbteam.id/ |

| Parameter | Description |
| --- | --- |
| code | SGB Team Membership Code |
| key | API Key given by Admin |

### CLI Based

|||
| --- | --- |
| HTTP Method | POST |
| Response Format | JSON |
| API URL | https://api.sgbteam.id/cli.php |

| Parameter | Description |
| --- | --- |
| code | SGB Team Membership Code |
| secret_key | SGB Team Membership Secret Key |

### Web Based (Region)

maybe you can use it to absent regional members

|||
| --- | --- |
| HTTP Method | POST |
| Response Format | JSON |
| API URL | https://api.sgbteam.id/absenReg.php |

| Parameter | Description |
| --- | --- |
| code | SGB Team Membership Code |
| key | API Key given by Admin |
| region | Member Region |

### Response
| Status | JSON |
| --- | --- |
| Success | `{ status: "ok" }` |
| Failed | `{ status: "fail" }` |


---

## Back to This Repo
### Requirement
1. PHP >= 7.0
2. **[Composer](https://getcomposer.org/)**

### Install

    composer require dandyraka/sgb-team-api

### Examples
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

### Info
    Get API Key : contact admin!
    Get Secret Key : https://member.sgbteam.id/getsecret
