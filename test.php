<?php
  print($_SERVER['HTTP_USER_AGENT']);
  echo '<br>';

  $ch = curl_init();

/* Guide
    - $url = your target website
    - $key = your API provided by urlscan
    - $agent = Fix for Current Device Info
*/

  $url = "google.com";
  $key = "";
  $agent = $_SERVER['HTTP_USER_AGENT'];

  curl_setopt($ch, CURLOPT_URL, 'https://urlscan.io/api/v1/scan/');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"url\": \"$url\", \"public\": \"on\", \"useragent\": \"$agent\"}");

  $headers = array();
  $headers[] = 'Content-Type: application/json';
  array_push($headers,"API-Key: " . $key);

  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $result = curl_exec($ch);

  $result_1 = json_decode($result, true);
  echo '<br>';
  print_r($result_1);
  echo '<br>';
  print($result_1['uuid']);
  echo '<br>';

  if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
  }
  curl_close ($ch);

?>
