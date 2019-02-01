<?php
print($_SERVER['HTTP_USER_AGENT']);
echo '<br>';

$ch = curl_init();

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

?>
