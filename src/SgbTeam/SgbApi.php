<?php
namespace SgbTeam;

use GuzzleHttp\Client;

class SgbApi
{
    public $Code;
    public $Key;
    public $SecretKey;
    Public $Region;

    public function setCode()
    {
        return $this->Code;
    }

    public function setKey()
    {
        return $this->Key;
    }

    public function setSecretKey()
    {
        return $this->SecretKey;
    }
    
    public function setRegion()
    {
        return $this->Region;
    }
    
    function Connect()
    {
        $headers = ['Referer' => 'https://' . $_SERVER['HTTP_HOST']];
        $client = new Client([
            'headers' => $headers
        ]);
        $send = $client->post(
            'https://api.sgbteam.id/',
            array(
                'form_params' => array(
                    'code' => $this->Code,
                    'key' => $this->Key
                )
            )
        );
        $response = $send->getBody()->getContents();
        return $response;
    }
    
    function Region()
    {
        $headers = ['Referer' => 'https://' . $_SERVER['HTTP_HOST']];
        $client = new Client([
            'headers' => $headers
        ]);
        $send = $client->post(
            'https://api.sgbteam.id/absenReg.php',
            array(
                'form_params' => array(
                    'code' => $this->Code,
                    'region' => $this->Region,
                    'key' => $this->Key
                )
            )
        );
        $response = $send->getBody()->getContents();
        return $response;
    }
    
    function CLI()
    {
        $client = new Client();
        $send = $client->post(
            'https://api.sgbteam.id/cli.php',
            array(
                'form_params' => array(
                    'code' => $this->Code,
                    'secret_key' => $this->SecretKey
                )
            )
        );
        $response = $send->getBody()->getContents();
        return $response;
    }
}
?>
