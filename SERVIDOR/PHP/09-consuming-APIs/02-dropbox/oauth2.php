<?php
// https://www.dropbox.com/developers/core/start/php

// Include the Dropbox SDK libraries. Using Composer.
require 'vendor/autoload.php';

use Dropbox as dbx;

$appInfo = dbx\AppInfo::loadFromJsonFile("./config.json");
$webAuth = new dbx\WebAuthNoRedirect($appInfo, "PHP-Example/1.0");

// We first need to send the user to the app approval page. We get the URL for that page by calling the start method.
$authorizeUrl = $webAuth->start();

//Next, send the user to $authorizeUrl, which gives them an opportunity to approve your app. If they choose to approve your app, they will be shown an "authorization code".
echo "1. Go to: " . $authorizeUrl . "\n";
echo "2. Click \"Allow\" (you might have to log in first).\n";
echo "3. Copy the authorization code.\n";
$authCode = \trim(\readline("Enter the authorization code here: "));

//Finally, call finish to convert the authorization code into an access token.
list($accessToken, $dropboxUserId) = $webAuth->finish($authCode);
print "Access Token: " . $accessToken . "\n";

//To test that we've got access to the Core API, try calling getAccountInfo() which will return an Array with information about the user's linked account:
$dbxClient = new dbx\Client($accessToken, "PHP-Example/1.0");
$accountInfo = $dbxClient->getAccountInfo();
print_r($accountInfo);
?>
