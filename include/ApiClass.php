<?php
class API {
    private $url;
  
    public function __construct($url) {
      $this->url = $url;
    }
  
    public function getData($params = array()) {
      $ch = curl_init();
  
      $url = $this->url;
      if (!empty($params)) {
        $url .= '?' . http_build_query($params);
      }
  
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
      $response = curl_exec($ch);
      if ($response === false) {
        $error = curl_error($ch);
        curl_close($ch);
        throw new Exception($error);
      }
  
      curl_close($ch);
      return json_decode($response, true);
    }

    public function checkApi0($url) {
      $response = file_get_contents($url);
      // Or use cURL: $curl = curl_init($url); curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); $response = curl_exec($curl); curl_close($curl);
      if ($response === false) {
        return false;
      } else {
        return true;
      }
  }

  public function checkApi($url) {
    $response = file_get_contents($url);
    // Or use cURL: $curl = curl_init($url); curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); $response = curl_exec($curl); curl_close($curl);
    if ($response === false) {
      return false;
    } else {
      $data = json_decode($response, true);
      if (isset($data['error'])) {
        return $data['error'];
      } else {
        return true;
      }
    }
  }


  public function pre($arrOrObject)
{
    return '<pre>' . print_r($arrOrObject, true) . '</pre>';
}

public function cURL_Bearer($token_Bearer,$url ,$link, $Method , $assocArray ){
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => $url.$link,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => $Method ,
    CURLOPT_POSTFIELDS => $assocArray ,
    CURLOPT_SSL_VERIFYPEER =>false ,
    CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$token_Bearer
    ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    // return $response;
    return preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $response);
}




}
  

?>