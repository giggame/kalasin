<?php
$access_token = 'ri4Rd+FhJfRW6boOk3eHBUdYSvRa8eG33W3sMb+148WRUl3nAVTxkcCS9LZoNmlDPNdP7FTYSZXLJ0ogmbFrnEiBwsfe+PkRTc3OgmtoxJmRpwTjOgxfYS7gCPXqEA0MsgetfmJfg/jebd9wjof4zQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
