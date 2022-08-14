
<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('723275141144-qpu44na101rum746v0usta7nqth4qh4b.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/WDCapstone/google.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>

