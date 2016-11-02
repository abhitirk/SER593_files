<?php

//require_once 'vendor/autoload.php';
use Milo\Github;

$personal_access_token = 'This must be replaced with an access token generated from GitHub';
$token = new Milo\Github\OAuth\Token($personal_access_token);
$api = new Github\Api;
$api->setToken($token);

?>