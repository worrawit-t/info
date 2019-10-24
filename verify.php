<?php
$access_token = 'xBh8WI4cfKdlxjmfnD41kbAXyojwJBUKj139uDyEBNVsNz+xl6M/tyq3PL8JFkAR0RtjT/tIni8s00P2AjaMY5bKXJDTkD7TBnkfsc3uBsj+9UAFBefbagmBviZQJEdgVksdq4SNYc+lLhgRART+QwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
