<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://storedata.myshopify.com/admin/metafields.json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n    \"metafields\": [\r\n        {\r\n            \"namespace\": \"shopdata\",\r\n            \"key\": \"dataaaaaa\",\r\n            \"value\": 35,\r\n            \"value_type\": \"integer\"\r\n        },\r\n        {\r\n              \"namespace\": \"shopdata\",\r\n              \"key\": \"shopdddddd\",\r\n              \"value\": 45,\r\n              \"value_type\": \"integer\"\r\n        }\r\n    ]\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic MzgwYTVkNTUyOThmMDJmOWUzODdjOTYxNTU5YzBjMmQ6YzczOGMzYjZjMjMyMDc4YjFiMmYwZDliZDNkYmYxZWU=",
    "Content-Type: application/json",
    "Postman-Token: 629cce4c-0cda-4747-9b60-0ae0483fa485",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}