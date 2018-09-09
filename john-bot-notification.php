<?php
require "vendor/autoload.php";

$access_token = 'S5jOhn4iujHhw8bii/AlfEbepmgjYM43Iz57TF8X4OxzZfxdOspQamE/k8Ve/xdfuyOtSAFAIEB9SJC8IB46WNRFxxdmmhrfSLp4Zd4KEwVPGx6MzLy9a5thZW4uWl41bhK4k0TyqCNyzgQXqkgGkQdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'c58e7705e95c800b2f5357e8e0b035bf';
$idPush = 'Uabfdc7c2be59628c46ea66799492a91c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

?>
