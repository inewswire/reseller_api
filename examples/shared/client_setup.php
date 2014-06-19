<?php

require 'iella_public_client.php';
 
$client = new Iella\Client();
$client->set_base('reseller/api');

// fill this in with server 
// host given to you by us
$client->set_host('');

// fill this in with 
// your api key/secret 
$client->set_secret('');

?>