<?php
// read files from google drive

session_start();

// $ composer require google/apiclient
// composer: load all modules defined in composer.json
require 'vendor/autoload.php';

/************************************************
  ATTENTION: Fill in these values! Make sure
  the redirect URI is to this page, e.g:
  http://localhost:8080/fileupload.php
 ************************************************/
$client_id = '...';
$client_secret = '..';
$redirect_uri = filter_var('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'],
    FILTER_SANITIZE_URL);
// $redirect_uri = 'http://localhost/workspace/php-examples/09-consuming-APIs/01-google-api/Google_Drive/readfiles.php';

$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
// https://developers.google.com/drive/web/scopes
$client->addScope("https://www.googleapis.com/auth/drive");
$service = new Google_Service_Drive($client);

// http://.../readfile.php?logout
if (isset($_REQUEST['logout'])) {
  unset($_SESSION['upload_token']);
}

if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['upload_token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['upload_token']) && $_SESSION['upload_token']) {
  $client->setAccessToken($_SESSION['upload_token']);
  if ($client->isAccessTokenExpired()) {
    unset($_SESSION['upload_token']);
  }
} else {
  $authUrl = $client->createAuthUrl();
  //echo $authUrl;
  echo "<a href=$authUrl>ask permission</a>";
}

/*

Read Drive Files

*/


/**
 * Retrieve a list of File resources.
 *
 * @param Google_Service_Drive $service Drive API service instance.
 * @return Array List of Google_Service_Drive_DriveFile resources.
 */
function retrieveAllFiles($service) {
  $result = array();
  $pageToken = NULL;

  do {
    try {
      $parameters = array();
      if ($pageToken) {
        $parameters['pageToken'] = $pageToken;
      }
      $files = $service->files->listFiles($parameters);

      $result = array_merge($result, $files->getItems());
      $pageToken = $files->getNextPageToken();
    } catch (Exception $e) {
      print "An error occurred: " . $e->getMessage();
      $pageToken = NULL;
    }
  } while ($pageToken);
  return $result;
}

if ($client->getAccessToken()) {
	// echo "Login okay";

	$service = new Google_Service_Drive($client);
	$results = retrieveAllFiles($service);

	// var_dump($result);
	// echo json_encode($results);

	foreach ($results as $item) {
		echo $item['originalFilename'], "<br /> \n";
	}
}

