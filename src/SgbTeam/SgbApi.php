<?php
namespace SgbTeam;

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
        $postfield = "code=" . $this->Code . "&key=" . $this->Key;
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.sgbteam.id/",
            CURLOPT_HEADER => 0,
            CURLOPT_VERBOSE => 1,
            CURLOPT_AUTOREFERER => false,
            CURLOPT_REFERER => "https://" . $_SERVER['HTTP_HOST'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $postfield
        ));
        
        $response = curl_exec($curl);
        $err      = curl_error($curl);
        curl_close($curl);
        
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
    
    function CLI()
    {
        $postfield = "code=" . $this->Code . "&secret_key=" . $this->SecretKey;
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.sgbteam.id/cli.php",
            CURLOPT_HEADER => 0,
            CURLOPT_VERBOSE => 1,
            CURLOPT_AUTOREFERER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $postfield
        ));
        
        $response = curl_exec($curl);
        $err      = curl_error($curl);
        curl_close($curl);
        
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
}
?>
