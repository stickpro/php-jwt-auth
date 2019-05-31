<?php
// show error reporting
error_reporting(E_ALL);
 
// set your default time-zone
date_default_timezone_set('Europe/Moscow');

// variables used for jwt
$key = "example_key";
$iss = "http://example.org";
$aud = "http://example.com";
$iat = time();
$nbf = $iat - 300000;
?>