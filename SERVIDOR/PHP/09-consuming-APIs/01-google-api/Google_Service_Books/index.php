<?php

// composer: load all modules defined in composer.json
require 'vendor/autoload.php';


$client = new Google_Client();
$client->setApplicationName("My Application");
$client->setDeveloperKey('AIzaSyD3FC1thEwR5Q_9HhQANKxgw_ueJPFFvL4');
 

$service = new Google_Service_Books($client);

$optParams = array('filter' => 'free-ebooks');
$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

echo "<h3>Henry David Thoreau free books in google books</h3>";

foreach ($results as $item) {
  echo $item['volumeInfo']['title'], "<br />";
  echo '<img src=', $item['volumeInfo']['imageLinks']['thumbnail'], ">", "<br /> \n";
}

?>