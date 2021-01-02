<?php

echo"1"; die;
require __DIR__ . 'autoload.php';

use FacebookAds\Object\Lead;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = '<ACCESS_TOKEN>';
$app_secret = '<APP_SECRET>';
$app_id = '<APP_ID>';
$id = '<ID>';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
);
$params = array(
);
echo json_encode((new Lead($id))->getSelf(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);




?>