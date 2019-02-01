<?php
print($_SERVER['HTTP_USER_AGENT']);
echo '<br>';

$ch = curl_init();

$url = "google.com";
$key = "";
$agent = $_SERVER['HTTP_USER_AGENT'];

?>
