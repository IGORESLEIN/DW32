<?php
// connect

$m = new MongoClient("mongodb://test2:test2@ds033400.mlab.com:33400/zmwebdev-test");

// http://php.net/manual/en/mongo.connecting.auth.php
// // Specifying the username and password in the connection URI (preferred)
// $m = new MongoClient("mongodb://${username}:${password}@localhost");
// https://docs.mongodb.org/manual/administration/security-user-role-management/

$db = $m->selectDB('zmwebdev-test');

$collection = $db->books;
// add a record
$document = array( "title" => "Calvin and Hobbes", "author" => "Bill Watterson" );
$collection->insert($document);

// add another record, with a different "shape"
$document = array( "title" => "XKCD", "online" => true );
$collection->insert($document);

// find everything in the collection
$cursor = $collection->find();

foreach ( $cursor as $id => $value )
{
    echo "$id: ";
    var_dump( $value );
}

// iterate through the results
/*
foreach ($cursor as $document) {
    echo $document["title"] . "\n";
}
*/

// more examples
// http://php.net/manual/en/mongocollection.find.phphttp://php.net/manual/en/mongocollection.find.php
?>
