<?php


include_once __DIR__ . './vendor/autoload.php';


putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/service-account.json');

$client = new Google\Client();
$client->useApplicationDefaultCredentials();
$client->addScope('https://www.googleapis.com/auth/analytics.readonly');
$client->setApplicationName("GoogleAnalytics");
$client->refreshTokenWithAssertion();
$token = $client->getAccessToken();
$accessToken = $token['access_token'];
print_r($token);
exit();
?>


