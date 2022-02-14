<?php
// Helper method to determine if a shop domain is valid
function validateShopDomain($shop) {
  $substring = explode('.', $shop);

  // 'blah.myshopify.com'
  if (count($substring) != 3) {
    return FALSE;
  }

  // allow dashes and alphanumberic characters
  $substring[0] = str_replace('-', '', $substring[0]);
  return (ctype_alnum($substring[0]) && $substring[1] . '.' . $substring[2] == 'myshopify.com');
}

// Helper method to determine if a request is valid
function validateHmac($params, $secret) {
  $hmac = $params['hmac'];
  unset($params['hmac']);
  ksort($params);

  $computedHmac = hash_hmac('sha256', http_build_query($params), $secret);
  
  //$calculatedHmac = base64_encode(hash_hmac('sha256', $hmacSignature, $clientSharedSecret, true));

  //$calculated_hmac = base64_encode(hash_hmac('sha256', $params, $SHOPIFY_API_SECRET, true));
  
  return hash_equals($hmac, $computedHmac);
  //return $hmac.equals($computedHmac);
  //return strcmp($hmac, $computedHmac);
}

// Helper method for exchanging credentials
function getAccessToken($shop, $apiKey, $secret, $code) {
  $query = array(
      'client_id' => $apiKey,
      'client_secret' => $secret,
      'code' => $code
  );

  // Build access token URL
  $access_token_url = "https://{$shop}/admin/oauth/access_token";

  // Configure curl client and execute request
  $curl = curl_init();
  $curlOptions = array(
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_URL => $access_token_url,
    CURLOPT_SSL_VERIFYPEER => FALSE,
    CURLOPT_POSTFIELDS => http_build_query($query)
  );
  curl_setopt_array($curl, $curlOptions);
  $jsonResponse = json_decode(curl_exec($curl), TRUE);
  curl_close($curl);
  

  return $jsonResponse['access_token'];
}

// Helper method for making Shopify API requests
function performShopifyRequest($shop, $token, $resource, $params = array(), $method = 'GET') {
  $url = "https://{$shop}/admin/{$resource}.json";
  
 
  

  $curlOptions = array(
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_SSL_VERIFYPEER=>FALSE
  );

  if ($method == 'GET') {
    if (!is_null($params)) {
        
   $url = $url . "?" . http_build_query($params);
   
   
     
     
    }
  } else {
    $curlOptions[CURLOPT_CUSTOMREQUEST] = $method;
  }

   //print_r($url);

  $curlOptions[CURLOPT_URL] = $url;

  $requestHeaders = array(
    "X-Shopify-Access-Token: ${token}",
    "Accept: application/json"
  );

  if ($method == 'POST' || $method == 'PUT') {
    $requestHeaders[] = "Content-Type: application/json";

    if (!is_null($params)) {
      
      $curlOptions[CURLOPT_POSTFIELDS] = json_encode($params);
    }
  }

  $curlOptions[CURLOPT_HTTPHEADER] = $requestHeaders;

  $curl = curl_init();
  curl_setopt_array($curl, $curlOptions);
  $response = curl_exec($curl);
  
  
     //print_r($response);
  
  
  
  
  
 
  
  curl_close($curl);
 // print_r($response);exit();
  return json_decode($response, TRUE);
  
  
}


function checkpayment($shop,$accessToken){

   //  echo $shop." ".$accessToken;
    $curl = curl_init();

    curl_setopt_array($curl, array(
         //CURLOPT_URL => "https://{$shop}/admin/api/2019-10/recurring_application_charges/{$getChargeId}.json?access_token={$accessToken}",
         CURLOPT_URL => "https://{$shop}/admin/api/2019-10/recurring_application_charges.json?access_token={$accessToken}",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
          CURLOPT_VERBOSE, true,
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "GET",
         CURLOPT_POSTFIELDS =>  '',
         CURLOPT_HTTPHEADER => array(
           "Content-Type: application/json",
           "Postman-Token: a2934ea4-52d8-4516-91dd-3d6047e969d0",
           "X-Shopify-Storefront-Access-Token: {$accessToken}",
           "Access-Control-Allow-Origin :*",
           "cache-control: no-cache",
           "X-Frame-Options : sameorigin"
         ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
         $result = array(
            "status"=>0,
            "result"=>$err
         );
       //  return  json_encode($result);
          return  $result ;
    } else {
           // print_r($response);
        $res = json_decode(trim($response), TRUE);
        $arr = array();
        $validcharge = false;
        foreach ($res['recurring_application_charges'] as $key => $value) {
            if(!$validcharge){
                $validcharge = true;     
                $arr = $value;
            }
        }

        $result = array(
            "status"=>1,
            "result"=>$arr
        );
      //  return  json_encode($result);
    }

    return  $result ;
    

    
}