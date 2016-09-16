<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-............');
$domain = "sandbox........mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    // 'from'    => 'Excited User <mailgun@sandbox......mailgun.org>',
    'from'	=> 'Me <zmwebdev@gmail>',
    'to'      => 'Baz <zmwebdev@gmail.com>',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness!'
));