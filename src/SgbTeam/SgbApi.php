<?php
namespace SgbTeam;

use GuzzleHttp\Client;

class SgbApi
{
    public $Code;
    public $Key;
    public $SecretKey;

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
